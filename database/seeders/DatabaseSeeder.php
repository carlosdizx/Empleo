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
        $egresado->edad="23";
        $egresado->experiencia="1";
        $egresado->correo="carlodiaz@umariana.edu.co";
        $egresado->telefono="3163930876";
        $egresado->foto="https://pbs.twimg.com/profile_images/1434715958917087235/y1alvUKc.jpg";
        $egresado->especialidad="Programador";
        $egresado->save();
        $egresado =  new Egresado();
        $egresado->nombre="Luis Beneavides";
        $egresado->edad="22";
        $egresado->experiencia="No se sabe";
        $egresado->correo="luisbena@umariana.edu.co";
        $egresado->telefono="3333333333";
        $egresado->foto="https://i.ytimg.com/vi/dOKurtZnmAk/hqdefault.jpg";
        $egresado->especialidad="Programador";
        $egresado->save();
        $egresado =  new Egresado();
        $egresado->nombre="Oscar Pantoja";
        $egresado->edad="22";
        $egresado->experiencia="No se sabe";
        $egresado->correo="osrcpantojan@umariana.edu.co";
        $egresado->telefono="3333333333";
        $egresado->foto="https://www.researchgate.net/profile/Maili-Ow/publication/332189803/figure/fig4/AS:743930001907714@1554378142681/Figura-7-texto-Era-Buster-el-narizotas-Buster-tenia-una-facha-horrible-Los-muchachos.jpg";
        $egresado->especialidad="Programador";
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
