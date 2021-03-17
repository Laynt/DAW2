import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { AppComponent } from './app.component';
import { HeaderComponent } from './componentes/header/header.component';
import { MenuComponent } from './componentes/menu/menu.component';

import { FooterComponent } from './componentes/footer/footer.component';
import { Bloque1Component } from './componentes/bloque1/bloque1.component';


import { ReactiveFormsModule } from '@angular/forms';
import { FormularioComponent } from './componentes/formulario/formulario.component';
import { FormsModule} from '@angular/forms';
import { EjemplongComponent } from './componentes/ejemplong/ejemplong.component';





@NgModule({
  declarations: [
    AppComponent,
    HeaderComponent,
    MenuComponent,
    FooterComponent,
    Bloque1Component,
    FormularioComponent,
    EjemplongComponent,
    
  ],
  imports: [
    BrowserModule,
    FormsModule
    
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
