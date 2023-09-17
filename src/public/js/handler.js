async function buttonHandler(action,url){
  let show = url.split("/")[0];
  if(action === 'delete'){
    return new Promise((resolve, reject) => {
      const response = prompt('escribe: "yes" si deceas eliminar');
      if (response !== null) {
          resolve(response);
      } else {
          reject("accion cancelada");
      }
    })
    .then(()=>{
      requester(url,show,'DELETE');
    })
    .catch(error => console.log(error))
  }
}
