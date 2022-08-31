const baseURL = document.URL.split("/public/")[0] + "/public";
const urlBookList = baseURL + "/livros";
const urlInserIntoCart = baseURL + "/carrinho/inserir";
const galleryElement = document.querySelector("#gallery");

const modalImagemLivro = document.querySelector("#modal-imagem-livro");
const modalTituloLivro = document.querySelector("#modal-titulo-livro");
const modalPrecoLivro = document.querySelector("#modal-preco-livro");
const modalAutorLivro = document.querySelector("#modal-autor-livro");
const modalBotaoComprar = document.querySelector("#modal-botao-comprar");
const qtdItems = document.querySelector("#qtd-items");
const boxToast = document.querySelector("#box-toast");
const msgToast = document.querySelector("#msg-toast");

const qtd = {
  max: 1,
  min: 1,
  current: 1,
};

function changeQtd(ev) {
  const value = Number(ev.target.value);

  if (value <= qtd.min) {
    qtdItems.value = qtd.min;
    qtd.current = qtd.min;
    return;
  }

  if (value > qtd.max) {
    qtdItems.value = qtd.max;
    qtd.current = qtd.current;
    return;
  }

  qtdItems.value = value;
  qtd.current = value;
}

async function insertIntoCart(id_livro, qtd) {
  const formPurchase = document.createElement("form");
  formPurchase.setAttribute("action", urlInserIntoCart);
  formPurchase.setAttribute("method", "POST");

  const inputId = document.createElement("input");
  inputId.setAttribute("id", "id_livro");
  inputId.setAttribute("name", "id_livro");
  inputId.setAttribute("type", "text");
  inputId.value = id_livro;

  const inputQtd = document.createElement("input");
  inputQtd.setAttribute("id", "qtd");
  inputQtd.setAttribute("name", "qtd");
  inputQtd.setAttribute("type", "text");
  inputQtd.value = qtd;

  formPurchase.appendChild(inputQtd);
  formPurchase.appendChild(inputId);

  const xhr = new XMLHttpRequest();
  xhr.open("POST", urlInserIntoCart);
  xhr.onload = (ev) => {
    const res = JSON.parse(ev.target.response);
    console.log("Success, server responded with:", ev.target.response);
    if (res.status == "success") {
      boxToast.style.backgroundColor = "#66cf66";
      msgToast.innerText = "Item adicionado ao carrinho";
      $(document).ready(function () {
        $(".toast").toast("show");
      });
    }
  };

  const formData = new FormData(formPurchase);
  xhr.send(formData);
}

async function init() {
  const livros = await fetch(urlBookList, {
    headers: {},
    method: "GET",
  }).then((res) => res.json());

  livros.forEach((livro) => {
    const cardElement = document.createElement("div");
    cardElement.setAttribute("class", "image-holder");

    const imageBoxElement = document.createElement("div");
    imageBoxElement.setAttribute("class", "image-box");

    const imageElement = document.createElement("img");
    imageElement.setAttribute("src", livro.url_capa);
    imageElement.setAttribute("alt", "Capa do livro");
    imageElement.setAttribute("data-bs-toggle", "modal");
    imageElement.setAttribute("data-bs-target", "#exampleModal");

    const textBoxElement = document.createElement("div");
    textBoxElement.setAttribute("class", "text");
    textBoxElement.innerHTML = `<h2>${livro.titulo} Vol. ${livro.edicao}</h2>
    <p>R$ ${Number(livro.preco).toFixed(2)}</p>
    <p>${livro.autor}</p>`;

    imageBoxElement.appendChild(imageElement);
    cardElement.appendChild(imageBoxElement);
    cardElement.appendChild(textBoxElement);
    galleryElement.appendChild(cardElement);

    cardElement.onclick = () => {
      qtd.max = livro.qtd;
      qtdItems.removeEventListener("change", changeQtd);
      modalImagemLivro.setAttribute("src", livro.url_capa);
      modalTituloLivro.innerHTML = livro.titulo;
      modalPrecoLivro.innerHTML = Number(livro.preco).toFixed(2);
      modalAutorLivro.innerHTML = livro.autor;
      modalBotaoComprar.onclick = () => {
        insertIntoCart(livro.id, qtd.current);
      };
      qtdItems.addEventListener("change", changeQtd);
    };
  });
}

init();
