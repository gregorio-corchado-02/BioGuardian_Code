<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tb_usuarios', function (Blueprint $table) {
            $table->id(); // Crea una columna 'id' auto-incremental
            $table->string('usuario'); // Crea una columna 'usuario' de tipo VARCHAR
            $table->string('nombre'); // Crea una columna 'nombre' de tipo VARCHAR
            $table->string('contrasena'); // Crea una columna 'contrasena' de tipo VARCHAR
            $table->string('correo'); // Crea una columna 'correo' de tipo VARCHAR
            $table->date('nacimiento'); // Crea una columna 'nacimiento' de tipo DATE
            $table->string('tipo'); // Crea una columna 'tipo' de tipo VARCHAR
            $table->boolean('certificacion')->nullable()->default(null); // Crea una columna 'certificacion' de tipo BOOLEAN que puede ser NULL
            $table->binary('foto_perfil')->nullable(); // Crea una columna 'foto_perfil' de tipo BLOB que puede ser NULL
            $table->timestamps(); // Crea las columnas 'created_at' y 'updated_at'
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_usuarios'); // Elimina la tabla 'tb_usuarios' si existe
    }
};
