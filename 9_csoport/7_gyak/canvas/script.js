let vaszon = document.querySelector("canvas");
let ecset = vaszon.getContext("2d");

vaszon.width = 500;
vaszon.height = 500;

ecset.moveTo(20, 20);
ecset.lineTo(40, 40);
ecset.lineTo(200, 40);
ecset.lineTo(300, 42);
ecset.lineTo(500, 500);
ecset.lineTo(500, 0);
ecset.lineTo(0, 500);
ecset.stroke();

ecset.clearRect(0, 0, 500, 500);

ecset.beginPath();
ecset.arc(250, 250, 100, 0, Math.PI);
ecset.strokeStyle = "green";
ecset.fillStyle = "#f22222";
ecset.lineWidth = 20;
ecset.fill();
ecset.stroke();

ecset.textAlign = "center";
ecset.font = "35px Times New Roman";
ecset.lineWidth = 1;
ecset.fillStyle = "black";
ecset.fillText("Dinnnnnye", 250, 400);
ecset.fillStyle = "rgba(255, 0, 0, 0.5)";
ecset.fillText("Dinnnnnye", 248, 400);
ecset.fillStyle = "rgba(0, 0, 255, 0.5)";
ecset.fillText("Dinnnnnye", 252, 400);

ecset.fillRect(150, 410, 200, 10);
ecset.strokeRect(150, 410, 200, 10);
