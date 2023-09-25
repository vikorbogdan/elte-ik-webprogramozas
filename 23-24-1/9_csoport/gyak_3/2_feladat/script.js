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

delegal(faqDiv, ".faq h2", "click", (e) => {
  e.target.nextElementSibling.classList.toggle("visible");
});

// faqDiv.addEventListener("click", (e) => {
//   const eventTarget = e.target;
//   console.log(eventTarget);
//   const eventHandlerH2Item = eventTarget.closest(".faq h2");
//   const nextAnswerP = eventHandlerH2Item.nextElementSibling;
//   nextAnswerP.classList.toggle("visible");
// });
