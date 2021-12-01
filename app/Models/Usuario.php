<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    protected $fillable = [
        "nombreUsuario", "apellido",
    ];
    public function tareas(){
        return $this->hasMany('App\Models\Tareas');

        $tareas = Tareas::find(1)->tareas;
        foreach ($tareas as $tarea) {
        //
        }
    }
}
