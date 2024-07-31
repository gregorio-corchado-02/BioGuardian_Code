<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Http\Request;

class controlusuarios extends Controller
{

    public function index()
    {
        $usuario = Auth::user();
        return view('pefil', compact('usuario'));
    }

    public function guardaru(Request $req)
    {

    $cetificado = TRUE;
    $tipo = 'usuario';

    $fotoPath = null;
    if ($req->hasFile('foto_perfil') && $req->file('foto_perfil')->isValid()) {
        $fotoPath = $req->file('foto_perfil')->store('public/fotos');
    }

    DB::table('tb_usuarios')->insert([
        'usuario'=>$req->input('usuario'),
        'nombre'=>$req->input('nombre'),
        'contrasena'=>$req->input('contrasena'),
        'correo'=>$req->input('correo'),
        'foto_perfil' => $fotoPath,
        'certificacion' => $cetificado = TRUE,
        'tipo' => $tipo,
        'nacimiento'=>$req->input('nacimiento'),
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now(),
    ]);
    return redirect('/publicar')->with('confirmacion','Tu recuerdo se guardo en labase de datos');
    }

    public function editarusuario(Request $req, string $id)
    {
        $fotoPath = null;
        if ($req->hasFile('efoto_perfil') && $req->file('efoto_perfil')->isValid()) {
            $fotoPath = $req->file('efoto_perfil')->store('public/fotos');
        }

        DB::table('tb_usuarios')->where('id',$id)->update([
            'usuario'=>$req->input('eusuario'),
            'nombre'=>$req->input('enombre'),
            'contrasena'=>$req->input('econtrasena'),
            'correo'=>$req->input('ecorreo'),
            'foto_perfil' => $fotoPath,
            'updated_at'=>Carbon::now(),
        ]);
        return redirect('/')->with('confirmacion','Publicación editada correctamente');

    }
}
