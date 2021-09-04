<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    # Controlador for homeController
    # El Método invoke controla una sola ruta:
    public function __invoke(){
        return view('home');
        #return 'Un texto de controlador';
    }
}
