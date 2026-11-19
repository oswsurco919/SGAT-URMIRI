@extends('sgat.layout')
@section('titulo', 'Reportes')
@section('contenido')

<div class="cards-grid">
    <div class="card"><i class="fa-solid fa-users"></i><h3>Visitantes Totales</h3><p>1,250</p></div>
    <div class="card"><i class="fa-solid fa-money-bill-wave"></i><h3>Ingresos del Mes</h3><p>Bs. 15,400</p></div>
    <div class="card"><i class="fa-solid fa-bed"></i><h3>Hospedajes Ocupados</h3><p>75%</p></div>
    <div class="card"><i class="fa-solid fa-chart-line"></i><h3>Ocupación General</h3><p>85%</p></div>
</div>

<div class="box">
    <h2><i class="fa-solid fa-chart-pie"></i> Reporte de Ocupación (Últimos 6 meses)</h2>
    <canvas id="graficoOcupacion" height="90"></canvas>
</div>

<div class="box">
    <h2><i class="fa-solid fa-file-pdf"></i> Generar Reporte PDF</h2>
    <div class="form-group">
        <label>Seleccione el tipo de reporte:</label>
        <select>
            <option>Reporte de Ingresos Mensuales</option>
            <option>Reporte de Asistencia de Visitantes</option>
            <option>Reporte de Ocupación de Hospedaje</option>
        </select>
    </div>
    <button class="btn-primary"><i class="fa-solid fa-download"></i> Descargar Reporte PDF</button>
</div>

<script>
    const ctx = document.getElementById('graficoOcupacion').getContext('2d');
    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov'],
            datasets: [{
                label: 'Ocupación (%)',
                data: [60, 75, 80, 70, 90, 85],
                backgroundColor: 'rgba(0, 95, 138, 0.7)',
                borderRadius: 5
            }]
        },
        options: { responsive: true, plugins: { legend: { display: false } }, scales: { y: { max: 100 } } }
    });
</script>
@endsection