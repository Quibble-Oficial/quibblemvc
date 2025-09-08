const togglePassword1 = document.querySelector('#togglePassword1');
const togglePassword2 = document.querySelector('#togglePassword2');
const password = document.querySelector('#senha');
const confirmPassword = document.querySelector('#confirm');

togglePassword1.addEventListener('click', function () {
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);

    // Alternar imagem do olho
    this.src = type === 'password' ? './assets/images/olho_fechado.png' : './assets/images/olho_aberto.png';
});

togglePassword2.addEventListener('click', function () {
    const type = confirmPassword.getAttribute('type') === 'password' ? 'text' : 'password';
    confirmPassword.setAttribute('type', type);

    // Alternar imagem do olho
    this.src = type === 'password' ? './assets/images/olho_fechado.png' : './assets/images/olho_aberto.png';
});
