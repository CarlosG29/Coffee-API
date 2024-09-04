<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Production;

class ProductionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Crear registros de producción de ejemplo
        Production::create([
            'crop_id' => 1,
            'harvested_weight' => 1500,
            'processing_type' => 'Lavado',
            'harvest_date' => '2024-04-01',
        ]);

        Production::create([
            'crop_id' => 2,
            'harvested_weight' => 2000,
            'processing_type' => 'Natural',
            'harvest_date' => '2024-03-15',
        ]);
    }
}
