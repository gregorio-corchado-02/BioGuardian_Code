<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite(['resources/js/app.js'])
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .login-container {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-image: url('https://static.vecteezy.com/system/resources/previews/025/870/841/non_2x/green-nature-on-blur-backgroud-beautiful-nature-as-spring-wallpaper-generative-ai-free-photo.jpeg');
            background-size: cover;
            background-position: center;
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
            border-radius: 50%;
            object-fit: cover;
        }
        .login-header {
            text-align: center;
            font-size: 2rem;
            color: #007bff;
            margin-bottom: 20px;
        }
        .login-title {
            text-align: center;
            font-size: 1.5rem;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

@if(session()->has('confirmacion'))

<div class="alert alert-primary alert-dismissible fade show text-center  mx-auto mt-4" style="max-width: 400px;" role="alert">
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
            <img src="https://static.vecteezy.com/system/resources/previews/002/392/394/original/green-leaf-ecological-element-icon-logo-free-vector.jpg" alt="BIOGUARDIAN" width="150" class="login-image mt-4">
            <h1 class="login-title mt-4">BIOGUARDIAN</h1>
        </div>
        <div class="col-md-7">
            <div class="login-header">
                Iniciar Sesión
            </div>
            <div class="card-body">
                <form method="POST" action="/acceso">
                @csrf 
                    <div class="mb-3">
                        <label for="correo" class="form-label">Correo</label>
                        <input type="email" name="correo"  id="correo" class="form-control" id="correo">
                        <p class="text-danger">{{ $errors->first('correo') }}</p>
                    </div>
                    <div class="mb-3">
                        <label for="contraseña" class="form-label">Contraseña</label>
                        <input type="password" name="password" id="password" class="form-control" id="contraseña">
                        <p class="text-danger">{{ $errors->first('password') }}</p>
                    </div>
                    <div class="d-grid mb-4">
                        <button class="btn btn-success" type="submit">Iniciar Sesión</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
</body>
</html>
