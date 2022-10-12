//a. A feladat az, hogy JavaScript segítségével ellenőrizzük, hogy a következő szabályok teljesülnek-e:
// 1. név és érdeklődési terület megadása kötelező,
// 2. életkornak csak számot fogadunk el.
// 3. Az ellenőrzést elküldéskor végezzük el, a hibákat az űrlap felett egy listában jelenítsük meg.
// Tegyünk fel egy radiogomb-csoportot is az oldalra, és vizsgáljuk azt is, hogy ki lett-e választva ezek közül az egyik.
let kuldesGomb = document.querySelector("#Küldés");
let nevInput = document.querySelector("#nev");
let korInput = document.querySelector("#kor");
let erdSelect = document.querySelector("#erd");
let hibaListaContainer = document.querySelector("#hibak");

let ellenorzes = (e) => {
  let hibaLista = [];
  if (nevInput.value === "") {
    hibaLista.push("A név mező kitöltése kötelező!");
  }
  if (korInput.value === "") {
    hibaLista.push("A kor mező kitöltése kötelező!");
  }
  if (isNaN(korInput.value)) {
    hibaLista.push("Számot adj meg a korhoz!");
  }
  if (erdSelect.value == "") {
    hibaLista.push("Érdeklődési terület kiválasztása kötelező!");
  }
  if (document.querySelectorAll("input[type='radio']:checked").length === 0) {
    hibaLista.push("Add meg a kedvenc mesédet!");
  }
  if (hibaLista.length > 0) {
    e.preventDefault();
    hibaListaContainer.innerHTML = "";
    hibaLista.forEach((elem) => {
      let listaElem = document.createElement("li");
      listaElem.innerHTML = elem;
      listaElem.style.color = "red";
      hibaListaContainer.appendChild(listaElem);
    });
  }
};

kuldesGomb.addEventListener("click", ellenorzes);
