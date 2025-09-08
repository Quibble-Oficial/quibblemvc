const togglePassword = document.querySelector('#togglePassword');
const password = document.querySelector('#senha');

togglePassword.addEventListener('click', function () {
    // Alterna o tipo de 'password' para 'text'
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    
    // Alterna a imagem do ícone de olho
    if (type === 'password') {
        togglePassword.src = './assets/images/olho_fechado.png'; // Ícone de olho fechado
        togglePassword.alt = 'Mostrar senha';
    } else {
        togglePassword.src = './assets/images/olho_aberto.png'; // Ícone de olho aberto
        togglePassword.alt = 'Ocultar senha';
    }
});
