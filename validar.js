function validar() {
    // Introducimos las variables del formulario
    var nombre, email, numTarjeta, cvc, mesExp, anoExp;

    // Las llamamos por su ID
    nombre = document.getElementById("nombre").value;
    email = document.getElementById("email").value;
    numTarjeta = document.getElementById("numTarjeta").value;
    cvc = document.getElementById("cvc").value;
    mesExp = document.getElementById("mesExp").value;
    anoExp = document.getElementById("anoExp").value;

    // Nombramos las expresiones con los carácteres correctos para la validación
    expresionNombre = /[a-z]/;
    expresionEmail = /\w+@+\w+\.+[a-z]/;

    // Introducimos todas las variables para la validación de cada uno de los campos
    // desde el número de carcartes de la base de datos, hasta si estan o no rellenos
    // e incluso si estan en el formato correcto para que no den un futuro error
    if (nombre === "" || email === "" || numTarjeta === "" || cvc === "" || mesExp === "" || anoExp === "") {
        alert("Todos los campos son obligatorios");
        return false;
    } else if (nombre.length > 40) {
        alert("El nombre es muy largo");
        return false;
    } else if (email.length > 50) {
        alert("El email es muy largo");
        return false;
    } else if (numTarjeta.length > 17) {
        alert("El número de tarjeta debe contener 16 dígitos");
        return false;
    } else if (cvc.length > 4) {
        alert("El CVC está en la parte trasera y debe contener 3 dígitos");
        return false;
    } else if (mesExp.length > 3) {
        alert("El mes debe de tener 2 dígitos");
        return false;
    } else if (anoExp.length > 5) {
        alert("El año debe tener 4 dígitos");
        return false;
    } else if (!expresionNomnre.test(nommbre)) {
        alert("Introduzca correctamente el nombre");
        return false;
    } else if (!expresionEmail.test(email)) {
        alert("Introduzca correctamente el email");
        return false;
    } else if (isNaN(numTarjeta)) {
        alert("Introduzca solo números");
        return false;
    } else if (isNaN(cvc)) {
        alert("Introduzca solo números");
        return false;
    } else if (isNaN(mesExp)) {
        alert("Introduzca solo números");
        return false;
    } else if (isNaN(anoExp)) {
        alert("Introduzca solo números");
        return false;
    }

}