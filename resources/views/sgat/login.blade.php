<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SGAT Urmiri - Acceso</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        body {
            /* Aquí se carga la imagen desde la carpeta public */
            background-image: linear-gradient(rgba(0, 50, 80, 0.7), rgba(0, 50, 80, 0.8)), url('{{ asset('fondo.jpg') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .login-card {
            background: rgba(255, 255, 255, 0.95);
            padding: 50px 40px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            width: 380px;
            text-align: center;
            backdrop-filter: blur(5px);
        }
        .login-card h1 {
            color: #005f8a; /* Un azul que combina con aguas termales */
            font-size: 24px;
            margin-bottom: 5px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        .login-card h2 {
            color: #333;
            font-size: 16px;
            font-weight: normal;
            margin-bottom: 30px;
            border-bottom: 2px solid #ddd;
            padding-bottom: 15px;
        }
        .input-group {
            margin-bottom: 20px;
            text-align: left;
        }
        .input-group label {
            display: block;
            margin-bottom: 8px;
            color: #555;
            font-size: 14px;
            font-weight: 600;
        }
        .input-group input {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 15px;
            transition: border 0.3s;
        }
        .input-group input:focus {
            border-color: #005f8a;
            outline: none;
        }
        button {
            width: 100%;
            padding: 14px;
            background: #005f8a;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.3s;
            margin-top: 10px;
        }
        button:hover {
            background: #004466;
        }
        .footer-text {
            margin-top: 20px;
            font-size: 12px;
            color: #777;
        }
    </style>
</head>
<body>
    <div class="login-card">
        <!-- Aquí va el nombre de tu sistema -->
        <h1>SGAT - Urmiri</h1>
        <h2>Sistema de Gestión Turística</h2>
        
        <form action="/dashboard" method="GET">
            <div class="input-group">
                <label>Correo Electrónico</label>
                <input type="email" placeholder="admin@sgat-urmiri.bo" required>
            </div>
            <div class="input-group">
                <label>Contraseña</label>
                <input type="password" placeholder="••••••••" required>
            </div>
            <button type="submit">Ingresar al Sistema</button>
        </form>
        
        <p class="footer-text">Aguas Termales de Urmiri - La Paz, Bolivia</p>
    </div>
</body>
</html>