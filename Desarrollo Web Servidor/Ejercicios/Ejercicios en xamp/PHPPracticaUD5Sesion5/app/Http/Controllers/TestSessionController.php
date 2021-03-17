<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestSessionController extends Controller
{
    public function leerDatosDeSesion(Request $request){
 
        // Via a request instance...
        $nombre = $request->session()->get('nombre', 'uno por defecto');
        $apellidos = $request->session()->get('apellidos');
 
         // Via the global "session" helper...
        $apellidosDesdeHelper = session('apellidos');
 
        $array = [$nombre, $apellidos, $apellidosDesdeHelper];
        return join('<br>', $array);
    }

    public function escribirDatosDESesion(Request $request){
 
        // Via a request instance...
        $request->session()->put('nombre', 'Enrique');
 

        $products = array(1,2,3,4);
        $request->session()->put('products', $products);
        $request->session()->push('products', 5);


        // Via the global "session" helper...
        session(['apellidos' => 'García']);
 
        return 'Datos escritos en sessión';
    }  

}
