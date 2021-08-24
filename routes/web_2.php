<?php
use App\Http\Controllers\BlogController;
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



/*Route::get('/', function () {
    return view('index');
});
*/
/*Route::get('/escritos', function () {
    return view('escritos');
});
*/

/*Route::get('/ver-escritos', function () {
    return view('ver_escritos');
});*/

/*Route::get('/videos', function () {
    return view('videos');
});*/
/*Route::get('/', function () {
    return view('welcome');
});


Route::get('/pruebaa',function (){

	$user=Auth::user();
	if ($user->esAdmin()){

		echo 'Eres Administrador';
	}else{ echo 'no Eres Administrador';}



});


Route::get('/prueba',function (){

	return view('welcome');

});
*/



Route::get('/index','PostController@inicio');

Route::get('/escritos','PostController@escritos');
Route::get('/ver-escrito/{id}/{nombre_post}','PostController@ver_escritos_normal');



/*VIDEO*/
Route::get('/el-blanco-es-cristo-videos','PostController@videos');
Route::get('/el-blanco-es-cristo-ver-video/{id}/{nombre_video}','PostController@VerVideo');

/*AUDIOS*/
Route::get('/el-blanco-es-cristo-audios','PostController@audios');

Route::get('/el-blanco-es-cristo-ver-audio/{id}/{nombre_audio}','PostController@VerAudio');

/*RESEÑA*/
Route::get('/resena','PostController@resena');



/*ADMINISTRACION*/

Route::get('/', function () {
    return view('auth.login');
});
Auth::routes();
Route::group(['middleware' => 'auth'],function(){
/*LOGIN*/
/*Route::get('/administracion-login','AdministracionController@login');*/





	/*ESCRITOS*/
	Route::get('/el-blanco-es-cristo-administracion-escritos','AdministracionController@escritos2');
	Route::get('/administracion-agregar-escrito','AdministracionController@agregar_escrito');
	Route::get('/administracion-agregar-video','AdministracionController@agregar_video');
	Route::get('/administracion-audios','AudioController@audios');
	Route::get('/administracion-agregar-escrito-titulo-descripcion','AdministracionController@agregar_titulo');
	Route::resource('/administracion', 'BlogController');
	/*Route::resource('/administracion', 'BlogController');*/
	Route::get('/ver-escritos/{id}/{nombre_post}','PostController@ver_escritos');






	/*videos*/
	Route::resource('/video_administracion', 'VideoController');
	Route::get('/administracion-videos','VideoController@videos');
	Route::get('/administracion-ver-video/{id}/{nombre_video}','VideoController@ver_videos');
	Route::get('/borrar-video/{id}','VideoController@borrar_video');





	/*audios*/

	Route::resource('/audio_administracion', 'AudioController');
	Route::get('/administracion-audio','AudioController@agregar_audio');
	Route::get('/administracion-ver-audio/{id}/{nombre_audio}','AudioController@ver_audio');

	/*RESEÑA*/

	Route::get('/administracion-resena','AdministracionController@resena');


	Route::get('/home', 'HomeController@index')->name('home');
});