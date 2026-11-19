<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ComprobanteReserva;

// --- LOGIN Y DASHBOARD ---
Route::get('/', function () { return view('sgat.login'); });
Route::get('/dashboard', function () { return view('sgat.dashboard'); });

// --- MÓDULO DE RESERVAS (HU-01) ---
Route::get('/reservas', function () { return view('sgat.reservas'); });

Route::post('/reservas/guardar', function (Request $request) {
    // Recibimos los datos del formulario
    $datos = $request->only('nombre', 'ci', 'correo', 'fecha', 'servicio');

    try {
        // ENVÍO REAL DE CORREO
        Mail::to($datos['correo'])->send(new ComprobanteReserva($datos));
        
        $mensaje = "¡Reserva registrada con éxito para {$datos['nombre']}! El comprobante ha sido enviado a tu correo: {$datos['correo']}";
    } catch (\Exception $e) {
        // Si falla el correo
        $mensaje = "Reserva registrada, pero hubo un error al enviar el correo. Revisa la configuración de Gmail.";
    }

    return redirect('/reservas')->with('success', $mensaje);
});

// --- MÓDULO DE ASISTENCIA (HU-02) ---
Route::get('/asistencia', function () { return view('sgat.asistencia'); });

Route::post('/asistencia/registrar', function () {
    return redirect('/asistencia')->with('success', '¡Asistencia del visitante registrada correctamente en el sistema!');
});

// --- REPORTES ---
Route::get('/reportes', function () { return view('sgat.reportes'); });