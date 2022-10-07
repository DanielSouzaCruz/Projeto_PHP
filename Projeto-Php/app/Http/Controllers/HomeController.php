<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $nome = 'José da Silva';
        $idade = 68;
        $informacao = null;

        return view('home', [
            'nome' => $nome, 
            'idade' => $idade,
            'informacao' => $informacao
        ]);
    }

    public function users(){
        $users = [
            ['nome'=> 'José da Silva', 'idade'=> 68, 'cidade'=>'Maringa'],
            ['nome'=> 'Ana Clara', 'idade'=>26, 'cidade'=>'Londrina'],
            ['nome'=> 'Maria Soares', 'idade'=>55, 'cidade'=>'Curitiba']
        ];

        return view('users',['users'=> $users]);
    }
}