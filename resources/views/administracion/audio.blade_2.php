<?php $seccion="audios"; ?>

@extends('layoute_admi')

@section('contenido2')

<style>
#div-videos-extras{
	
	float: right; 
	width: 27%;
	margin-top: 20px
}
audio{ width:70%; margin: 20px 15%; }

@media (max-width: 850px) {
  audio{
  	width:90%;
  	margin: 20px 5%;
  }
  #div-videos-extras{
  	width: 40%;
  }
}
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
<h1 style="margin-left: 3%;margin-top:10px; text-align: center;">{{$audio->TITULO}}</h1>
<audio src="{!! asset('audios/audio.mp3') !!}" controls="True" style=""></audio>
{{-- <h2>Todo Va A Estar Bien Redimi2 Feat Evan Craft</h2> --}}
      


<p style="margin-left:5%; margin-right:10px; margin-top:20px;">{{$audio->DESCRIPCION}}</p>
<br><br>


<div style="margin-left:3%; margin-bottom:50px;">

    <div >

      <table>
        <tr>
          <td style="margin-right:5px;">
          <form method="post" action="/audio_administracion/{{$audio->id}}">
                  {{csrf_field()}}
                  <input type="submit" value="Borrar" class="btn btn-danger btn-lg gap-3 p-4 fs-4 btn-delete"  style="margin-right:5px;">
                  <input type="hidden" name="_method" value="DELETE">
            </form>

          </td>

          <td>

        
            <form action="/audio_administracion/{{$audio->id}}/edit">
                  {{csrf_field()}}
                  <input type="submit" value="Editar " class="btn btn-primary btn-lg gap-3 p-4 fs-4">
            </form>

            </td>

          </tr>
        </table>
    </div>

  </div>

<main>

  <div class="album py-5 bg-light">

    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        @foreach($audios_mostrar as $audios)
        <div class="col"><a href="/administracion-ver-audio/{{$audios->id}}/{{$audios->TITULO}}" style="text-decoration: none; color:#666;">
          <div class="card shadow-sm">
           
            <img src="{!! asset('images/'.$audios->FOTO) !!}" style="width:100%; height: 225px;">
            <div class="card-body">
              
              
              <p class="card-text">{{$audios->TITULO}}: {{$audios->DESCRIPCION}}</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Reproducir</button>
                  
                </div>
                <small class="text-muted">Audio</small>
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