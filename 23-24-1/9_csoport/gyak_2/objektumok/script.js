const objektum = {
  name: "Gárfild",
  age: 46,
  isACat: true,
};

const szereplok = [
  {
    name: "Gárfild",
    age: 46,
    isACat: true,
  },
  {
    name: "Jon",
    age: 32,
    isACat: false,
  },
  {
    name: "Odie",
    age: 4,
    isACat: false,
  },
];

//console.log(objektum.name);

// Írd ki a konzolra az összes szereplő nevét!

szereplok.forEach((elem) => console.log(elem.name, elem.age, elem.isACat));
