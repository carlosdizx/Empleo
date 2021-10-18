<?php

namespace Database\Factories;

use App\Models\Egresado;
use Illuminate\Database\Eloquent\Factories\Factory;

class EgresadoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Egresado::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->sentence(),
            'edad' => $this->faker->numberBetween($min = 22,$max = 26),
            'experiencia' => $this->faker-> numberBetween($min = 1,$max = 3),
            'correo' => $this->faker->unique()->safeEmail(),
            'telefono' => $this->faker->phoneNumber(),
            'foto' => $this->faker->imageUrl(),
            'especialidad' => $this->faker->sentence(),

        ];
    }
}
