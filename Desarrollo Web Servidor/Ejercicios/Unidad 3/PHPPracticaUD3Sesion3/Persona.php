<?php

class Persona {

    private $nombre;
    private $apellidos;
    private $fechaNacimiento;

    public function __construct() {
    	// obtener los argumentos
    	$arg = func_get_args();
    	// obtener el numero de argumentos
    	$num = func_num_args();
    	// comprobar si exite el método en $this
    	if (method_exists($this, '__construct'.$num)) {
        	// llamar al método dentro en $this
        	call_user_func_array(array($this, '__construct'.$num), $arg);
    	} else {
        	throw new Exception('No existe un __construct con este número ('.$num.') de parametros');
    	}
    }
    
    public function __construct2($nombre, $apellidos)
    {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos; 
        $this->fechaNacimiento = new DateTime();
    }
    
    public function __construct3($nombre, $apellidos, $fechaNacimiento)
    {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;   
        $this->fechaNacimiento = $fechaNacimiento;
    } 
    
    public function getNombre() {
        return $this->nombre;
    }

    public function getApellidos() {
        return $this->apellidos;
    }
    
    public function getFechaNacimiento() {
        return $this->fechaNacimiento;
    }

    public function getNombreCompleto() {
        return $this->nombre . " " . $this->apellidos;
    }

    public function getEdad(){
        $hoy = new DateTime();
        $edad = $hoy->diff($this->fechaNacimiento);
        return $edad->y;
    }
    
}
