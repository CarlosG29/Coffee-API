<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Crop;

class CropSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Crear cultivos de ejemplo
        Crop::create([
            'variety' => 'Arabica',
            'sowing_date' => '2024-01-15',
            'location' => 'Finca El Paraíso, Nicaragua',
            'description' => 'Cultivo de café de alta calidad en altitud media.',
        ]);

        Crop::create([
            'variety' => 'Robusta',
            'sowing_date' => '2023-12-01',
            'location' => 'Finca La Paz, Honduras',
            'description' => 'Cultivo resistente a enfermedades y de alto rendimiento.',
        ]);
    }
}
