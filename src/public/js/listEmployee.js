let element = document.getElementById("request");

function employees(data){
  element.style.removeProperty("display");
  let result = '';
  data.datos.map((item) => {
    const card = `
    <div class="item-card">
      <img src="public/img/picture.png" width='80px' height='80px' alt="">
      <p>${item.name} ${item.lastname}</p>
      <p>${item.role}</p>
      <p>${item.age}</p>
      <button onclick="buttonHandler('delete', ${item.id})">Eliminar</button>
    </div>
    `;
    result = result.concat("",card);
  })
  element.innerHTML = result;
}
