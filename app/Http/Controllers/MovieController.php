<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MovieController extends Controller
{
    // Obtener todas las películas
    public function index()
    {
        $movies = DB::table('movies')->get();
        return response()->json($movies);
    }

    // Obtener una película por ID
    public function show($id)
    {
        $movie = DB::table('movies')->where('id', $id)->first();
        if ($movie) {
            return response()->json($movie);
        } else {
            return response()->json(['message' => 'Película no encontrada'], 404);
        }
    }

    // Actualizar película
    public function update(Request $request, $id)
    {
        $updated = DB::table('movies')
            ->where('id', $id)
            ->update([
                'title' => $request->input('title'),
                'synopsis' => $request->input('synopsis'),
                'year' => $request->input('year'),
                'cover' => $request->input('cover'),
                'updated_at' => now()
            ]);

        if ($updated) {
            return response()->json(['message' => 'Película actualizada correctamente']);
        } else {
            return response()->json(['message' => 'No se encontró la película o no hubo cambios'], 404);
        }
    }

    // Eliminar película
    public function destroy($id)
    {
        $deleted = DB::table('movies')->where('id', $id)->delete();

        if ($deleted) {
            return response()->json(['message' => 'Película eliminada correctamente']);
        } else {
            return response()->json(['message' => 'Película no encontrada'], 404);
        }
    }
    
    // Crear nueva película
    public function store(Request $request)
    {
        $id = DB::table('movies')->insertGetId([
        'title' => $request->input('title'),
        'synopsis' => $request->input('synopsis'),
        'year' => $request->input('year'),
        'cover' => $request->input('cover'),
        'created_at' => now(),
        'updated_at' => now()
    ]);
    return response()->json(['message' => 'Película creada correctamente', 'id' => $id], 201);
}

}
