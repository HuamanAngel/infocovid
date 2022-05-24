<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use user_all as GlobalUser_all;

class user_allController extends Controller
{

    public function index(){
  
        $datos_user=User::all();
        return view('probando',compact('datos_user'));
    
    
    }

    public function vista3(){
        return view('nuevo');
    }


    public function detalle($id_all){
        $identificador = User::findOrfaild($id_all);
        return view('welcome',compact('identificador'));
    }
    
     public function crear(Request $request){
         $request->validate([

            'usuario'=>'required',
            'contra'=>'required',
            'correo'=>'required',
            'distrito'=>'required',
            'sexo'=>'required'

         ]);
        
         $personaNueva=new User();
         $personaNueva->usuario = $request->usuario;
         $personaNueva->contra=$request->contra;
         $personaNueva->correo_recu=$request->correo;
         $personaNueva->distrito=$request->distrito;
         $personaNueva->sexo=$request->sexo;
         $personaNueva->save();     
        return back()->with('mensaje','Nota agregada');
  //        return redirect('/create');
 
    }
 
     public function read(Request $request){
         $usuario_detalles=User::all();
         return view('nuevo',['usuario_detalle'=>$usuario_detalles]);
     }
 
}


