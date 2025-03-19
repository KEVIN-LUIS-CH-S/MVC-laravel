<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class ControladorDeRegistro extends Controller
{
    public function mostrarFormularioDeRegistro()
    {
        return view('auth.registrar');
    }

    public function registrar(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'contraseña' => 'required|string|confirmed|min:6',
        ]);

        $usuario = User::create([
            'name' => $request->nombre,
            'email' => $request->email,
            'password' => Hash::make($request->contraseña),
        ]);

        Auth::login($usuario);

        return redirect()->route('dashboard');
    }

}
