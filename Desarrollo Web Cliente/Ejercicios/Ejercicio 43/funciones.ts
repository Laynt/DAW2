class persona{
    nombre:string;
    protected email:string;

    constructor(name:string,email:string){
        this.nombre=name;
        this.email=email;
    }

    imprimir(){
        console.log(`Nombre: ${this.nombre}`);
        console.log(`Email: ${this.email}`);
    }
}

class alumno extends persona{
    private matriculado:boolean;

    constructor(nombre:string, email:string) {
        super(nombre, email);
        this.matriculado=false;
    }
    
    public imprimir() {
        super.imprimir();
        if (this.matriculado==true)
        {
            console.log(`El alumno ${this.nombre} está matriculado.`);      
        }
        else{
            console.log(`El alumno ${this.nombre} no está matriculado.`); 
        }
    }

    public matricular(){
        this.matriculado=true;
    }
}

class profesor extends persona{
    asignaturas:string[];
    constructor(nombre:string, email:string) {
        super(nombre, email);
        this.asignaturas=[];
    }

    imprimir() {
        super.imprimir();
        console.log(`El/La profesor/ra ${this.nombre} imparte las asignaturas: ${this.asignaturas.join()}`);
    }
}

class asignatura{
    nombre:string;
    profe:profesor;
    constructor(nombre:string, profe:profesor){
        this.nombre=nombre;
        this.profe=profe;
        profe.asignaturas.push(this.nombre);
    }

    imprimir(){
        console.log(`La asignatura ${this.nombre} es impartida por el profesor ${this.profe.nombre}. `);
    }
} 

let alumno1:alumno=new alumno("Alvaro","er_xul1t0_69@hormail.com");
alumno1.imprimir();
alumno1.matricular();
alumno1.imprimir();



let profesor1:profesor=new profesor("Carmen","comepanes@gmail.com");
let ingles:asignatura= new asignatura("ingles",profesor1);
ingles.imprimir();
profesor1.imprimir();