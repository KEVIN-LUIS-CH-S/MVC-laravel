<?php
// app/Http/Controllers/Auth/ControladorDeInicioSesion.php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ControladorDeInicioSesion extends Controller
{
     // Muestra el formulario de inicio de sesión
     public function mostrarFormularioDeInicioSesion()
     {
         return view('auth.iniciar-sesion');
     }
 
     // Maneja la lógica de inicio de sesión (opcional)
     public function iniciarSesion(Request $request)
     {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Autenticación exitosa
            $request->session()->regenerate();
        
            return redirect()->intended('dashboard');
        }
        
        return back()->withErrors([
            'email' => 'Las credenciales proporcionadas no coinciden con nuestros registros.',
        ]);
     }
}
