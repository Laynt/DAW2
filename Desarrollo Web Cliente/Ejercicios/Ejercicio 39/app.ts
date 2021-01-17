
type Datos = {
    n11: number,
    n22: number,
    n33: number
};

var dts: Datos = {
    n11: 3,
    n22: 5,
    n33: 7

};

type DatosStr = {
    dt1: string,
    dt2: string,
    dt3: string
};



interface Nombres {

    nombre: string,
    apellido: string
};

var inter: Nombres = {

    nombre: "Pepe",
    apellido: "Torres"
};

type DatosTotales = Datos & DatosStr;

class Animal {
    nombre: string;
    raza: string;
    peso: number;
    constructor(nombre: string, raza: string, peso: number) {
        this.nombre = nombre;
        this.peso = peso;
        this.raza = raza;
    }

}
var nombre1 = (<HTMLInputElement>document.getElementById("text")).value
var nombre1 = (<HTMLInputElement>document.getElementById("text2")).value
var nombre1 = (<HTMLInputElement>document.getElementById("text3")).value

var animal = new Animal(nombre1, raza1, peso1);



function multiplicar() {
    alert("Multiplicación: " + ((dts.n22 - dts.n11) * dts.n22));
}
function restar() {
    alert("Resta: " + ((dts.n22 * 4) - (dts.n11 + dts.n33)));
}
function mostrarNombre() {
    alert("El nombre completo es: " + inter.nombre + " " + inter.apellido);
}
function fechaNacimiento() {
    alert("Fecha de Nacimiento: ");

}