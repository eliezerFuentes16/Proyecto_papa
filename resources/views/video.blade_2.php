<?php $seccion="videos"; ?>

@extends('layoute')

@section('contenido')

<style>
#div-videos-extras{
	
	float: right; 
	width: 27%;
	margin-top: 20px
}



video{ width:70%; margin: 20px 0px 0px 3%; }

@media (max-width: 850px) {
  video{
  	width:90%;
  	margin: 20px 5%;
  }
  #div-videos-extras{
  	width: 40%;
  }


}
</style>

<video src="{!! asset('videos/video.mp4') !!}" controls="True" style=""></video>
{{-- <h2>Todo Va A Estar Bien Redimi2 Feat Evan Craft</h2> --}}
<div id="div-videos-extras" style="">
	<aside>
		
	@foreach($videos_mostrar as $videos)
    <div class="container" style="margin-top: 20px;">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">


		<div class="col" style=" width: 100%"><a href="/el-blanco-es-cristo-ver-video/{{$videos->id}}/{{$videos->TITULO}}" style="text-decoration: none; color:#666;">
          <div class="card shadow-sm">
            <img src="{!! asset('images/'.$videos->FOTO) !!}" style="width:100%; height: 225px;">
            <div class="card-body">
              <p class="card-text">{{$videos->TITULO}}</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                </div>
                <small class="text-muted"></small>
              </div>
            </div>
          </div>
          </a>
        </div>

    </div></div>

    @endforeach

	</aside>
</div>

<h2 style="margin-left: 3%;margin-top:10px;">{{$video->TITULO}}</h2>
<p style="margin-left:5%; margin-right:10px; margin-top:20px;">{{$video->DESCRIPCION}}</p>
<br><br>


@endsection