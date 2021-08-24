<?php

namespace App\Http\Controllers;
use App\video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function ver_videos($id,$nombre_video)
    {
        if (!Auth::check()){
            return redirect('/');
        }

        $video=video::findOrFail($id);
        $videos_mostrar=video::all()->take(3);


        /*foreach ($videos_mostrar as $videos) {
            echo $videos;
        }*/

        return view('administracion.video',compact("video"),compact("videos_mostrar"));

    }


    public function videos()
    {
        if (!Auth::check()){
            return redirect('/');
        }

        $publicaciones=video::all();
        
        return view('administracion.ver_videos',compact("publicaciones"),['seccion'=>'videos']);

    }

    public function borrar_video($id)
    {
        if (!Auth::check()){
            return redirect('/');
        }
        return $id;

    }


    public function index()
    {
        if (!Auth::check()){
            return redirect('/');
        }
       return 'hoal';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return 'hoal';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if (!Auth::check()){
            return redirect('/');
        }
        $entrada=$request->except('_token');

        if ($archivo=$request->file('VIDEO')){

            $video=$archivo->getClientOriginalName();

            $archivo->move('videos',$video);
            $entrada['VIDEO']=$video;
        
        
        }
        

        if ($archivo=$request->file('FOTO')){

            $nombre=$archivo->getClientOriginalName();

            $archivo->move('images',$nombre);
            $entrada['FOTO']=$nombre;
        
        
        }
        video::create($entrada);
        return redirect('/administracion-videos');



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      return 'hoal';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (!Auth::check()){
            return redirect('/');
        }
        $publicacion=video::findOrFail($id);

        return view('administracion.editar_video',compact('publicacion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (!Auth::check()){
            return redirect('/');
        }
        $entrada=$request->except('_token');


        if ($archivo=$request->file('FOTO')){

            $nombre=$archivo->getClientOriginalName();

            $archivo->move('images',$nombre);
            $entrada['FOTO']=$nombre;
        }

        $publicacion=video::findOrFail($id);
        
        Storage::disk('public')->delete($publicacion->FOTO1);

        $publicacion->update($entrada);

        return redirect("/administracion-videos");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!Auth::check()){
            return redirect('/');
        }

       $publicacion=video::findOrFail($id);

        $publicacion->delete();
        return redirect('/administracion-videos');
    }
}
