// Delegálás segítségével érd el, hogy egy betűre kattintva azon alkalmazva legyen a 'neonText' stílusosztály
// majd újabb kattintásra lekerüljön róla. - 2 pont

const container = document.querySelector("#container");

// https://github.com/vikorbogdan/elte-ik-webprogramozas/tree/main/tananyag/delegalas

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

delegal(container, "span", "click", (e) => {
  const letter = e.target;
  letter.classList.toggle("neonText");
});
