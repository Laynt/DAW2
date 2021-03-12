import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-bloque1',
  templateUrl: './bloque1.component.html',
  styleUrls: ['./bloque1.component.css']
})
export class Bloque1Component implements OnInit {
  
  public titulo: string;
  
  constructor() {
    console.log("Se ha cargado el bloque1");
    this.titulo = "Este es el bloque 1";
    
   }

  ngOnInit(): void {
  }

}
