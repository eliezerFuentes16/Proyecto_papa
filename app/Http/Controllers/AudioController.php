<?php

namespace App\Http\Controllers;

use App\audios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class AudioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function audios()
    {
        $audios=audios::all();


        return view('administracion.ver_audios',compact('audios'));
    }


    public function agregar_audio()
    {
        return view("administracion.agregar_audio");
    }

    public function ver_audio($id,$nombre_video)
    {
        $audio=audios::findOrFail($id);
        $audios_mostrar=audios::all()->take(3);


        /*foreach ($videos_mostrar as $videos) {
            echo $videos;
        }*/

        return view('administracion.audio',compact("audio"),compact("audios_mostrar"));

    }



    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $entrada=$request->except('_token');

        if ($archivo=$request->file('FOTO')){

            $nombre=$archivo->getClientOriginalName();

            $archivo->move('images',$nombre);
            $entrada['FOTO']=$nombre;
        }
       
       
        audios::create($entrada);
        return redirect('/administracion-audios');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $publicacion=audios::findOrFail($id);

        return view('administracion.editar_audio',compact('publicacion'));
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
       $entrada=$request->except('_token');


        if ($archivo=$request->file('FOTO')){

            $nombre=$archivo->getClientOriginalName();

            $archivo->move('images',$nombre);
            $entrada['FOTO']=$nombre;
        }

        $publicacion=audios::findOrFail($id);
        
        Storage::disk('public')->delete($publicacion->FOTO1);

        $publicacion->update($entrada); 

        return redirect("/administracion-audios");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $publicacion=audios::findOrFail($id);

        $publicacion->delete();
        return redirect('/administracion-audios');
    }
}
