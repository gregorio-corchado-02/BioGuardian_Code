@extends('layouts.plantillahome')

@section('contenido')

<style>
  .navbar {
    background-color: #28a745;            
  }

  .navbar-brand img {
    width: 46px;
    border-radius: 50%;
  }

  .card-container {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 10px; 
    width: 100%;
    height: 30%;
  }

  body {
    font-family: 'Roboto', sans-serif; /* Aplica la fuente Roboto al cuerpo del documento */
    background: linear-gradient(
        135deg, 
        rgba(71, 241, 79) 0%, /* Color tomate con 80% de opacidad */
        rgba(255, 255, 255) 100% /* Color dorado con 80% de opacidad */
    );
    background-size: cover;
    background-position: center;
  }


  .card {
    justify-content: center;
    width: 70%;
    height: 210px;
    margin-bottom: 15px;
    position: relative; /* Añadir posición relativa para la card */
  }

  .button-container {
    position: absolute;
    bottom: 10px;
    right: 10px;
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
      <img src="https://nortempo.com/wp-content/uploads/2023_06_05_dia-del-medio-ambiente.jpg" class="d-block w-100" alt="...">
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

<div class="card-container">
  @foreach ($consultaPublicaciones as $item)
  <div class="card mb-3">
    <div class="row g-0">
      <div class="col-md-4 img-container">
        <img src="https://arbolabc.nyc3.cdn.digitaloceanspaces.com/Science/animals/Images_for_sliders/Images_for_sliders/cardenal/cardenal3.jpg" class="img-fluid rounded-start card-img" alt="..." style="height: 100%;">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">{{$item->titulo}}</h5>
          <p class="card-text"> {{$item->fecha}}</p>
          <p class="card-text"> {{$item->comentario}}</p>
          <div class="button-container">
            <button type='button' class='btn btn-success' data-bs-target='#editar{{ $item->id }}' data-bs-toggle='modal'>
              Editar
            </button>
            <button type='button' class='btn btn-success' data-bs-target='#eliminar{{ $item->id }}' data-bs-toggle='modal'>
              Borrar
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
  @include('partials.editarpubli')
  @include('partials.eliminarpubli')
  @endforeach
</div>

@endsection