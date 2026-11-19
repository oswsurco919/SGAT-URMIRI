@extends('sgat.layout')
@section('titulo', 'Reservas')
@section('contenido')

<!-- MENSAJE DE ÉXITO -->
@if(session('success'))
    <div style="background: #d4edda; color: #155724; padding: 20px; border-radius: 8px; margin-bottom: 25px; border: 1px solid #c3e6cb; text-align: center;">
        <h3 style="margin-bottom: 10px;"><i class="fa-solid fa-envelope-circle-check"></i> ¡Correo Enviado!</h3>
        <p style="font-size: 16px;">{{ session('success') }}</p>
    </div>
@endif

<div class="box">
    <h2><i class="fa-solid fa-calendar-plus"></i> Registrar Nueva Reserva (HU-01)</h2>
    
    <form action="/reservas/guardar" method="POST">
        @csrf <!-- Token de seguridad de Laravel -->
        
        <div class="form-group">
            <label>Nombre del Visitante:</label>
            <input type="text" name="nombre" placeholder="Ej. Oswaldo Surco" required>
        </div>
        <div class="form-group">
            <label>CI / Documento:</label>
            <input type="text" name="ci" placeholder="Ej. 6543210 LP" required>
        </div>
        <div class="form-group">
            <label>Correo Electrónico:</label>
            <input type="email" name="correo" placeholder="ejemplo@correo.com" required>
        </div>
        <div class="form-group">
            <label>Fecha de Visita:</label>
            <input type="date" name="fecha" required>
        </div>
        <div class="form-group">
            <label>Tipo de Servicio:</label>
            <select name="servicio">
                <option value="Piscina Individual">Piscina Individual</option>
                <option value="Piscina Familiar">Piscina Familiar</option>
                <option value="Hospedaje">Hospedaje</option>
            </select>
        </div>
        <button type="submit" class="btn-success"><i class="fa-solid fa-paper-plane"></i> Confirmar Reserva y Enviar al Correo</button>
    </form>
</div>

<!-- Tabla de Reservas -->
<div class="box">
    <h2><i class="fa-solid fa-list"></i> Últimas Reservas</h2>
    <table>
        <tr><th>Visitante</th><th>CI</th><th>Fecha</th><th>Servicio</th><th>Estado</th></tr>
        <tr><td>Juan Pérez</td><td>6543210</td><td>20/11/2026</td><td>Piscina Familiar</td><td><span class="status aprobado">Aprobado</span></td></tr>
        <tr><td>María López</td><td>7891234</td><td>21/11/2026</td><td>Hospedaje</td><td><span class="status pendiente">Pendiente</span></td></tr>
    </table>
</div>
@endsection