<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Pest;
use Illuminate\Http\Request;

class PestController extends Controller
{
    public function index()
    {
        // Listar todas las plagas
        return response()->json(Pest::all(), 200);
    }

    public function store(Request $request)
    {
        // Validar los datos de entrada
        $validated = $request->validate([
            'crop_id' => 'required|exists:crops,id',
            'pest_type' => 'required|string|max:255',
            'severity' => 'required|in:low,medium,high',
            'reported_date' => 'required|date',
            'actions_taken' => 'nullable|string',
        ]);

        // Crear una nueva plaga
        $pest = Pest::create($validated);

        return response()->json($pest, 201);
    }

    public function show($id)
    {
        // Obtener una plaga específica
        $pest = Pest::findOrFail($id);
        return response()->json($pest, 200);
    }

    public function update(Request $request, $id)
    {
        // Validar los datos de entrada
        $validated = $request->validate([
            'crop_id' => 'required|exists:crops,id',
            'pest_type' => 'required|string|max:255',
            'severity' => 'required|in:low,medium,high',
            'reported_date' => 'required|date',
            'actions_taken' => 'nullable|string',
        ]);

        // Actualizar la plaga específica
        $pest = Pest::findOrFail($id);
        $pest->update($validated);

        return response()->json($pest, 200);
    }

    public function destroy($id)
    {
        // Eliminar una plaga específica
        $pest = Pest::findOrFail($id);
        $pest->delete();

        return response()->json(null, 204);
    }
}
