import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { AppComponent } from './app.component';
import { MiComponente } from './components/mi-componente/mi-componente.component';
import { MiMenu } from './components/menu/menu.component';
import { Bloque1Component } from './components/bloque1/bloque1.component';
import { Bloque2Component } from './components/bloque2/bloque2.component';
import { Bloque3Component } from './components/bloque3/bloque3.component';


@NgModule({
  declarations: [   // Lo que este aquí podrá ser utilizado en cualquier parte de nuestra app
    AppComponent,
    MiComponente,
    MiMenu,
    Bloque1Component,
    Bloque2Component,
    Bloque3Component
  ],
  imports: [
    BrowserModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
