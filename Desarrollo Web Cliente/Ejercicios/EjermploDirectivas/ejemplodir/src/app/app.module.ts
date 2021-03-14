import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { HttpModule } from '@angular/http';

import { AppComponent } from './app.component';
import { DirIfComponent } from './views/dir-if/dir-if.component';
import { ForComponent } from './views/for/for.component';
import { SwitchComponent } from './views/switch/switch.component';
import { ModelComponent } from './views/model/model.component';
import { StyleComponent } from './views/style/style.component';

@NgModule({
  declarations: [
    AppComponent,
    DirIfComponent,
    ForComponent,
    SwitchComponent,
    ModelComponent,
    StyleComponent
  ],
  imports: [
    BrowserModule,
    FormsModule,
    HttpModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
