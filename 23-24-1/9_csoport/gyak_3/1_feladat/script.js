const decreaseButton = document.querySelector("#decrease");
const increaseButton = document.querySelector("#increase");
const numberInput = document.querySelector("#number");

numberInput.value = 0;

const MIN = -10;
const MAX = 10;

const noveles = () => {
  if (numberInput.value < MAX) {
    numberInput.value++;
  }
  if (parseInt(numberInput.value) === MAX) {
    increaseButton.disabled = true;
  }
  if (numberInput.value > MIN) {
    decreaseButton.disabled = false;
  }
};

const csokkentes = () => {
  if (numberInput.value > MIN) {
    numberInput.value--;
  }
  if (parseInt(numberInput.value) === MIN) {
    decreaseButton.disabled = true;
  }
  if (numberInput.value < MAX) {
    increaseButton.disabled = false;
  }
};

increaseButton.addEventListener("click", noveles);
decreaseButton.addEventListener("click", csokkentes);
