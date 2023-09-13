window.onload = function () {
// Accede a la variable PHP almacenada en un elemento HTML oculto
var token = document.getElementById("token").textContent;;

function save_token() {
  localStorage.setItem("token", token);
}

  save_token();
}
