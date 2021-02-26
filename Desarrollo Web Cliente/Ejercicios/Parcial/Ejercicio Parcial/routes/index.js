var express = require('express');
var router = express.Router();

/* GET home page. */
router.get('/', function(req, res, next) {
  res.render('index', { title: 'Express' });
});

router.get('/ejem', function(req, res, next) {
  res.render('ejemplo');
});
router.get('/sobreNosotros', function(req, res, next) {
  res.render('sobreNos');
});

router.get('/env_mensaje', function(req, res, next) {
  res.render('enviar_mensaje');
});
router.get('/lista_jugadores', function(req, res, next) {
  res.render('listaJugadores');
});
router.get('/pagina2', function(req, res, next) {
  res.render('pagina2');
});
router.get('/pagina3', function(req, res, next) {
  res.render('pagina3');
});
router.post('/env_mensaje', function(req, res, next) {
  // Capturo datos del formulario
  var nickName = req.body.nickName;
  var email = req.body.email;
  var poderes = req.body.poderes;
  // Los mando a la vista
  res.render("ver_datos", { nickName: nickName, email: email, poderes: poderes });
});


module.exports = router;
