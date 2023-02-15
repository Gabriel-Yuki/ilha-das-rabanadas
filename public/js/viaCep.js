



let cep =document.querySelectorAll("#cep");
cep = cep.value;
const url = "https://viacep.com.br/ws//json/"

fetch(url).then(response => { return response.json() }).then(console.log)

