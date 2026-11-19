<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>SGAT Urmiri - @yield('titulo')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Segoe UI', sans-serif; }
        body { 
            background-image: linear-gradient(rgba(0, 40, 60, 0.8), rgba(0, 40, 60, 0.9)), url('{{ asset('fondo.jpg') }}');
            background-size: cover; background-position: center; background-attachment: fixed; min-height: 100vh;
        }
        .navbar { 
            background: rgba(0, 95, 138, 0.95); color: white; padding: 15px 30px; 
            display: flex; justify-content: space-between; align-items: center; 
            box-shadow: 0 2px 10px rgba(0,0,0,0.3); backdrop-filter: blur(5px);
        }
        .navbar h1 { font-size: 20px; display: flex; align-items: center; gap: 10px; }
        .navbar div a { color: white; text-decoration: none; font-weight: bold; margin-left: 15px; font-size: 14px; transition: 0.3s; }
        .navbar div a:hover { color: #ffd700; }
        .logout { color: #ffd700 !important; border: 1px solid #ffd700; padding: 5px 15px; border-radius: 5px; }
        .logout:hover { background: #ffd700; color: #005f8a !important; }
        .main-container { width: 90%; margin: 30px auto; }
        .box { 
            background: rgba(255, 255, 255, 0.95); padding: 25px; border-radius: 15px; 
            box-shadow: 0 8px 32px rgba(0,0,0,0.2); margin-bottom: 25px; backdrop-filter: blur(10px);
        }
        .box h2 { color: #005f8a; margin-bottom: 20px; border-bottom: 2px solid #eee; padding-bottom: 10px; }
        .btn-primary { background: #005f8a; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; font-weight: bold; }
        .btn-primary:hover { background: #004466; }
        .btn-success { background: #28a745; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; }
        .btn-success:hover { background: #218838; }
        .form-group { margin-bottom: 15px; }
        .form-group label { display: block; margin-bottom: 5px; font-weight: bold; color: #555; font-size: 14px; }
        .form-group input, .form-group select { width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px; }
        table { width: 100%; border-collapse: collapse; margin-top: 15px; background: white; border-radius: 8px; overflow: hidden; }
        th, td { padding: 12px; text-align: left; border-bottom: 1px solid #eee; }
        th { background: #f8f9fa; color: #005f8a; }
        .status { padding: 5px 10px; border-radius: 20px; font-size: 12px; font-weight: bold; }
        .status.aprobado { background: #d4edda; color: #155724; }
        .status.pendiente { background: #fff3cd; color: #856404; }
        .status.rechazado { background: #f8d7da; color: #721c24; }
        .cards-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px; margin-bottom: 30px; }
        .card { background: rgba(255, 255, 255, 0.95); padding: 20px; border-radius: 15px; box-shadow: 0 4px 15px rgba(0,0,0,0.2); text-align: center; }
        .card i { font-size: 40px; color: #005f8a; margin-bottom: 10px; }
        .card h3 { font-size: 14px; color: #777; }
        .card p { font-size: 22px; font-weight: bold; color: #333; }
    </style>
</head>
<body>
    <div class="navbar">
        <h1><i class="fa-solid fa-water"></i> SGAT - Urmiri</h1>
        <div>
            <a href="/dashboard"><i class="fa-solid fa-house"></i> Inicio</a>
            <a href="/reservas"><i class="fa-solid fa-calendar-plus"></i> Reservas (HU-01)</a>
            <a href="/asistencia"><i class="fa-solid fa-user-check"></i> Asistencia (HU-02)</a>
            <a href="/reportes"><i class="fa-solid fa-chart-pie"></i> Reportes</a>
            <a href="/" class="logout"><i class="fa-solid fa-right-from-bracket"></i> Salir</a>
        </div>
    </div>
    <div class="main-container">
        @yield('contenido')
    </div>
</body>
</html>