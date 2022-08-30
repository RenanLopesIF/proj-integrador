// document.style.overflow = 'hidden';
const upperButton = document.querySelector('#maior');
const lowerButton = document.querySelector('#menor');
const quantityBooks = document.querySelector('#quantityBooks');
const cep = document.querySelector('#cep');
let zero = 0;
quantityBooks.textContent = zero;

function moreBooks() {
    zero++;
    quantityBooks.textContent = zero;
}
upperButton.addEventListener('click', moreBooks);

lowerButton.onclick = function() {
    if(zero > 0) {
        zero--;
        quantityBooks.textContent = zero;
    } else {
        zero = 0;
        quantityBooks.textContent = zero;
    }
}

// cep.onkeypress = ()=>{
//     let cepValueIsEqualFive = cep.value.length + 1 === 5 ? true : false;
//     if(cepValueIsEqualFive) {
//         let saveValueBeforeFiveNumbers = cep.value;
//         cep.placeholder = 'ola';
//     }
// }

// cep.onkeypress = function() {
//     let cepValueIsEqualFive = cep.value.length + 1 === 5 ? true : false;
//     if(cepValueIsEqualFive) {
//         console.log(cep.value.length);
//         console.log(cep.placeholder);
//         cep.placeholder += '0';
//         cep.textContent = '14';
//     }
// }

// cep.addEventListener('change', () => {
//     let cepValueIsEqualFive = cep.value.length + 1 === 5 ? true : false;
//     if(cepValueIsEqualFive) {
//         // cep 39600-000
//         // cpf 258.741.369-05
//         const pattersCPF = /^[0-9]{3}.[0-9]{3}.[0-9]{3}-[0-9]{2}$/;
//         const cpf = '258.741.369-05';
//         // const patters = /^[0-9]{5}-[0-9]{3}$/;
//         console.log(patters.test(pattersCPF));
//     }
// });