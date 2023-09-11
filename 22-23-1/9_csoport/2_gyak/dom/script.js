// Objektumok, függvények

let objektum = {
  alma: 3,
};

let ember = {
  nev: "Shrek",
  eletkor: 69,
};

let emberek = [
  {
    nev: "Shrek",
    eletkor: 69,
  },
  {
    nev: "Donkey",
    eletkor: 31,
  },
  {
    nev: "Fiona",
    eletkor: 13,
  },
];

console.log(objektum.alma);

// console.log(
//  `${ember.nev} épp a mai napon tölti be a ${ember.eletkor}. szülinapját!`
// );

let jokivansag = (ember) => {
  console.log(
    `${ember.nev} épp a mai napon tölti be a ${ember.eletkor}. szülinapját!`
  );
};

function jokivansag1(ember) {
  console.log(
    `${ember.nev} épp a mai napon tölti be a ${ember.eletkor}. szülinapját!`
  );
}

// emberek.forEach((elem) => jokivansag(elem));

// DOM Manipuláció

// 1. feladat
let myButton = document.querySelector("#myButton");
let mySpan = document.querySelector("#mySpan");

let hellovilag = () => {
  mySpan.innerText++;
};

myButton.addEventListener("click", hellovilag);

// 2. feladat

// Kérj be egy számot, és annyiszor írd ki egymás alá egyre növekvő betűméretekkel a "Hello világ!"
// szöveget! (szöveges beviteli mező, gomb)

let myInput = document.querySelector("#myNumber");
let myButton2 = document.querySelector("#myButton2");

myButton2.addEventListener("click", () => {
  let darab = myInput.value;
  for (let i = 0; i < darab; i++) {
    let helloDiv = document.createElement("div");
    helloDiv.innerText = "Hello világ!";
    helloDiv.style.fontSize = `${(i + 1) * 5}px`;
    document.body.appendChild(helloDiv);
  }
});

// 4. feladat - Kör kerülete

let radiusInput = document.querySelector("#radius");
let calculateButton = document.querySelector("#calculate");
let outputDiv = document.querySelector("#output");
console.log(radiusInput, calculateButton, outputDiv);

calculateButton.addEventListener("click", () => {
  let r = radiusInput.value;
  let kerulet = 2 * r * Math.PI;
  outputDiv.innerText = `A kör ${Number.parseFloat(kerulet).toFixed(
    2
  )} kerülettel rendelkezik.`;
});
