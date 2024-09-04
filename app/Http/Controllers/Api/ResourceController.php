<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Resource;
use Illuminate\Http\Request;

class ResourceController extends Controller
{
    public function index()
    {
        // Listar todos los recursos
        return response()->json(Resource::all(), 200);
    }

    public function store(Request $request)
    {
        // Validar los datos de entrada
        $validated = $request->validate([
            'crop_id' => 'required|exists:crops,id',
            'type' => 'required|string|max:255',
            'amount' => 'required|numeric',
            'application_date' => 'required|date',
            'notes' => 'nullable|string',
        ]);

        // Crear un nuevo recurso
        $resource = Resource::create($validated);

        return response()->json($resource, 201);
    }

    public function show($id)
    {
        // Obtener un recurso específico
        $resource = Resource::findOrFail($id);
        return response()->json($resource, 200);
    }

    public function update(Request $request, $id)
    {
        // Validar los datos de entrada
        $validated = $request->validate([
            'crop_id' => 'required|exists:crops,id',
            'type' => 'required|string|max:255',
            'amount' => 'required|numeric',
            'application_date' => 'required|date',
            'notes' => 'nullable|string',
        ]);

        // Actualizar el recurso específico
        $resource = Resource::findOrFail($id);
        $resource->update($validated);

        return response()->json($resource, 200);
    }

    public function destroy($id)
    {
        // Eliminar un recurso específico
        $resource = Resource::findOrFail($id);
        $resource->delete();

        return response()->json(null, 204);
    }
}
