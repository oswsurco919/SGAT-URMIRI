<!DOCTYPE html>
<html>
<head>
    <style>
        body { font-family: Arial, sans-serif; background: #f4f7f6; padding: 20px; }
        .card { background: white; padding: 30px; border-radius: 10px; max-width: 600px; margin: 0 auto; border-top: 5px solid #005f8a; }
        h1 { color: #005f8a; text-align: center; }
        p { color: #333; line-height: 1.6; }
        .datos { background: #f8f9fa; padding: 15px; border-radius: 5px; margin: 20px 0; border-left: 4px solid #28a745; }
        .footer { text-align: center; font-size: 12px; color: #777; margin-top: 30px; }
    </style>
</head>
<body>
    <div class="card">
        <h1>SGAT - Urmiri</h1>
        <p>Hola <strong>{{ $datos['nombre'] }}</strong>,</p>
        <p>Tu reserva en las Aguas Termales de Urmiri ha sido registrada con éxito. Aquí están los detalles de tu visita:</p>
        
        <div class="datos">
            <p><strong>CI:</strong> {{ $datos['ci'] }}</p>
            <p><strong>Fecha de Visita:</strong> {{ $datos['fecha'] }}</p>
            <p><strong>Servicio:</strong> {{ $datos['servicio'] }}</p>
        </div>

        <p>Por favor, presenta este correo (o el código de reserva) al momento de tu llegada al complejo.</p>
        <p>¡Te esperamos!</p>

        <div class="footer">
            <p>Sistema de Gestión y Automatización Turística</p>
            <p>Complejo Aguas Termales de Urmiri - La Paz, Bolivia</p>
        </div>
    </div>
</body>
</html>