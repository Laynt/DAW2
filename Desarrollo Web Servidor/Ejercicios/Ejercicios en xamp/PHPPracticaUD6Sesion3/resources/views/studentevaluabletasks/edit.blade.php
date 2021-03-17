@extends('layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Student - Evaluable Task</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('studentevaluabletasks.index') }}"> Back</a>
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
  
    <form action="{{ route('studentevaluabletasks.update',$studentEvaluabletask->id) }}" method="POST">
        @csrf
        @method('PUT')
   
        <div class="row">        
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Student:</strong>                
                    <select class="form-control" name="student_id">                        
                        @foreach ($students as $key => $value)
                            <option value="{{ $key }}" {{ old("student_id", $studentEvaluabletask->student_id) == $key ? "selected" : "" }}> 
                                {{ $value }} 
                            </option>
                        @endforeach    
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Evalueable Task:</strong>                
                    <select class="form-control" name="evaluabletask_id">                        
                        @foreach ($evaluabletasks as $key => $value)
                            <option value="{{ $key }}" {{ old("evaluabletask_id", $studentEvaluabletask->evaluabletask_id) == $key ? "selected" : "" }}> 
                                {{ $value }} 
                            </option>
                        @endforeach    
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Mark:</strong>
                    <input type="text" name="mark" value={{ $studentEvaluabletask->mark }} class="form-control" placeholder="Mark">                
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
@endsection