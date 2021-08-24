@extends('layoute_admi')

@section('contenido2')

	
<main class="container" >

	<section class="py-5 text-center container">
	  <!-- <h3 class="pb-4 mb-4 fst-italic border-bottom">
		From the Firehose
	  </h3>
 -->  <h1 style="text-align:center; margin-bottom:60px; font-size:4em; font-family:sans-serif;">{{$publicacion->TITULO}}</h1>
	  
	  
	<div style="width:100%; height: 33%; position: all;" >
	  <div id="div-imagen"class="mt-5 mb-5">
		<h2 style="text-align:left;  font-size:2em;">{{$publicacion->SUB_TITULO1}}</h2><br>
		<img src="{!! asset('images/'.$publicacion->FOTO1) !!}" width="500" height="400">
		<p style="text-align:left; margin-left:20px; font-size:20px;">{{$publicacion->PARRAFO1}}</p>

	  </div>
	</div>

	@if($publicacion->PARRAFO2 and $publicacion->SUB_TITULO2)

	<div  style="display: block;">
	  <div id="div-imagen2" class="mt-5 mb-5">
		<h2 style="text-align:left;  font-size:2em;">{{$publicacion->SUB_TITULO2}}</h2><br>
		@if($publicacion->FOTO2)
		<img src="images/{{ $publicacion->FOTO2 }}" width="500" height="400">
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
		<img src="images/{{ $publicacion->FOTO3 }}" width="500" height="400">
		@endif
		<p style="text-align:left; margin-left:20px; font-size:20px;">{{$publicacion->PARRAFO3}}</p>

	  </div>

	 </div>
	 @endif
	</section>
	</div>
	
	 <div class="row mb-2">
	<div class="col-md-6">
	  <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
		<div class="col p-4 d-flex flex-column position-static">
		  <strong class="d-inline-block mb-2 text-primary">World</strong>
		  <h3 class="mb-0">Featured post</h3>
		  <div class="mb-1 text-muted">Nov 12</div>
		  <p class="card-text mb-auto">This is a wider card with supporting text below as a naturalawdasd lead-in to additional content.</p>
		  <a href="#" class="stretched-link">Continue reading</a>
		</div>
		<div class="col-auto d-none d-lg-block">
		  <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>

		</div>
	  </div>
	</div></div>
	<div>
	<div class="col-md-6">
	  <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
		<div class="col p-4 d-flex flex-column position-static">
		  <strong class="d-inline-block mb-2 text-success">Design</strong>
		  <h3 class="mb-0">Post title</h3>
		  <div class="mb-1 text-muted">Nov 11</div>
		  <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
		  <a href="#" class="stretched-link">Continue reading</a>
		</div>
		<div class="col-auto d-none d-lg-block">
		  <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
		</div>
	  </div>
	</div>
	</div>

</main>


@endsection