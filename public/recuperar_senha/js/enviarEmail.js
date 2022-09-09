const sendEmail = document.querySelector("#sendEmail");
const form = document.querySelector("#form");
function activateSendEmail() {
  sendEmail.style.display = "block";
  sendEmail.style.opacity = "1";
  setTimeout(() => {
    sendEmail.style.display = "none";
  }, 2000);
}
form.onsubmit = function (form) {
  // form.preventDefault();
  activateSendEmail();
};
