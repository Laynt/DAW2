@extends('layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Evaluable Tasks</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('evaluabletasks.create') }}"> Create New Evalueble Task</a>
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
            <th>Name</th>
            <th>Type</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($evaluabletasks as $evaluabletask)
        <tr>
            <td>{{ ++$i }}</td>            
            <td>{{ $evaluabletask->name }}</td>            
            <td>{{ $evaluabletask->type }}</td>
            <td>
                <form action="{{ route('evaluabletasks.destroy',$evaluabletask->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('evaluabletasks.show',$evaluabletask->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('evaluabletasks.edit',$evaluabletask->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $evaluabletasks->links() !!}
      
@endsection