<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
            $usuario = 'Administrador';
            return view('welcome', ['usuario'=>$usuario]);
    }

    public function create(){
        return view('events.create');
    }
}
