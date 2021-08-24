@extends('layoute')

@section('contenido')
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




  


<main>

   <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Videos</h1>
       
        
      </div>
    </div>
   </section>
  <div class="album py-5 bg-light">

    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        @foreach( $publicaciones as $publicacion )
        <div class="col"><a href="/el-blanco-es-cristo-ver-video/{{$publicacion->id}}/{{$publicacion->TITULO}}" style="text-decoration: none; color:#666;">
          <div class="card shadow-sm">
            <!-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> -->
            <img src="{!! asset('images/'.$publicacion->FOTO) !!}" style="width:100%; height: 225px;">
            <div class="card-body">
              
              {{-- {{ $publicacion->FOTO1 }} --}}
              <p class="card-text"><strong>{{$publicacion->TITULO}}</strong>: {{$publicacion->DESCRIPCION}}</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                  <!-- <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> -->
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

        

  <!-- FOOTER -->

