import { Component } from '@angular/core';

@Component({
    selector: 'mi-menu',
    templateUrl: './menu.component.html',
    styleUrls: ['./menu.component.css']

})

export class MiMenu{

    public titulo: string;
    public comentario: string;
    public year: number;

    constructor(){
        this.titulo = "Hola mundo, soy EL MENU";
        this.comentario = "Este es mi primer componente";
        this.year = 2021;
        console.log("Componente mi-menu cargado!");
        console.log(this.titulo, this.year)
    }
}