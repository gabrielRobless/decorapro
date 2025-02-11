<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cortina;

class PersianasProductController extends Controller
{
    //
    public function index(Request $request)
    {
        $color = $request->query('color');
        $tipo = $request->query('tipo');
        $Categorias = $request->query('tela');

        $query = cortina::query();

        if ($color) {
            $query->where('Color', 'LIKE', "%$color%");

        }
        if ($tipo) {
            $query->where('Etiquetas', 'LIKE', "%$tipo%");
        }
        if ($Categorias) {
            $query->where('Tela', 'LIKE', "%$Categorias%");
        }

        $persiana = $query->paginate(16)->appends([
            'color' => $color,
            'tipo' => $tipo,
            'Categorias' => $Categorias,
        ]);


        return view('persianasproduct', compact('persiana'));
    }

    public function show($id)
{
    $persiana = cortina::findOrFail($id); // Encuentra el producto o lanza un error 404

    $imagenes = explode(',', $persiana->Imagenes);
    return view('showpercianas', compact('persiana', 'imagenes')); // Retorna a la vista de detalles
}
}
