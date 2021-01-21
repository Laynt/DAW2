<?php

class Animal {

    private $sonido;

    public function __construct($sonido){
        $this->sonido = $sonido;
        
    }

    public function ladrar(){
        printf("El perro dice $this->sonido!");

    }
}
