let adatok = [
  {
    orszag: "Németország",
    varos: "Berlin",
  },
  {
    orszag: "Németország",
    varos: "München",
  },
  {
    orszag: "Németország",
    varos: "Königsberg",
  },
  {
    orszag: "Franciaország",
    varos: "Párizs",
  },
  {
    orszag: "Egyesült Királyság",
    varos: "London",
  },
  {
    orszag: "Egyesült Királyság",
    varos: "Dublin",
  },
  {
    orszag: "Egyesült Királyság",
    varos: "Hong Kong",
  },
  {
    orszag: "Egyesült Királyság",
    varos: "Delhi",
  },
  {
    orszag: "Ausztria",
    varos: "Bécs",
  },
  {
    orszag: "Ausztria",
    varos: "Pozsony",
  },
  {
    orszag: "Ausztria",
    varos: "Budapest",
  },
  {
    orszag: "Oroszország",
    varos: "Moszkva",
  },
  {
    orszag: "Oroszország",
    varos: "Kijev",
  },
  {
    orszag: "Oroszország",
    varos: "Varsó",
  },
];

//   {
//     orszag: "Németország",
//     varos: "München",
//   },

let orszagInput = document.querySelector("input#orszag");
let keresButton = document.querySelector("button#keres");
let talalatokUl = document.querySelector("ul#talalatok");

keresButton.addEventListener("click", () => {
  talalatokUl.innerHTML = "";

  let orszagQuery = orszagInput.value;
  let talalatok = adatok.filter((adat) => adat.orszag === orszagQuery);
  let varosLista = talalatok.map((talalat) => talalat.varos);
  varosLista.forEach((varos) => {
    const listaElem = document.createElement("li");
    listaElem.innerHTML = varos;
    talalatokUl.appendChild(listaElem);
  });
});
