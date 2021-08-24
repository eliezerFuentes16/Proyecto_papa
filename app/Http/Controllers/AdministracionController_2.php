<?php

namespace App\Http\Controllers;
use App\post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AdministracionController extends Controller
{
    public function login()
    {
    	return view('administracion.login');
    }

    public function escritos2()
    {
        if (!Auth::check()){
            return redirect('/');
        }


        $publicaciones=post::all();
        
        return view('administracion.ver_post',compact("publicaciones"),['seccion'=>'escritos']);
    	
    }

    public function agregar_escrito()
    {
        if (!Auth::check()){
            return redirect('/');
        }

    	return view('administracion.agregar_escrito',['seccion'=>'escritos']);
    }

    public function agregar_titulo(Request $request)
    {

        if (!Auth::check()){
            return redirect('/');
        }
        return 'hola';
    }

    

    public function agregar_video()
    {

        if (!Auth::check()){
            return redirect('/');
        }
        return view('administracion.agregar_video',['seccion'=>'videos']);
    }

    public function resena()
    {
        if (!Auth::check()){
            return redirect('/');
        }
        return view('administracion.resena',['seccion'=>'resena']);
    }

    
}
