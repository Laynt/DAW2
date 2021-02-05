class Pokemon {
    readonly nombre:string;
    readonly equipo:string;
    readonly tipo:string;

    readonly fuerza:number;
    puedePelear:boolean=true;
    public peleasGanadas:number=0;

    constructor(nombre:string,equipo:string,tipo:string){
        this.nombre=nombre;
        this.equipo=equipo;
        this.tipo=tipo;
        this.fuerza=this.calcularFuerza(); 
    }
        // Pongo su fuerza
    private calcularFuerza():number
    {
        return aleatorio(1,100);
    }

    public ganador()
    {
        this.peleasGanadas++;
    }

    public perdedor()
    {
        this.puedePelear=false;
    }
}

function aleatorio(min:number,max:number):number
{
    return Math.round((Math.random()*(max-min)+min));
}

console.log("¡Bienvenido a la batalla de Pokemons!");
let pokedesk:Pokemon[]=[];
    // Creo mis Pokemon y los añado al array
let pikachu:Pokemon=new Pokemon("Pikachu","Rojo","eléctrico");
pokedesk.push(pikachu);
let bulbasur:Pokemon=new Pokemon("Bulbasur","Azul","planta");
pokedesk.push(bulbasur);
let charmander:Pokemon=new Pokemon("Charmander","Amarillo","fuego");
pokedesk.push(charmander);
let squirtle:Pokemon=new Pokemon("Squirtle","Verde","agua");
pokedesk.push(squirtle);
let pidgey:Pokemon=new Pokemon("Pidgey","Azul","normal");
pokedesk.push(pidgey);

console.log("Estos son los participantes:");
console.log(pokedesk);

for (let comp:number=0;comp<10;comp++)
{
        console.log("-----------------------------------------------------------");
        console.log(`Batalla número ${comp}:`);
            // Saco número al azar 
        let iLuchador1:number=aleatorio(0,4);
            // Compruebo que ESE número de Pokemon puede pelear, si es false , cogo otro número
        while (pokedesk[iLuchador1].puedePelear==false)
        {
            iLuchador1=aleatorio(0,4);
        }
            // Ahora SI asigno ese número al Pokemon 1 y lo cogo del array, para batalla
        let luchador1:Pokemon=pokedesk[iLuchador1];
            // Saco otro número aleatorio
        let iLuchador2:number=aleatorio(0,4);
            // Compruebo lo mismo que línea 62 MÁS que no se repita en número de Pokemon
        while ( (iLuchador1==iLuchador2) || (pokedesk[iLuchador2].puedePelear==false)){
            iLuchador2=aleatorio(0,4);
        }
            // Asigno ese número al Pokemon 2 y lo cogo del array, para batalla
        let luchador2:Pokemon=pokedesk[iLuchador2];
            // Muestro los Pokemon para la batalla
        console.log(`Luchador 1: ${luchador1.nombre}, Fuerza: ${luchador1.fuerza}`);
        console.log(`Luchador 2: ${luchador2.nombre}, Fuerza: ${luchador2.fuerza}`);

            // Hacemos un kitkat para poner el perdedor anterior a false ( la PRIMERA VEZ NO hará nada !! )
        for (let i:number=0;i<pokedesk.length;i++)
        {
            if (pokedesk[i].puedePelear==false)
            {
                pokedesk[i].puedePelear=true;
            }
        }
        ///////////////////////////////////////////////////////////

        // Comienza la batalla

        if (luchador1.fuerza>luchador2.fuerza) //Gana el luchador 1
        {
            console.log(`Gana el luchador 1: ${luchador1.nombre}`);
            luchador1.ganador();   // le suma una victoria
            luchador2.perdedor();  // pongo a FALSE puedePelear
        }
        else
        {
            if (luchador1.fuerza<luchador2.fuerza) //Gana el luchador 2
            {
                console.log(`Gana el luchador 2: ${luchador2.nombre}`);
                luchador1.perdedor();
                luchador2.ganador();
            }
            else
            {
                console.log(`Empate técnico entre ${luchador1.nombre} y ${luchador2.nombre}`);
            }
        }
        // Termina la batalla
}

    // Creo array para contar batallas y cogo la cantidadde gaadasde cada Pokemon
let batallas:number[]=[];
for (let j:number=0;j<pokedesk.length;j++)
{
    batallas.push(pokedesk[j].peleasGanadas);
}
    // Con indexOf y Math.max cogo la posición del valor MAS ALTO de las batalla, osea al GANADOR y luego lo muestro
let campeon:Pokemon=pokedesk[batallas.indexOf(Math.max(...batallas))];
console.log("--------------------------------------------------------------------");
console.log(`El máximo campeón es ${campeon.nombre} con un total de ${campeon.peleasGanadas} peleas ganadas. `);
