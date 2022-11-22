<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Direccion extends Model
{
    use HasFactory;

    protected $table = 'direcciones';

    protected $fillable = [
        'calle',
        'numero',
        'codPostal',
        'municipio',
        'idUsuario'
    ];

    public function usuario(){
        return $this->belongsTo('App\Models\Usuario', 'idUsuario');
    } 
}
