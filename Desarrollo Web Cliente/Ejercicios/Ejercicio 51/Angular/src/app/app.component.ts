import { Component } from '@angular/core'; // @angular/core es un paquede de node.js que hemos instalado

@Component({                                // Esto es un decorador. Una funcionalidad que 
  selector: 'app-root',                     // se le aplica a una clase modificando su comportamiento final. 
  templateUrl: './app.component.html',      // El selector tiene el parametro llamado app-root, que usaremos como
  styleUrls: ['./app.component.css']        // etiqueta en el indx.html.
})                                          // templateUrl nos indica donde estará la vista
                                            // styleUrls nos indica donde estará el estilo
                                            // Una vez que tenemos el componente creado, tenemos que importarlo en module.ts 

export class AppComponent {                 // Esta es la clase que se exporta para poder usarla en otros componentes
  title = 'Ejercicio 51';
}
