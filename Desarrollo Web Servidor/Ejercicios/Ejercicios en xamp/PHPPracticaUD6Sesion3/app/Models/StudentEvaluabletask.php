<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentEvaluabletask extends Model
{
    use HasFactory;

    protected $fillable = [
        'mark', 'student_id','evaluabletask_id'  //Tiene la nota y las dos claves foraneas
    ];
 
    public function student()
    {
        return $this->belongsTo(Student::class);
    }
 
    public function evaluabletask()
    {
        return $this->belongsTo(Evaluabletask::class);
    }

}
