<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class motivo_ingreso extends Model
{
    use HasFactory;

    protected $fillable = [
        'description'
    ];

    public function Children(){
        return $this->belongsToMany(children::class);
    }
}
