// Adott egy GYIK oldal. Ezen egy faq stílusosztályú elemen belül vannak a kérdések válaszok.
// A kérdések h2 elemben, a válaszok közvetlenül utána p elemekben vannak.
// Oldjuk meg, hogy egy kérdésre kattintva a válasz eltűnjön/megjelenjen!

// Delegál függvény: https://github.com/gvikthor/Webprogramozas/tree/master/20-21-1/3.%20Gyak/Delegalas

function delegal(szulo, gyerek, mikor, mit) {
  function esemenyKezelo(esemeny) {
    let esemenyCelja = esemeny.target;
    let esemenyKezeloje = this;
    let legkozelebbiKeresettElem = esemenyCelja.closest(gyerek);

    if (esemenyKezeloje.contains(legkozelebbiKeresettElem)) {
      mit(esemeny, legkozelebbiKeresettElem);
    }
  }

  szulo.addEventListener(mikor, esemenyKezelo);
}

let faqDiv = document.querySelector(".faq");
// console.log(faqDiv);

delegal(faqDiv, ".faq h2", "click", (e) => {
  // console.log(e.target.nextElementSibling.innerText);
  let valasz = e.target.nextElementSibling;
  valasz.classList.toggle("visible");
});
