<?php
// routes/web.php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\Http\Controllers\Auth\ControladorDeInicioSesion;
use App\Http\Controllers\Auth\ControladorDeRegistro;

// Redirección automática a la página de inicio de sesión
Route::get('/', function () {
    return redirect()->route('iniciar-sesion');
});

// Ruta para mostrar el formulario de inicio de sesión
Route::get('iniciar-sesion', [ControladorDeInicioSesion::class, 'mostrarFormularioDeInicioSesion'])->name('iniciar-sesion');

// Ruta para manejar el inicio de sesión (opcional, si decides implementar la lógica de inicio de sesión)
Route::post('iniciar-sesion', [ControladorDeInicioSesion::class, 'iniciarSesion']);

// Ruta para mostrar el formulario de registro
Route::get('registrar', [ControladorDeRegistro::class, 'mostrarFormularioDeRegistro'])->name('registrar');

// Ruta para manejar el registro de usuarios
Route::post('registrar', [ControladorDeRegistro::class, 'registrar']);

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';
