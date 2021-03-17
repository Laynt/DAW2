import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-formulario',
  templateUrl: './formulario.component.html',
  styleUrls: ['./formulario.component.css']
})
export class FormularioComponent implements OnInit {

  constructor() { }

  nombre:string="";
  email:string="";
  mensaje:string="";

  ngOnInit(): void {
  }
  onSubmit(){
    alert("Estos son los datos del solicitante: " + this.nombre + " con email: " + this.email + " | El mensaje es el siguiente: " + this.mensaje);
  }

}
