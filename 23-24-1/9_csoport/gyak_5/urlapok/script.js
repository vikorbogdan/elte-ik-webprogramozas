//a. A feladat az, hogy JavaScript segítségével ellenőrizzük, hogy a következő szabályok teljesülnek-e:
// név, életkor és érdeklődési terület megadása kötelező,
// életkornak csak számot fogadunk el.
// Az ellenőrzést elküldéskor végezzük el, a hibákat az űrlap felett egy listában jelenítsük meg.

// b. Tegyünk fel egy radiogomb-csoportot is az oldalra, és vizsgáljuk azt is,
// hogy ki lett-e választva ezek közül az egyik.

let submitButton = document.querySelector("#Küldés");
let nameInput = document.querySelector("#nev");
let ageInput = document.querySelector("#kor");
let interestSelect = document.querySelector("#erd");
let radioButtonList = document.querySelectorAll("input[type='radio']");
let errorUl = document.querySelector("#hibak");

const check = (e) => {
  let errorList = [];
  // "" -» false
  if (!nameInput.value) {
    errorList.push("A név mező kitöltése kötelező!");
  }

  if (ageInput.value === "") {
    errorList.push("Az életkor mező kitöltése kötelező!");
  }
  if (isNaN(ageInput.value)) {
    errorList.push("Az életkor mező értéke csak szám lehet!");
  }

  if (!interestSelect.value) {
    errorList.push("Érdeklődési terület megadása kötelező!");
  }

  if (![...radioButtonList].some((elem) => elem.checked == true)) {
    errorList.push("Jelöld ki a kedvenc sorozatodat!");
  }

  if (errorList.length > 0) {
    e.preventDefault();
    errorUl.innerHTML = "";
    errorList.forEach((error) => {
      let errorLi = document.createElement("li");
      errorLi.innerHTML = error;
      errorLi.style.color = "#ff0000";
      errorUl.appendChild(errorLi);
    });
  }
};

submitButton.addEventListener("click", check);
