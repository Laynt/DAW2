import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-pie-pagina',
  templateUrl: './pie-pagina.component.html',
  styleUrls: ['./pie-pagina.component.css']
})
export class PiePaginaComponent implements OnInit {

  constructor() {
    console.log("Se ha cargado el footer");
   }

  ngOnInit(): void {
  }

}
