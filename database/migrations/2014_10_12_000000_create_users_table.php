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
        Schema::create('users', function (Blueprint $table) {
            //BY DEFAULT
            $table->id();            
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();

            //CUSTOM
            $table->string('nombres', 50);
            $table->string('apellidos', 50);
            $table->string('celular', 10);
            $table->enum('tipo_documento', ['C.C', 'T.I', 'R.C', 'C.E']); 
            $table->string('numero_documento', 10);
            $table->date('fecha_nacimiento');
            $table->string('lugar_nacimiento', 50);
            $table->string('nombre_padre', 100);
            $table->string('numero_documento_padre', 10);
            $table->string('celular_padre', 10);
            $table->string('ocupacion_padre', 50);
            $table->string('nombre_madre', 50);
            $table->string('numero_documento_madre', 10);
            $table->string('celular_madre', 10);
            $table->string('ocupacion_madre', 50);
            $table->string('eps', 50);
            $table->enum('rh', ['A+', 'B+', 'AB+', 'O+','A-', 'B-', 'AB-', 'O-']);
            $table->string('enfermedades', 100);
            $table->string('alergias', 100);
            $table->string('medicamentos', 100);
            $table->enum('grupo_etnico', ['Afro', 'Indigena', 'ROM']); 
            $table->enum('estado', ['activo', 'inactivo']);
            $table->string('materia', 50);
            $table->string('cargo', 50);
           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
