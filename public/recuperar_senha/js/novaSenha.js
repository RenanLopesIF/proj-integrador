const sendPassword = document.querySelector('#sendPassword');
const form = document.querySelector('#form');
const imgIcon = document.querySelector('#olho');
const inputPassword = document.querySelector('#password');
const containerInImgIcon = document.querySelector('.on-off');
const olhoAberto = "./recuperar_senha/img/visible.png";
const olhoFechado = "./recuperar_senha/img/offvisible.png";

imgIcon.style.cursor = 'pointer';

function activateNewPassword() {
    sendPassword.style.display = 'block';
    sendPassword.style.opacity = '1';
    setTimeout(()=>{
        sendPassword.style.display = 'none';
    }, 2000);
}

form.onsubmit = function(form) {
    form.preventDefault();
    activateNewPassword();
}

imgIcon.addEventListener('click', ()=>{
    containerInImgIcon.classList.toggle('visivel');
    if(containerInImgIcon.classList.contains('visivel')) {
        imgIcon.src = olhoFechado;
        inputPassword.type = "text";
    } else {
        imgIcon.src = olhoAberto;
        inputPassword.type = "password";
    }
})