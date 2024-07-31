<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Http\Request;

class controlpublicaciones extends Controller
{

    public function index()
    {
        $consultaPublicaciones= DB::table('tb_publicaciones')->get();
        return view('welcome', compact('consultaPublicaciones'));
    }

    public function guardarp(Request $req)
    {
        $idUsuario = 2; // Cambia esto para obtener el ID del usuario autenticado
    
        // Verifica si el archivo es válido y lo guarda en 'public/fotos'
        $fotoPath = null;
        if ($req->hasFile('foto') && $req->file('foto')->isValid()) {
            $fotoPath = $req->file('foto')->store('public/fotos');
        }
    
        // Inserta los datos en la tabla 'tb_publicaciones'
        DB::table('tb_publicaciones')->insert([
            'titulo' => $req->input('titulo'),
            'id_usuario' => $idUsuario,
            'comentario' => $req->input('comentarios'),
            'foto_publi' => $fotoPath,
            'fecha' => Carbon::now(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    
        // Redirige con mensaje de confirmación
        return redirect('/publicar')->with('confirmacion', 'Tu recuerdo se guardó en la base de datos');
    }

    public function editarpublicacion(Request $req, string $id)
    {
        DB::table('tb_publicaciones')->where('id',$id)->update([
            'titulo'=>$req->input('txtTitulo'),
            'comentario'=>$req->input('txtComentario'),
            'updated_at'=>Carbon::now(),
        ]);
        return redirect('/')->with('confirmacion','Publicación editada correctamente');

    }

    public function eliminarpublicacion(Request $req, string $id)
    {
        DB::table('tb_publicaciones')->where('id', $id)->delete();

        return redirect('/')->with('confirmacion', 'Publicación eliminada correctamente');
    }

}
