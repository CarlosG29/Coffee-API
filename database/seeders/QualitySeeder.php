<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Quality;

class QualitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Crear controles de calidad de ejemplo
        Quality::create([
            'crop_id' => 1,
            'moisture_content' => 12.5,
            'bean_size' => 18,
            'defects_count' => 3,
            'inspection_date' => '2024-03-01',
            'remarks' => 'Excelente calidad, pocos defectos visibles.',
        ]);

        Quality::create([
            'crop_id' => 2,
            'moisture_content' => 14.0,
            'bean_size' => 16,
            'defects_count' => 7,
            'inspection_date' => '2024-02-15',
            'remarks' => 'Calidad aceptable, algunas manchas visibles.',
        ]);
    }
}
