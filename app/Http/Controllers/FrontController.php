<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    //
     /**
     * funcion que retorna la visata del frotend
     */
    public function index(){
        return view('Frontend.app');
    }
    /**
     * funcion que retorna la visata del frotend
     */
    public function viewContacto(){
        return view('Frontend.contacto');
    }
   
}
