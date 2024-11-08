@extends('layouts.master')

@section('titulo', 'Historia')

@section('contenido')
<section id="historia" class="mb-5"> 
    <div class="container">
        <div class="row">
            <!-- Primera imagen en fila vertical -->
            <div class="col-12 mb-4"  style=" padding-top: 4rem;">
                <img src="{{ asset('img/pergaminoHistoria1.png') }}" class="img-fluid" alt="Descripción de la primera imagen">
            </div>
            <!-- Segunda imagen en fila vertical -->
            <div class="col-12 mb-4">
                <img src="{{ asset('img/pergaminoHistoria2.png') }}" class="img-fluid" alt="Descripción de la segunda imagen">
            </div>
        </div>
    </div>
</section>
@endsection
