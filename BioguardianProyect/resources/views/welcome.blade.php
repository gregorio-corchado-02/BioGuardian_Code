@extends('layouts.plantillahome')

@section('contenido')

<style>

body {
    background-size: cover; /* Hace que la imagen cubra todo el fondo sin repetirse */
    background-color: #FFFFFF;
  }

  .carousel-item img {
    width: 100%;
    height: 500px; /* Define una altura fija */
    object-fit: cover; /* Mantiene la relación de aspecto y recorta el desbordamiento */
  }

  .navbar {
    background-color: #28a745;            
  }

  .navbar-brand img {
    width: 46px;
    border-radius: 50%;
  }

  .card-container {
    display: flex;
    flex-wrap: wrap;
    gap: 1rem; /* Espacio entre las cards */
  }

  .card {
    flex: 1 1 calc(25% - 1rem); /* Ajusta el ancho de las cards y el espacio entre ellas */
    max-width: calc(25% - 1rem); /* Asegura que no se desborden */
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
        <h1 class="text-white">BioGuardian</h1>
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

<h1 class="display-1 text-dark text-center mt-4">Publicación</h1>

<div class='container mt-4'>
  <div class="card-container">
    @foreach ($consultaPublicaciones as $item)
      <div class="card mb-3">
        <img src="https://media.istockphoto.com/id/177794699/es/foto/lobo-gris-retrato.jpg?s=612x612&w=0&k=20&c=qAiwRte1ZceIxyok1IuzX88-ppmof9Ci9Aq7LZQCZ84=" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <h5 class="card-title">Card title</h5>
          <p class="card-text fs-5">{{$item->titulo}}</p>
          <p class="card-text fs-5">{{$item->comentario}}</p>
          
          <div class='mb-2 d-grid mx-auto'>
            <button type='button' class='btn btn-outline-success' data-bs-target='#editar{{ $item->id }}' data-bs-toggle='modal'>
              Editar
            </button>
          </div>

          <div class='mb-2 d-grid mx-auto'>
            <button type='button' class='btn btn-outline-success' data-bs-target='#eliminar{{ $item->id }}' data-bs-toggle='modal'>
              Eliminar
            </button>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</div>

@endsection

