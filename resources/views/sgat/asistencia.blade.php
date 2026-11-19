@extends('sgat.layout')
@section('titulo', 'Control de Asistencia')
@section('contenido')

<!-- MENSAJE DE ÉXITO -->
@if(session('success'))
    <div style="background: #d4edda; color: #155724; padding: 15px; border-radius: 8px; margin-bottom: 20px; border: 1px solid #c3e6cb; font-weight: bold;">
        <i class="fa-solid fa-circle-check"></i> {{ session('success') }}
    </div>
@endif

<div class="box">
    <h2><i class="fa-solid fa-user-check"></i> Control de Asistencia (HU-02)</h2>
    
    <div class="form-group">
        <label>Buscar Visitante por CI o Código de Reserva:</label>
        <div style="display: flex; gap: 10px;">
            <input type="text" placeholder="Ej. 6543210 LP">
            <button type="button" class="btn-primary"><i class="fa-solid fa-magnifying-glass"></i> Buscar</button>
        </div>
    </div>

    <table>
        <tr><th>Visitante</th><th>CI</th><th>Fecha Reserva</th><th>Estado de Pago</th><th>Acción</th></tr>
        <tr>
            <td>Juan Pérez</td>
            <td>6543210</td>
            <td>20/11/2026</td>
            <td><span class="status aprobado">Pagado</span></td>
            <td>
                <!-- FORMULARIO PARA REGISTRAR ASISTENCIA -->
                <form action="/asistencia/registrar" method="POST" style="margin: 0;">
                    @csrf
                    <button type="submit" class="btn-success" style="padding: 5px 10px; font-size: 12px;">Registrar Asistencia</button>
                </form>
            </td>
        </tr>
        <tr>
            <td>María López</td>
            <td>7891234</td>
            <td>21/11/2026</td>
            <td><span class="status pendiente">Pendiente</span></td>
            <td>
                <form action="/asistencia/registrar" method="POST" style="margin: 0;">
                    @csrf
                    <button type="submit" class="btn-primary" style="padding: 5px 10px; font-size: 12px;">Registrar Asistencia</button>
                </form>
            </td>
        </tr>
    </table>
</div>
@endsection