import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-header',
  templateUrl: './header.component.html',
  styleUrls: ['./header.component.css']
})
export class HeaderComponent implements OnInit {

  titulo : string;

  constructor() {
    this.titulo = "COMPRA AL AZAR";
   }

  ngOnInit(): void {
    $(function(){
      var shrinkHeader = 300;
       $(window).scroll(function() {
         var scroll = getCurrentScroll();
           if ( scroll >= shrinkHeader ) {
                $('.header').addClass('shrink');
             }
             else {
                 $('.header').removeClass('shrink');
             }
       });
     function getCurrentScroll() {
         return window.pageYOffset || document.documentElement.scrollTop;
         }
     });
    
  }

  


}
