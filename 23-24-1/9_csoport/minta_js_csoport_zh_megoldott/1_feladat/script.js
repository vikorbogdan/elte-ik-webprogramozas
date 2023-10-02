// Egy adott időszakban minden nap megmértük a Balaton vizének hőmérsékletét,
// és egy sorozatban tároltuk el.

// A válaszokat írd ki a konzolra!

let homersekletek = [18, 20, 23, 26, 30, 28, 25, 20, 20, 23, 24];

// a. Hányszor mértünk 25 Celsius fok feletti hőmérsékletet? - 0,5 pont

// b. Hanyadik napon volt a víz először pontosan 23 fokos? - 0,5 pont

// c. Melyik volt a legnagyobb mért hőmérséklet-érték? - 1 pont

// d. Hányadik napon volt a leghidegebb a víz? - 1 pont

// a
const result = homersekletek.filter((e) => e > 25);
console.log(`a,\n${result.length}`);

// b
const index = homersekletek.indexOf(23);
console.log(`b,\n${index + 1}`); // the first index is 0, so +1 needed

// c
const max = Math.max(...homersekletek);
console.log(`c,\n${max}`);

// d
const minIndex = homersekletek.indexOf(Math.min(...homersekletek));
console.log(`d,\n${minIndex + 1}`); // the first index is 0, so +1 needed
