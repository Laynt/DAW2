function suma(numero1,numero2,callback){

    setTimeout(function(){
        var resultado = numero1 + numero2;
        callback(resultado);
    }, 500);

}

suma(2,5,function(resultado){
console.log(resultado);
})

function resta(numero1,numero2,callback){

    setTimeout(function(){
        var resultado = numero1 - numero2;
        callback(resultado);
    }, 500);

}

resta(2,5,function(resultado){
console.log(resultado);
})

function multi(numero1,numero2,callback){

    setTimeout(function(){
        var resultado = numero1 * numero2;
        callback(resultado);
    }, 500);

}

multi(2,5,function(resultado){
console.log(resultado);
})

function division(numero1,numero2,callback){

    setTimeout(function(){
        var resultado = numero1 / numero2;
        callback(resultado);
    }, 500);

}

division(2,5,function(resultado){
console.log(resultado);
})

