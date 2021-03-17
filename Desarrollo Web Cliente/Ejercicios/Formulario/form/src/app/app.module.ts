import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { HttpModule } from '@angular/http';
// PARA PODER realizar las Rutas:
import { RouterModule, Routes } from '@angular/router';

import { AppComponent } from './app.component';
import { InicioComponent } from './inicio/inicio.component';
import { NotFoundComponent } from './not-found/not-found.component';
import { ContactoComponent } from './contacto/contacto.component';
import { Contacto2Component } from './contacto2/contacto2.component';

// Configuración de las rutas:
 const appRoutes: Routes = [
  { path: 'contacto', component: ContactoComponent }, 
  { path: 'contac', component: Contacto2Component },
  { path: 'inicio', component: InicioComponent },
  { path: '', redirectTo: '/inicio', pathMatch: 'full' },  // Con REDIRECT para página de Inicio de la Aplicación
  { path: '**', component: NotFoundComponent }
];

@NgModule({
  declarations: [
    AppComponent,
    InicioComponent,
    NotFoundComponent,
    ContactoComponent,
    Contacto2Component
  ],
  imports: [
    BrowserModule,
    FormsModule,
    HttpModule,
    // AQUÍ TAMBIÉN
    RouterModule.forRoot(appRoutes)
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
