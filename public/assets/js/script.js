const followButton = document.getElementById('btnseguir');
let isFollowing = false;

followButton.addEventListener('click', () => {
  isFollowing = !isFollowing;

  followButton.textContent = isFollowing ? 'Seguindo' : 'Seguir';

  // Alterna a classe CSS
  followButton.classList.toggle('seguindo');
});

function juntar() {
  const botoes = document.getElementsByClassName('btnmembro');

  Array.from(botoes).forEach((botao) => {
    botao.addEventListener('click', () => {
      const isFollowing = botao.classList.toggle('seguindo');

      botao.textContent = isFollowing ? 'Membro' : 'Juntar-se';
    });
  });
}

function alternarIcone() {
  const botoes = document.getElementsByClassName('btnicone');

  Array.from(botoes).forEach((botao) => {
    botao.addEventListener('click', () => {
      const icone = botao.querySelector('i');
      const ativo = botao.classList.toggle('ativo');

      // Alterna o ícone
      if (ativo) {
        icone.classList.remove('bx-bell');
        icone.classList.add('bx-bell-slash');
      } else {
        icone.classList.remove('bx-bell-slash');
        icone.classList.add('bx-bell');
      }
    });
  });
}

  
