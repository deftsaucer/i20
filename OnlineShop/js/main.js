const counterInput = document.querySelector(".product_count_display");
const counterPlus = document.querySelector(".product_count_plus");
const counterMinus = document.querySelector(".product_count_minus");
const buttonBuy = document.querySelector(".in_store_button");


counterMinus.addEventListener("click", function () {
  if (counterInput.value > 1) {
    counterInput.value = Number(counterInput.value) - 1;
  }
});


counterPlus.addEventListener("click", function () {
  if (counterInput.value < 99) {
    counterInput.value = Number(counterInput.value) + 1;
  }
});

buttonBuy.addEventListener("click", function () {
  $.notify("Товаров добавлено в корзину: " + counterInput.value, 'success');
})
