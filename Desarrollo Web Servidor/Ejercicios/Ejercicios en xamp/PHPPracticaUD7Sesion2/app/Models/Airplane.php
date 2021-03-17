<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Airplane extends Model
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'serial',
        'model',
        'length',
        'capacity',
        'speed',
        'range',
        'manufacturer_id',
    ];
 
    public function manufacturer()
    {
        return $this->belongsTo(Manufacturer::class);
    }

}
