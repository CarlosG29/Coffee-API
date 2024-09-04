<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Crop;
use Illuminate\Http\Request;

class CropController extends Controller
{
    public function index()
    {
        // Listar todos los cultivos
        return response()->json(Crop::all(), 200);
    }

    public function store(Request $request)
    {
        // Validar los datos de entrada
        $validated = $request->validate([
            'variety' => 'required|string|max:255',
            'sowing_date' => 'required|date',
            'location' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        // Crear un nuevo cultivo
        $crop = Crop::create($validated);

        return response()->json($crop, 201);
    }

    public function show($id)
    {
        // Obtener un cultivo específico
        $crop = Crop::findOrFail($id);
        return response()->json($crop, 200);
    }

    public function update(Request $request, $id)
    {
        // Validar los datos de entrada
        $validated = $request->validate([
            'variety' => 'required|string|max:255',
            'sowing_date' => 'required|date',
            'location' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        // Actualizar el cultivo específico
        $crop = Crop::findOrFail($id);
        $crop->update($validated);

        return response()->json($crop, 200);
    }

    public function destroy($id)
    {
        // Eliminar un cultivo específico
        $crop = Crop::findOrFail($id);
        $crop->delete();

        return response()->json(null, 204);
    }
}
