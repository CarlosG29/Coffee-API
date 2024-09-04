<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Resource;

class ResourceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Crear recursos de ejemplo
        Resource::create([
            'crop_id' => 1, // Asegúrate de que esta ID exista en la tabla de crops
            'type' => 'Fertilizante',
            'amount' => 100,
            'application_date' => '2024-02-10',
            'notes' => 'Aplicación de fertilizante orgánico.',
        ]);

        Resource::create([
            'crop_id' => 2, // Asegúrate de que esta ID exista en la tabla de crops
            'type' => 'Pesticida',
            'amount' => 50,
            'application_date' => '2024-03-05',
            'notes' => 'Control de plagas en hojas.',
        ]);
    }
}
