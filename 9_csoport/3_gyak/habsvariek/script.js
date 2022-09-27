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
//     varos: "Berlin",
//   }

let keresoszoInput = document.querySelector("#keresoszo");
let keresGomb = document.querySelector("#keres");
let talalatokUl = document.querySelector("#talalatok");

//console.log(keresoszoInput, keresGomb, talalatokUl);

let kereses = (keresoszo) => {
  talalatokUl.innerHTML = "";
  for (adat of adatok) {
    if (adat.orszag === keresoszo) {
      let varosLi = document.createElement("li");
      varosLi.innerHTML = adat.varos;
      talalatokUl.appendChild(varosLi);
    }
  }
};

keresGomb.addEventListener("click", () => kereses(keresoszoInput.value));
keresoszoInput.addEventListener("keyup", (e) => {
  if (e.key === "Enter") {
    kereses(keresoszoInput.value);
  }
});
