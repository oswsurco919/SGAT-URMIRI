@extends('sgat.layout')
@section('titulo', 'Dashboard')
@section('contenido')

<div class="cards-grid">
    <div class="card"><i class="fa-solid fa-users"></i><h3>Visitantes Hoy</h3><p>45</p></div>
    <div class="card"><i class="fa-solid fa-calendar-check"></i><h3>Reservas Activas</h3><p>12</p></div>
    <div class="card"><i class="fa-solid fa-money-bill-wave"></i><h3>Ingresos del Mes</h3><p>Bs. 4,500</p></div>
    <div class="card"><i class="fa-solid fa-chart-line"></i><h3>Ocupación</h3><p>85%</p></div>
</div>

<div class="box">
    <h2><i class="fa-solid fa-list"></i> Últimas Reservas</h2>
    <table>
        <tr><th>Visitante</th><th>Fecha</th><th>Servicio</th><th>Estado</th></tr>
        <tr><td>Juan Pérez</td><td>20/11/2026</td><td>Piscina Familiar</td><td><span class="status aprobado">Aprobado</span></td></tr>
        <tr><td>María López</td><td>21/11/2026</td><td>Hospedaje</td><td><span class="status pendiente">Pendiente</span></td></tr>
        <tr><td>Carlos Mamani</td><td>22/11/2026</td><td>Piscina Individual</td><td><span class="status aprobado">Aprobado</span></td></tr>
    </table>
</div>
@endsection