var dts = {
    n11: 3,
    n22: 5,
    n33: 7
};
;
var inter = {
    nombre: "Pepe",
    apellido: "Torres"
};
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
    alert("Fecha de Nacimiento: " + "2/11/97");
}
