let app = document.getElementById('aplicacion');
let btn = document.getElementById('btn');

app.innerHTML = "<h1> Hola desde JavaScript <h1>";


btn.addEventListener("click", miFuncion);

function miFuncion() {
  alert ("Hello World!");
} 