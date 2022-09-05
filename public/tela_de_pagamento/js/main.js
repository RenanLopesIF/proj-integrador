const form = document.querySelector("#form");
const form1 = document.querySelector('#form-1');
const numberCredit = document.querySelector("#numCartao");
const deactivateButtonCreditPay = document.querySelector(".desativado-cartao");
const deactivateButtonBoletoPay = document.querySelector(".desativado-boleto");

const cvv = document.querySelector("#cvv");
const cpf = document.querySelector("#cpf");

const activateButtonCreditPay = document.querySelector("#cartao");
const activateButtonBoleto = document.querySelector("#boleto");

const buttonPagamento = document.querySelector(".pagamento");
const valueForPayCredit = document.querySelector("#valorCredito");
const valueForPayBoleto = document.querySelector("#valorBoleto");
const errorName = document.querySelector("#errorName");
const errorCpf = document.querySelector('#errorCpf');

const geradorDeBoleto = document.querySelector("#gerarBoleto");

geradorDeBoleto.style.display = "none";
buttonPagamento.style.display = "none";
valueForPayCredit.style.display = "none";
valueForPayBoleto.style.display = 'nome';
deactivateButtonCreditPay.style.display = "none";
deactivateButtonBoletoPay.style.display = "none";
errorName.style.display = "none";
errorCpf.style.display = "none";
form.style.display = 'none';
form1.style.display = 'none';

activateButtonCreditPay.addEventListener("click", () => {
  form1.style.display = 'none';
  form.style.display = 'block';
  deactivateButtonCreditPay.style.display = "block";
  buttonPagamento.style.display = "block";
  geradorDeBoleto.style.display = "none";
  valueForPayCredit.style.display = "block";
  deactivateButtonBoletoPay.style.display = "none";
});

activateButtonBoleto.addEventListener("click", function () {
  form.style.display = 'none';
  form1.style.display = 'block';
  deactivateButtonBoletoPay.style.display = "block";
  valueForPayBoleto.style.display = "block";
  geradorDeBoleto.style.display = "block";
  buttonPagamento.style.display = "none";
  deactivateButtonCreditPay.style.display = "none";
});

function validateCredit(str) {
  const validacaoCartao = /^[0-9]{4}[0-9]{4}[0-9]{4}[0-9]{4}$/;
  let creditIsCorrect = 0;
  if (!validacaoCartao.test(str)) {
    errorName.style.display = "block";
    errorName.style.color = "red";
    errorName.style.fontSize = "1.8rem";
    errorName.textContent = "[Error] Digite novamente o número do cartão";
    setTimeout(() => {
      errorName.style.display = "none";
    }, 3000);
    creditIsCorrect = 1;
  } else {
    creditIsCorrect = 0;
  }
  return creditIsCorrect;
}

function validateCpf(str) {
  const regCpf = /^[0-9]{3}[0-9]{3}[0-9]{3}[0-9]{2}$/;
  let cpfIsCorrect = 0;
  if(!regCpf.test(str)) {
    errorCpf.style.display = 'block';
    errorCpf.style.color = "red";
    errorCpf.style.fontSize = "1.6rem";
    errorCpf.textContent = "[Error] Digite cpf corretamente";
    setTimeout(() => {
      errorCpf.style.display = "none";
    }, 3000);
    cpfIsCorrect = 1;
  } else {
    cpfIsCorrect = 0;
  }
  return cpfIsCorrect;
}

form.onsubmit = function (form) {
  let creditIsRight = validateCredit(String(numberCredit.value));
  if(creditIsRight === 1) {
    form.preventDefault();
  }
  
};

form1.addEventListener('submit', (form1)=>{
  let cpfIsRight = validateCpf(cpf.value);
  if(cpfIsRight === 1) {
    form1.preventDefault();
  }
})
