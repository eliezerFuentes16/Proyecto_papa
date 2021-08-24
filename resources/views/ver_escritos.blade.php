@extends('layoute')

@section('contenido')



<main class="container" >

    <section class="py-5 text-center container">
      <!-- <h3 class="pb-4 mb-4 fst-italic border-bottom">
        From the Firehose
      </h3>
 -->  <h1 style="text-align:center; margin-bottom:60px; font-size:4em; font-family:sans-serif;">La Salvaci&oacute;n</h1>
      
      

      <div id="div-imagen"class="mt-5 mb-5">
        <h2 style="text-align:left;  font-size:2em;">Sub-titulos</h2><br>
        <img src="{!! asset('css/img/foto1.png') !!}" width="500" height="400">
        <p style="text-align:left; margin-left:20px; font-size:20px;">Lorem, ipsum dolor sit amet consectetur, adipisicing elit. Quaerat itaque, laborum dolore adipisci sed repellat, autem quia nihil corrupti alias reiciendis ut eum commodi cupiditate assumenda quibusdam consequuntur et eaque. Lorem ipsum dolor sit amet consectetur, adipisicing, elit. Placeat tempore sint nemo neque enim blanditiis excepturi commodi, impedit fuga ipsa consectetur maxime ut vero vitae veritatis est, ducimus, nihil similique! Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum minus ratione libero, porro id consectetur facere ducimus inventore autem omnis praesentium repellendus magni incidunt at quibusdam tempora voluptatum eos. Porro! Lorem ipsum, dolor sit amet, consectetur adipisicing elit. Non possimus qui expedita. Amet ut in culpa cum? Tenetur eligendi amet praesentium consequuntur laboriosam dignissimos maxime beatae, nulla numquam cumque est? Lorem ipsum dolor sit, amet consectetur adipisicing, elit. A aliquam quisquam totam officiis odit quo facilis, perferendis quam error dolor ullam tempore tenetur et earum quia asperiores reprehenderit, harum quos!lorem</p>

      </div>
      
      <div id="div-imagen2" class="mt-5 mb-5">
        <h2 style="text-align:left;  font-size:2em;">Sub-titulos</h2><br>
        <img src="{!! asset('css/img/foto2.jpg') !!}" width="500" height="400">
        <p style="text-align:left; margin-left:20px; font-size:20px;">Lorem, ipsum dolor sit amet consectetur, adipisicing elit. Quaerat itaque, laborum dolore adipisci sed repellat, autem quia nihil corrupti alias reiciendis ut eum commodi cupiditate assumenda quibusdam consequuntur et eaque. Lorem ipsum dolor sit amet consectetur, adipisicing, elit. Placeat tempore sint nemo neque enim blanditiis excepturi commodi, impedit fuga ipsa consectetur maxime ut vero vitae veritatis est, ducimus, nihil similique! Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum minus ratione libero, porro id consectetur facere ducimus inventore autem omnis praesentium repellendus magni incidunt at quibusdam tempora voluptatum eos. Porro! Lorem ipsum, dolor sit amet, consectetur adipisicing elit. Non possimus qui expedita. Amet ut in culpa cum? Tenetur eligendi amet praesentium consequuntur laboriosam dignissimos maxime beatae, nulla numquam cumque est? Lorem ipsum dolor sit, amet consectetur adipisicing, elit. A aliquam quisquam totam officiis odit quo facilis, perferendis quam error dolor ullam tempore tenetur et earum quia asperiores reprehenderit, harum quos!lorem</p>

      </div>

      <div id="div-imagen" class="mt-5 mb-5">
        <h2 style="text-align:left;  font-size:2em;">Sub-titulos</h2><br>
        <img src="{!! asset('css/img/foto3.jpg') !!}" width="500" height="400">
        <p style="text-align:left; margin-left:20px; font-size:20px;">Lorem, ipsum dolor sit amet consectetur, adipisicing elit. Quaerat itaque, laborum dolore adipisci sed repellat, autem quia nihil corrupti alias reiciendis ut eum commodi cupiditate assumenda quibusdam consequuntur et eaque. Lorem ipsum dolor sit amet consectetur, adipisicing, elit. Placeat tempore sint nemo neque enim blanditiis excepturi commodi, impedit fuga ipsa consectetur maxime ut vero vitae veritatis est, ducimus, nihil similique! Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum minus ratione libero, porro id consectetur facere ducimus inventore autem omnis praesentium repellendus magni incidunt at quibusdam tempora voluptatum eos. Porro! Lorem ipsum, dolor sit amet, consectetur adipisicing elit. Non possimus qui expedita. Amet ut in culpa cum? Tenetur eligendi amet praesentium consequuntur laboriosam dignissimos maxime beatae, nulla numquam cumque est? Lorem ipsum dolor sit, amet consectetur adipisicing, elit. A aliquam quisquam totam officiis odit quo facilis, perferendis quam error dolor ullam tempore tenetur et earum quia asperiores reprehenderit, harum quos!lorem</p>

      </div>
    </section>


     <div class="row mb-2">
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">World</strong>
          <h3 class="mb-0">Featured post</h3>
          <div class="mb-1 text-muted">Nov 12</div>
          <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="stretched-link">Continue reading</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>

        </div>
      </div>
    </div>
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



  <footer class="container">
    
    <p>&copy; Aristides Fuentes &middot; &nbsp;<a href="#">Contactanos</a></p>
  </footer>

</main>














@endsection
  <!-- FOOTER -->

