<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cursoController extends Controller
{
    # Métodos para el controlador: 
    # Index para el inicio de la ruta:
    public function index(){
        return view('teoria.index');
    }
    #
    public function create(){
        return view('teoria.create');
    }

    public function show($id){
        return view('teoria.show', ['id' => $id]);
    }
}
