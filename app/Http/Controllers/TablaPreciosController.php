<?php

namespace App\Http\Controllers;

use App\user_fb;


use App\user_medi;


use App\user_space;
use App\establecimientos;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use Barryvdh\Debugbar\Facades\Debugbar;


class TablaPreciosController extends Controller
{
    public function index(Request $request)
    {
        Debugbar::error('Error!');
        Debugbar::warning('Watch out…');
        Debugbar::addMessage('Another message', 'mylabel');        
        //$precios = user_space::orderBy('id','DESC')->paginate(5);//Ordena de forma descendente depende del id
        //$precios=user_space::findOrFail(1)->paginate(5);//Compara la tabla relacionada con un valor especifico en el id
        //$precios = user_medi::where('id',2)->paginate(5);//Muestra solamente los que tienen id 2 en la tabla
        $nombre = $request->get('nameSearch');
        $precio = $request->get('nameSearch2');
        Debugbar::addMessage('Another message', 'mylabel');        
        $filtro = $request->get('filtro');
        Debugbar::addMessage('Another message', 'mylabel');        

        $precios=user_medi::orderBy('id', 'DESC')->nombre($nombre)->precio($precio)->filtro($filtro)->paginate(14);
        Debugbar::addMessage('Another message', 'mylabel');        
        Debugbar::info($precios);
        $mapaUserFbs=user_fb::all();
        $establecimientos_ubi=establecimientos::all();
        Debugbar::addMessage('Another message', 'mylabel');        
        return view('preciosTabla', compact('precios','mapaUserFbs','establecimientos_ubi'));
     
    }
    
    /*
    *
    * Mantenimiento de busqueda de precios por parte del usuario - Brandom Noriega
    *
    */
    public function buscarSearch(Request $request)
    {
        // codigo a modificar
     
    }

    /* public function filtroSearch(Request $request){
        $precios=user_medi::paginate(7);
        $mapaUserFbs=user_fb::all();
        $new=user_medi::paginate(7);
        $establecimientos_ubi=establecimientos::all();
        $filtro=user_medi::where('tipo_medicamento',$request->filtro)->paginate(7);
        return view('preciosTabla', compact('precios','mapaUserFbs','new','establecimientos_ubi','filtro'));
    } */

}
