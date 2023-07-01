<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonaController extends Controller
{
   public function index()
   {
      // Types of msj

      // $msj = "I'm a msj";
      // var_dump($msj);md
      
      // dump($msj);
      // echo $msj;
      // echo "I'm an echo";
      // return "I'm Index of person";

      return view('persona');
   }
}
