<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ficha_child extends Model
{
    use HasFactory;

    protected $fillable =[
        'fec_ingreso',
        'fec_salida',
        'objetivos',
        'description'
    ];


    public function Children(){
        return $this->belongsTo(children::class);
    }
}
