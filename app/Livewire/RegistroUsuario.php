<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegistroUsuario extends Component
{
    public $nombre;
    public $email;
    public $contraseña;
    public $contraseña_confirmation;

    protected $rules = [
        'nombre' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'contraseña' => 'required|string|confirmed|min:8',
    ];

    public function registrar()
    {
        $this->validate();

        $usuario = User::create([
            'name' => $this->nombre,
            'email' => $this->email,
            'password' => Hash::make($this->contraseña),
        ]);

        Auth::login($usuario);

        return redirect()->route('dashboard');
    }

    public function render()
    {
        return view('livewire.registro-usuario');
    }
}
