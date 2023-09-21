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
    .then((res)=>{
      console.log(res, res.toLowerCase())
      if(res.toLowerCase() === 'yes'){
        requester(url,show,'POST');
      }
    })
    .catch(error => console.log(error))
  }
}
