<?php

namespace App\Http\Controllers;

use App\Http\Requests\InputBasicoRequest;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function signIn(InputBasicoRequest $request){

        //dd($request->validated());

       return view('resultado', ['nome' => $request->input('userName'), 'senha' => $request->input('senha')]);
    }
}
