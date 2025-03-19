<!-- resources/views/livewire/registro-usuario.blade.php -->
<div>
    <form wire:submit.prevent="registrar">
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" wire:model="nombre" required autofocus>
        </div>
        <div class="form-group">
            <label for="email">Correo Electrónico:</label>
            <input type="email" id="email" wire:model="email" required>
        </div>
        <div class="form-group">
            <label for="contraseña">Contraseña:</label>
            <input type="password" id="contraseña" wire:model="contraseña" required>
        </div>
        <div class="form-group">
            <label for="contraseña_confirmation">Confirmar Contraseña:</label>
            <input type="password" id="contraseña_confirmation" wire:model="contraseña_confirmation" required>
        </div>
        <div class="form-group">
            <button type="submit">Registrar</button>
        </div>
    </form>
</div>