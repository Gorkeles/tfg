// asigno el evento para uqe al pulssar el boton se llame a la funcion
const addToShoppingCartButtons = document.querySelectorAll('.addToCart');
addToShoppingCartButtons.forEach((addToCartButton) => {
  addToCartButton.addEventListener('click', addToCartClicked);
});

// creo array de pedido vacio que es el que luego se ira llenando
var pedido = [];

// enlazo con el div creado en la view
const shoppingCartItemsContainer = document.querySelector(
  '.shoppingCartItemsContainer'
);

// funcion para añadir al carrito al clickar
function addToCartClicked(event) {
  alert("Elemento añadido al carrito :)");
  const button = event.target;
  const item = button.closest('.item');

  const itemTitle = item.querySelector('.item-title').textContent;
  const itemPrice = item.querySelector('.item-price').textContent;
  const itemImage = item.querySelector('.item-image').src;

  addItemToShoppingCart(itemTitle, itemPrice, itemImage);
}

// funcion para añadir el item al array pedido y para ir pintanza la cesta de compra, tambien actualizando el total
function addItemToShoppingCart(itemTitle, itemPrice, itemImage) {
var productoComprado = { }; 
productoComprado["nombre"] = itemTitle;
productoComprado["precio"] = itemPrice;
pedido.push(productoComprado);

  const elementsTitle = shoppingCartItemsContainer.getElementsByClassName(
    'shoppingCartItemTitle'
  );
  const shoppingCartRow = document.createElement('div');
  const shoppingCartContent = `
  <div class="row shoppingCartItem">
        <div class="shopping-cart-items">
            <div class="shopping-cart-item">
                <img src=${itemImage} class="shopping-cart-image">
                <h6 id="shoppingCartItemTitle" class="shopping-cart-item-title shoppingCartItemTitle text-truncate ">${itemTitle}</h6>
            </div>
        </div>
        <div class="shopping-cart-items">
            <div class="shopping-cart-price">
                <p class="item-price shoppingCartItemPrice">${itemPrice}</p>
            </div>
        </div>
        <div class="shopping-cart-items">
            <div class="shopping-cart-quantity ">
                
                <button class="btn btn-danger buttonDelete" id="x" type="button">X</button>
            </div>
        </div>
  </div>`;
  shoppingCartRow.innerHTML = shoppingCartContent;
  shoppingCartItemsContainer.append(shoppingCartRow);

  shoppingCartRow
    .querySelector('.buttonDelete')
    .addEventListener('click', removeShoppingCartItem);

  updateShoppingCartTotal(pedido);
}

// funcion para actualizar el carrito y el array pedido
function updateShoppingCartTotal(pedido) {
  let total = 0;
  
  const shoppingCartTotal = document.querySelector('.shoppingCartTotal');

  const shoppingCartItems = document.querySelectorAll('.shoppingCartItem');

  shoppingCartItems.forEach((shoppingCartItem) => {
    const shoppingCartItemPriceElement = shoppingCartItem.querySelector(
      '.shoppingCartItemPrice'
    );
    const shoppingCartItemPrice = Number(
      shoppingCartItemPriceElement.textContent.replace('€', '')
    );
    total = total + shoppingCartItemPrice ;
  });
  shoppingCartTotal.innerHTML = `${total.toFixed(2)}€`;
  
  document.getElementById('pedido').value = JSON.stringify(pedido);
  //console.log(pedido);
}

// funcion para eliminar producto dle carrito y del array pedido, actializa el carrito
function removeShoppingCartItem(event) {
  
  const buttonClicked = event.target;
  const item = buttonClicked.closest('.shoppingCartItem');
  const itemTitle = item.querySelectorAll('.shopping-cart-item-title')[0].innerHTML;

  const itemsIguales = pedido.filter(mascarilla => mascarilla.nombre === itemTitle)
  const indefFisrtRep = pedido.indexOf(itemsIguales[0])
  pedido.splice(indefFisrtRep, 1)
  
  buttonClicked.closest('.shoppingCartItem').remove();
  updateShoppingCartTotal(pedido);

}

// funcion que al clickar en el boton comprar vacia carrito y actualiza pedido
function comprarButtonClicked() {
  shoppingCartItemsContainer.innerHTML = '';
  updateShoppingCartTotal(document.getElementById('pedido').value);
}
