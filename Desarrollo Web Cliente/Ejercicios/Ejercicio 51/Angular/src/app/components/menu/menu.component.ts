import { Component } from '@angular/core';

@Component({
    selector: 'mi-menu',
    templateUrl: './menu.component.html',
    styleUrls: ['./menu.component.css']

})

export class MiMenu{

    public titulo: string;
    
    constructor(){
        
        console.log("Componente mi-menu cargado!");
        this.titulo = "Este es el menu";
        
    }
}