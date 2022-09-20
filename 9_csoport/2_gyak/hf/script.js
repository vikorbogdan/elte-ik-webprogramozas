// Pár napon keresztül minden délben megmértük a levegő hőmérsékletét. Oldd meg az alábbi feladatokat!
let homersekletek = [0, -1.5, 20, 40, 30, -12.5, 1];
// a. Válogasd ki azokat az értékeket, amikor fagyott! (<= 0)
console.log(homersekletek.filter((elem) => elem <= 0));
// b. Mindegyik hőmérséklet érték végére fűzd oda a C szöveget!
console.log(homersekletek.map((elem) => `${elem} °C`)); // Alt Gr + 7
// c. Add meg a legmagasabb hőmérséklet értékét!
console.log(Math.max(...homersekletek)); // ([1,2,3,4]) (1,2,3,4)
console.log(
  homersekletek.reduce(
    (previousValue, currentValue) =>
      previousValue < currentValue ? currentValue : previousValue,
    homersekletek[0]
  )
);
// d. Add meg, hányszor ment a hőmérséklet 20 fok alá!
console.log(homersekletek.filter((elem) => elem < 20).length);
// e. Döntsd el, van-e 40 fok fölötti érték!
console.log(homersekletek.some((elem) => elem > 40));
// f. Döntsd el, hogy mindegyik hőmérsékletérték pozitív-e!
console.log(homersekletek.every((elem) => elem > 0));
// g. Add meg az első olyan értéket, amikor 10 fok fölé ment a hőmérséklet!
console.log(homersekletek.find((elem) => elem > 10));
