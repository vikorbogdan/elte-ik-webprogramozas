let canvas = document.querySelector("canvas");
let ctx = canvas.getContext("2d");

canvas.width = 500;
canvas.height = 500;

let garfield = new Image();
garfield.src = "./walking_garfield.png";

let position = 0;

garfield.addEventListener("load", () => {
  ctx.drawImage(garfield, 0, 0, 40, 48, 10, 10, 40, 48);
});

// let idozito = setInterval(() => {}, 1000);
// clearInterval(idozito);
let x = 0;
let megy = false;
setInterval(() => {
  if (megy) {
    ctx.clearRect(0, 0, 500, 500);
    ctx.drawImage(garfield, position, 0, 40, 48, x, 10, 40, 48);
    position += 40;
    position %= 320;
    x += 1;
  } else {
    position = 0;
    ecset.clearRect(0, 0, 500, 500);
    ctx.drawImage(garfield, position, 0, 40, 48, x, 10, 40, 48);
  }
}, 100);

document.addEventListener("keydown", (e) => {
  if (e.key === "d") {
    megy = true;
  }
});

document.addEventListener("keyup", (e) => {
  megy = false;
});
