<?php

namespace Database\Seeders;

use App\Models\Egresado;
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
    }
}
