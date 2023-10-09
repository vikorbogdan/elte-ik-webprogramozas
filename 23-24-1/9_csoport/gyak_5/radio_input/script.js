let generateButton = document.querySelector("#generalas");
let countRadio = document.querySelectorAll("input[name='darab']");
let containerDiv = document.querySelector("#container");

let generate = (e) => {
  e.preventDefault();
  let selectedCount = [...countRadio].find((elem) => elem.checked);
  if (selectedCount) {
    containerDiv.innerHTML = "";
    let countOfInputs = selectedCount.value;
    for (let i = 0; i < countOfInputs; i++) {
      const inputElement = document.createElement("input");
      inputElement.type = "text";
      containerDiv.appendChild(inputElement);
    }
  }
};

generateButton.addEventListener("click", generate);
