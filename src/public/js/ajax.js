window.onload = function () {
  // Accede a la variable PHP almacenada en un elemento HTML oculto
  var request = document.getElementById("request").textContent;

  fetch(`${request}`, {
    method: 'POST',  // O 'GET' según tus necesidades
    headers: {
        'Content-Type': 'application/json',  // Ajusta los encabezados según tus necesidades
    },
    body: JSON.stringify({ /* Datos a enviar al servidor si es necesario */ }),
  })
  .then(response => response.json())  // Puedes ajustar esto según la respuesta esperada
  .then(data => {
    // Manejar la respuesta del servidor aquí (data)
    console.log(data);
  })
  .catch(error => {
    console.error('Error:', error);
  });

}
