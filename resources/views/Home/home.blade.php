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

    <div class="sjuego">
        <img src="img/arthor2.png" class="card-img-top">
        <div class="card-body">
            <h5 class="card-title">SOBRE LA HISTORIA</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
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