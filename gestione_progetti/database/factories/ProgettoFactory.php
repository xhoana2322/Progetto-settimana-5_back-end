<?php

namespace Database\Factories;
use App\Models\Attivita;
use App\Models\Utente;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Progetto>
 */
class ProgettoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'titolo'=> fake()->unique()->text(30),
            'descrizione'=> fake()->text(200),
            'utentes_id'=>Utente::get()->random()->id,
            'attivitas_id'=>Attivita::get()->random()->id
        ];
    }
}
