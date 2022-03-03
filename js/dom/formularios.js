function validarInput() {
    
    // Get the value of the input field with id="numb"

    let x = document.getElementById("numb").value;
    
    // If x is Not a Number or less than one or greater than 10

    let text;

    if (isNaN(x) || x < 1 || x > 10) {
      text = "Input no valido";
    } else {
      text = "Input OK";
    }
    document.getElementById("mensaje").innerHTML = text;
}


function validarFormulario() {
    let x = document.forms["miFormulario"]["nombre"].value;
    if (x == "") {
      alert("El campo nombre no puede estar vacío");
      return false;
    }
}