<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluabletask extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'type'
    ];
 
    public function studentevaluabletasks(){
        return $this->hasMany(StudentEvaluabletask::class);  
    }

}
