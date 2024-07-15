@extends('layouts.plantillahome')

@section('contenido')

@if(session()->has('confirmacion'))
<div class="alert alert-primary alert-dismissible fade show text-center mx-auto mt-4" style="max-width: 400px;" role="alert">
  <strong> {{ session('confirmacion') }} </strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if($errors->any())
@foreach ($errors->all() as $error)
<div class="alert alert-danger alert-dismissible fade show text-center mx-auto mt-4" style="max-width: 400px;" role="alert">
  <strong> {{ $error }} </strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endforeach
@endif

<div class="container mt-5">
  <div class="card">
    <div class="card-header text-primary text-center fs-4">
      Crear Publicación
    </div>
    <div class="card-body text-center">
      <form method="POST" action="/#" enctype="multipart/form-data"> <!-- Agregado enctype para manejar archivos -->
        @csrf
        <div class="mb-2">
          <label for="titulo" class="form-label">Titulo</label>
          <input type="text" name="titulo" id="titulo" class="form-control">
          <p class="fw-bolder">{{ $errors->first('titulo')}}</p>
        </div>
        <div class="mb-2">
          <label for="comentarios" class="form-label">Comentarios</label>
          <div class="form-floating">
            <textarea class="form-control" name="comentarios" id="comentarios" placeholder="Leave a comment here" style="height: 100px"></textarea>
            <p class="fw-bolder">{{ $errors->first('comentarios')}}</p>
          </div>
        </div>
        <div class="mb-2">
          <label for="foto" class="form-label">Seleccionar foto</label>
          <input type="file" name="foto" id="foto" class="form-control">
          <p class="fw-bolder">{{ $errors->first('foto')}}</p>
        </div>
    </div>
    <div class="card-footer text-body-secondary">
      <div>
        <button class="btn btn-success" type="submit">Guardar</button>
      </div>
      </form>
    </div>
  </div>
</div>

@endsection
