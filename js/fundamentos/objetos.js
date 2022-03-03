const persona = {
    id       : 0001,
    nombre: "John",
    apellido : "Doe",
    nombreCompleto : function() {
      return this.nombre + " " + this.apellido;
    }
};

console.log(persona.nombreCompleto());

