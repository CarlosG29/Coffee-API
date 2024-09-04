<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Traceability;
use Illuminate\Http\Request;

class TraceabilityController extends Controller
{
    public function index()
    {
        // Listar todos los registros de trazabilidad
        return response()->json(Traceability::all(), 200);
    }

    public function store(Request $request)
    {
        // Validar los datos de entrada
        $validated = $request->validate([
            'crop_id' => 'required|exists:crops,id',
            'batch_number' => 'required|string|max:255',
            'transport_date' => 'required|date',
            'destination' => 'required|string|max:255',
            'certifications' => 'nullable|string',
        ]);

        // Crear un nuevo registro de trazabilidad
        $traceability = Traceability::create($validated);

        return response()->json($traceability, 201);
    }

    public function show($id)
    {
        // Obtener un registro de trazabilidad específico
        $traceability = Traceability::findOrFail($id);
        return response()->json($traceability, 200);
    }

    public function update(Request $request, $id)
    {
        // Validar los datos de entrada
        $validated = $request->validate([
            'crop_id' => 'required|exists:crops,id',
            'batch_number' => 'required|string|max:255',
            'transport_date' => 'required|date',
            'destination' => 'required|string|max:255',
            'certifications' => 'nullable|string',
        ]);

        // Actualizar el registro de trazabilidad específico
        $traceability = Traceability::findOrFail($id);
        $traceability->update($validated);

        return response()->json($traceability, 200);
    }

    public function destroy($id)
    {
        // Eliminar un registro de trazabilidad específico
        $traceability = Traceability::findOrFail($id);
        $traceability->delete();

        return response()->json(null, 204);
    }
}
