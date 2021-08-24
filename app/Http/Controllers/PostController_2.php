<?php

namespace App\Http\Controllers;
use App\post;
use Illuminate\Http\Request;
use App\video;
use App\audios;
class PostController extends Controller
{
    public function inicio()
    {
        
        $post=post::all()->take(3);

        $audio=post::all()->take(3);
        /*$video=video::all()->take(1);*/
        return view('index',compact('post'),compact('audio'));
    }

    public function escritos()
    {
        $publicaciones=post::all();
        
        return view('escritos',compact("publicaciones"),['seccion'=>'escritos']);
    }

    public function ver_escritos_normal($id,$nombre_escrito)
    {

        $publicacion=post::findOrFail($id);
        $post_mostrar=post::where('id','!=',$id)->take(2)->get();
        
        return view('ver_escrito',compact('publicacion'),compact('post_mostrar'));
    }



    public function ver_escritos($id,$nombre_escrito)
    {

        $publicacion=post::findOrFail($id);
        $post_mostrar=post::where('id','!=',$id)->take(2)->get();
        
        return view('administracion.ver_escrito_admi',compact('publicacion'),compact('post_mostrar'));
    }

    public function videos()
    {
        $publicaciones=video::all();


       return view('videos',compact("publicaciones"),['seccion'=>'videos']);
    }

    public function VerVideo($id,$nombre_video)
    {
        $video=video::findOrFail($id);
        $videos_mostrar=video::all()->take(3);


        /*foreach ($videos_mostrar as $videos) {
            echo $videos;
        }*/

        return view('video',compact("video"),compact("videos_mostrar"));
    }



    public function audios()
    {

        $audios=audios::all();

        return view('audios',compact('audios'));  
    }

    public function VerAudio($id,$nombre_audio)
    {

        $audio=audios::findOrFail($id);
        $audios_mostrar=audios::all()->take(3);


        /*foreach ($videos_mostrar as $videos) {
            echo $videos;
        }*/

        return view('audio',compact("audio"),compact("audios_mostrar")); 
    }



    public function resena()
    {
        return view('resena',['seccion'=>'resena']);
    }


    
}
