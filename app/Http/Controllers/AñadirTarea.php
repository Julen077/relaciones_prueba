<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tareas;
use Illuminate\Support\Facades\DB;

class AñadirTarea extends Controller
{
    function crear(Request $request){
        Tareas::create([
            'nombreTarea' => $request -> post('nombreTarea'),
            'usuario_id' => $request ->post('usuario_id')
        ]);
        return redirect("/proyecto");
    }
    
    function mostrar(){
        $tareasDB = DB::table('tareas')->get();
        $usuarioDB = DB::table('usuarios')->get();
        return view('/proyecto',['tareas' => $tareasDB, 'usuarios' => $usuarioDB]);
    }
    function borrar($id){
        //DB::table('tareas')->where('id', '=', $id)->delete();
        Tareas::destroy($id);
        return redirect('/proyecto');
    }
    
    
}
