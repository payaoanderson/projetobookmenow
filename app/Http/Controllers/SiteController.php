<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home(){
        return view("home");
    }

    public function sobreNos(){
        return view("sobre-nos");

    }

    public function contato(){
        return view("contato");
        
    }
}
