import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-contacto2',
  templateUrl: './contacto2.component.html',
  styleUrls: ['./contacto2.component.css']
})
export class Contacto2Component implements OnInit {
  constructor() { }

  title = 'Formu 2';
  codigo:string="";
  nombre:string="";
  edad:number;
  opcion:string="";
  comentarios:string="";
 
  onSubmit(){
    alert("Datos introducidos: " + this.codigo + " / " + this.nombre + " / " + this.edad + " / " + this.opcion + " / " + this.comentarios);
    this.codigo = "";
    this.nombre = "";
    this.edad = 0;
    this.opcion = "";
    this.comentarios = "";
  }  
  ngOnInit() {
  }

}
