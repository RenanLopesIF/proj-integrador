const baseURL = document.URL.split("/public/")[0] + "/public";

const imgIcon = document.querySelector("#olho");
const inputPassword = document.querySelector("#password");
const containerInImgIcon = document.querySelector(".on-off");
const olhoAberto = baseURL + "/recuperar_senha/img/visible.png";
const olhoFechado = baseURL + "/recuperar_senha/img/offvisible.png";

imgIcon.style.cursor = "pointer";

imgIcon.addEventListener("click", () => {
  containerInImgIcon.classList.toggle("visivel");
  if (containerInImgIcon.classList.contains("visivel")) {
    imgIcon.src = olhoFechado;
    inputPassword.type = "text";
  } else {
    imgIcon.src = olhoAberto;
    inputPassword.type = "password";
  }
});
