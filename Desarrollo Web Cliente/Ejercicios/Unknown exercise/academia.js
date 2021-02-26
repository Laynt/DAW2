var __extends = (this && this.__extends) || (function () {
    var extendStatics = function (d, b) {
        extendStatics = Object.setPrototypeOf ||
            ({ __proto__: [] } instanceof Array && function (d, b) { d.__proto__ = b; }) ||
            function (d, b) { for (var p in b) if (Object.prototype.hasOwnProperty.call(b, p)) d[p] = b[p]; };
        return extendStatics(d, b);
    };
    return function (d, b) {
        extendStatics(d, b);
        function __() { this.constructor = d; }
        d.prototype = b === null ? Object.create(b) : (__.prototype = b.prototype, new __());
    };
})();
var persona = /** @class */ (function () {
    function persona(nombre, eml) {
        this.nombre = nombre;
        this.email = eml;
    }
    persona.prototype.imprimir = function () {
        console.log("Nombre:  " + this.nombre);
        console.log("Email:  " + this.email);
    };
    return persona;
}());
var alumno = /** @class */ (function (_super) {
    __extends(alumno, _super);
    function alumno(nombre, email) {
        var _this = _super.call(this, nombre, email) || this;
        _this.matriculado = false;
        return _this;
    }
    alumno.prototype.imprimir = function () {
        _super.prototype.imprimir.call(this);
        if (this.matriculado == true) {
            console.log("El alumno " + this.nombre + " est\u00E1 matriculado");
        }
        else {
            console.log("El alumno " + this.nombre + " no est\u00E1 matriculado");
        }
    };
    alumno.prototype.matricular = function () {
        this.matriculado = true;
    };
    return alumno;
}(persona));
var profesor = /** @class */ (function (_super) {
    __extends(profesor, _super);
    function profesor(nombre, email) {
        var _this = _super.call(this, nombre, email) || this;
        _this.asignaturas = [];
        return _this;
    }
    profesor.prototype.imprimir = function () {
        _super.prototype.imprimir.call(this);
        console.log("El profesor " + this.nombre + " imparte las asignaturas: " + this.asignaturas.join());
    };
    return profesor;
}(persona));
var asignatura = /** @class */ (function () {
    function asignatura(nombre, profe) {
        this.nombre = nombre;
        this.profe = profe;
        profe.asignaturas.push(this.nombre);
    }
    asignatura.prototype.imprimir = function () {
        console.log("La asignatura " + this.nombre + " es impartida por: " + this.profe);
    };
    return asignatura;
}());
var alumno1 = new alumno("Juan", "juan@hola");
alumno1.imprimir();
alumno1.matricular();
alumno1.imprimir();
var profesor1 = new profesor("Pâtricia", "patri@yo");
var mates = new asignatura("mates", profesor1);
mates.imprimir();
profesor1.imprimir();
