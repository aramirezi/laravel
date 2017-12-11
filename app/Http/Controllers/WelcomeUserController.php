<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeUserController extends Controller
{
    //

    public function index($name){

		return "Bienvenido {$name}";

    } // index

    public function home($name, $nickname = null){
    	return "Bienvenido {$name}, tu apodo es {$nickname}";
    } // home
}
