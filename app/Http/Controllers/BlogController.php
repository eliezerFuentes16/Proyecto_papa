<?php

namespace App\Http\Controllers;
use App\post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return 'index';
    }

    public function create()
    {
        return 'create';
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

        if ($archivo=$request->file('FOTO1')){

            $nombre=$archivo->getClientOriginalName();

            $archivo->move('images',$nombre);
            $entrada['FOTO1']=$nombre;
        }

        if ($archivo=$request->file('FOTO2')){

            $nombre=$archivo->getClientOriginalName();

            $archivo->move('images',$nombre);
            $entrada['FOTO2']=$nombre;
        }


        if ($archivo=$request->file('FOTO3')){

            $nombre=$archivo->getClientOriginalName();

            $archivo->move('images',$nombre);
            $entrada['FOTO3']=$nombre;
        }
       
        $entrada['FECHA']=date('y-m-d');
        post::create($entrada);

        return redirect('/el-blanco-es-cristo-administracion-escritos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $publicacion=post::findOrFail($id);

        return view('administracion.editar_post',compact('publicacion'));

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


        if ($archivo=$request->file('FOTO1')){

            $nombre=$archivo->getClientOriginalName();

            $archivo->move('images',$nombre);
            $entrada['FOTO1']=$nombre;
        }

        if ($archivo=$request->file('FOTO2')){

            $nombre=$archivo->getClientOriginalName();

            $archivo->move('images',$nombre);
            $entrada['FOTO2']=$nombre;
        }


        if ($archivo=$request->file('FOTO3')){

            $nombre=$archivo->getClientOriginalName();

            $archivo->move('images',$nombre);
            $entrada['FOTO3']=$nombre;
        }


        
        $publicacion=post::findOrFail($id);
        
        Storage::disk('public')->delete($publicacion->FOTO1);

        $publicacion->update($entrada);

        return redirect("/el-blanco-es-cristo-administracion-escritos");


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $publicacion=post::findOrFail($id);

        $publicacion->delete();
        return redirect('/el-blanco-es-cristo-administracion-escritos');
    }


    public function RegistrarVideo(Request $request){

        return 'hola';

    }


}
