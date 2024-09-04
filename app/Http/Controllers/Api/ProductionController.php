<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Production;
use Illuminate\Http\Request;

class ProductionController extends Controller
{
    public function index()
    {
        // Listar todos los registros de producción
        return response()->json(Production::all(), 200);
    }

    public function store(Request $request)
    {
        // Validar los datos de entrada
        $validated = $request->validate([
            'crop_id' => 'required|exists:crops,id',
            'harvested_weight' => 'required|numeric',
            'processing_type' => 'required|string|max:255',
            'harvest_date' => 'required|date',
        ]);

        // Crear un nuevo registro de producción
        $production = Production::create($validated);

        return response()->json($production, 201);
    }

    public function show($id)
    {
        // Obtener un registro de producción específico
        $production = Production::findOrFail($id);
        return response()->json($production, 200);
    }

    public function update(Request $request, $id)
    {
        // Validar los datos de entrada
        $validated = $request->validate([
            'crop_id' => 'required|exists:crops,id',
            'harvested_weight' => 'required|numeric',
            'processing_type' => 'required|string|max:255',
            'harvest_date' => 'required|date',
        ]);

        // Actualizar el registro de producción específico
        $production = Production::findOrFail($id);
        $production->update($validated);

        return response()->json($production, 200);
    }

    public function destroy($id)
    {
        // Eliminar un registro de producción específico
        $production = Production::findOrFail($id);
        $production->delete();

        return response()->json(null, 204);
    }
}
