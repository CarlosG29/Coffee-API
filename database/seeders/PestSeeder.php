<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pest;

class PestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Crear plagas de ejemplo
        Pest::create([
            'crop_id' => 1,
            'pest_type' => 'Broca del Café',
            'severity' => 'medium',
            'reported_date' => '2024-02-20',
            'actions_taken' => 'Aplicación de pesticida natural.',
        ]);

        Pest::create([
            'crop_id' => 2,
            'pest_type' => 'Royas',
            'severity' => 'high',
            'reported_date' => '2024-01-30',
            'actions_taken' => 'Remoción manual de hojas infectadas.',
        ]);
    }
}

