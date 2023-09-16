const user = document.getElementById("cedula");
const password = document.getElementById("password");
const error_user = document.getElementById("error_user");
const error_password = document.getElementById("error_password");
const submit = document.getElementById("submit_user");

user.addEventListener("keyup", (e)=>{
  error_user.innerText = ""
  if(!/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/.test(e.target.value)){
    error_user.innerText = "Email no valido"
  }else{
    error_user.innerText = ""
  }
})

password.addEventListener("keyup", (e)=>{
  error_password.innerText = ""
  if(!/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])[A-Za-z\d$@$!%*?&]{8,15}/.test(e.target.value)){
    error_password.innerHTML = `
    <ul>
      <li style="list-style:circle">Minimo 8 caracteres</li>
      <li style="list-style:circle">Al menos una letra mayúscula</li>
      <li style="list-style:circle">Al menos un dígito</li>
      <li style="list-style:circle">Al menos 1 caracter especial</li>
      <li style="list-style:circle">No espacios en blanco</li>
      <li style="list-style:circle">Al menos una letra minucula</li>
      <li style="list-style:circle">Ejemplo: 12345678@Aa</li>
    </ul>`
  }
})

submit.addEventListener("click", (e)=>{

})
