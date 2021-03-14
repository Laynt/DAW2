import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-model',
  templateUrl: './model.component.html',
  styleUrls: ['./model.component.css']
})
/* !! TENEMOS QUE AÑADIR en app.module:
  import { FormsModule } from '@angular/forms';
     y
  EN -> imports: [
    BrowserModule, FormsModule 
  ],
*/
export class ModelComponent implements OnInit {
  constructor() { }
  ngOnInit() {
  }

  title   = 'Model - ngModel';
  nombre  = '';
  nombre2 = '';
  cambiaNombre() {
    this.nombre=this.nombre.toLowerCase();
    this.nombre2=this.nombre.toUpperCase();
  }
  cambiaNombre2() {
    this.nombre2=this.nombre2.toUpperCase();
    this.nombre=this.nombre2.toLowerCase();
  }

}
