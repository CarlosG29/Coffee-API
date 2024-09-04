<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Traceability;

class TraceabilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Crear registros de trazabilidad de ejemplo
        Traceability::create([
            'crop_id' => 1,
            'batch_number' => 'BATCH001',
            'transport_date' => '2024-05-10',
            'destination' => 'Puerto de Corinto, Nicaragua',
            'certifications' => 'Certificado Orgánico, Comercio Justo',
        ]);

        Traceability::create([
            'crop_id' => 2,
            'batch_number' => 'BATCH002',
            'transport_date' => '2024-05-15',
            'destination' => 'Puerto de La Ceiba, Honduras',
            'certifications' => 'Certificado Rainforest Alliance',
        ]);
    }
}
