import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-contacto',
  templateUrl: './contacto.component.html',
  styleUrls: ['./contacto.component.css']
})
export class ContactoComponent implements OnInit {
  // constructor() { }
  title = 'formValores';
  codigo:string="";
  nombre:string="";
  edad:number = 20;
  opcion:string="2";
  comentarios:string="";
  sexo:string = "hombre";
  activar:boolean = true;
  mostrarVar(){
    document.write(
      "Codigo ("+ this.codigo + ") "
      + "Nombre (" + this.nombre+ ") "
      + "Edad (" + this.edad+ ") "
      + "Opcion (" + this.opcion+ ") "
      + "Comentarios (" + this.comentarios+ ") "
      + "Sexo (" + this.sexo+ ") "
      + "Activar (" + this.activar + ")"
      + "<br/><br/><a href='/contacto'> VOLVER </a>"
    );
  }
  onSubmit(){
    this.mostrarVar();
  }  
  ngOnInit() {
  }

}
