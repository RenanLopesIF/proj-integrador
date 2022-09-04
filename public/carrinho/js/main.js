// document.style.overflow = 'hidden';
const upperButton = document.querySelector("#maior");
const lowerButton = document.querySelector("#menor");
// const quantityBooks = document.querySelector("#quantityBooks");
const cep = document.querySelector("#cep");
const booksArea = document.querySelector("#sessao1");
const freteArea = document.querySelector("#sessao3");
const btnFinalizarPedido = document.querySelector("#btnFinalizarPedido");

const valorPedido = document.querySelector("#valorPedido");
const valorTotalPedido = document.querySelector("#valorTotalPedido");
const valorFrete = document.querySelector("#valorFrete");
const valorDesconto = document.querySelector("#valorDesconto");

const baseURL = document.URL.split("/public/")[0] + "/public";
const urlCartItems = baseURL + "/carrinhos/items";

async function initItems() {
  const cartItems = await fetch(urlCartItems, {
    headers: {},
    method: "GET",
  }).then((res) => res.json());

  if (!cartItems.length) {
    btnFinalizarPedido.setAttribute("disabled", true);
    freteArea.style.display = "none";
    const noProductMessage = document.createElement("div");
    noProductMessage.setAttribute("id", "noProductMessage");
    noProductMessage.innerText = "Nenhum produto para mostrar";

    booksArea.after(noProductMessage);
  } else {
    let finalValue = 0;
    let orderValue = 0;
    let freteValue = 0;
    let discountValue = 0;
    cartItems.forEach((item) => {
      const itemPrice =
        Number(item.lote_preco) * Number(item.livroCarrinho_qtd);
      orderValue += itemPrice;

      const card = document.createElement("div");
      card.setAttribute("class", "sessao2");
      card.innerHTML += `
      <div class="infoLivro">
      <div class="imagem">
          <img src="${item.livro_url_capa}" alt="${item.livro_titulo}">
          <div class="txt3">
              <p>${item.livro_titulo}</p>
              <h2>Caracteristicas do produto</h2>
          </div>
      </div>
      <div class="unidadeLivro">
          <div class="btCompra">
              <span id="quantityBooks">${item.livroCarrinho_qtd}</span>
          </div>
          <p>0 dias</p>
          <p>$${itemPrice.toFixed(2)}</p>
          <a href="#">
            <button><img src="${baseURL}/carrinho/img/delete_forever_FILL0_wght400_GRAD0_opsz48.svg""></button>
          </a>
      </div>
      </div>
      `;
      booksArea.after(card);
    });

    valorPedido.innerHTML = "R$ " + orderValue.toFixed(2);
    valorFrete.innerHTML = "R$ " + freteValue.toFixed(2);
    valorDesconto.innerHTML = "R$ " + discountValue.toFixed(2);
    valorTotalPedido.innerHTML =
      "R$ " + (orderValue + freteValue - discountValue).toFixed(2);
  }
}
initItems();
