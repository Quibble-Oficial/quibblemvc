// Constrói o HTML de um único comentário (facilita a injeção)
function createCommentHtml(comment) {
    const avatar = comment.usuario_avatar || 'default.png'; 
    const dataFormatada = new Date(comment.criado_em).toLocaleDateString('pt-BR');
    
    // Constrói a URL do perfil
    const perfilUrl = `${BASE}/usuario/${comment.usuario_id}`; 

    return `
        <div class="comment" data-comment-id="${comment.comentario_id}">
            <a href="${perfilUrl}"> 
                <img src="${BASE}/assets/images/avatars/${avatar}" alt="avatar">
            </a>
            <div class="comment-content">
                <a href="${perfilUrl}">
                    <h6>${comment.usuario_nome}</h6>
                </a>
                <p>${comment.comentario}</p>
                <span class="comment-time">${dataFormatada}</span>
            </div>
        </div>
    `;
}

// Atualiza o contador de comentários visível no feed card
function updateCommentCounter(reclamacaoId, newCount) {
    // Encontra o card da reclamação e atualiza o texto do botão
    const card = document.querySelector(`.comments-box[data-reclamacao-id="${reclamacaoId}"]`).closest('.feed-card');
    const toggleButton = card.querySelector('.toggle-comments');
    const feedbackCommentCount = card.querySelector('.feedback-comment > span') || card.querySelector('.feedback-comment'); // Altere se o elemento for diferente

    if (toggleButton) {
        toggleButton.innerHTML = `💬 Ver comentários (${newCount})`;
    }
    // Opcional: atualiza o contador na barra de feedback
    if (feedbackCommentCount) {
        feedbackCommentCount.textContent = newCount;
    }
}

let loadedComments = {}; // Cache simples para não recarregar comentários que já foram vistos

async function loadComments(reclamacaoId, commentsBoxElement) {
    const commentsList = commentsBoxElement.querySelector('.comments-list');
    
    // Verifica se já carregou para evitar requisições repetidas
    if (loadedComments[reclamacaoId]) {
        return; // Sai da função se já estiver no cache
    }
    
    commentsList.innerHTML = '<p class="loading-state">Carregando comentários...</p>';

    try {
        const response = await fetch(`${BASE}/comentario/${reclamacaoId}`);
        const result = await response.json();

        commentsList.innerHTML = ''; // Limpa estado de carregamento

        if (result.success && result.comentarios) {
            let commentsHtml = '';
            result.comentarios.forEach(comment => {
                commentsHtml += createCommentHtml(comment);
            });
            
            commentsList.innerHTML = commentsHtml || '<p class="empty-state">Nenhum comentário ainda. Seja o primeiro!</p>';
            loadedComments[reclamacaoId] = true; // Marca como carregado

        } else {
            console.error('Erro ao carregar comentários:', result.error);
            commentsList.innerHTML = '<p class="error-state">Erro ao carregar comentários.</p>';
        }

    } catch (error) {
        console.error('Erro de rede ao buscar comentários:', error);
        commentsList.innerHTML = '<p class="error-state">Erro de conexão.</p>';
    }
}

async function postComment(reclamacaoId, inputElement) {
    const comentario = inputElement.value.trim();
    if (comentario === '') {
        alert('O comentário não pode estar vazio.');
        return;
    }

    const button = inputElement.nextElementSibling; // O botão "Publicar"
    const originalButtonText = button.textContent;
    
    // Feedback visual
    button.disabled = true;
    button.textContent = 'Publicando...';

    const formData = new FormData();
    formData.append('reclamacao_id', reclamacaoId);
    formData.append('comentario', comentario);

    try {
        const response = await fetch(`${BASE}/comentario/novo`, {
            method: 'POST',
            body: formData
        });
        
        const result = await response.json();
        
        if (result.success) {
            inputElement.value = ''; // Limpa o input
            
            // Força o recarregamento dos comentários
            loadedComments[reclamacaoId] = false; 
            const commentsBox = inputElement.closest('.comments-box');
            await loadComments(reclamacaoId, commentsBox); 
            
            // Atualiza o contador de comentários
            const newCount = commentsBox.querySelectorAll('.comment').length;
            updateCommentCounter(reclamacaoId, newCount);
            
        } else {
            alert('Erro ao publicar: ' + result.error);
        }

    } catch (error) {
        alert('Erro de rede ao publicar o comentário.');
        console.error('Erro de rede:', error);
    } finally {
        button.disabled = false;
        button.textContent = originalButtonText;
    }
}

document.addEventListener('DOMContentLoaded', () => {
    // Adiciona listener para todos os botões "Publicar"
    document.querySelectorAll('.post-comment-btn').forEach(button => {
        button.addEventListener('click', (e) => {
            const reclamacaoId = e.target.getAttribute('data-reclamacao-id');
            const inputElement = e.target.previousElementSibling; // O campo de input
            postComment(reclamacaoId, inputElement);
        });
    });
    
    // Enviar ao apertar ENTER no campo de input
    document.querySelectorAll('.comment-input').forEach(input => {
        input.addEventListener('keypress', (e) => {
            if (e.key === 'Enter') {
                e.preventDefault(); // Impede o comportamento padrão
                const reclamacaoId = input.getAttribute('data-reclamacao-id');
                postComment(reclamacaoId, input);
            }
        });
    });
});

function toggleComments(button, reclamacaoId) {
    let commentsBox = button.nextElementSibling;

    if (commentsBox.style.display === "none" || commentsBox.style.display === "") {
        commentsBox.style.display = "block";
        button.innerHTML = "🔽 Ocultar comentários";
        
        // CHAMA A FUNÇÃO PARA CARREGAR OS COMENTÁRIOS
        loadComments(reclamacaoId, commentsBox); 
        
    } else {
        commentsBox.style.display = "none";
        
        // Pega a contagem atual da lista para mostrar no botão
        const currentCount = commentsBox.querySelector('.comments-list').children.length; 
        button.innerHTML = `💬 Ver comentários (${currentCount})`; 
    }
}