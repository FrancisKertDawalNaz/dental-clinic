document.addEventListener('DOMContentLoaded', function() {
    const logoutBtn = document.getElementById('logoutBtn');
    if (logoutBtn) {
        logoutBtn.addEventListener('click', function(e) {
            e.preventDefault();
            if (typeof Swal !== 'undefined') {
                Swal.fire({
                    title: 'Are you sure you want to logout?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, logout'
                }).then((result) => {
                    if (result.isConfirmed) {
                        document.getElementById('logoutForm').submit();
                    }
                });
            } else {
                if (confirm('Are you sure you want to logout?')) {
                    document.getElementById('logoutForm').submit();
                }
            }
        });
    }
});

document.addEventListener('DOMContentLoaded', function () {
    // Login password toggle
    const passwordInput = document.getElementById('password');
    const togglePassword = document.getElementById('togglePassword');
    const eyeIcon = document.getElementById('eyeIcon');
    let isShown = false;
    const eye = `<svg xmlns='http://www.w3.org/2000/svg' width='13' height='13' fill='currentColor' class='bi bi-eye' viewBox='0 0 16 16'><path d='M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.133 13.133 0 0 1 1.172 8z'/><path d='M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zm0 1a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3z'/></svg>`;
    const eyeSlash = `<svg xmlns='http://www.w3.org/2000/svg' width='13' height='13' fill='currentColor' class='bi bi-eye-slash' viewBox='0 0 16 16'><path d='M13.359 11.238C14.06 10.47 14.682 9.607 15.106 8.97a.5.5 0 0 0 0-.54C14.273 7.226 11.273 2.5 8 2.5c-.98 0-1.91.195-2.77.54l1.12 1.12A5.5 5.5 0 0 1 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755-.23.23-.47.45-.72.655l.911.54z'/><path d='M11.354 13.354a.5.5 0 0 1-.708 0l-10-10a.5.5 0 1 1 .708-.708l10 10a.5.5 0 0 1 0 .708z'/></svg>`;
    if (passwordInput && togglePassword && eyeIcon) {
        togglePassword.addEventListener('click', function () {
            isShown = !isShown;
            passwordInput.type = isShown ? 'text' : 'password';
            eyeIcon.innerHTML = isShown ? eyeSlash : eye;
        });
    }

    // Register modal password toggle
    const registerPasswordInput = document.getElementById('register_password');
    const toggleRegisterPassword = document.getElementById('toggleRegisterPassword');
    const registerEyeIcon = document.getElementById('registerEyeIcon');
    let isRegisterShown = false;
    if (registerPasswordInput && toggleRegisterPassword && registerEyeIcon) {
        toggleRegisterPassword.addEventListener('click', function () {
            isRegisterShown = !isRegisterShown;
            registerPasswordInput.type = isRegisterShown ? 'text' : 'password';
            registerEyeIcon.innerHTML = isRegisterShown ? eyeSlash : eye;
        });
    }
});

document.getElementById('loginBtn').addEventListener('click', function() {
            var loadingModal = new bootstrap.Modal(document.getElementById('loadingModal'));
            var progressBar = document.getElementById('loadingBar');
            loadingModal.show();
            let percent = 0;
            progressBar.style.width = '0%';
            var interval = setInterval(function() {
                percent += 5;
                progressBar.style.width = percent + '%';
                if (percent >= 100) {
                    clearInterval(interval);
                    window.location.href = "/patient/home";
                }
            }, 100); // 30ms * 20 = 600ms, adjust for speed
        });
