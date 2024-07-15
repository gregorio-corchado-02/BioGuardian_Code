@extends('layouts.plantillahome')

@section('contenido')

<style>
  .carousel-item img {
    width: 100%;
    height: 500px; /* Define una altura fija */
    object-fit: cover; /* Mantiene la relación de aspecto y recorta el desbordamiento */
  }
</style>

<div id="carouselExampleCaptions" class="carousel slide mb-5">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://visado-india.es/wp-content/uploads/2023/01/animales-de-la-india-como-es-su-fauna.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1 class="text-white">BioGuardian</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://wastemagazine.es/fotos2/lobo-1200-pixabay.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://mx.parent.com/cdn/shop/articles/preschooler-boy-is-exploring-nature-with-magnifying-glass._1000x.jpg?v=1687225670" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class='container px-5 mt-3'>
    <div class="card mb-3">
      <div class="card-header fs-4 text-primary text-center">
        Tu Recuerdo...
      </div>
      <div class="card-body text-center">
        <p class="card-text fs-5">jfipwejfpwijefpoiqwjep</p>
        <p class="card-text fs-5"></p>
        <p class="card-text fs-5"></p>
      </div>

      <div class="card-footer text-body-secondary">
      
      <div class='mb-2 d-grid mx-auto'>
          <button type='button' class='btn btn-outline-success' data-bs-target='#' data-bs-toggle='modal'>
            Editar
          </button>
        </div>

        <div class='mb-2 d-grid mx-auto'>
          <button type='button' class='btn btn-outline-success' data-bs-target='#' data-bs-toggle='modal'>
            Eliminar
          </button>
        </div>
      </div>

    </div>
</div>



@endsection