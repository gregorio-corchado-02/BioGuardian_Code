<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://illustoon.com/photo/3126.png" width="50"/>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>@yield('title')</title>
    @vite(['resources/js/app.js'])
</head>
<body style='background-image: url(https://static.vecteezy.com/system/resources/previews/025/870/841/non_2x/green-nature-on-blur-backgroud-beautiful-nature-as-spring-wallpaper-generative-ai-free-photo.jpeg)'>
    <nav class="navbar navbar-expand-lg bg-success">
        <div class="container-fluid">
            <a class="navbar-brand" href="https://static.vecteezy.com/system/resources/previews/013/649/594/non_2x/owl-education-illustration-on-a-background-premium-quality-symbols-icons-for-concept-and-graphic-design-vector.jpg" target='_blank'>
                <img src="https://i.pinimg.com/236x/81/21/34/812134787eb4772360f704f197aca2b2.jpg" alt="Bootstrap" width="46" pr>
            </a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active fs-5 " aria-current="#" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active fs-5 " href="#">Perfil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active fs-5 " href="#">Crear Publicacion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active fs-5 " href="#">Ayuda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active fs-5 " href="#">Contacto</a>
                    </li>
                </ul>
            
            </div>
            <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">

                    <button class="btn btn-primary" type="submit">Burcar</button>
            </form>
        </div>
    </nav>

    @yield('contenido')
    
    
</body>
</html>