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

      .col{
        transition: transform 0.5s;
        cursor: pointer;
      }

      .col:hover{
       transform:scale(1.03);
      }
    </style>



	
<main class="container" >

	<section class="py-5 text-center container">
	  <!-- <h3 class="pb-4 mb-4 fst-italic border-bottom">
		From the Firehose
	  </h3>
 -->  <h1 style="text-align:center; margin-bottom:60px; font-size:4em; font-family:sans-serif;">{{$publicacion->TITULO}}</h1>
	  
	  
	<div style="width:100%; height: 33%; position: all;" >
	  <div id="div-imagen"class="mt-5 mb-5">
		<h2 style="text-align:left;  font-size:2em;">{{$publicacion->SUB_TITULO1}}</h2><br>
		<img src="{!! asset('images/'.$publicacion->FOTO1) !!}" width="500" height="400"/>
		<p style="text-align:left; margin-left:20px; font-size:20px;">{{$publicacion->PARRAFO1}}</p>
		{{-- <img src="{!! asset('css/img/foto2.jpg') !!}"> --}}
	  </div>
	</div>

	@if($publicacion->PARRAFO2 and $publicacion->SUB_TITULO2)

	<div  style="display: block;">
	  <div id="div-imagen2" class="mt-5 mb-5">
		<h2 style="text-align:left;  font-size:2em;">{{$publicacion->SUB_TITULO2}}</h2><br>
		@if($publicacion->FOTO2)
		<img src="{!! asset('images/'.$publicacion->FOTO2) !!}" width="500" height="400">
		@endif
		<p style="text-align:left; margin-left:20px; font-size:20px;">{{$publicacion->PARRAFO2}}</p>
		
	  </div>
	</div>
	@endif
	@if($publicacion->PARRAFO3 and $publicacion->SUB_TITULO3)
	<div  style="display: block;">

	  <div id="div-imagen" class="mt-5 mb-5">
		<h2 style="text-align:left;  font-size:2em;">{{$publicacion->SUB_TITULO3}}</h2><br>
		@if($publicacion->FOTO3)
		<img src="{!! asset('images/'.$publicacion->FOTO2) !!}" width="500" height="400">
		@endif
		<p style="text-align:left; margin-left:20px; font-size:20px;">{{$publicacion->PARRAFO3}}</p>

	  </div>

	 </div>
	 @endif
	</section>
	</div>

	<div style="margin-left:20px;">

		<div >

			<table>
				<tr>
					<td style="margin-right:5px;">
					<form method="post" action="/administracion/{{$publicacion->id}}">
				          {{csrf_field()}}
				          <input type="submit" value="Borrar" class="btn btn-danger btn-lg gap-3 p-4 fs-4 btn-delete"  style="margin-right:5px;">
				          <input type="hidden" name="_method" value="DELETE">
				    </form>

					</td>

					<td>

				
				    <form action="/administracion/{{$publicacion->id}}/edit">
				          {{csrf_field()}}
				          <input type="submit" value="Editar " class="btn btn-primary btn-lg gap-3 p-4 fs-4">
				    </form>

				    </td>

		    	</tr>
		    </table>
		</div>

	</div>

  <div class="album py-5 mt-5">

    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        @foreach( $post_mostrar as $publicacion )
        <div class="col"><a href="/ver-escritos/{{ $publicacion->id }}/{{ $publicacion->TITULO }}" style="text-decoration: none; color:#666;">
          <div class="card shadow-sm">
          
            <img src="{!! asset('images/'.$publicacion->FOTO1) !!}" style="width:100%; height: 225px;">
            <div class="card-body">
              
              
              <p class="card-text">{{$publicacion->TITULO}}: {{$publicacion->DESCRIPCION}}</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Leer</button>
                 
                </div>
                <small class="text-muted">{{$publicacion->FECHA}}</small>
              </div>
            </div>
          </div>
          </a>
        </div>
        @endforeach
         
      </div>
    </div>

  </div>
  
</main>




@endsection