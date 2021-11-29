<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsuarioController extends Controller
{
    function crear(Request $request){
        Usuario::create([
            'nombreUsuario' => $request -> post('nombreUsuario'),
            'apellido' => $request -> post('apellido'),
        ]);
        return redirect("/usuarios");
    }
    
    function mostrar(){
        $usuariosDB = DB::table('usuarios')->get();
        return view('/usuarios',['usuarios' => $usuariosDB]);
    }
    function borrar($id){
        //DB::table('tareas')->where('id', '=', $id)->delete();
        Usuario::destroy($id);
        return redirect('/usuarios');
    }
}
