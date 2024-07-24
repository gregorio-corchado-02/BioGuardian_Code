@extends('layouts.plantillaperfil')

@section('contenido')

    <style>
        body {
            background-image: url('https://static.vecteezy.com/system/resources/previews/025/870/841/non_2x/green-nature-on-blur-backgroud-beautiful-nature-as-spring-wallpaper-generative-ai-free-photo.jpeg');
            font-family: 'Roboto', sans-serif;
            
        }
        .navbar {
            background-color: #28a745;
            
        }
        .navbar-brand img {
            width: 46px;
            border-radius: 50%;
        }
        .content {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        .profile-card {
            width: 100%;
            max-width: 600px;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background: rgba(255, 255, 255, 0.9);
            
        }
        .profile-card .card-header {
            text-align: center;
           
            border-bottom: 1px solid #ddd;
        }
        .profile-card img {
            border-radius: 50%;
            width: 150px;
            height: 150px;
            margin-top: -75px;
            border: 5px solid #fff;
            object-fit: cover;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            
        }
        .profile-card .card-body {
            padding-top: 0;
            background: rgba(255, 255, 255, 0.9);
        }
        .profile-info {
            margin-top: 20px;
        }
    </style>

    <div class="content">
        <div class="card profile-card">
            <div class="card-header">
                <img src="https://us.123rf.com/450wm/lightfieldstudios/lightfieldstudios2110/lightfieldstudios211004882/176360336-empresario-musulm%C3%A1n-en-anteojos-sosteniendo-papel-cerca-de-rotafolio.jpg?ver=6" alt="Foto de Perfil">
                <h2>Perfil de Usuario</h2>
            </div>
            <div class="card-body text-center">
                <div class="profile-info">
                    <p><strong>Nombre de Usuario:</strong> Luis Perez Garcia</p>
                    <p><strong>Correo:</strong> LuisP1999@gmail.com</p>
                    <p><strong>Fecha de Nacimiento:</strong> 23 de Octubre de 1999</p>
                    <p><strong>Fecha en la que se Unió:</strong> 23-16-2021</p>
                </div>
            </div>
            <div class="card-footer d-flex justify-content-end">
                <button type="button" class="btn btn-success" data-bs-target="#" data-bs-toggle="modal">
                    Eliminar
                </button>
            </div>
        </div>
    </div>

@endsection