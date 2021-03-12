import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-bloque3',
  templateUrl: './bloque3.component.html',
  styleUrls: ['./bloque3.component.css']
})
export class Bloque3Component implements OnInit {

  public titulo : string;

  constructor() {
    console.log("Se ha cargado el bloque3");
    this.titulo = "Este es el bloque 3";
   }

  ngOnInit(): void {
  }

}
