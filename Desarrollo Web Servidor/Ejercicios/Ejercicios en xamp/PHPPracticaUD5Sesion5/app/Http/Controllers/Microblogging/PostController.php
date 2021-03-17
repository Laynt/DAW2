<?php

namespace App\Http\Controllers\Microblogging;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Microblogging\Post;

class PostController extends Controller
{
    //Get
    public function index(Request $request){

        if(!$request->session()->has('posts')){
            $posts=array();
            $request->session()->put('posts', array());

        }

        return view('microblogging.index');
    }

    //Post
    public function store(Request $request){
        //Validación
        $validatedData = $request->validate([
            'nombre' => 'required| max:30| min:3',
            'titulo' => 'required| max:255',
            'email' => 'nullable|email',
            'comentario' => 'required| max:500',
        ]);

        $post = new Post();
        $post->setNombre($request->input('nombre'));
        $post->setEmail($request->input('email'));
        $post->setTitulo($request->input('titulo'));
        $post->setComentario($request->input('comentario'));

        $post->setFechaPublicacion(date('d/m/Y'));
        
        $request->session()->push('posts', $post);
        

        return redirect()->route('microblogging.index');
    }
}
