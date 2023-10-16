const canvas = document.querySelector("canvas");
const ctx = canvas.getContext("2d");

canvas.width = 500;
canvas.height = 500;

ctx.moveTo(0, 0);
ctx.lineTo(250, 250);
ctx.lineTo(150, 250);
ctx.lineTo(150, 300);
ctx.lineTo(150, 500);

let yPozicio = 0;

// ctx.lineWidth = 25;
// setInterval(() => {
//   ctx.lineTo(100, yPozicio);
//   yPozicio += 10;
//   ctx.stroke();
// }, 500);

ctx.clearRect(0, 0, 500, 500);

ctx.beginPath();
ctx.arc(250, 250, 100, 0, Math.PI);
ctx.strokeStyle = "crimson";
ctx.fillStyle = "orange";
ctx.lineWidth = 25;
ctx.fill();
ctx.stroke();

ctx.font = "70px Comic Sans MS";
ctx.textAlign = "center";
ctx.strokeText("Logo", 250, 200);
ctx.fillText("Logo", 250, 200);
