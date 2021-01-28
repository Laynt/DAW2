<?php
class Calculadora{
//Atributos

//Métodos
public function dividir($numerador, $denominador){
    if ($denominador == 0){
        
        throw new Exception ('No puedes dividir entre 0');
    } else {
        return $numerador / $denominador;
    }

    

}
}
