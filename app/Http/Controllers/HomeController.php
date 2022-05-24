<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\user_space;
use App\user_medi;
use App\user_comment;
use App\comments_general;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*
     public function __construct()
    {
        $this->middleware('auth');
    }
    */
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contrac  ts\Support\Renderable
     */
    public function index()
    {
        return view('welcome');    
    } 
    public function login(){
        return view('login');
    }
    public function registro(){
        
        return view('registro');
    }

    public function identificacion(Request $request){


        $datos_usuario=User::all();
        return view('welcome',compact('datos_usuario'));
    }
    public function nuevoRegistro(Request $request){

        $contraRepetida = $request->contra_re;
        $correo=User::where('correo_recu',$request->correo)->first();
        $longitud=-1;
        $latitud=-1;

        $nombresDistritos=array(
            'Ancon'=>array('lat'=>-11.77429,'long'=>-77.17429),'Ate'=>array('lat'=>-12.02625,'long'=>-76.91983)
            ,'Carabayllo'=>array('lat'=>-11.87510,'long'=>-77.01699)
            ,'Comas'=>array('lat'=>-11.93036,'long'=>-77.05476)
            ,'Independencia'=>array('lat'=>-11.99149,'long'=>-77.05064)
            ,'Lince'=>array('lat'=>-12.08433,'long'=>-77.03553)
            ,'Los Olivos'=>array('lat'=>-11.95958,'long'=>-77.07364)
            ,'Miraflores'=>array('lat'=>-12.12092,'long'=>-77.02935),'Pueblo Libre'=>array('lat'=>-12.07752,'long'=>-77.06677)
            ,'Puente Piedra'=>array('lat'=>-11.86200,'long'=>-77.07673),'Rimac'=>array('lat'=>-12.02658,'long'=>-77.03381)
            ,'San Isidro'=>array('lat'=>-12.10011,'long'=>-77.04068)
            ,'San Martin de porres'=>array('lat'=>-11.98142,'long'=>-77.09561),'San Miguel'=>array('lat'=>-12.07258,'long'=>-77.09767)
            ,'San Juan de Lurigancho'=>array('lat'=>-12.00274,'long'=>-77.00841)            
        );


        if($request->sexo ==NULL){

            return back()->with('mensaje3','Sexo no selecionado');
        }


        if($request->distrito ==NULL){
            return back()->with('mensaje2','Distrito no selecionado');

        }else{
            $latitud=$nombresDistritos[$request->distrito]['lat'];
            $longitud=$nombresDistritos[$request->distrito]['long'];
            
        }


        $request->validate([
            'usuario'=>'required|string|max:25',
            'contra'=>'required|string|min:6',
            'contra_re'=>'required',
            'correo'=>'required|email|max:255',
            'distrito'=>'required',
            'sexo'=>'required'
        ]);
        if($contraRepetida != $request->contra){
            return back()->with('mensaje','Contraseñas no coinciden');
        }
        //Correo para produccion//
        /*
        if($correo != NULL){
            return back()->with('mensaje1','Correo no insertado');
        }
        */
        //Fin correo para produccion//
        //Provisional correo//
        if($request->correo==NULL){
            return back()->with('mensaje1','Correo no insertado');
        }
        //Fin correo Provicionañ//

        $usuarioNuevo= new User();
        
        
        $usuarioNuevo->usuario = $request->usuario;
        $usuarioNuevo->password=bcrypt($request->contra);
        $usuarioNuevo->correo_recu=$request->correo;
        $usuarioNuevo->distrito=$request->distrito;
        $usuarioNuevo->sexo=$request->sexo;
        $usuarioNuevo->latitude=$latitud;
        $usuarioNuevo->longitude=$longitud;

        $usuarioNuevo->save();     
        return redirect('/')->with('mensaje','Usuario Agregado correctamente');

    }
    public function homeUser($nombre){
        $usuario = user_space::where('name_space',$nombre)->first();
        $usuarioBotica=User::where('id',$usuario->userFb->user_id)->first();
        $productoUser=user_medi::where('user_space_id',$usuario->id)->paginate(5);
        $comentarioUser=user_comment::orderBy('id', 'DESC')->where('user_id',$usuario->userFb->user_id)->paginate(14);
        $user=Auth::user();    

        return view('/perfilFb',compact('usuarioBotica','usuario','productoUser', 'comentarioUser', 'user' ));

    }
    public function commentsGeneral(){

        $commentsGen=comments_general::all();
        $user=Auth::user();    

        return view('comentarios',compact( 'commentsGen' , 'user' ));

    }
}
