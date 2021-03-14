import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-dir-if',
  templateUrl: './dir-if.component.html',
  styleUrls: ['./dir-if.component.css']
})
export class DirIfComponent implements OnInit {
  constructor() { }
  ngOnInit() {
  }

  title = 'IF - ngIf';
  grupo1=false;
  grupo2=false;
  subgrupo11=false;
  subgrupo12=false;
  subgrupo21=false;
  subgrupo22=false;

}
