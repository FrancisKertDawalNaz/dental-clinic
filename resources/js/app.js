import './bootstrap';

document.addEventListener('DOMContentLoaded', function () {
    const passwordInput = document.getElementById('password');
    const togglePassword = document.getElementById('togglePassword');
    if (passwordInput && togglePassword) {
        togglePassword.addEventListener('click', function () {
            const type = passwordInput.type === 'password' ? 'text' : 'password';
            passwordInput.type = type;
            this.textContent = type === 'password' ? 'Show' : 'Hide';
        });
    }
});