import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-bloque2',
  templateUrl: './bloque2.component.html',
  styleUrls: ['./bloque2.component.css']
})
export class Bloque2Component implements OnInit {

  public titulo : string;

  constructor() {
    console.log("Se ha cargado el bloque2");
    this.titulo = "Este es el bloque 2";
   }

  ngOnInit(): void {
  }

}
