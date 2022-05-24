<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Mail\MessageReceived;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/','HomeController@index')->name('home');
Route::post('/home','HomeController@nuevoRegistro')->name('home2');
Route::get('/home/registro','HomeController@registro')->name('registro');
Route::get('/home/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::get('welcomeUserRegister', 'WelcomeController@index')->name('welcomeUserRegister');
Route::post('/home/login','Auth\LoginController@login')->name('login3');
Route::post('logout','Auth\LoginController@logout')->name('logout');
Route::get('/home/preciosTabla', 'TablaPreciosController@index')->name('preciosTabla');
Route::post('/home/precioTabla','TablaPreciosController@busquedaSearch')->name('busquedaSearch');
    Route::post('/home/precioTabla','TablaPreciosController@filtroSearch')->name('filtroSearch');
Route::get('/home/precioTabla/{nombre?}','HomeController@homeUser')->name('home.pagUser');
Route::get('/home/user/{nombre}','Auth\LoginController@perfilUserfb')->name('perfilFb');
Route::post('/home/user/{nombre}','Auth\LoginController@update')->name('update.userfb');
    Route::get('/home/comentsgeneral','HomeController@commentsGeneral')->name('comments');

Route::post('/home/user/medi/{nombre}','Auth\LoginController@updateMedi')->name('update.medi');

Route::get('/home/user/medi/borrar/{medicinaId}','Auth\LoginController@borrarMedi')->name('borrar.medi');

Route::post('/comment','CommentsController@newComment');
    Route::post('/commentgen','Comments_genController@newCommentGen');

//Route::get('/home/preciosTabla','TablaPreciosController@index')->name('atras1');
Route::get('/home/noticias','NoticiasController@index')->name('noticias');


Route::get('creacionAuth', 'Auth\LoginController@creacionCampos')->name('crearCampos');


//Route::post('/home/emailSend','emailController@index')->name('emailValor');

Route::post('/home/user/medi/update/ar/a','Auth\LoginController@updateMediUser')->name('updateMediUserNow');
Route::post('/home/sendEmail','Auth\LoginController@enviarReporte')->name('reporteEnviado');

//Route::get('/home/comentarios', function () { return view('comentarios');})->name('comentarios');