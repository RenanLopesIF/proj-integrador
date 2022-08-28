const baseURL = document.URL.split("/public/")[0] + "/public";
const urlBookList = baseURL + "/livros";
const galleryElement = document.querySelector("#gallery");

const modalImagemLivro = document.querySelector("#modal-imagem-livro");
const modalTituloLivro = document.querySelector("#modal-titulo-livro");
const modalPrecoLivro = document.querySelector("#modal-preco-livro");
const modalAutorLivro = document.querySelector("#modal-autor-livro");

async function init() {
  const livros = await fetch(urlBookList, {
    headers: {},
    method: "GET",
  }).then((res) => res.json());

  console.log(livros);

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
      modalImagemLivro.setAttribute("src", livro.url_capa);
      modalTituloLivro.innerHTML = livro.titulo;
      modalPrecoLivro.innerHTML = Number(livro.preco).toFixed(2);
      modalAutorLivro.innerHTML = livro.autor;
    };
  });
}

init();
