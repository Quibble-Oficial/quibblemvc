
let loadedComments = {};

function createCommentHtml(comment) {
    const avatar = comment.usuario_avatar || 'bernardo.png'; 
    const dataFormatada = new Date(comment.criado_em).toLocaleDateString('pt-BR');
    const perfilUrl = `${BASE}/usuario/${comment.usuario_id}`; 

    return `
        <div class="comment-info" data-comment-id="${comment.comentario_id}">
          <div class="feed-card-header">
            <a href="${perfilUrl}">
                <img class="user-avatar" src="${BASE}/assets/uploads/avatars/${avatar}" alt="Avatar">
            </a>
            <div class="user-info">
                <a href="${perfilUrl}">
                    <h5>${comment.usuario_nome}</h5>
                </a>
                <span class="comment-time user-location">Comentou em: ${dataFormatada}</span>
            </div>
            <button class="more-btn">...</button> 
          </div>
          <p>${comment.comentario}</p>
        </div>
    `;
}

function updateCommentCounter(reclamacaoId, newCount) {
    const card = document.querySelector(`.comment-area[data-reclamacao-id="${reclamacaoId}"]`).closest('.feed-card');
    const feedbackCommentCount = card.querySelector('.feedback-comment span'); 
    
    if (feedbackCommentCount) {
        feedbackCommentCount.textContent = newCount;
    }
}

async function loadComments(reclamacaoId, commentsAreaElement) {
    const commentsList = commentsAreaElement.querySelector('.comments-list');
    
    if (loadedComments[reclamacaoId]) return;
    
    commentsList.innerHTML = '<p class="loading-state">Carregando comentários...</p>';

    try {
        const response = await fetch(`${BASE}/comentario/${reclamacaoId}`);
        const result = await response.json();

        commentsList.innerHTML = '';

        if (result.success && result.comentarios) {
            let commentsHtml = '';
            result.comentarios.forEach(comment => {
                commentsHtml += createCommentHtml(comment);
            });
            
            commentsList.innerHTML = commentsHtml || '<p class="empty-state">Nenhum comentário ainda.</p>';
            loadedComments[reclamacaoId] = true; 

        } else {
            console.error('Erro ao carregar comentários:', result.error);
            commentsList.innerHTML = '<p class="error-state">Erro ao carregar comentários.</p>';
        }

    } catch (error) {
        console.error('Erro de rede ao buscar comentários:', error);
        commentsList.innerHTML = '<p class="error-state">Erro de conexão.</p>';
    }
}

async function postComment(reclamacaoId, buttonElement) {
    
    const commentArea = document.querySelector(`.comment-area[data-reclamacao-id="${reclamacaoId}"]`);
    const inputElement = commentArea ? commentArea.querySelector('.comment-input-field') : null;

    if (!inputElement) return;

    const comentario = inputElement.value.trim();
    if (comentario === '') return;

    const originalButtonText = buttonElement.textContent;
    buttonElement.disabled = true;
    buttonElement.textContent = 'Publicando...';

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
            inputElement.value = '';
            
            loadedComments[reclamacaoId] = false; 
            await loadComments(reclamacaoId, commentArea); 
            
            const newCount = commentArea.querySelectorAll('.comment-info').length;
            updateCommentCounter(reclamacaoId, newCount);
            
        } else {
            alert('Erro ao publicar: ' + result.error);
        }

    } catch (error) {
        alert('Erro de rede ao publicar o comentário.');
    } finally {
        buttonElement.disabled = false;
        buttonElement.textContent = originalButtonText;
    }
}

document.addEventListener('DOMContentLoaded', () => {
    
    document.querySelectorAll('.comment-area').forEach(area => {
        area.style.display = 'none';
    });
    
    document.querySelectorAll('.feedback-comment').forEach(btn => {
        btn.addEventListener('click', () => {
            const card = btn.closest('.feed-card');
            let commentArea = card ? card.querySelector('.comment-area') : null;

            if (!commentArea) return;

            const isHidden = window.getComputedStyle(commentArea).display === 'none';
            
            if (isHidden) {
                commentArea.style.display = 'block';
                const reclamacaoId = commentArea.getAttribute('data-reclamacao-id');
                loadComments(reclamacaoId, commentArea); 
                
            } else {
                commentArea.style.display = 'none';
            }
        });
    });

    document.querySelectorAll('.post-comment-btn').forEach(button => {
        button.addEventListener('click', (e) => {
            const reclamacaoId = e.target.getAttribute('data-reclamacao-id');
            postComment(reclamacaoId, e.target); 
        });
    });
    
    document.querySelectorAll('.comment-input-field').forEach(input => {
        input.addEventListener('keypress', (e) => {
            if (e.key === 'Enter') {
                e.preventDefault(); 
                const reclamacaoId = input.getAttribute('data-reclamacao-id');
                const buttonElement = input.closest('.comment-area').querySelector('.post-comment-btn');
                postComment(reclamacaoId, buttonElement);
            }
        });
    });
});