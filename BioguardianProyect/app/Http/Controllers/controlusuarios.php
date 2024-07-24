<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controlusuarios extends Controller
{
    DB::table('tb_usuarios')->insert([
        'titulo'=>$req->input('titulo'),
        'id_usuario'=> $idUsuario = 2,
        'comentario'=>$req->input('comentarios'),
        'foto_publi' => $fotoPath,
        'fecha'=>Carbon::now(),
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now(),
    ]);
    return redirect('/publicar')->with('confirmacion','Tu recuerdo se guardo en labase de datos');
}
