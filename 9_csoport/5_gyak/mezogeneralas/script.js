// 3. feladat
// Egy űrlapra tegyünk fel három radio gombot 1, 2, 3 értékkel és felirattal. Mellette legyen egy gomb.
// Erre kattintva a kiválasztott radiogombnak megfelelő számosságú szöveges beviteli mezőt generáljunk az űrlapba.

let generalasGomb = document.querySelector("#generalas");
let darabRadiogombok = document.querySelectorAll("input[name='darab']");

console.log(generalasGomb, darabRadiogombok);

let generalas = (e) => {
  document.querySelector("#container").innerHTML = "";
  e.preventDefault();
  let kivalasztott = [...darabRadiogombok].find((gomb) => gomb.checked);
  if (kivalasztott) {
    let darab = kivalasztott.value;
    for (let i = 0; i < darab; i++) {
      let beviteliMezo = document.createElement("input");
      beviteliMezo.type = "text";
      document.querySelector("#container").appendChild(beviteliMezo);
    }
  }
};

generalasGomb.addEventListener("click", generalas);
