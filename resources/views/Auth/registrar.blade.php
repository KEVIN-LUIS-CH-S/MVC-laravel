<!-- resources/views/auth/registrar.blade.php -->

@section('title', 'Registrar Usuario')

<div class="register-container">
    <h1>Registrar Usuario</h1>
    <form method="POST" action="{{ route('registrar') }}">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required autofocus>
        </div>
        <div class="form-group">
            <label for="email">Correo Electrónico:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="contraseña">Contraseña:</label>
            <input type="password" id="contraseña" name="contraseña" required>
        </div>
        <div class="form-group">
            <label for="contraseña_confirmation">Confirmar Contraseña:</label>
            <input type="password" id="contraseña_confirmation" name="contraseña_confirmation" required>
        </div>
        <div class="form-group">
            <button type="submit">Registrar</button>
        </div>
    </form>
</div>
