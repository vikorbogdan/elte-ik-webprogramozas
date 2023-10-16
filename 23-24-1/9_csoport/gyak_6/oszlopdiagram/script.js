const canvas = document.querySelector("canvas");
const ctx = canvas.getContext("2d");

const adatok = {
  "18:00": 13,
  "19:00": 12,
  "20:00": 30,
  "21:00": 47,
  "22:00": 30,
  "23:00": 6,
  "24:00": 40,
};

const WIDTH = 1400;
const HEIGHT = 600;
const GAP = 70;
const BAR_WIDTH = 140;
const MULTIPLIER = 10;

canvas.width = WIDTH;
canvas.height = HEIGHT;

let x = 0;
let y = HEIGHT - 100;
for (const idopont in adatok) {
  // adatok[idopont]
  const numberOfPeople = adatok[idopont];
  ctx.fillStyle = "green";
  ctx.fillRect(x, y, BAR_WIDTH, -numberOfPeople * MULTIPLIER);

  // oszlopfeliratok (időpont)
  ctx.fillStyle = "black";
  ctx.textAlign = "center";
  ctx.font = "25px Arial";
  ctx.fillText(idopont, x + BAR_WIDTH / 2, y + 35);

  // oszlopfeliratok (létszám)
  ctx.textBaseline = "middle";
  ctx.fillStyle = "white";
  ctx.fillText(
    numberOfPeople,
    x + BAR_WIDTH / 2,
    HEIGHT - 100 - (numberOfPeople * MULTIPLIER) / 2
  );

  x += GAP + BAR_WIDTH;
}
