<?php

namespace App\Http\Controllers;
use App\Models\Proyecto;
use Illuminate\Http\Request;

class CursoController extends Controller
{
   
    public function index()
    {
        $proyectos = Proyecto::paginate();

        return view('welcome', compact('proyectos'));
          
    }
}
