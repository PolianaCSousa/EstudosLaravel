<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function index() {
    
        $dado = 'Dados:';
        $texto = 'Texto:';
        return view ('welcome', ['dado' => $dado, 'texto' => $texto]);
    
    }
}
