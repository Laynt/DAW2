<?php

namespace App\Http\Controllers;

use App\Models\Evaluabletask;
use Illuminate\Http\Request;

class EvaluabletaskController extends Controller
{
     
    public function index()  //Muestra las tareas que hay en la base de datos
    {
        $evaluabletasks = Evaluabletask::latest()->paginate(5);
    
        return view('evaluabletasks.index',compact('evaluabletasks'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
     
    
    public function create()  //Nos direcciona a la pagina para crear una tarea
    {
        return view('evaluabletasks.create');
    }
    
    
    public function store(Request $request)  //creamos la tarea 
    {
        $request->validate([                //Comprobamos que exista en la base de datos
            'name' => 'required',
            'type' => 'required'
            
        ]);
    
        Evaluabletask::create($request->all());
     
        return redirect()->route('evaluabletasks.index')
                        ->with('success','Evaluabletask created successfully.');    //Si todo va bien nos redirecciona al index
    }
     
    
    public function show(Evaluabletask $evaluabletask) //Nos redirecciona a la pagina para mostrar la tarea
    {
        return view('evaluabletasks.show',compact('evaluabletask'));
    } 
     
    
    public function edit(Evaluabletask $evaluabletask)  //Nos redirecciona a la pagina para editar la tarea
    {
        return view('evaluabletasks.edit',compact('evaluabletask'));
    }
    
    
    public function update(Request $request, Evaluabletask $evaluabletask) //Preguntar en clase
    {
        $request->validate([
            'name' => 'required',
            'type' => 'required'
            
        ]);
    
        $evaluabletask->update($request->all());
    
        return redirect()->route('evaluabletasks.index')
                        ->with('success','student updated successfully');
    }
    
    
    public function destroy(Evaluabletask $evaluabletask)       //Eliminamos la tarea seleccionada
    {
        $evaluabletask->delete();
    
        return redirect()->route('evaluabletasks.index')
                        ->with('success','Evaluabletask deleted successfully');
    }
    
}
