const canvas = document.querySelector("canvas");
const ctx = canvas.getContext("2d");

const garfield = new Image();
garfield.src = "walking_garfield.png";

canvas.width = 500;
canvas.height = 500;

garfield.addEventListener("load", () => {
  ctx.drawImage(garfield, 0, 0, 40, 52, 10, 10, 40, 52);
});

let xPosition = 0;
let xWalkPosition = 0;
let isWalking = false;
setInterval(() => {
  if (isWalking) {
    ctx.clearRect(0, 0, 500, 500);
    ctx.drawImage(garfield, xPosition, 0, 40, 52, xWalkPosition, 10, 40, 52);
    xPosition += 40;
    xPosition %= 320;
  } else {
    xPosition = 0;
    ctx.clearRect(0, 0, 500, 500);
    ctx.drawImage(garfield, xPosition, 0, 40, 52, xWalkPosition, 10, 40, 52);
  }
}, 100);

window.addEventListener("keydown", (e) => {
  if (e.key === "d") {
    xWalkPosition += 5;
    isWalking = true;
  }
});
window.addEventListener("keyup", (e) => {
  if (e.key === "d") {
    isWalking = false;
  }
});
