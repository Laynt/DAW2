//Vamos a ver como leer un archivo en nodejs
var http= require("http"),
    fs =  require("fs");

    fs.readFile('elPepe.txt', 'utf8', function (err, data) {
        if (err) throw err;
        console.log('LEEMOS File 2:');
        console.log(data);
    });
  
    fs.readFile('espectacular.txt', 'utf8', function (err, data) {
        if (err) throw err;
        console.log('LEEMOS File 1:');
        console.log(data);
    });
  
    fs.readFile('abrirArchivo.txt', 'utf8', function (err, data) {
      if (err) throw err;
      console.log('LEEMOS File 3:');
      console.log(data);
  });
  
  fs.readFile('esteAlumno.txt', 'utf8', function (err, data) {
      if (err) throw err;
      console.log('LEEMOS File 4:');
      console.log(data);
  });

