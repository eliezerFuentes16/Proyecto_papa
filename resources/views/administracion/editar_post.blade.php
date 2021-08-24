<?php 
$seccion="escritos";
?>


@extends('layoute_admi')

@section('contenido2')


<style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

    </style>


  <form method="POST" action="/administracion/{{$publicacion->id}}" enctype="multipart/form-data">
    <h1 style="margin-top:50px!important; text-align:center">Editar Escrito</h1>
    <h2 style="margin:20px 0px; text-align:left; width: 88%; margin: auto">Parte 1</h2>
    <input type="text" name="TITULO" placeholder="Titulo" class="form-control fs-4" style="width:85%; margin:10px 7.5%;  border: none; border-bottom: 1px solid #fff; outline: none; background: #eee;color:#000" value="{{$publicacion->TITULO}}">
<textarea name="DESCRIPCION" id="input-5" rows="7" placeholder="Descripci&oacute;n" class="form-control fs-4" style="width:85%; margin:10px 7.5%;  border: none; border-bottom: 1px solid #fff; outline: none; background: #eee;color:#000">{{$publicacion->DESCRIPCION}}</textarea>
	 <h2 style="margin-top:50px; text-align:left; width: 88%; margin: auto">Parte 2</h2>
  <div id="myCarousel" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active"  style="background: #fff">
        <div style=" width: 100%; margin: auto">

         
            <h2 style="text-align:center; color:#777; margin-top: 20px;">PARRAFO 1</h2>
            <div id="div-3">

              <div class="">
                <input type="text" name="SUB_TITULO1" placeholder="Sub Titulo" class="form-control fs-4" style="width:85%; margin:10px 7.5%;  border: none; border-bottom: 1px solid #fff; outline: none; background: #eee;color:#000"  value="{{$publicacion->SUB_TITULO1}}">
                
              </div>

              <textarea name="PARRAFO1" id="input-5" rows="7" placeholder="Parrafo"  class="form-control fs-4" style="width:85%; margin:10px 7.5%;  border: none; border-bottom: 1px solid #fff; outline: none; background: #eee;color:#000">{{$publicacion->PARRAFO1}}</textarea>

              <div class="form-floating">
                <input type="file" class="form-control" id="floatingPassword" name="FOTO1">
                
              </div>


            </div>
            

        </div>
       
        <div class="container">
          <div class="">
            
          </div>
        </div>
      </div>
      <div class="carousel-item" style="background: #fff">
        <div style=" width: 100%; margin: auto">

          
            <h2 style="text-align:center; color:#777; margin-top: 20px;">PARRAFO 2</h2>
            <div id="div-3">

              <div class="">
                <input type="text" name="SUB_TITULO2" placeholder="Sub Titulo" class="form-control fs-4" style="width:85%; margin:10px 7.5%;  border: none; border-bottom: 1px solid #fff; outline: none; background: #eee;color:#000" value="{{$publicacion->SUB_TITULO2}}">
                
              </div>

              <textarea name="PARRAFO2" id="input-5" rows="7" placeholder="Parrafo" class="form-control fs-4" style="width:85%; margin:10px 7.5%;  border: none; border-bottom: 1px solid #fff; outline: none; background: #eee;color:#000">{{$publicacion->PARRAFO2}}</textarea>

              <div class="">
                <input type="file" class="form-control" name="FOTO2">
                
              </div>

              {{ csrf_field() }}
            </div>
           

        </div>
        
        <svg class="bd-placeholder-img" width="100%" height="100%"></svg>

        <div class="container">
         
        </div>
      </div>
      <div class="carousel-item"  style="background: #fff">
        <div style=" width: 100%; margin: auto">

          
            <h2 style="text-align:center; color:#777; margin-top: 20px; ">PARRAFO 3</h2>
            <div id="div-3">

              <div class="">
                <input type="text" name="SUB_TITULO3" placeholder="Sub Titulo" class="form-control fs-4" style="width:85%; margin:10px 7.5%;  border: none; border-bottom: 1px solid #fff; outline: none; background: #eee;color:#000" value="{{$publicacion->SUB_TITULO3}}">
                
              </div>

              <textarea name="PARRAFO3" id="input-5" rows="7" placeholder="Parrafo"  class="form-control fs-4" style="width:85%; margin:10px 7.5%;  border: none; border-bottom: 1px solid #fff; outline: none; background: #eee;color:#000">{{$publicacion->PARRAFO3}}</textarea>

              <div class="form-floating">
              	
                <input type="file" class="form-control" id="floatingPassword" name="FOTO3">
                {{-- {{$publicacion->FOTO3}} --}}
              </div>


            </div>
            

        </div>

        <div class="container">
          <div class=" text-end">
          
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev"  type="button" data-bs-target="#myCarousel" data-bs-slide="prev" style="width:50px; height: 400px;">
      <span class="fs-1" aria-hidden="true" style="color: #1d2124">< </span>
      <span class="visually-hidden">Previous</span>
    </button>
   <!--  <button class="carousel-control-next"type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden" >Next</span>
    </button> -->

    <button class="carousel-control-next" style="width:50px; height: 400px;" type="button" data-bs-target="#myCarousel"  data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"  style="color: #1d2124; font-size: 3em">></span>
      <span class="visually-hidden" >Next</span>
    </button>


  </div>
  	{{ method_field('PUT') }}
  <input type="submit" value="Guardar"  class="btn btn-primary p-3 fs-4" style="color:#fff; width:30%; margin:0px 35%;">
</form>

@endsection