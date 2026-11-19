@extends('sgat.layout')
@section('titulo', 'Pagos')
@section('contenido')
<div class="box">
    <h2><i class="fa-solid fa-credit-card"></i> Gestión de Pagos</h2>
    <div class="form-group">
        <label>Método de Pago:</label>
        <select>
            <option>Efectivo (Bolivianos)</option>
            <option>Tarjeta de Débito</option>
            <option>Tarjeta de Crédito</option>
            <option>Transferencia Bancaria</option>
            <option>QR Simple (Billetera Móvil)</option>
        </select>
    </div>
    <div class="form-group">
        <label>Monto a Pagar (Bs.):</label>
        <input type="number" placeholder="Ej. 150">
    </div>
    <button class="btn-success"><i class="fa-solid fa-check"></i> Registrar Pago</button>

    <h3 style="margin-top: 30px; color: #005f8a;">Últimos Pagos Registrados:</h3>
    <table>
        <tr><th>Visitante</th><th>Monto</th><th>Método</th><th>Estado</th></tr>
        <tr><td>Juan Pérez</td><td>Bs. 150</td><td>Efectivo</td><td><span class="status aprobado">Pagado</span></td></tr>
        <tr><td>María López</td><td>Bs. 200</td><td>QR Simple</td><td><span class="status aprobado">Pagado</span></td></tr>
        <tr><td>Carlos Mamani</td><td>Bs. 100</td><td>Tarjeta</td><td><span class="status pendiente">Pendiente</span></td></tr>
    </table>
</div>
@endsection