<?php 
$seccion='inicio';

?>


@extends('layoute')

@section('contenido')


<main>


<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">

    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" id="div-1">
       

        <div class="container">
          <div class="carousel-caption ">
            <h1>El Blanco Es Cristo.</h1>
            <p>Ministerio Evangelico el Blanco es Cristo.</p>
            
          </div>
        </div>
      </div>
      
      </div>
    </div>

  </div>

  <!-- 
  ================================================== -->


  <div class="container marketing">

    <!-- Three columns of text below the carousel -->

    <div class="row mt-5">
        @foreach($audio as $audios)
      <div class="col-lg-4">
      
       	<img src="{{asset('images/'.$audios->FOTO1)}}" style="width: 200px; height: 140px; border-radius:200px;">
        
        <h2>{{$audios->TITULO}}</h2>
        <p>{{$audios->DESCRIPCION}}</p>
        <p><a class="btn btn-secondary" href="/ver-escrito/{{$audios->id}}/{{$audios->TITULO}}">Leer &raquo;</a></p>
        
      </div><!-- /.col-lg-4 -->

      @endforeach

{{-- 

      <div class="col-lg-4">

        @foreach($audio as $audios)

        <img src="{{asset('images/'.$audios->FOTO)}}" style="width: 200px; height: 140px; border-radius:200px;">

        <h2>{{$audios->TITULO}}</h2>
        <p>{{$audios->DESCRIPCION}}</p>
        <p><a class="btn btn-secondary" href="#">Reproducir Audio &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      @endforeach
      <div class="col-lg-4">
        <img src="{!! asset('css/img/foto3.jpg') !!}" style="width: 200px; height: 140px; border-radius:200px;">


        <h2>La Familia</h2>
        <p>And lastly this, the third column of asdasdasasd representative  asd  placeholder   content.</p>
        <p><a class="btn btn-secondary" href="#">Ver Detalles &raquo;</a></p>
      </div> --}}<!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">
    @foreach($post as $posts)
    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading"><a href="/ver-escrito/{{$posts->id}}/{{$posts->TITULO}}">{{$posts->TITULO}}</a></h2>
        <p class="lead">{{$posts->DESCRIPCION}}</p>
      </div>
      <div class="col-md-5">
       <img src="{{asset('images/'.$posts->FOTO1)}}" alt="" width="500" height="400" style="object-fit: cover;">

      </div>
    </div>

    <hr class="featurette-divider">

    @endforeach







    {{-- <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading"><a href="">Ministerio El Blanco Es Cristo: La Familia En Cristo.</a></h2>
        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores tempora laudantium necessitatibus, accusamus facere quidem, modi atque perferendis totam quia tempore molestiae temporibus ab vitae, iure eum deserunt. Dolor, atque.</p>
      </div>
      <div class="col-md-5 order-md-2 img-fluid">
        <img class="featurette-image" width="500" height="400" src="{!! asset('css/img/foto4.png') !!}" alt="" width="450" height="400" style="object-fit: cover;">


      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading"><a href="">Ministerio El Blanco Es Cristo: El Exito.</a></h2>
        <p class="lead">And yes, this is the last block of representative placeholder content. Again, not really intended to be actually read, simply here to give you a better view of what this would look like with some actual content. Your content.</p>
      </div>
      <div class="col-md-5 order-md-2 img-fluid">
        <img class="featurette-image" width="500" height="400" src="{!! asset('css/img/foto5.png') !!}" alt="" width="450" height="400" style="object-fit: cover;">

      </div>
    </div>

    <hr class="featurette-divider"> --}}

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->

@endsection
  <!-- FOOTER -->

