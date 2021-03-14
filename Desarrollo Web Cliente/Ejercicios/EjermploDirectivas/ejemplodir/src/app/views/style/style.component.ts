import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-style',
  templateUrl: './style.component.html',
  styleUrls: ['./style.component.css']
})
/* !! TENEMOS QUE AÑADIR en app.module:
  import { FormsModule } from '@angular/forms';
     y
  EN -> imports: [
    BrowserModule, FormsModule 
  ],
*/
export class StyleComponent implements OnInit {
  constructor() { }
  ngOnInit() {
  }

  title   = 'Style - ngStyle';
  color = 'blue';
  hayLetraGrande:boolean  = false;
  hayColorFondo:boolean  = false;
  hayLetraColor:boolean  = false;
  hayLetraItalica:boolean  = false;
  defineEstilos(){
      let styles= {
          'font-size': this.hayLetraGrande ? '300%' : 'initial',
          'background-color': this.hayColorFondo ? '#58FA58' : '#FFFFFF',
          'color': this.hayLetraColor ? 'red' : 'black',
          'font-style': this.hayLetraItalica ? 'italic' : 'normal'
      };
      return styles;
  }
}
