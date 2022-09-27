// Készíts egy számláló komponenst! (Lásd: mellékelt .GIF)

// a. A számláló egy csak olvasható szöveges beviteli mezőből és két gombból (plusz, mínusz) áll!
// A gombokra kattintással a szöveges beviteli mezőben lévő szám eggyel nő vagy csökken.

// b. Definiálj a szkriptben egy minimum és egy maximum értéket! Ha a számláló eléri
//  valamelyik értéket, akkor a megfelelő gomb ne legyen elérhető! (disabled)

let decreaseButton = document.querySelector("#decrease");
let increaseButton = document.querySelector("#increase");
let numberInput = document.querySelector("#number");
// console.log(decreaseButton, increaseButton, numberInput);

const MIN = -5;
const MAX = 5;

numberInput.value = 0;

let valtoztatas = (noveles) => {
  if (noveles) {
    if (numberInput.value < MAX) {
      numberInput.value++;
    }
  } else {
    if (numberInput.value > MIN) {
      numberInput.value--;
    }
  }
  if (numberInput.value == -5) {
    decreaseButton.disabled = true;
  } else {
    decreaseButton.disabled = false;
  }

  if (numberInput.value == 5) {
    increaseButton.disabled = true;
  } else {
    increaseButton.disabled = false;
  }
};

decreaseButton.addEventListener("click", () => valtoztatas(false));
increaseButton.addEventListener("click", () => valtoztatas(true));
