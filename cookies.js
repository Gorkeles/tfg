// Función para crear y modificar cookies (es lo mismo)
function setCookie(nombre, valor, expiracion) {
    var d = new Date();
    // Cambio formato fecha para poner la expiracion de cookies por dias
    d.setTime(d.getTime() + expiration * 24 * 60 * 60 * 1000);
    var expiration = "expires=" + d.toUTCString();
    document.cookie = nombre + "=" + valor + ";" + expiracion + ";path=/";
}
// Función para obtener los datos de una cookie
function getCookie(nombre) {
    var nom = nombre + "=";
    // Creamos un array alacene los datos de las cookies y los valla recorriendo 1 a 1
    //hasta llegar al espacio (fin de la cadena)
    var array = document.cookie.split(";");
    for (var i = 0; i < array.length; i++) {
        var c = array[i];
        while (c.charAt(0) == " ") {
            c = c.substring(1);
        }
        if (c.indexOf(nombre) == 0) {
            // Comprobamos si aparece la palabra nombre+"="
            return c.substring(nom.length, c.length);
            // Pasamos 2 paramentro para comprobar la longitud del nombre

        }
    }
    // Si no devuelve nada
    return "";
}