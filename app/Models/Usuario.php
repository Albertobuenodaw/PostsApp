<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'apellido'  
    ];

    public function direccion(){
        return $this->hasOne('App\Models\Direccion', 'idUsuario');
    }
    
    public function posts(){
        return $this->hasMany('App\Models\Post');
    }

    
}
