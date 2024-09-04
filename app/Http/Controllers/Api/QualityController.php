<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Quality;
use Illuminate\Http\Request;

class QualityController extends Controller
{
    public function index()
    {
        // Listar todos los controles de calidad
        return response()->json(Quality::all(), 200);
    }

    public function store(Request $request)
    {
        // Validar los datos de entrada
        $validated = $request->validate([
            'crop_id' => 'required|exists:crops,id',
            'moisture_content' => 'required|numeric',
            'bean_size' => 'required|integer',
            'defects_count' => 'nullable|integer',
            'inspection_date' => 'required|date',
            'remarks' => 'nullable|string',
        ]);

        // Crear un nuevo control de calidad
        $quality = Quality::create($validated);

        return response()->json($quality, 201);
    }

    public function show($id)
    {
        // Obtener un control de calidad específico
        $quality = Quality::findOrFail($id);
        return response()->json($quality, 200);
    }

    public function update(Request $request, $id)
    {
        // Validar los datos de entrada
        $validated = $request->validate([
            'crop_id' => 'required|exists:crops,id',
            'moisture_content' => 'required|numeric',
            'bean_size' => 'required|integer',
            'defects_count' => 'nullable|integer',
            'inspection_date' => 'required|date',
            'remarks' => 'nullable|string',
        ]);

        // Actualizar el control de calidad específico
        $quality = Quality::findOrFail($id);
        $quality->update($validated);

        return response()->json($quality, 200);
    }

    public function destroy($id)
    {
        // Eliminar un control de calidad específico
        $quality = Quality::findOrFail($id);
        $quality->delete();

        return response()->json(null, 204);
    }
}
