// SERVIDOR WEB o HTTP: es un programa informático que procesa una
 // aplicación del lado del servidor, realizando conexiones bidereccionales o 
 // unidireccionales y síncronas o asíncronas con el cliente, generando
 // o cediendo una respuesta en cualquier lenguaje o aplicación 
 // del lado del cliente.

var http = require('http'),
      url = require('url');
  var fs = require('fs');

  // 1- Creo el servidor 
  http.createServer(function(req, res) {
    var pathname = url.parse(req.url).pathname;
    // Si tiene esa ruta hago la respuesta (response ) que sea.
     // La aplicación atenderá a diferentes solicitudes, dependiendo de cual sea la URL
    if (pathname === '/') {
      // Se añade una cabecera con información; tipo de contenido, fecha, etc ,,,
      res.writeHead(200, {
        'Content-Type': 'text/html'
      });
      // 2- Para visualizar una vista en HTML (rederizar) utilizamos módulo fs
      fs.readFile('./home.html', (err, data) => {
        if(err) {
          console.log(err);
          res.end()
        } else {
          res.write(data);
          res.end();
        }
      })   
    } else if (pathname === '/contacto') {
      // Como texto plano
      res.writeHead(200, {
        'Content-Type': 'text/plain'
      });
      res.end('C/ La Mia 6666 Málaga \n')
    } else if (pathname === '/historia') {
        // Como texto plano
        res.writeHead(200, {
            'Content-Type': 'text/plain'
        });
        res.end('Historia de la programaciorrrrrrr \n')
    } else if (pathname === '/blog') {
        // Se añade una cabecera con información; tipo de contenido, fecha, etc ,,,
        res.writeHead(200, {
            'Content-Type': 'text/html'
        });
        // 2- Para visualizar una vista en HTML (rederizar) utilizamos módulo fs
        fs.readFile('./blog.html', (err, data) => {
            if (err) {
                console.log(err);
                res.end()
            } else {
                res.write(data);
                res.end();
            }
        })
    } else if (pathname === '/turismo') {
      // Un redireccionamiento
      res.writeHead(301, {
        'Location': 'http://www.malagaturismo.com/'
      });
      res.end();
    } else if (pathname === '/deportes') {
        // Un redireccionamiento
        res.writeHead(301, {
            //'Location': '/'
           'Location': 'https://www.mundodeportivo.com/'
        });
        res.end();
    } else if (pathname === '/volver') {
        // Un redireccionamiento
        res.writeHead(301, {
           'Location': '/'
        });
        res.end();
    } else {
        res.writeHead(404, {
        'Content-Type': 'text/plain'
      });
      res.end('Page not found\n')
    }
  }).listen(3000, "127.0.0.1");
  console.log('Server running at http://127.0.0.1:3000/');
