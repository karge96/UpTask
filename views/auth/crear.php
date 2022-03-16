<div class="contenedor crear">
    <?php include_once __DIR__ . '/../templates/nombre-sitio.php'; ?>

    <div class="contenedor-sm">
        <p class="descripcion-pagina">Iniciar Sesión</p>
        <?php include_once __DIR__ . '/../templates/alertas.php'; ?>
        <form action="/crear" method="POST" class="formulario">
        <div class="campo">
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" name="nombre" value="<?php echo $usuario->nombre; ?>" />
            </div>
            <div class="campo">
                <label for="email">Email:</label>
                <input type="email" value="<?php echo $usuario->email; ?>" id="email"  name="email">
            </div>
            <div class="campo">
                <label for="password">Password:</label>
                <input type="password" id="password"  name="password">
            </div>
            <div class="campo">
                <label for="password2">Repetir Password:</label>
                <input type="password" id="password"  name="password2">
            </div>
            <input type="submit" class="boton" value="Crear cuenta">
        </form>
        <div class="acciones">
            <a href="/">Iniciar Sesión</a>
            <a href="/olvide">Recupera tu password</a>
        </div>
    </div>
</div>