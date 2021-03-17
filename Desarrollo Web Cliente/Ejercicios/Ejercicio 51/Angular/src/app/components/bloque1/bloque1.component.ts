import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-bloque1',
  templateUrl: './bloque1.component.html',
  styleUrls: ['./bloque1.component.css']
})
export class Bloque1Component implements OnInit {
  
  public titulo: string;
  
  constructor() {
    console.log("Se ha cargado el ejemplong");
    this.titulo = "ejemplos de directivas ngFor y ngSwitch";
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
