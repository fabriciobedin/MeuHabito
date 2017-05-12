<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HabitosController extends Controller
{
    public function index() {
        $nome = "Fabricio Bedin";
        return view('habitos', ['nome'=>$nome]);
    }
}
