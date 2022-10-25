// Utility functions
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

function randomBetween(min, max) {
  return Math.floor(Math.random() * (max - min + 1) + min);
}
//////////////////
const menuDiv = document.querySelector("div#menu");
const startButton = document.querySelector("button#start-button");
const historyButton = document.querySelector("button#history-button");
const sizeInput = document.querySelector("div#menu input#size");
const containerDiv = document.querySelector("div#container");
const historyDiv = document.querySelector("div#history");
const gameDiv = document.querySelector("div#game");

let steps = 0;
let history = JSON.parse(localStorage.getItem("gameHistory")); // lekérés a localStorage-ból (parse: string -> obj)

// Főmenü megjelenítéséért felelős függvény
const renderMenu = () => {
  gameDiv.style.display = "none";
  historyDiv.style.display = "none";
  menuDiv.style.display = "flex";
  startButton.addEventListener("click", () => {
    const size = sizeInput.value;
    renderGameScreen(size);
    menuDiv.style.display = "none";
  });
  historyButton.addEventListener("click", () => {
    renderHistory();
    menuDiv.style.display = "none";
  });
};

// Játék megjelenítéséért felelős függvény
const renderGameScreen = (size) => {
  gameDiv.style.display = "flex";
  gameDiv.innerHTML = "";
  // Kincs elhelyezése a pályán
  const treasureX = randomBetween(0, size - 1);
  const treasureY = randomBetween(0, size - 1);

  // Lépésszámláló létrehozása
  steps = 0;

  // Főcím hozzáadása a konténerhez
  const title = document.createElement("h1");
  title.innerHTML = "Találd meg a kincset!";
  gameDiv.appendChild(title);

  // Játéktábla hozzáadása a konténerhez
  const table = document.createElement("table");
  for (let i = 0; i < size; i++) {
    const row = document.createElement("tr");
    for (let j = 0; j < size; j++) {
      const cell = document.createElement("td");
      cell.style.backgroundColor = Math.round(Math.random())
        ? "#1c5c2c"
        : "#8f6545";
      row.appendChild(cell);
    }
    table.appendChild(row);
  }
  gameDiv.appendChild(table);

  delegal(table, "table td", "click", (e) =>
    gameController(e, treasureX, treasureY, size)
  );
};

// Egyes cellákra kattintáskor bekövetkező eseményekért felelős függvény
const gameController = (e, treasureX, treasureY, size) => {
  if (e.target.innerHTML === "") {
    steps++;
  }
  let x = e.target.parentElement.rowIndex;
  let y = e.target.cellIndex;
  if (treasureX == x && treasureY == y) {
    e.target.innerHTML = "💎";
    gameDiv.innerHTML += `Gratulálok, ${steps} lépés alatt megtaláltad a gyémántot!!!`;
    let gameData = { steps: steps, size: size }; // {steps, size}
    if (history) {
      history.push(gameData);
    } else {
      history = [gameData];
    }
    localStorage.setItem("gameHistory", JSON.stringify(history));
  } else {
    e.target.innerHTML = "⚫";
  }
};

// Az előzmény képernyő megjelenítéséért felelős függvény
const renderHistory = () => {
  historyDiv.style.display = "flex";
  const historyUl = document.createElement("ul");
  if (history) {
    history.map((el) => {
      const listItem = document.createElement("li");
      listItem.innerHTML = `${el.size}x${el.size} pálya: ${el.steps} lépés`;
      historyUl.appendChild(listItem);
    });
    historyDiv.innerHTML = "";
    historyDiv.appendChild(historyUl);
  } else {
    historyDiv.innerHTML = "";
    historyDiv.innerHTML += "Nincs még előzmény";
  }
  const backButton = document.createElement("button");
  backButton.innerHTML = "Vissza";
  backButton.addEventListener("click", () => {
    renderMenu();
  });
  historyDiv.appendChild(backButton);
};

// Main
renderMenu();
