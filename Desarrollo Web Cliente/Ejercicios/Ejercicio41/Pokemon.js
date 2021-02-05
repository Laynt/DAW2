console.log("¡Bienvenido a la batalla de Pokemons!");

var Pokemon = /** @class */ (function () {
    function Pokemon(nombre, equipo, tipo) {
        this.puedePelear = true;
        this.peleasGanadas = 0;
        this.nombre = nombre;
        this.equipo = equipo;
        this.tipo = tipo;
        this.fuerza = this.calcularFuerza();
    }
    // Pongo su fuerza
    Pokemon.prototype.calcularFuerza = function () {
        return aleatorio(1, 100);
    };
    Pokemon.prototype.ganador = function () {
        this.peleasGanadas++;
    };
    Pokemon.prototype.perdedor = function () {
        this.puedePelear = false;
    };
    return Pokemon;
}());

var pokedesk = []; //Creo un array para guardar los pokemons
var geodude = new Pokemon("geodude", "Marron", "roca"); // Creo mis Pokemon con la función que hice arriba de Pokemon
pokedesk.push(geodude);  //meto los pokemons en pokedesk
var kyogre = new Pokemon("kyogre", "Azul", "agua");
pokedesk.push(kyogre);
var charmander = new Pokemon("Charmander", "Amarillo", "fuego");
pokedesk.push(charmander);
var squirtle = new Pokemon("Squirtle", "Verde", "agua");
pokedesk.push(squirtle);
var pidgey = new Pokemon("Pidgey", "Azul", "normal");
pokedesk.push(pidgey);
console.log("Estos son los participantes:");
console.log(pokedesk);
for (var comp = 0; comp < 10; comp++) {
    console.log("-----------------------------------------------------------");
    console.log("Batalla n\u00FAmero " + comp + ":");
    // saco un pokemon que va a luchar
    var iLuchador1 = aleatorio(0, 4);
    // compruebo si puede pelear, si es false , cogo otro pokemon
    while (pokedesk[iLuchador1].puedePelear == false) {
        iLuchador1 = aleatorio(0, 4);
    }
    // Ahora SI asigno ese número al Pokemon 1 y lo cogo del array, para batalla
    var luchador1 = pokedesk[iLuchador1];
    // Saco otro número aleatorio
    var iLuchador2 = aleatorio(0, 4);
    // Compruebo lo mismo que línea 62 MÁS que no se repita en número de Pokemon
    while ((iLuchador2 == iLuchador1) || (pokedesk[iLuchador2].puedePelear == false)) {
        iLuchador2 = aleatorio(0, 4);
    }
    // Asigno ese número al Pokemon 2 y lo cogo del array, para batalla
    var luchador2 = pokedesk[iLuchador2];
    // Muestro los Pokemon para la batalla
    console.log("Luchador 1: " + luchador1.nombre + ", Fuerza: " + luchador1.fuerza);
    console.log("Luchador 2: " + luchador2.nombre + ", Fuerza: " + luchador2.fuerza);
    // Hacemos un kitkat para poner el perdedor anterior a false ( la PRIMERA VEZ NO hará nada !! )
    for (var i = 0; i < pokedesk.length; i++) {
        if (pokedesk[i].puedePelear == false) {
            pokedesk[i].puedePelear = true;
        }
    }
    ///////////////////////////////////////////////////////////
    // Comienza la batalla
    if (luchador1.fuerza > luchador2.fuerza) //Gana el luchador 1
     {
        console.log("Gana el luchador 1: " + luchador1.nombre);
        luchador1.ganador(); // le suma una victoria
        luchador2.perdedor(); // pongo a FALSE puedePelear
    }
    else {
        if (luchador1.fuerza < luchador2.fuerza) //Gana el luchador 2
         {
            console.log("Gana el luchador 2: " + luchador2.nombre);
            luchador1.perdedor();
            luchador2.ganador();
        }
        else {
            console.log("Empate t\u00E9cnico entre " + luchador1.nombre + " y " + luchador2.nombre);
        }
    }
    // Termina la batalla
}
    // Creo array para contar batallas y cogo la cantidadde gaadasde cada Pokemon
var batallas = [];
for (var j = 0; j < pokedesk.length; j++) {
    batallas.push(pokedesk[j].peleasGanadas);
}
    // Con indexOf y Math.max cogo la posición del valor MAS ALTO de las batalla, osea al GANADOR y luego lo muestro
var campeon = pokedesk[batallas.indexOf(Math.max.apply(Math, batallas))];
console.log("--------------------------------------------------------------------");
console.log("El m\u00E1ximo campe\u00F3n es " + campeon.nombre + " con un total de " + campeon.peleasGanadas + " peleas ganadas. ");


//Funciones para el ejercicio

function aleatorio(min, max) {
    return Math.round((Math.random() * (max - min) + min));
}