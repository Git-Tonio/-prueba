<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index($id)
    {
        if ($id == 4)
            $msg = "si es cliente";
        else
            $msg = "no es cliente";

        return view('cliente',['id' => $id,'msg' => $msg]);
    }
}
