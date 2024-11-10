<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CortinasController extends Controller
{
    public  function index ()
    {
         return view('cortinas');
     }
}
