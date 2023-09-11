const adatok = {
  "18:00": 20,
  "19:00": 20,
  "20:00": 14,
  "21:00": 3,
  "22:00": 30,
  "24:00": 23,
  "00:00": 7,
};

const canvas = document.querySelector("canvas");
const ctx = canvas.getContext("2d");

const HEIGHT = 600;
const WIDTH = 1400;
const BAR_WIDTH = 140;
const GAP = 70;
const MULTIPLIER = 10;

canvas.width = WIDTH;
canvas.height = HEIGHT;
// adatok["18:00"] => 20

let x = 0;
let y = HEIGHT - 140;

for (const kulcs in adatok) {
  ctx.fillStyle = "orange";
  let idopont = kulcs;
  let letszam = adatok[kulcs];
  ctx.fillRect(x, y, BAR_WIDTH, -1 * letszam * MULTIPLIER);

  ctx.textAlign = "center";
  ctx.font = "20px Comic Sans MS";
  ctx.fillText(idopont, x + BAR_WIDTH / 2, y + 35);

  ctx.fillStyle = "black";
  ctx.textBaseline = "middle";
  ctx.fillText(letszam, x + BAR_WIDTH / 2, y - (letszam * MULTIPLIER) / 2);

  x += BAR_WIDTH + GAP;
}
