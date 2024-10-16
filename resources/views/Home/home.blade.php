<!-- home.blade.php -->
@extends('layouts.master')

@section('titulo', 'Inicio')

@section('contenido')
<section id="inicio" class="mb-5">
    <h1 class="display-4 mb-4 text-center" id="titulo">Bienvenido a Camino al Trono</h1>
    <p class="lead mb-4">
        ¡Bienvenido a "Camino al Trono", un emocionante videojuego de aventura que te transportará a un mundo medieval lleno de desafíos y sorpresas! En este reino vasto y misterioso, tendrás la oportunidad de vivir una experiencia épica donde la acción, la estrategia y la exploración se entrelazan. Prepárate para sumergirte en una aventura inolvidable, donde tu habilidad para enfrentar enemigos, superar obstáculos y desvelar los secretos del trono será puesta a prueba. ¿Tienes lo necesario para reclamar la corona?
    </p>
    <div class="ratio ratio-16x9 mb-4">
        <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" allowfullscreen></iframe>
    </div>

    <div class="flip-card text-center">
        <div class="flip-card-inner">
            <div class="flip-card-front">
                <p class="title">SOBRE EL JUEGO</p>
                <div class="img"><img src="img/arthor.png" width="230"></div>
            </div>
            <div class="flip-card-back">
                <p class="slide-in">"Camino al Trono" es un emocionante videojuego de aventura que combina elementos de acción, estrategia y exploración en un vasto reino medieval. En este mundo lleno de desafíos, los jugadores asumirán el rol de un héroe en busca de la corona perdida, enfrentándose a numerosos enemigos y obstáculos en el camino. Con mecánicas de juego fluidas, podrás correr, saltar, escalar paredes y combatir con diversas armas, como la espada y el arco, en un sistema de combate dinámico que te mantendrá siempre en acción. El reino está diseñado con paisajes vibrantes que van desde majestuosas montañas hasta oscuros bosques, cada uno lleno de detalles que enriquecen la experiencia. A medida que avanzas, vivirás una historia cautivadora, donde tu misión será recolectar poderosos escudos y desvelar los secretos del trono, mientras los efectos de sonido inmersivos te sumergen aún más en esta atmósfera medieval. En "Camino al Trono", cada decisión que tomes influirá en tu destino, y solo aquellos con la astucia y el valor necesarios podrán reclamar lo que les pertenece. ¡Prepárate para una aventura épica que no olvidarás!</p>
            </div>
        </div>
    </div>
    <br>

    <div class="text-center">
        <button class="descarga">
            DESCARGAR
            <div id="clip">
                <div id="leftTop" class="corner"></div>
                <div id="rightBottom" class="corner"></div>
                <div id="rightTop" class="corner"></div>
                <div id="leftBottom" class="corner"></div>
            </div>
            <span id="rightArrow" class="arrow"></span>
            <span id="leftArrow" class="arrow"></span>
        </button>
    </div>
</section>
@endsection