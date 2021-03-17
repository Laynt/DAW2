@extends('layout')
  
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Student - Evaluable Task</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('studentevaluabletasks.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Student:</strong>
                {{ $studentEvaluabletask->student->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $studentEvaluabletask->evaluabletask->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Mark:</strong>
                {{ $studentEvaluabletask->mark }}
            </div>
        </div>
    </div>
@endsection