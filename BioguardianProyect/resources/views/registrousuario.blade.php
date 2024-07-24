@extends('layouts.plantillaperfil')

@section('contenido')

@if(session()->has('confirmacion'))
<div class="alert alert-primary alert-dismissible fade show text-center mx-auto mt-4" style="max-width: 400px;" role="alert">
    <strong>{{ session('confirmacion') }}</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if($errors->any())
@foreach ($errors->all() as $error)
<div class="alert alert-danger alert-dismissible fade show text-center mx-auto mt-4" style="max-width: 400px;" role="alert">
    <strong>{{ $error }}</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endforeach
@endif

<div class="container d-flex align-items-center justify-content-center min-vh-100">
    <div class="card register-card shadow-sm">
        <div class="text-center mb-3">
            <img src="{{ asset('logo.png') }}" alt="Logo" class="register-image mb-3">
            <h2>Registro de Usuario</h2>
        </div>
        <div class="card-body">
            <form method="POST" action="/registrarusuario" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" name="nombre" id="nombre" class="form-control @error('nombre') is-invalid @enderror" value="{{ old('nombre') }}">
                    @error('nombre')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">
                    @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror">
                    @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="confirm_password" class="form-label">Confirmar Contraseña</label>
                    <input type="password" name="confirm_password" id="confirm_password" class="form-control @error('confirm_password') is-invalid @enderror">
                    @error('confirm_password')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="profile_photo" class="form-label">Foto de Perfil</label>
                    <input type="file" name="profile_photo" id="profile_photo" class="form-control @error('profile_photo') is-invalid @enderror">
                    @error('profile_photo')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="d-grid">
                    <button class="btn btn-success" type="submit">Registrar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<style>
body {
    background-color: #f8f9fa;
    font-family: 'Roboto', sans-serif;
    background-image: url('https://static.vecteezy.com/system/resources/previews/025/870/841/non_2x/green-nature-on-blur-backgroud-beautiful-nature-as-spring-wallpaper-generative-ai-free-photo.jpeg');
}

.navbar {
    background-color: #28a745;
            
}

.navbar-brand img {
    width: 46px;
    border-radius: 50%;
}

.container {
    background-size: cover;
    background-position: center;
    display: flex;
}

.register-card {
    background: rgba(255, 255, 255, 0.9);
    border-radius: 10px;
    max-width: 500px;
    width: 100%;
    padding: 20px;
    margin-top: 40px;
    margin-bottom: 40px;
}

.register-image {
    border-radius: 50%;
    width: 100px;
    height: 100px;
    object-fit: cover;
    margin: 0 auto;
}

.form-group {
    margin-bottom: 1rem;
}

.invalid-feedback {
    display: block;
}

.btn-success {
    background-color: #28a745;
    border-color: #28a745;
}

.btn-success:hover {
    background-color: #218838;
    border-color: #1e7e34;
}
</style>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>

@endsection
