<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class children extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'lastname',
        'rut',
        'f_nac',
        'obs',
        'direccion',
        'phone_contact',
        'description'
    ];

    //relacion 1 a muchos pero inversa 
    public function adultos(){
        return $this->belongsTo(adulto_responsable::class);
    }

    public function motivos(){
        return $this->belongsToMany(motivo_ingreso::class);
    }

    public function fichas(){
        return $this->hasOne(ficha_child::class);
    }

    public function alertas(){
        return $this->hasOne(alerta::class);
    }
}
