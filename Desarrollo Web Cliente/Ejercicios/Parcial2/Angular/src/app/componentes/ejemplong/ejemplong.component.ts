import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-ejemplong',
  templateUrl: './ejemplong.component.html',
  styleUrls: ['./ejemplong.component.css']
})
export class EjemplongComponent implements OnInit {

  public titulo: string;
  constructor() {
    console.log("Se ha cargado el bloque1");
    this.titulo = "Bloque 1 con ejemplos de directivas ngFor y ngSwitch";
  }
  selection;
  public users = [{
            id: 1,
            name: "Alvaro"
          },
          {
            id: 2,
            name: "saca"
          },
          {
            id: 3,
            name: "10"
          },
        ]

  ngOnInit(): void {
  }
  onSelected(user){
    this.selection = user.name;
  }

}
