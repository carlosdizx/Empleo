<?php

namespace Database\Seeders;

use App\Models\Egresado;
use App\Models\Especialidad;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //User::factory(10)->create();
        $egresado =  new Egresado();

        $egresado->nombre="Carlos Díaz";
        $egresado->edad="Carlos Díaz";
        $egresado->experiencia="Carlos Díaz";
        $egresado->correo="Carlos Díaz";
        $egresado->telefono="Carlos Díaz";
        $egresado->foto="Carlos Díaz";
        $egresado->especialidad="Carlos Díaz";
        $egresado->save();
        $egresado =  new Egresado();
        $egresado->nombre="Luis Beneavides";
        $egresado->edad="Luis Beneavides";
        $egresado->experiencia="Luis Beneavides";
        $egresado->correo="Luis Beneavidesz";
        $egresado->telefono="Luis Beneavides";
        $egresado->foto="Luis Beneavides";
        $egresado->especialidad="Luis Beneavides";
        $egresado->save();
        $egresado =  new Egresado();
        $egresado->nombre="Oscar Pantoja";
        $egresado->edad="Oscar Pantoja";
        $egresado->experiencia="Oscar Pantoja";
        $egresado->correo="Oscar Pantoja";
        $egresado->telefono="Oscar Pantoja";
        $egresado->foto="Oscar Pantoja";
        $egresado->especialidad="Oscar Pantoja";
        $egresado->save();

        Egresado::factory(50)->create();

        $area = new Especialidad();
        $area -> nombre='Programador';
        $area -> save();

        $area1 = new Especialidad();
        $area1 -> nombre='Analista de informacion';
        $area1 -> save();

        $area2 = new Especialidad();
        $area2 -> nombre='Ciencia de los datos';
        $area2 -> save();

        $area3 = new Especialidad();
        $area3 -> nombre='Telecomunicaciones y Redes';
        $area3 -> save();

        $area4 = new Especialidad();
        $area4 -> nombre='Manejo y Administracion de Servidores';
        $area4 -> save();

        $area5 = new Especialidad();
        $area5 -> nombre='Cloud computing';
        $area5 -> save();

        $area6 = new Especialidad();
        $area6 -> nombre='Informatica educativa';
        $area6 -> save();

        $area7 = new Especialidad();
        $area7 -> nombre='Machine Learning';
        $area7 -> save();

        $area8 = new Especialidad();
        $area8 -> nombre='Internet de las Cosas IOT';
        $area8 -> save();

        $area9 = new Especialidad();
        $area9 -> nombre='Arquitecto Empresarial';
        $area9 -> save();

        $area10 = new Especialidad();
        $area10 -> nombre='Auditoria Informatica';
        $area10 -> save();

        $area11 = new Especialidad();
        $area11 -> nombre='Seguridad de la informacion';
        $area11 -> save();

        $area12 = new Especialidad();
        $area12 -> nombre='Informatica Forense';
        $area12 -> save();

        $area13 = new Especialidad();
        $area13 -> nombre='Contenidos Digitales';
        $area13 -> save();

        $area14 = new Especialidad();
        $area14 -> nombre='Consultor Informatico';
        $area14 -> save();

    }
}
