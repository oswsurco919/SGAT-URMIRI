@extends('sgat.layout')
@section('titulo', 'Lugares')
@section('contenido')
<div class="box">
    <h2><i class="fa-solid fa-map-location-dot"></i> Lugares del Complejo</h2>
    <div class="grid-img">
        <div class="img-card">
            <img src="{{ asset('piscina.jpg') }}" alt="Piscina Termal">
            <div class="info">
                <h4>Piscina Termal</h4>
                <p>Aguas con propiedades terapéuticas (azufre, calcio, hierro).</p>
                <span class="status aprobado">Disponible</span>
            </div>
        </div>
        <div class="img-card">
            <img src="{{ asset('hospedaje.jpg') }}" alt="Hospedaje">
            <div class="info">
                <h4>Hospedaje</h4>
                <p>Cabañas equipadas para estancia de turistas.</p>
                <span class="status pendiente">Ocupado</span>
            </div>
        </div>
        <div class="img-card">
            <img src="{{ asset('spa.jpg') }}" alt="Spa">
            <div class="info">
                <h4>Zona de Spa</h4>
                <p>Tratamientos relajantes con aguas termales.</p>
                <span class="status aprobado">Disponible</span>
            </div>
        </div>
    </div>
</div>
@endsection