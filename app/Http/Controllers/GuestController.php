<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Etudiant;
use Illuminate\Support\Facades\Validator;

class GuestController extends Controller
{
    public function store(Request $request){

        $guest = new Etudiant();

        $guest->create($request->all());

        return response()->view('index');

    }

    public function show(){

    }
}
