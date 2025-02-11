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
            ->inRandomOrder()
            ->limit(5)
            ->get();

        return view('show', compact('papel', 'imagenes', 'productosRelacionados')); // Retorna a la vista de detalles
    }

}
