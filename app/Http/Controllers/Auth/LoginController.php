<?php

namespace App\Http\Controllers\Auth;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\user_space;
use App\user_medi;
use App\user_fb;
use App\establecimientos;
use Illuminate\Support\Facades\Mail;
use App\Mail\MessageReceived;
use Vinelab\Tracing\Facades\Trace;
use Vinelab\Tracing\Contracts\Tracer;
use App\Mail\MessageReporte;
use App\Mail\MessageReporteNoti;
//use App\Providers\RouteServiceProvider;
//use Illuminate\Foundation\Auth\AuthenticatesUsers;
class LoginController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest', ['only' => 'showLoginForm']);
    }

    public function showLoginForm()
    {   
        $span = Trace::startSpan('Nuevo tracer');      
        $span2 = Trace::startSpan('Otro traacer');
        $span->annotate('Order Validated');             
        $span3 = Trace::startSpan('vaca');      
        $span->annotate('Fin Validated');             
        $valor = Trace::getCurrentSpan();
        $span->finish();
        return view('login');
    }

    public function login()
    {
        $credentials = $this->validate(request(), [
            $this->username() => 'required|string',
            'password' => 'required|string'
        ]);

        if(Auth::attempt($credentials))
       {
            return redirect()->route('welcomeUserRegister');
        }

        return back()
        ->withErrors([$this->username() => trans('auth.failed')])
        ->withImput(request([$this->username()]));
    }

    public function logout()
    {
        Auth::logout();
        
        return redirect('/home/login');
    }

    public function username()
    {
        return 'usuario';
    } 
    public function perfilUserfb(){
        $usuarioLogeado =\Auth::user(); 
        $is_fb = true;
        if($usuarioLogeado->tipo == NULL){
            $is_fb=false;
            return view('userFb/perfilFbE',compact('is_fb'));
        }else{
            $is_fb=true;
            //$medicinasShow = $usuarioLogeado->userFb->userSpace->userMedi;
            $establecimientos_ubi=establecimientos::all();

            $medicinasShow=user_medi::where('user_space_id',$usuarioLogeado->userFb->userSpace->id)->paginate(5);
            return view('userFb/perfilFbE',compact('is_fb','medicinasShow','establecimientos_ubi'));
        }
    }

    public function update(Request $request){
        $usuarioLogeado =\Auth::user(); 
        if($request->contra!=NULL){
            if($request->contra != $request->contra_re){
                return back()->with('mensaje','Contraseñas no coinciden');
            }    
        }

        if($request->sexo==NULL){
            $request->sexo=$usuarioLogeado->sexo;
        }
        if($usuarioLogeado->tipo != NULL){

            if($request->contra!=NULL){$usuarioLogeado->password=bcrypt($request->contra);}
            if($request->sexo!=NULL){$usuarioLogeado->sexo=$request->sexo;}
            if($request->correo!=NULL){$usuarioLogeado->correo_recu=$request->correo;}
            if($request->telefono!=NULL){$usuarioLogeado->telefono=$request->telefono;}

            
            if($request->caliFb!=NULL){$usuarioLogeado->userFb->cali_fb=$request->caliFb;}            
            if($request->requiComplete!=NULL){$usuarioLogeado->userFb->requi_complete=$request->requiComplete;}            
            if($request->nameSpace!=NULL){$usuarioLogeado->userFb->userSpace->name_space=$request->nameSpace;} 
            if($request->descripcion!=NULL){$usuarioLogeado->userFb->userSpace->descripcion=$request->descripcion;}            
            //Para el mapa//
            if($request->latitudLocal0!=NULL && $request->longitudLocal0!=NULL){
                $ubiEstablecimiento= new establecimientos();    
                $ubiEstablecimiento->latitude_fb_es=$request->latitudLocal0;
                $ubiEstablecimiento->longitude_fb_es=$request->longitudLocal0;
                $ubiEstablecimiento->user_space_id=$usuarioLogeado->userFb->userSpace->id;
                $ubiEstablecimiento->save();
            }
            if($request->latitudLocal1!=NULL && $request->longitudLocal1!=NULL){
                $ubiEstablecimiento= new establecimientos();    
                $ubiEstablecimiento->latitude_fb_es=$request->latitudLocal1;
                $ubiEstablecimiento->longitude_fb_es=$request->longitudLocal1;
                $ubiEstablecimiento->user_space_id=$usuarioLogeado->userFb->userSpace->id;
                $ubiEstablecimiento->save();
            }
                       
            if($request->latitudLocal2!=NULL && $request->longitudLocal2!=NULL){
                $ubiEstablecimiento= new establecimientos();    
                $ubiEstablecimiento->latitude_fb_es=$request->latitudLocal2;
                $ubiEstablecimiento->longitude_fb_es=$request->longitudLocal2;
                $ubiEstablecimiento->user_space_id=$usuarioLogeado->userFb->userSpace->id;
                $ubiEstablecimiento->save();
            }
            if($request->latitudLocal3!=NULL && $request->longitudLocal3!=NULL){
                $ubiEstablecimiento= new establecimientos();    
                $ubiEstablecimiento->latitude_fb_es=$request->latitudLocal3;
                $ubiEstablecimiento->longitude_fb_es=$request->longitudLocal3;
                $ubiEstablecimiento->user_space_id=$usuarioLogeado->userFb->userSpace->id;
                $ubiEstablecimiento->save();
            }
            if($request->latitudLocal4!=NULL && $request->longitudLocal4!=NULL){
                $ubiEstablecimiento= new establecimientos();    
                $ubiEstablecimiento->latitude_fb_es=$request->latitudLocal4;
                $ubiEstablecimiento->longitude_fb_es=$request->longitudLocal4;
                $ubiEstablecimiento->user_space_id=$usuarioLogeado->userFb->userSpace->id;
                $ubiEstablecimiento->save();
            }
        }else{
            //dd($request->file('documentos_upload')->store('public'));
            if($request->contra!=NULL){$usuarioLogeado->password=bcrypt($request->contra);}
            if($request->sexo!=NULL){$usuarioLogeado->sexo=$request->sexo;}
            if($request->correo!=NULL){$usuarioLogeado->correo_recu=$request->correo;}

            if($request->tipo!=NULL && $request->tipo!="Selecionar"){$usuarioLogeado->tipo=$request->tipo;}
            if($request->videoMuestra!=NULL){$usuarioLogeado->video_muestra=$request->videoMuestra;}
            if($request->telefono!=NULL){$usuarioLogeado->telefono=$request->telefono;}

            

            //dd($request->file('documentos_upload')->getClientOriginalName());
            if($request->file('documentos_upload')!=NULL){
                $usuarioLogeado->documentos=$request->file('documentos_upload')->getClientOriginalName();
                \Storage::disk('local')->put($request->file('documentos_upload')->getClientOriginalName(),\File::get($request->file('documentos_upload')));
            }

            if($request->videoMuestra!=NULL){
                $usuarioLogeado->video_muestra=$request->videoMuestra;
            }



            //Creacion de cuenta de fbs
            if($request->tipo!=NULL && $request->tipo!="Selecionar"){

                $usuarioFb= new user_fb();    
                $usuarioFb->latitude_fb = -11.9814;
                $usuarioFb->longitude_fb = -77.1;
                $usuarioFb->user_id = $usuarioLogeado->id;
                $usuarioFb->cali_fb = 0;
                $usuarioFb->requi_complete = 'si';
                $usuarioFb->save();
                //Creacion de espacio
                $usuarioSpace=new user_space();
                $usuarioSpace->name_space="Inserte titulo";
                $usuarioSpace->descripcion="Inserte descripcion";
                $usuarioSpace->user_fb_id=$usuarioFb->id;
                $usuarioSpace->save();
                //$valorAuxUser=$usuarioLogeado->usuario;
                Mail::to($usuarioLogeado->correo_recu)->send(new MessageReceived($usuarioLogeado));
                //Creacion de medicina 

                //Creacion de establecimiento
            }

        }
        $usuarioLogeado->push();
        return redirect()->route('welcomeUserRegister',\Auth::user());
    }
    public function enviarReporte(Request $request){
        $camposComplete = $request->mensajeEmail;
        $usuarioLogeado = \Auth::user();        
        Mail::to(getenv('MAIL_FROM_ADDRESS'))->send(new MessageReporte($camposComplete,$usuarioLogeado));
        Mail::to($usuarioLogeado->correo_recu)->send(new MessageReporteNoti($camposComplete,$usuarioLogeado));
        return redirect()->route('welcomeUserRegister');
    }
    public function updateMedi(Request $request){
        $usuarioLogeado =\Auth::user(); 

        $nuevaMedi=new user_medi();
        $nuevaMedi->name_medi =$request->name_medi;
        $nuevaMedi->descripcion_medi = $request->descri_medi;
        if($request->price_medi<0){
            return back();
        }
        if($request->stock_medi<0){
            return back();
        }
        
        $nuevaMedi->precio_med = $request->price_medi;
        $nuevaMedi->cantidad = $request->stock_medi;
        $nuevaMedi->user_space_id=$usuarioLogeado->userFb->userSpace->id;
        $nuevaMedi->save();
        if($request->ajax()){
            return response()->json($nuevaMedi);
        }
        return redirect()->route('perfilFb',\Auth::user());
    }
    public function borrarMedi($medicinaId){
        $medicinaBorrar=user_medi::where('id',$medicinaId);
        $medicinaBorrar->delete();
        //$tablaHtml= view('containerTable',compact('view'))->render();
        //return response()->json(compact('html'));
        return redirect()->route('perfilFb',\Auth::user());
    }
    public function updateMediUser(Request $request){
        if($request!=NULL){
            $medicinaBorrar=user_medi::findOrFail($request->aslId);
        
            if($request->nameUpdate!=NULL){
                $medicinaBorrar->name_medi=$request->nameUpdate;
            }
            if($request->descriUpdate!=NULL){
                $medicinaBorrar->descripcion_medi=$request->descriUpdate;
            }
            if($request->precioUpdate!=NULL){
                $medicinaBorrar->precio_med=$request->precioUpdate;
            }
            if($request->stockUpdate!=NULL){
                $medicinaBorrar->cantidad=$request->stockUpdate;
            }
            $medicinaBorrar->save();
    
        }
        return redirect()->route('perfilFb',\Auth::user());
    }
}
