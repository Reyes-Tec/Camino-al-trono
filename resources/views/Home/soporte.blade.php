@extends('layouts.master')

@section('titulo', 'Sorporte')
<link rel="stylesheet" href="{{ asset('css/soporte.css') }}">
@section('contenido')
<section id="historia" class="mb-5">
    <div class="container">
        
    </div>
     <!-- FAQ Section -->
     <div class="row mt-5">
        <div class="col-12">
            <h3>Preguntas Frecuentes (FAQ)</h3>
            <div class="accordion" id="faqAccordion">
                <!-- Pregunta 1 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faq1">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                            ¿Cómo descargo el juego?
                        </button>
                    </h2>
                    <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="faq1" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Visita nuestra página de descargas y selecciona la versión compatible con tu dispositivo. ¡Es muy sencillo!
                        </div>
                    </div>
                </div>
                <!-- Pregunta 2 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faq2">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                            ¿Cuáles son los requisitos mínimos del sistema?
                        </button>
                    </h2>
                    <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="faq2" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Requisitos mínimos: Procesador i3, 4GB RAM, 2GB de espacio libre en disco, tarjeta gráfica básica. Sistema operativo Windows, Mac o Linux.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Guías y Tutoriales Section -->
    <div class="row mt-5">
        <div class="col-12">
            <h3>Guías y Tutoriales</h3>
            <ul class="list-group">
                <li class="list-group-item"><a href="#">Manual de Usuario: Aprende a jugar desde cero</a></li>
                <li class="list-group-item"><a href="#">Guía de Personajes: Conoce a Arthor y sus habilidades</a></li>
                <li class="list-group-item"><a href="#">Consejos y Estrategias: Mejora tu rendimiento en el juego</a></li>
            </ul>
        </div>
    </div>
    


</section>
@endsection