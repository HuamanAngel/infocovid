<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\MessageReceived;
class emailController extends Controller
{
    public function index(){
        $valor=['nombre'=>"Juan",'apellido'=>"Pedro",'edad'=>12];
        Mail::to('caminante98123.123@gmail.com')->send(new MessageReceived($valor));
        return new MessageReceived($valor);
    
    }

}
