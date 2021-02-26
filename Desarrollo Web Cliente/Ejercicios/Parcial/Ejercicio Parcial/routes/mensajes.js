
/* En primer lugar creamos una variable que será la que guarde todos los mensajes enviados */
var lista = new Array();
/* Función que nos cargará una vista con un formulario y le pasará la lista de todos los mensajes enviados:  */
function enviar_mensaje(req, res){
   res.render('enviar_mensaje', {
      lista: lista
   });
}

exports.get_enviar_mensaje = function(req, res){
   enviar_mensaje(req, res);
}

/* Así recibimos las variables de tipo POST */
exports.post_enviar_mensaje = function(req, res){
   var nickName = req.body.nickName;
   var email = req.body.email;
   var poderes = req.body.poderes;
   lista.push({
      nickName: nickName,
      email: email,
      poderes: poderes
   })
   enviar_mensaje(req, res);
}
