<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('tb_usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('usuario');
            $table->string('nombre');
            $table->string('contrasena');
            $table->string('correo');
            $table->date('nacimiento');
            $table->string('tipo');
            $table->boolean('certificacion')->nullable()->default(null);
            $table->binary('foto_perfil')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_usuario');
    }
};
