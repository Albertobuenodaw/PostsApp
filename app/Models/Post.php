<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'titulo',
        'contenido',
        'idUsuario',
    ];
    
    public function usuario(){
        return $this->belongsTo('App\Models\Usuario', 'idUsuario');
    } 

    public function tema(){
        return $this->belongsToMany('App\Models\Tema');
    } 
}
