@extends('layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Evaluable Task</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('evaluabletasks.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('evaluabletasks.update',$evaluabletask->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">           
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" value="{{ $evaluabletask->name }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Type:</strong>
                    <select class="form-control" name="type">
                    @foreach(["Procedimiento" => "Procedimiento", "Aptitud" => "Aptitud", "Examen" => "Examen"] AS $type => $typeLabel)  
                        <option value="{{ $type }}" {{ old("type", $evaluabletask->type) == $type ? "selected" : "" }}>{{ $typeLabel }}</option>  
                    @endforeach
                    </select>                  
                </div>
            </div>           
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
@endsection