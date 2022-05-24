<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\noticias_a;

class NoticiasController extends Controller
{
    public function index(Request $request)
    {
        $tipo  = $request->get('tipo');
        $orden = noticias_a::orderBy('id', 'ASC')
    		->tipo($tipo)
            ->paginate(9);
            
        //$noticias=Noticias::all();
        return view('noticias',compact('orden'));
    	//return view('user', compact('users'));
    }
}
