@extends('layouts.app')
 
@section('title', 'Microblogging')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    <h1>Aplicación de Micro-Blogging</h1>

    <h3>Nueva publicación</h3>
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="/microblogging">
      @csrf 
          <div class="form-group">
              
              <label for="nombre">Nombre:</label>
              </br>
              <input  value = "{{old('nombre')}}" type="text" class="form-control" name="nombre"/>
              @if ($errors->has('nombre'))
                          <span style="color: red;">{{$errors->first('nombre')}}</span> 
                          @endif
              </br></br>
          </div>
          <div class="form-group">
              <label for="titulo">Titulo:</label>
              </br>
              <input value = "{{old('titulo')}}" type="text" class="form-control" name="titulo"/>
              @if ($errors->has('titulo'))
                          <span style="color: red;">{{$errors->first('titulo')}}</span> 
                          @endif
              </br></br>
          </div>
          <div class="form-group">
              <label for="email">Email:</label>
              </br>
              <input value = "{{old('email')}}" type="text" class="form-control" name="email"/>
              @if ($errors->has('email'))
                          <span style="color: red;">{{$errors->first('email')}}</span> 
                          @endif
              </br></br>
          </div>
          <div class="form-group">
              <label for="comentario">Comentario:</label>
              </br>
              <textarea value = "{{old('comentario')}}" rows="5" cols="40" class="form-control" name="comentario"></textarea>
              @if ($errors->has('comentario'))
                          <span style="color: red;">{{$errors->first('comentario')}}</span> 
                          @endif
              </br></br>
          </div>
          
          <button type="submit" class="btn btn-primary">Create Item</button>
      </form>
  </div>
</div>

<h2>Lista de publicaciones</h2>

<table>
    
    
    @foreach (Session :: get('posts') as $post) 
        <tr>
        <td>
        <strong> {{$post->getFechaPublicacion()}}</strong>
        {{$post->getNombre()}}
        {{$post->getEmail()}}
        </br>
        {{$post->getTitulo()}}
        </br>
        {{$post->getComentario()}}
         </td>
        </tr>
    @endforeach
    
</table>
@section('content')


