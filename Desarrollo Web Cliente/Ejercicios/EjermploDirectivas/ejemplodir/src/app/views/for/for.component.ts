import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-for',
  templateUrl: './for.component.html',
  styleUrls: ['./for.component.css']
})
export class ForComponent implements OnInit {
  constructor() { }
  ngOnInit() {
  }

  title = 'FOR - ngFor';
  public nombres = [
    {nom:"uno",edad:10},
    {nom:"dos",edad:20},
    {nom:"tres",edad:30}
  ];
}
