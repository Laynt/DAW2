<?php

namespace App\Http\Controllers\Microblogging;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //Get
    public function index(Request $request){
        return view('microblogging.index');
    }

    //Post
    public function store(Request $request){
        
        return 'Mensaje Publicado';
    }
}
