
//kani na code kay walay pulos
//kani kay belong sa mata na icon sa password
//if clicked ilisan ang input type password into input type txt, vice versa
const passwordInput = document.getElementById('password');
const showPasswordIcon = document.getElementById('show-password');

showPasswordIcon.addEventListener('click', function () {
    if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
    } else {
        passwordInput.type = 'password';
    }
});