<?php

namespace Database\Factories;

use App\Models\Peliculas;
use Illuminate\Database\Eloquent\Factories\Factory;

class PeliculasFactory extends Factory
{

    protected $model = Peliculas::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'nombre' => $this->faker->sentence(4),
            'descripcion' => $this->faker->paragraphs(3, true)
        ];
    }
}
