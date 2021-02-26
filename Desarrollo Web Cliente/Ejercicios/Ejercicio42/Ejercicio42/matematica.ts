class Matematica {

    num1:number;
    num2:number;
    num3:number;

    constructor(n1:number, n2:number, n3:number){
        this.num1 = n1;
        this.num2 = n2;
        this.num3 = n3;
    }

    mayor(): number {
      if ((this.num1>=this.num2) && (this.num1>=this.num3)) {
        return this.num1;
      } else {
        if (this.num2>=this.num3)
          return this.num2
        else
          return this.num3;
      }
    }

    sumar(...valores:number[]):number {
        var suma:number=0;
        for (let i:number=0;i<valores.length;i++)
        {
            suma+=valores[i];
        }
        return suma;
    }
  
    static aleatorio(inicio: number, fin: number): number {
      return Math.floor((Math.random()*(fin+1-inicio))+inicio);
    }

    static multiplicar(...valores:number[]):number {
        var producto:number=1;
        for (let i:number=0;i<valores.length;i++)
        {
            producto*=valores[i];
        }
        return producto;
    }

}

function calcularM() {
  var n1 = (<HTMLInputElement>document.getElementById("n1")).value; 
  var nm1:number = (parseInt(n1))
  var n2 = (<HTMLInputElement>document.getElementById("n2")).value; 
  var nm2:number = (parseInt(n2))
  var n3 = (<HTMLInputElement>document.getElementById("n3")).value; 
  var nm3:number = (parseInt(n3))
  
  var mt = new Matematica(nm1,nm2,nm3);
  var resul = mt.mayor();
  alert("El número mayor es " + resul);
}

function calcularS() {
  var n1 = (<HTMLInputElement>document.getElementById("n1")).value; 
  var nm1:number = (parseInt(n1))
  var n2 = (<HTMLInputElement>document.getElementById("n2")).value; 
  var nm2:number = (parseInt(n2))
  var n3 = (<HTMLInputElement>document.getElementById("n3")).value; 
  var nm3:number = (parseInt(n3))
  
  var mt = new Matematica(nm1,nm2,nm3);
  var resul = mt.sumar(nm1,nm2,nm3,2,4,6,8);
  alert("Resultado suma: " + resul);
}

function calcularA() {
  var n1 = (<HTMLInputElement>document.getElementById("n1")).value; 
  var nm1:number = (parseInt(n1))
  var n2 = (<HTMLInputElement>document.getElementById("n2")).value; 
  var nm2:number = (parseInt(n2))
  var n3 = (<HTMLInputElement>document.getElementById("n3")).value; 
  var nm3:number = (parseInt(n3))
  
  var al1 = Matematica.aleatorio(10,20);
  var arn:number[] = [];
  for(var i=0; i<=al1; i++){
    var res = Matematica.multiplicar(nm1,nm2,nm3,Matematica.aleatorio(2,9))
    arn.push(res)
  }
  alert("Resultado suma: " + arn);
}

