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
        $idUsuario = 2;

        $fotoPath = null;
        if ($req->hasFile('foto') && $req->file('foto')->isValid()) {
            $fotoPath = $req->file('foto')->store('public/fotos');
        }

        DB::table('tb_publicaciones')->insert([
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
}
