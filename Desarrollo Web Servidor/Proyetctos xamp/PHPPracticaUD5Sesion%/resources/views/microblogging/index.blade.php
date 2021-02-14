@extends('layouts.app')
 
@section('title', 'Microblogging')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Nuevo Item
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
              <input type="text" class="form-control" name="nombre"/>
          </div>
          <div class="form-group">
              <label for="titulo">Titulo:</label>
              <input type="text" class="form-control" name="titulo"/>
          </div>
          <div class="form-group">
              <label for="email">Email:</label>
              <input type="text" class="form-control" name="email"/>
          </div>
          <div class="form-group">
              <label for="comentario">Comentario:</label>
              <textarea rows="5" cols="40" class="form-control" name="comentario"></textarea>
          </div>
          
          <button type="submit" class="btn btn-primary">Create Item</button>
      </form>
  </div>
</div>

<h2>Lista de publicaciones</h2>

<table>
    <?php
    $posts = array(); //$_SESSION['posts'];
    foreach ($posts as $post) {
        echo "<tr>";
        echo "<td>";
        echo "<strong>".$post["fechaPublicacion"]."</strong> $post[nombre]   $post[email]";
        echo "<br />";
        echo "<strong>$post[titulo]</strong>";
        echo "<br />";
        echo $post['comentario'];
        echo "</td>";
        echo "</tr>";
    }
    ?>
</table>
@section('content')


