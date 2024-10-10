<!-- home.blade.php -->
@extends('layouts.master')

@section('titulo', 'Inicio')

@section('contenido')
<section id="inicio" class="mb-5">
    <h1 class="display-4 mb-4 text-center">Bienvenido a Camino al Trono</h1>
    <p class="lead mb-4">
        Sumérgete en un emocionante juego de estrategia ambientado en la Edad Media.
        ¡Forja alianzas y reclama tu derecho al trono!
    </p>
    <div class="ratio ratio-16x9 mb-4">
        <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" allowfullscreen></iframe>
    </div>
    <div class="bg-dark p-4 rounded mb-4">
        <h2 class="h3 mb-3">Sobre el Juego</h2>
        <p>Camino al Trono, es un videojuego de aventura ambientado en la Edad Media, donde el jugador asume el papel de un aspirante a rey que debe completar una serie de desafíos para demostrar que es digno de la corona. El proyecto ha sido desarrollado por un equipo de cuatro personas con roles bien definidos en el área de desarrollo de videojuegos y promoción web. El objetivo principal del juego es que los jugadores vivan una experiencia de aventura y acción estratégica, combinando combate, recolección de objetos y toma de decisiones, todo ambientado en un reino medieval ficticio.</p>
    </div>
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