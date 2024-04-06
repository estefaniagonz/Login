document.getElementById("btn_iniciarSesion").addEventListener('click', iniciarSesion);
document.getElementById("btn_registrarse").addEventListener("click", register);


// Declaración de variables
var contenedor_login_register = document.querySelector(".contenedor_login_register"); // Cambiado a ".contenedor_login_register"
var formulario_login = document.querySelector(".formulario__login"); // Cambiado a ".formulario__login"
var formulario_register = document.querySelector(".formulario__register"); // Cambiado a ".formulario__register"
var caja_trasera_login = document.querySelector(".caja_trasera-login"); // Cambiado a ".caja_trasera-login"
var caja_trasera_register = document.querySelector(".caja_trasera_register"); // Cambiado a ".caja_trasera_register"

function iniciarSesion() {
    formulario_register.style.display = "none";
    contenedor_login_register.style.left = "10px";
    formulario_login.style.display = "block";
    caja_trasera_register.style.opacity = "1";
    caja_trasera_login.style.opacity = "0";
}
function register() {
    formulario_register.style.display = "block";
    contenedor_login_register.style.left = "410px";
    formulario_login.style.display = "none";
    caja_trasera_register.style.opacity = "0";
    caja_trasera_login.style.opacity = "1";
}

