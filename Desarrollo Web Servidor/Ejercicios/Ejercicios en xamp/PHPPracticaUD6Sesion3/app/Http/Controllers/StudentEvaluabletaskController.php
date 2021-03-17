<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Evaluabletask;
use App\Models\StudentEvaluabletask;
use Illuminate\Http\Request;

class StudentEvaluabletaskController extends Controller
{
    
    public function index()  //Pagina principal que nos muestra las relaciones alumno - tarea
    {
        $studentevaluabletasks = StudentEvaluabletask::latest()->paginate(5);

        return view('studentevaluabletasks.index', compact('studentevaluabletasks'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    
    public function create()            //Preguntar en clase
    {        
        $students = Student::pluck('name', 'id');       //Para rellenar una lista con solo unos parametros determinados, en este caso el name e id
        $evaluabletasks = Evaluabletask::pluck('name', 'id');

        return view('studentevaluabletasks.create', compact('students', 'evaluabletasks'));
    }

    
    public function store(Request $request)     //Guarda los datos en el servidor
    {
        $request->validate([
            'student_id' => 'required',
            'evaluabletask_id' => 'required',
            'mark' => 'required|numeric|between:0,10',
        ]);    
        
        StudentEvaluabletask::create($request->all());     
        
        return redirect()->route('studentevaluabletasks.index')                     //Si todo va bien, nos redirecciona a la principal
                        ->with('success','Student-EvaluableTask created successfully.');
    }

    public function show($id)                               //Muestra el contenido de studentEvaluableTask
    {        
        $studentEvaluabletask = StudentEvaluabletask::find($id);

        return view('studentevaluabletasks.show', compact('studentEvaluabletask'));
    }

    public function edit($id)               //Nos redirecciona a la pagina para actualizar los datos
    {
        $studentEvaluabletask = StudentEvaluabletask::find($id);

        $students = Student::pluck('name', 'id');       
        $evaluabletasks = Evaluabletask::pluck('name', 'id');        
        
        return view('studentevaluabletasks.edit', compact('studentEvaluabletask', 'students', 'evaluabletasks'));
    }

    
    public function update(Request $request, $id)  // Actualizamos los datos de alumno - tarea
    {
        $request->validate([
            'student_id' => 'required',
            'evaluabletask_id' => 'required',
            'mark' => 'required|numeric|between:0,10',
        ]);    

        $studentEvaluabletask = StudentEvaluabletask::find($id);
        
        $studentEvaluabletask->update($request->all());
    
        return redirect()->route('studentevaluabletasks.index')
                        ->with('success','Student-EvaluableTask updated successfully');
    }

    public function destroy($id)                    //Elimina la relacion alumno -tarea seleccionada
    {   
        $studentEvaluabletask = StudentEvaluabletask::find($id);

        $studentEvaluabletask->delete();
    
        return redirect()->route('studentevaluabletasks.index')
                        ->with('success','Student-EvaluableTask deleted successfully');
    }
}
