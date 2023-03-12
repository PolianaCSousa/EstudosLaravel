<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRequest;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store(StoreRequest $request){
     

        dd($request->validated());

    }
}
