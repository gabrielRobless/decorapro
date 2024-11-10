<?php

namespace App\Http\Controllers;

use App\Models\PapelTapiz;
use Illuminate\Http\Request;

class PapelTapizController extends Controller
{
    public function index(Request $request)
    {
        $color = $request->query('color');

        if ($color) {
            $papel = PapelTapiz::where('Valor(es) del atributo 1', $color)->paginate(16); // Paginación de 10 elementos
        } else {
            $papel = PapelTapiz::paginate(16);
        }

        return view('papeltapiz', compact('papel'));
    }

    public function show($id)
{
    $papel = PapelTapiz::findOrFail($id); // Encuentra el producto o lanza un error 404

    $imagenes = explode(',', $papel->Imágenes);
    return view('show', compact('papel', 'imagenes')); // Retorna a la vista de detalles
}

}
