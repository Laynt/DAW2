@extends('layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Students - Evaluable Tasks</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('studentevaluabletasks.create') }}"> Create New Students - Evaluable Tasks</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Student</th>
            <th>Evaluable Task</th>
            <th>Mark</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($studentevaluabletasks as $studentevaluabletask)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $studentevaluabletask->student->name }}</td>
            <td>{{ $studentevaluabletask->evaluabletask->name }}</td>
            <td>{{ $studentevaluabletask->mark }}</td>
            <td>
                <form action="{{ route('studentevaluabletasks.destroy', $studentevaluabletask->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('studentevaluabletasks.show',$studentevaluabletask->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('studentevaluabletasks.edit',$studentevaluabletask->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $studentevaluabletasks->links() !!}
      
@endsection