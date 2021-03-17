<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestRequestController extends Controller
{
    public function index(Request $request){

         // Recuperar información de la petición HTTP                
        // Recuperar parámetro del request payload (tanto post como querystring)   
        $input = 'no está presente';     
        if ($request->has('nombre')){
            $input = $request->input('nombre');        
        }
        // Recuperar parámetro sólo de QueryString
        $query = $request->query('apellidos'); 
        // Recuperar el Path 
        $uri = $request->path();
        // Recuperar la URL
        $urlWithQueryString = $request->fullUrl();
        // Recuperar el método
        $method = $request->method();
        // Recuperar cabeceras
        $headerValue = $request->header('User-Agent');
        // Recuperar la ip
        $ipAddress = $request->ip();
 
        $array = [$input, $query, $uri, $urlWithQueryString, $method, $headerValue,  $ipAddress];
        return join('<br>', $array); 

    }
}
