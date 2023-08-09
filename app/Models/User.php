<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        //BY DEFAULT
        'email',
        'password',

        //CUSTOM
        'nombres',
        'apellidos',
        'celular',
        'tipo_documento',
        'numero_documento',
        'contraseña',
        'fecha_nacimiento',
        'lugar_nacimiento',
        'nombre_padre',
        'numero_documento_padre',
        'celular_padre',
        'ocupacion_padre',
        'nombre_madre',
        'numero_documento_madre',
        'celular_madre',
        'ocupacion_madre',
        'eps',
        'rh',
        'enfermedades',
        'alergias',
        'medicamentos',
        'grupo_etnico',
        'estado',
        'materia',
        'cargo',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
        'fecha_nacimiento'=> 'date',
    ];
}