var Matematica = /** @class */ (function () {
    function Matematica(n1, n2, n3) {
        this.num1 = n1;
        this.num2 = n2;
        this.num3 = n3;
    }
    Matematica.prototype.mayor = function () {
        if ((this.num1 >= this.num2) && (this.num1 >= this.num3)) {
            return this.num1;
        }
        else {
            if (this.num2 >= this.num3)
                return this.num2;
            else
                return this.num3;
        }
    };
    Matematica.prototype.sumar = function () {
        var valores = [];
        for (var _i = 0; _i < arguments.length; _i++) {
            valores[_i] = arguments[_i];
        }
        var suma = 0;
        for (var i = 0; i < valores.length; i++) {
            suma += valores[i];
        }
        return suma;
    };
    Matematica.aleatorio = function (inicio, fin) {
        return Math.floor((Math.random() * (fin + 1 - inicio)) + inicio);
    };
    Matematica.multiplicar = function () {
        var valores = [];
        for (var _i = 0; _i < arguments.length; _i++) {
            valores[_i] = arguments[_i];
        }
        var producto = 1;
        for (var i = 0; i < valores.length; i++) {
            producto *= valores[i];
        }
        return producto;
    };
    return Matematica;
}());
function calcularM() {
    var n1 = document.getElementById("n1").value;
    var nm1 = (parseInt(n1));
    var n2 = document.getElementById("n2").value;
    var nm2 = (parseInt(n2));
    var n3 = document.getElementById("n3").value;
    var nm3 = (parseInt(n3));
    var mt = new Matematica(nm1, nm2, nm3);
    var resul = mt.mayor();
    alert("El número mayor es " + resul);
}
function calcularS() {
    var n1 = document.getElementById("n1").value;
    var nm1 = (parseInt(n1));
    var n2 = document.getElementById("n2").value;
    var nm2 = (parseInt(n2));
    var n3 = document.getElementById("n3").value;
    var nm3 = (parseInt(n3));
    var mt = new Matematica(nm1, nm2, nm3);
    var resul = mt.sumar(nm1, nm2, nm3, 2, 4, 6, 8);
    alert("Resultado suma: " + resul);
}
function calcularA() {
    var n1 = document.getElementById("n1").value;
    var nm1 = (parseInt(n1));
    var n2 = document.getElementById("n2").value;
    var nm2 = (parseInt(n2));
    var n3 = document.getElementById("n3").value;
    var nm3 = (parseInt(n3));
    var al1 = Matematica.aleatorio(10, 20);
    var arn = [];
    for (var i = 0; i <= al1; i++) {
        var res = Matematica.multiplicar(nm1, nm2, nm3, Matematica.aleatorio(2, 9));
        arn.push(res);
    }
    alert("Resultado suma: " + arn);
}
