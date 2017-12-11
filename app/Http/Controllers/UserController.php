<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index(){

    	if( request()->has('empty') ){

    		$usuarios = [];

    	}else{

    		$usuarios = [
	    		'Alejandro',
	    		'Karen',
	    		'Estrella',
	    		'Bethoven',
	    	];

    	}

    	
    	return view('users.index', compact('usuarios'));
    } // index

    public function show($id){

    	return "Mostrando detalle del usuario: {$id}";
    } // show

    public function create(){
    	return "Crear nuevo usuario";
    } // create

    public function edit($id){
    	return "Editar usuario {$id}";
    }

}
