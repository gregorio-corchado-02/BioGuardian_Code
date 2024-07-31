@extends('layouts.plantillapublicacion')

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

<div class="login-container">
    <div class="login-card row">
        <div class="col-md-5 text-center">
            <img src="{{ asset('logo.png') }}" alt="BIOGUARDIAN" width="150" class="login-image mt-4">
            <h1 class="login-title mt-4">BIOGUARDIAN</h1>
        </div>
        <div class="col-md-7">
            <div class="login-header">
                Registro de Usuario
            </div>
            <div class="card-body">
                <form method="POST" action="/guardarusuario" enctype="multipart/form-data">
                @csrf
                    <div class="mb-3">
                        <label for="usuario" class="form-label">Usuario</label>
                        <input type="text" name="usuario" id="usuario" class="form-control @error('usuario') is-invalid @enderror" value="{{ old('usuario') }}">
                        @error('usuario')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" name="nombre" id="nombre" class="form-control @error('nombre') is-invalid @enderror" value="{{ old('nombre') }}">
                        @error('nombre')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="contrasena" class="form-label">Contraseña</label>
                        <input type="password" name="contrasena" id="contrasena" class="form-control @error('contrasena') is-invalid @enderror">
                        @error('contrasena')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="correo" class="form-label">Correo Electrónico</label>
                        <input type="email" name="correo" id="correo" class="form-control @error('correo') is-invalid @enderror" value="{{ old('correo') }}">
                        @error('correo')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="foto_perfil" class="form-label">Foto de Perfil</label>
                        <input type="file" name="foto_perfil" id="foto_perfil" class="form-control @error('foto_perfil') is-invalid @enderror">
                        @error('foto_perfil')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="nacimiento" class="form-label">Fecha de Nacimiento</label>
                        <input type="date" name="nacimiento" id="nacimiento" class="form-control @error('nacimiento') is-invalid @enderror" value="{{ old('nacimiento') }}">
                        @error('nacimiento')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="d-grid mb-4">
                        <button class="btn btn-success" type="submit">Registrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<style>
body {
    font-family: 'Roboto', sans-serif; /* Aplica la fuente Roboto al cuerpo del documento */
    background-image: url('https://wallpapers.com/images/hd/green-tree-background-g7328hzf8ua9k39t.jpg');
    background-size: cover;
    background-position: center;
}

.navbar {
    background-color: #28a745;            
}

.navbar-brand img {
    width: 46px;
    border-radius: 50%;
}

.login-container {
    display: flex;
    align-items: center;
    justify-content: center;
    margin-top: 80px;
    margin-bottom: 80px;
}

.login-card {
    width: 100%;
    max-width: 800px;
    background: rgba(255, 255, 255, 0.9);
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.login-image {
    object-fit: cover;
    display: block;
    margin: 0 auto; 
    padding-top: 40px; 
       
}

.login-header {
    font-family: 'Arial', sans-serif;
    text-align: center;
    font-size: 2rem;
    color: #007bff;
    margin-bottom: 20px;
    font-weight: 700; 
    letter-spacing: 0.5px; 
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
}

.login-title {
    font-family: 'Arial', sans-serif; /* Tipografía */
    font-size: 1.5em; /* Tamaño de fuente */
    color: #333; /* Color del texto */
    text-align: center; /* Alineación */
    margin-top: 20px; /* Espaciado superior */
    margin-bottom: 20px; /* Espaciado inferior */
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1); /* Sombra del texto */
    letter-spacing: 0.5px; /* Espaciado entre letras */
}

</style>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>

@endsection
