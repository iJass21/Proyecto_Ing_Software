<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class adulto_responsable extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'lastname',
        'rut',
        'vinculo',
        'obs',
        'direccion',
        'phone',
        'objetivos',
        'email',
        'rubro'
    ];

    public function Children(){
        return $this->hasMany(children::class);
    }
}
