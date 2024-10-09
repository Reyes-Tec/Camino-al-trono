<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Camino al Trono</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container" id="input">
            <a class="navbar-brand" href="#">
                <i class="bi bi-crown"></i> Camino al Trono
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item" id="nav">
                    <a class="nav-link" href="#inicio">
                    <img src="img/home.png" width="20" alt="Galería" class="me-2"> Inicio
                    </a>
                    </li>
                    <li class="nav-item" id="nav">
                        <a class="nav-link" href="#historia">
                        <img src="img/historia.png" width="20" alt="Galería" class="me-2">Historia
                        </a>
                    </li>
                    <li class="nav-item" id="nav">
                        <a class="nav-link" href="#galeria">
                        <img src="img/galeria.png" width="20" alt="Galería" class="me-2"> Galería
                      </a>
                    </li>
                    <li class="nav-item" id="nav">
                        <a class="nav-link" href="#soporte">
                        <img src="img/soporte.png" width="20" alt="Galería" class="me-2">Soporte
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container mt-5">
        <section id="inicio" class="mb-5">
            <h1 class="display-4 mb-4" style="text-align: center;">Bienvenido a Camino al Trono</h1>
            <p class="lead mb-4">
                Sumérgete en un emocionante juego de estrategia ambientado en la Edad Media. 
                ¡Forja alianzas, conquista territorios y reclama tu derecho al trono!
            </p>
            <div class="ratio ratio-16x9 mb-4">
                <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" allowfullscreen></iframe>
            </div>
            <div class="bg-dark p-4 rounded mb-4">
                <h2 class="h3 mb-3">Sobre el Juego</h2>
                <p>
                    Camino al Trono es un juego de estrategia por turnos ambientado en un reino medieval ficticio. 
        
                </p>
            </div>
            <div class="text-center">
                <a href="#download" class="btn btn-primary btn-lg">Descarga Ahora</a>
            </div>
        </section>
    </main>

    <footer class="bg-dark text-center text-white py-3 mt-5">
        <p>&copy; 2024 Camino al Trono. Todos los derechos reservados.</p>
    </footer>
     <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

</body>
</html>
