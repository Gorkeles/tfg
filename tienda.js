const addToShoppingCartButtons = document.querySelectorAll('.addToCart');
addToShoppingCartButtons.forEach((addToCartButton) => {
  addToCartButton.addEventListener('click', addToCartClicked);
});

var pedido = [];

const shoppingCartItemsContainer = document.querySelector(
  '.shoppingCartItemsContainer'
);

function addToCartClicked(event) {
  // alert("Elemento añadido al carrito :)");
  const button = event.target;
  const item = button.closest('.item');

  const itemTitle = item.querySelector('.item-title').textContent;
  const itemPrice = item.querySelector('.item-price').textContent;
  const itemImage = item.querySelector('.item-image').src;

  addItemToShoppingCart(itemTitle, itemPrice, itemImage);
}

function addItemToShoppingCart(itemTitle, itemPrice, itemImage) {
var productoComprado = { }; 
productoComprado["nombre"] = itemTitle;
productoComprado["precio"] = itemPrice;
pedido.push(productoComprado);

  const elementsTitle = shoppingCartItemsContainer.getElementsByClassName(
    'shoppingCartItemTitle'
  );
  // for (let i = 0; i < elementsTitle.length; i++) {
  //   if (elementsTitle[i].innerText === itemTitle) {
  //     let elementQuantity = elementsTitle[
  //       i
  //     ]
      // .parentElement.parentElement.parentElement.querySelector(
      //   '.shoppingCartItemQuantity'
      // );
      // elementQuantity.value++; 
    //   updateShoppingCartTotal(pedido);
    //   return;
    // }
  //}
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

  // shoppingCartRow
  //   .querySelector('.shoppingCartItemQuantity')
  //   .addEventListener('change', quantityChanged);

  updateShoppingCartTotal(pedido);
}

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
    // const shoppingCartItemQuantityElement = shoppingCartItem.querySelector(
    //   '.shoppingCartItemQuantity'
    // );
    // const shoppingCartItemQuantity = Number(
    //   shoppingCartItemQuantityElement.value
    // );
    total = total + shoppingCartItemPrice ;
  });
  shoppingCartTotal.innerHTML = `${total.toFixed(2)}€`;
  
  document.getElementById('pedido').value = JSON.stringify(pedido);
  console.log(pedido);
}

function removeShoppingCartItem(event) {
  // bucle con if encontrado = true delete, else cont++
  var encontrado = false;
  const buttonClicked = event.target;
  const item = buttonClicked.closest('.shoppingCartItem');
  const itemTitle = item.querySelectorAll('.shopping-cart-item-title')[0].innerHTML;

  const itemsIguales = pedido.filter(mascarilla => mascarilla.nombre === itemTitle)
  const indefFisrtRep = pedido.indexOf(itemsIguales[0])
  pedido.splice(indefFisrtRep, 1)
  /* for (var i=0 ; (( i< pedido.length) && (!encontrado)) ; i++){
    console.log("1"+pedido[i]["nombre"]);
    if (pedido[i]["nombre"] == itemTitle){
      encontrado = true;
      console.log("2"+pedido[i]);
      pedido.slice(index, i);
    }
  } */



  //pedido = pedido.filter(ped => ped.nombre!=itemTitle);
  buttonClicked.closest('.shoppingCartItem').remove();
  updateShoppingCartTotal(pedido);

}

// function quantityChanged(event) {
//   const input = event.target;
//   input.value <= 0 ? (input.value = 1) : null; 
//   updateShoppingCartTotal(document.getElementById('pedido').value);
// }

function comprarButtonClicked() {
  shoppingCartItemsContainer.innerHTML = '';
  updateShoppingCartTotal(document.getElementById('pedido').value);
}
