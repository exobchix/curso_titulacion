function toCelsius(fahrenheit) {
    return (5/9) * (fahrenheit-32);
}

let texto = "La temperatura es " + toCelsius(77) + " Celsius"; 

console.log(texto);