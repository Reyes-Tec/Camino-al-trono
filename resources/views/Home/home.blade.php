<!-- home.blade.php -->
@extends('layouts.master')

@section('titulo', 'Inicio')

@section('contenido')
<section id="inicio" class="mb-5">
    <div class="bounce">
        <h1 class="display-4 mb-4 text-center" id="cartel">Bienvenido a Camino al Trono</h1>
    </div>
    <p class="lead mb-4" style="font-size: 16pt; font-weight:bold;">
        ¡Bienvenido a "Camino al Trono", un emocionante videojuego de aventura que te transportará a un mundo medieval lleno de desafíos y sorpresas! En este reino vasto y misterioso, tendrás la oportunidad de vivir una experiencia épica donde la acción, la estrategia y la exploración se entrelazan. Prepárate para sumergirte en una aventura inolvidable, donde tu habilidad para enfrentar enemigos, superar obstáculos y desvelar los secretos del trono será puesta a prueba. ¿Tienes lo necesario para reclamar la corona?
    </p>
    <p class="lead mb-4" style="font-size: 16pt; font-weight:bold;">"Camino al Trono" es una emocionante aventura que te transporta a una época medieval llena de misterio, peligro y gloria. En el vasto reino de Astalion, el trono ha quedado vacío y el caos reina en cada rincón. Como Arthor, un joven de orígenes humildes pero con un destino grandioso, te enfrentarás a criaturas oscuras, enemigos poderosos y desafíos mortales para reclamar lo que te pertenece por derecho: el trono de un reino que alguna vez fue próspero. Con una combinación única de combates estratégicos, exploración y resolución de acertijos, deberás demostrar que eres digno de ser el rey que Astalion necesita.</p>
    <div class="ratio ratio-16x9 mb-4">
        <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" allowfullscreen></iframe>
    </div>

    <div class="sjuego">
        <div>
            <h5 class="underline-animation" style="font-size: 30pt; font-family:fantasy;">SOBRE EL JUEGO</h5>
        </div>
        <img src="img/paisaje.png" class="card-img-top">
        <div class="card-body">
            <br>
            <p class="underline-animation" style="font-size: 16pt; font-weight:bold;">Género y Jugabilidad "Camino al Trono" es un juego de rol de acción (RPG) que mezcla mecánicas de combate cuerpo a cuerpo, exploración en entornos vastos y desafiantes, y estrategias basadas en la supervivencia. Los jugadores deben navegar por un mundo lleno de contrastes: desde bosques oscuros y llenos de enemigos hasta castillos olvidados que guardan secretos antiguos. Con una historia envolvente y gráficos nostálgicos, el juego ofrece una experiencia única que pondrá a prueba tanto tu habilidad en combate como tu capacidad para resolver desafíos estratégicos.

                Objetivo del Jugador Tu misión es guiar a Arthor, el legítimo heredero del trono, a través de un reino devastado por la guerra y la oscuridad. A lo largo de tu aventura, deberás desbloquear habilidades especiales, enfrentarte a criaturas místicas y derrotar a los líderes corruptos que han sumido a Astalion en el caos. Cada región presenta desafíos diferentes, y las armas como la espada y el arco te permitirán adaptarte a combates cercanos y a distancia. Sólo los más hábiles podrán reclamar el trono y restaurar la paz.</p>
        </div>
    </div>
    <br>
    <div class="text-center">
        <button class="descarga">
            DESCARGAR
            <br>
            VIDEOJUEGO
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