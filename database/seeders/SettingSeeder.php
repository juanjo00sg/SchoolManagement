<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = [
            [
                'key' => 'DIRECCION_SEDE_PRINCIPAL',
                'value' => 'Km 13 via al magdalena',
            ],
            [
                'key' => 'DIRECCION_SEDE_PORVERNIR',
                'value' => 'Vereda el Desquite cerca al páramo de Letras'
            ],
            [
                'key' => 'DIRECCION_SEDE_COLONIA',
                'value' => 'Recinto Pensamiento, Km 11 via al Magdalena'
            ],
            [
                'key' => 'NOMBRE_INSTITUCION',
                'value' => 'Institución Educativa Maltería'
            ],
            [
                'key' => 'NIVELES_INSTITUCION',
                'value' => 'La Institución educativa cuenta con niveles preescolar, básica primaria, básica secundaria, educación media y articulación con la educación técnica'
            ],
            [
                'key' => 'MODALIDAD_INSTITUCION',
                'value' => 'La Institución educativa presenta una modalidad de escuela nueva con jornada única'
            ],
            [
                'key' => 'VISION_INSTITUCIONAL',
                'value' => 'Para el año 2025, la institución educativa Maltería será reconocida a nivel local, regional, nacional e internacional, por su alto nivel de desarrollo de competencias laborales, generales y específicas; que respondan a las necesidades de un mundo globalizado y beneficiando la calidad de vida de sus estudiantes y sus familias.'
            ],
            [
                'key' => 'MISION_INSTITUCIONAL',
                'value' => 'Formar niños, niñas y jóvenes con enfoque humanista-socializante, inclusivo, competentes en el ámbito Industrial y del campo, para la conservación y saneamiento ambiental, con el fin de desarrollar proyectos productivos que respondan a las necesidades personales, familiares y comunitarias en contexto local, regional y Nacional, mediante metodologías flexibles dentro del modelo escuela nueva.'
            ],
            [
                'key' => 'LEMA_INSTITUCIONAL',
                'value' => 'Liderazgo en emprendimiento <br> y desarrollo humano'
            ],
            [
                'key' => 'HORARIO_INSTITUCIONAL',
                'value' => 'Lunes a Viernes de 7:00 am a 3:00 pm'
            ],
            [
                'key' => 'CONTACTO_TELEFONO',
                'value' => '+57 3218773581'
            ],
            [
                'key' => 'CONTACTO_EMAIL',
                'value' => 'institucionmalteria@gmail.com'
            ],
            [
                'key' => 'INSTAGRAM_URL',
                'value' => 'https://www.instagram.com/iemalteria'
            ],
            [
                'key' => 'GOOGLE_URL',
                'value' => 'https://www.google.com/search?q=Instituci%C3%B3n+Educativa+Malter%C3%ADa&stick=H4sIAAAAAAAA_-NgU1I1qLBINTE3MzM3MTVOSko1Mk2yAgpZGliapxmYmBmZJJuZJiYuYlXwzCsuySwpTc48vDlPwTWlNDmxJLMsUcE3Macktejw2kQAs4yarUwAAAA&hl=es-419&mat=CdMw-Ysc3S-QElcBeenfiGrtiKNuiUwiqoy9mgQTgvxB-25KTd_VoywmQz9f216e5MgkmSU49yrAtjhedbSQbGqZ8O_doyXCkO0p3H3JZA0OdY0g1sjrDCgkvqgc1bvKwgI&authuser=0&bshm=rime/1'
            ],
            [
                'key' => '',
                'value' => ''
            ],
            [
                'key' => '',
                'value' => ''
            ],
            [
                'key' => '',
                'value' => ''
            ],
            [
                'key' => '',
                'value' => ''
            ]
        ];

        foreach ($settings as $setting) {
            Setting::create($setting);
        }
    }
}