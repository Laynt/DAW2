class persona{
    nombre: string;
    protected email:string;

    constructor(nombre: string, eml: string){
        this.nombre = nombre;
        this.email = eml;
    }

    imprimir(){
        console.log(`Nombre:  ${this.nombre}`);
        console.log(`Email:  ${this.email}`);
    }

}

class alumno extends persona{
    private matriculado: boolean;

    constructor(nombre: string, email:string){
        super(nombre, email);
        this.matriculado= false;
    }

    public imprimir(){
        super.imprimir();
        if(this.matriculado == true){
            console.log(`El alumno ${this.nombre} está matriculado`);
        }else{
            console.log(`El alumno ${this.nombre} no está matriculado`);
        }

    }

    public matricular(){
        this.matriculado = true;
    }
}

class profesor extends persona{
    asignaturas: string[];

    constructor(nombre: string, email:string){
        super(nombre,email);
        this.asignaturas = [];
    }

    imprimir(){
        super.imprimir();
        console.log(`El profesor ${this.nombre} imparte las asignaturas: ${this.asignaturas.join()}`);
    }

}

class asignatura{
    nombre: string;
    profe: profesor;

    constructor(nombre: string, profe: profesor){
        this.nombre = nombre;
        this.profe = profe;
        profe.asignaturas.push(this.nombre);
    }

    imprimir(){
        console.log( `La asignatura ${this.nombre} es impartida por: ${this.profe}`);
    }
}

let alumno1: alumno = new alumno("Juan","juan@hola");
alumno1.imprimir();
alumno1.matricular();
alumno1.imprimir();

let profesor1: profesor = new profesor("Pâtricia", "patri@yo");
let mates: asignatura = new asignatura("mates", profesor1);
mates.imprimir();
profesor1.imprimir();