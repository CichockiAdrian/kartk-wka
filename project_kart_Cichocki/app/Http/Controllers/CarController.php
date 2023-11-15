<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarController extends Controller
{
    public function CarValid(Request $req){

        $req->validate([
            'marka' => 'required | min:2 | max:15',
            'email' => 'required | email',
        ],[
            
            'marka.required' => 'Wypełnij pole :attribute',
            'marka.min' => 'Wpisz conajmniej :min znaki do pola :attribute',
            'marka.max' => 'Możesz wpisać maksymalnie :max znaków do pola :attribute',

            'email.required' => 'Wypełnij pole :attribute',
            'email.email' => 'Pole :attribute musi być typu email',
        
        ]);

        $data =[
            'marka' => $req->input('marka'),
            'pojemnosc' => $req->input('pojemnosc'),
            'email' => $req->input('email'),
        ];

        return view('test', $data);

    }
}



