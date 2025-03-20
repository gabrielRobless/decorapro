<?php

namespace App\Http\Controllers;

use App\Models\PapelTapiz;
use Illuminate\Http\Request;

class PapelTapizController extends Controller
{
    public function index(Request $request)
    {
        $color = $request->query('color');
        $categoria = $request->query('categoria');
        $estilos = $request->query('estilos');
        $coleccion = $request->query('coleccion');
        $entrega = $request->query('entrega');
        $etiquetas = $request->query('etiquetas');



        // Base de la consulta
        $query = PapelTapiz::query();

        if ($color) {
            $query->where('Color', $color);
        }

        if ($categoria) {
            $query->where('Categorias', 'LIKE', "%$categoria%");
        }
        if ($estilos) {
            $query->where('Estilo', 'LIKE', "%$estilos%");
        }

        if ($coleccion) {
            $query->where('Coleccion', 'LIKE', "%$coleccion%");
        }
        if ($entrega) {
            $query->where('Entrega', 'LIKE', "%$entrega%");
        }
        if ($etiquetas) {
            $query->where('Etiquetas', 'LIKE', "%$etiquetas%");
        }
        $query->orderByDesc('Posicion') // Ordena primero por el valor de Posicion de mayor a menor
        ->orderByRaw("
          CASE
              WHEN Nombre LIKE '%Descontinuado%' THEN 1 ELSE 0
          END")
        ->orderByRaw("
          CASE
              WHEN Entrega LIKE '%Entrega inmediata%' THEN 1
              WHEN Entrega LIKE '%Entrega (2 - 3 semanas)%' THEN 2
              WHEN Entrega LIKE '%Entrega (4 - 5 semanas)%' THEN 3
              ELSE 4
          END");
        $papel = $query->paginate(16)->appends([
            'color' => $color,
            'categoria' => $categoria,
            'estilos' => $estilos,
            'coleccion' => $coleccion,
        ]);

        return view('papeltapiz', compact('papel'));
    }
    public function show($id)
    {
        $papel = PapelTapiz::findOrFail($id); // Encuentra el producto o lanza un error 404
        $imagenes = explode(',', $papel->Imagenes);

        // Obtener cinco productos aleatorios de la misma categoría o color
        $productosRelacionados = PapelTapiz::where('id', '!=', $papel->id)
            ->where(function ($query) use ($papel) {
                $query->where('Categorias', $papel->Categorias)
                      ->orWhere('Color', $papel->Color);
            })
            ->where('Nombre', 'NOT LIKE', '%Descontinuado%')
            ->inRandomOrder()
            ->limit(5)
            ->get();

        return view('show', compact('papel', 'imagenes', 'productosRelacionados')); // Retorna a la vista de detalles
    }



    public function buscarAjax(Request $request)
{
    // Verifica si el parámetro 'query' existe y no está vacío
    $query = $request->input('query');

    if (empty($query)) {
        return response()->json(['error' => 'No se ha ingresado ninguna consulta.'], 400);
    }

    try {
        // Realiza la búsqueda
        $papeltapizs = PapelTapiz::where('categorias', 'LIKE', "%$query%")
                             ->orWhere('nombre', 'LIKE', "%$query%")
                             ->get();


        if ($papeltapizs->isEmpty()) {
            return response('<p>No se encontraron productos.</p>', 200);
        }

        // Generar HTML para los resultados
        $output = '<ul class="busqueda-tapiz">';
        foreach ($papeltapizs as $papeltapiz) {
            $output .='<div class="card-papel">';
            $imagenes = explode(',', $papeltapiz->Imagenes);
            $primeraImagen = trim($imagenes[0]);
            $output .= '<img class="img-papel" src="'. $primeraImagen .'" width="200" height="200" alt="imagen">';
            $output .= '<li><a href="/papeltapiz/' . $papeltapiz->id . '">' . $papeltapiz->Nombre .'</a> - '. ' - ' . $papeltapiz->categorias . '</>';
            $output .= '</div>';
        }
        $output .= '</ul>';

        return response($output, 200);

    } catch (\Exception $e) {
        // Si ocurre un error, devuelve un mensaje de error
        return response()->json(['error' => 'Hubo un problema con la búsqueda.'], 500);
    }
}

}
