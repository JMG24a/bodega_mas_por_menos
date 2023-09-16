// Accede a la variable PHP almacenada en un elemento HTML oculto
let request = document.getElementById("request").textContent;
let show = request.split("/")[0];

function requester (url, view, method){
  fetch(`${url}`, {
    method: method,  // O 'GET' según tus necesidades
    headers: {
        'Content-Type': 'application/json',  // Ajusta los encabezados según tus necesidades
    },
    body: JSON.stringify({ /* Datos a enviar al servidor si es necesario */ }),
  })
  .then(response => response.json())  // Puedes ajustar esto según la respuesta esperada
  .then(data => {
    console.log(data)
    // Manejar la respuesta del servidor aquí (data)
    let object = {
      'employees': function() {
        employees(data);
      },
      'home': function() {
        home(data);
      },
      'liadsstEmployees': function() {
        customer(data);
      }
    };
    if (object[view] && typeof object[view] === 'function') {
      object[view]();
    } else {
      console.log('Opción no válida');
    }
  })
  .catch(error => {
    console.error('Error:', error);
  });
}

requester(request,show,'POST');
