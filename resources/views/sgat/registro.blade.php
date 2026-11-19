@extends('sgat.layout')
@section('titulo', 'Registro')
@section('contenido')
<div class="box">
    <h2><i class="fa-solid fa-user-plus"></i> Registro de Nuevo Visitante</h2>
    <div class="form-group">
        <label>Nombre Completo:</label>
        <input type="text" placeholder="Ej. Juan Pérez">
    </div>
    <div class="form-group">
        <label>CI:</label>
        <input type="text" placeholder="Ej. 6543210 LP">
    </div>
    <div class="form-group">
        <label>Correo Electrónico:</label>
        <input type="email" placeholder="ejemplo@correo.com">
    </div>
    <div class="form-group">
        <label>Tipo de Visitante:</label>
        <select>
            <option>Turista Nacional</option>
            <option>Turista Extranjero</option>
            <option>Grupo Familiar</option>
        </select>
    </div>
    <button class="btn-success"><i class="fa-solid fa-floppy-disk"></i> Guardar Registro</button>
</div>
@endsection