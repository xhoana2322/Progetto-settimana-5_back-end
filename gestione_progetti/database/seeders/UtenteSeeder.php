<?php

namespace Database\Seeders;

use App\Models\Utente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class UtenteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Utente::factory(10)->create();
    }
}
