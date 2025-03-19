<!-- resources/views/auth/iniciar-sesion.blade.php -->

<div class="login-container">
    <h1>Iniciar Sesión</h1>
    <form method="POST" action="{{ route('iniciar-sesion') }}">
        @csrf
        <div class="form-group">
            <label for="email">Correo Electrónico:</label>
            <input type="email" id="email" name="email" required autofocus>
        </div>
        <div class="form-group">
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div class="form-group">
            <button type="submit">Iniciar Sesión</button>
        </div>
    </form>
</div>
