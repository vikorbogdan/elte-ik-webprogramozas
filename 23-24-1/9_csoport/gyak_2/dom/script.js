// 1. feladat

const helloText = document.querySelector("#helloText");
const helloButton = document.querySelector("#feladat1 button");
// <input type="text" id="nameInput" placeholder="Add meg a neved">
const nameInput = document.querySelector("#nameInput");
helloButton.addEventListener("click", () => {
  const nameValue = nameInput.value;
  helloText.innerHTML = `Hello ${nameValue}!`;
});

// 2. feladat
const repeatInput = document.querySelector("#repeatInput");
const helloRepeatsDiv = document.querySelector("#helloRepeats");
const helloRepeatButton = document.querySelector("#feladat2 button");
helloRepeatButton.addEventListener("click", () => {
  for (let i = 0; i < repeatInput.value; i++) {
    // 1. hozzunk létre egy új <p> elemet
    // 2. írjuk bele hogy hello világ
    // 2+1. változtassuk a betűméretét
    const helloP = document.createElement("p");
    helloP.innerHTML = "Hello Világ!";
    helloP.style.fontSize = `${(i + 1) * 50}px`;
    helloRepeatsDiv.appendChild(helloP);
    // 3. fűzzűk hozzá a divhez
  }
});
// 3. feladat
const circ = document.querySelector("#circleResult");
const radiusButton = document.querySelector("#feladat3 button");
const radius = document.querySelector("#radiusInput");
radiusButton.addEventListener("click", () => {
  circ.innerHTML = radius.value * Math.PI * 2;
});
// 4. feladat
const unorderedList = document.querySelector("#hyperlinksList");
console.log(document.querySelectorAll("#feladat4 a"));
document.querySelectorAll("#feladat4 a").forEach((elem) => {
  let linkTartalom = elem.innerHTML;
  let listaElem = document.createElement("li");
  listaElem.innerHTML = linkTartalom;
  unorderedList.appendChild(listaElem);
});
// 5. feladat

// 6. feladat
const gyerekek = [
  { nev: "Anna", osztaly: "3/A", kor: 8 },
  { nev: "Bence", osztaly: "4/B", kor: 9 },
  { nev: "Cecília", osztaly: "2/C", kor: 7 },
  { nev: "Dávid", osztaly: "5/D", kor: 10 },
  { nev: "Emma", osztaly: "1/E", kor: 6 },
];
// 7. feladat
const konyvekLista = [
  {
    szerzo: "J.K. Rowling",
    cim: "Harry Potter and the Philosopher's Stone",
    kiadasEve: 1997,
    kiado: "Bloomsbury",
    isbn: "978-0747532743",
  },
  {
    szerzo: "George Orwell",
    cim: "1984",
    kiadasEve: 1949,
    kiado: "Secker & Warburg",
    isbn: "978-0451524935",
  },
  {
    szerzo: "Harper Lee",
    cim: "To Kill a Mockingbird",
    kiadasEve: 1960,
    kiado: "J. B. Lippincott & Co.",
    isbn: "978-0061120084",
  },
  {
    szerzo: "F. Scott Fitzgerald",
    cim: "The Great Gatsby",
    kiadasEve: 1925,
    kiado: "Charles Scribner's Sons",
    isbn: "978-0743273565",
  },
  {
    szerzo: "Leo Tolstoy",
    cim: "War and Peace",
    kiadasEve: 1869,
    kiado: "The Russian Messenger",
    isbn: "Nincs ISBN",
  },
];

// 8. feladat

// 9. feladat

// 10. feladat

//////
document.querySelectorAll("ul li a").forEach(function (link) {
  link.addEventListener("click", function (e) {
    e.preventDefault(); // Ne ugorjon az oldal a linkre kattintáskor
    const targetId = this.getAttribute("href").substring(1); // Az "href" attribútum értéke #-jel nélkül
    const feladatok = document.querySelectorAll(".feladat");
    feladatok.forEach(function (feladat) {
      if (feladat.id === targetId) {
        feladat.classList.add("aktualis");
      } else {
        feladat.classList.remove("aktualis");
      }
    });
  });
});
