const baseURL = document.URL.split("/public/")[0] + "/public";
const urlBookList = baseURL + "/livros";
const urlManusearLivros = baseURL + "/editar/livro";
const galleryElement = document.querySelector("#gallery");

const qtdItems = document.querySelector("#qtd-items");
const boxToast = document.querySelector("#box-toast");
const msgToast = document.querySelector("#msg-toast");

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

    const textBoxElement = document.createElement("div");
    textBoxElement.setAttribute("class", "text");
    textBoxElement.innerHTML = `<h2>${livro.titulo} Vol. ${livro.edicao}</h2>
    <p>R$ ${Number(livro.preco).toFixed(2)}</p>
    <p>por ${livro.autor}</p>`;

    imageBoxElement.appendChild(imageElement);
    cardElement.appendChild(imageBoxElement);
    cardElement.appendChild(textBoxElement);
    galleryElement.appendChild(cardElement);

    cardElement.onclick = () => {
      window.location = `${urlManusearLivros}/${livro.id}`;
    };
  });
}

init();
