function Pelicula(titulo, genero, anyo, estrenada) {
    this.titulo = titulo;
    this.genero = genero;
    this.anyo = anyo;
    this.estrenada = estrenada;
}
var peliculas = [
    new Pelicula('Lara Croft', 1, 2022, false),
    new Pelicula('Vengadores: Endgame', 5, 2019, true),
    new Pelicula('Your Name', 3, 2016, true),
];
function verTit(peliculas, filtro) {
    return peliculas.filter(function (p) { return p.titulo == filtro; });
}
//Funcion para comprobar si existe la pelicula
function verTitD() {
    var tit = document.getElementById("tit").value;
    var pelis = verTit(peliculas, tit);
    if (pelis.length != 0) {
        for (var i = 0; i < pelis.length; i++) {
            alert(pelis[i].titulo + " " + pelis[i].genero + " " + pelis[i].anyo + " " + pelis[i].estrenada + "\n");
        }
    }
    else {
        alert("NO hay ninguna película con ese Título");
    }
}
function verGen(peliculas, filtro) {
    return peliculas.filter(function (p) { return p.genero == filtro; });
}
//Funcion para comprobar si existe el genero
function verGenD() {
    var gen = document.getElementById("gen").value;
    var gen2 = (parseInt(gen));
    var pelis = verGen(peliculas, gen2);
    if (pelis.length != 0) {
        for (var i = 0; i < pelis.length; i++) {
            alert(pelis[i].titulo + " " + pelis[i].genero + " " + pelis[i].anyo + " " + pelis[i].estrenada + "\n");
        }
    }
    else {
        alert("NO hay ninguna película de ese Género");
    }
}
function verEstr(peliculas, filtro) {
    return peliculas.filter(function (p) { return p.estrenada == filtro; });
}
function verEstrD() {
    var estr = document.getElementById("estr").value;
    if (estr == "true") {
        var estr2 = true;
        var pelis = verEstr(peliculas, estr2);
    }
    else if (estr == "false") {
        var estr2 = false;
        var pelis = verEstr(peliculas, estr2);
    }
    else {
        alert("ERROR, NO hay ninguna película con ese criterio");
    }
    if (pelis.length != 0) {
        for (var i = 0; i < pelis.length; i++) {
            alert(pelis[i].titulo + " " + pelis[i].genero + " " + pelis[i].anyo + " " + pelis[i].estrenada + "\n");
        }
    }
}
function verAn(peliculas, filtro) {
    return peliculas.filter(function (p) { return p.anyo > filtro; });
}
function verAnD() {
    var an = document.getElementById("an").value;
    var an2 = (parseInt(an));
    var pelis = verAn(peliculas, an2);
    if (pelis.length != 0) {
        for (var i = 0; i < pelis.length; i++) {
            alert(pelis[i].titulo + " " + pelis[i].genero + " " + pelis[i].anyo + " " + pelis[i].estrenada + "\n");
        }
    }
    else {
        alert("NO hay ninguna película de ese año mínimo");
    }
}
