function validar() {
    // Introducimos las variables del formulario
    var nombre, phone, email, consulta;

    // Las llamamos por su ID
    nombre = document.getElementById("nombre").value;
    phone = document.getElementById("phone").value;
    email = document.getElementById("email").value;
    consulta = document.getElementById("consulta").value;

    // Nombramos las expresiones con los carácteres correctos para la validación
    expresionNombre = /[a-z]/;
    expresionPhone = /[0-9]/;
    expresionEmail = /\w+@+\w+\.+[a-z]/;

    // Introducimos todas las variables para la validación de cada uno de los campos
    // desde el número de carcartes de la base de datos, hasta si estan o no rellenos
    // e incluso si estan en el formato correcto para que no den un futuro error
    if (nombre === "" || phone === "" || email === "" || consulta === "") {
        alert("Todos los campos son obligatorios");
        return false;
    } else if (nombre.length > 50) {
        alert("El nombre es muy largo");
        return false;
    } else if (phone.length > 9) {
        alert("El teléfono es muy largo");
        return false;
    } else if (email.length > 50) {
        alert("El email es muy largo");
        return false;
    } else if (consulta.length > 100) {
        alert("La consulta es muy larga");
        return false;
    } else if (!expresionNomnre.test(nombre)) {
        alert("Introduzca correctamente el nombre");
        return false;
    } else if (!expresionPhone.test(phone)) {
        alert("Introduzca correctamente el teléfono");
        return false;
    } else if (!expresionEmail.test(email)) {
        alert("Introduzca correctamente el email");
        return false;
    }
}