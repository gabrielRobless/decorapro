<?php

namespace App\Http\Controllers;


use App\Mail\FormularioMail;
use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;

class DistribuidorController extends Controller
{
    //
    public  function index ()
    {
     return view('Distribuidor');
   }

   public function enviar(Request $request)
   {
       // Validar los campos del formulario
       $validatedData = $request->validate([
           'nombre' => 'required|string|max:255',
           'email' => 'required|email',
           'producto' => 'required|string',
           'telefono' => 'required|numeric',
           'mensaje' => 'required|string',
       ]);

       // Enviar el correo
       Mail::to('sistemas@pelotinas.com')->send(new FormularioMail($validatedData));

       // Retornar una respuesta al usuario
       return redirect()->back()->with('success', 'El mensaje se envió correctamente.');
   }

}
