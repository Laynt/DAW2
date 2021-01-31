<?php
class Calculadora{

//Métodos
    public function dividir($numerador, $denominador){
        if($denominador == 0){
            throw new DivisionPorCero();    
        }
        return $numerador / $denominador;

    

    }
}   
