<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'identifier', 'name', 'surname'
    ];
 
    public function studentevaluabletasks(){  //Aqui creo la relacion con  studentevaluabletask que es la tabla intermedia
        return $this->hasMany(StudentEvaluabletask::class);  
    }

}
