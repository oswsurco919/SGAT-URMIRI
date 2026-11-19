@extends('sgat.layout')
@section('titulo', 'Disponibilidad')
@section('contenido')
<div class="box">
    <h2><i class="fa-solid fa-calendar-check"></i> Verificar Disponibilidad de Espacios</h2>
    <div class="form-group">
        <label>Fecha de Visita:</label>
        <input type="date">
    </div>
    <div class="form-group">
        <label>Servicio:</label>
        <select>
            <option>Piscina Termal</option>
            <option>Hospedaje</option>
            <option>Paquete Familiar</option>
        </select>
    </div>
    <button class="btn-primary"><i class="fa-solid fa-magnifying-glass"></i> Consultar</button>

    <h3 style="margin-top: 30px; color: #005f8a;">Resultado de la Consulta:</h3>
    <table>
        <tr><th>Lugar</th><th>Capacidad</th><th>Disponibles</th><th>Estado</th></tr>
        <tr><td>Piscina Termal</td><td>50 personas</td><td>15</td><td><span class="status aprobado">Hay espacio</span></td></tr>
        <tr><td>Hospedaje</td><td>10 habitaciones</td><td>0</td><td><span class="status rechazado">Sin espacio</span></td></tr>
        <tr><td>Zona de Spa</td><td>20 personas</td><td>8</td><td><span class="status aprobado">Hay espacio</span></td></tr>
    </table>
</div>
@endsection