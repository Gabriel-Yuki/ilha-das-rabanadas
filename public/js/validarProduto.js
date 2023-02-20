const divs = document.querySelectorAll(".box-inputs");
const inputs = document.querySelectorAll(".form-control");
let msg;

inputs.forEach((input, index) => {
    input.addEventListener("blur", () => {
        let div = divs[index];
        if (input.value === "") {
            // verifica se um input esta vazio
            return empty(input, div);
        }
        full(input, div, index);





    })

});
function success(input) {
    input.className = "form-control border border-success";


}
function empty(input, div) {
    // mensagem caso o input esteja vazio
    msg = "Esse campo precisa ser preenchido!";
    return errorMessage(msg, div, input);


}
function errorMessage(msg, div, input) {
    // mensagem de error
    if (div.childElementCount !== 3) {
        let error = document.createElement("p");
        input.value='';
        input.className = "form-control border border-danger";
        error.innerHTML = msg;
        error.className = "text-danger";
        div.appendChild(error);
    }

}
function full(input, div, index) {
    if (div.childElementCount === 3) {
        // caso o input esteja preenchido 
        const error = div.children[2]

        div.removeChild(error);
        return input.className = "form-control border border-success";

    }

    switch (index) {
        // verificando os inputs especificamente
        case 2:
            input.addEventListener("focus", () => input.value = "")
            formatNumber(input, div);
            break;
        case 3:
            validateCategory(input, div);
            break
        default:
            success(input);
            break;
    }


}

function validateCategory(input, div) {
    // validando a categoria
    let value = Number(input.value);
    msg = "Apenas texto!"
    if (!isNaN(value)) {
        return errorMessage(msg, div, input);
    }

}
function formatNumber(input, div) {
   

    // formatando o preco
    let value = input.value;
    let numberValue = Number(value);
    if (isNaN(numberValue)) {
        msg = "Apenas numeros !";
        return errorMessage(msg, div, input);

    }
    let formattedNumber = numberValue.toLocaleString("pt-br", {
        style: "currency",
        currency: "BRL",
    });
    return input.value = formattedNumber;
}


