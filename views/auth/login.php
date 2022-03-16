<div class="contenedor login">
<?php include_once __DIR__ . '/../templates/nombre-sitio.php'; ?>

<div class="contenedor-sm">
    <p class="descripcion-pagina">Iniciar Sesión</p>
    <?php include_once __DIR__ . '/../templates/alertas.php'; ?>
        <form action="/" method="POST" class="formulario">
            <div class="campo">
                <label for="email">Email:</label>
                <input type="email" id="email" placeholder="Coloca tu email" name="email">
            </div>
            <div class="campo">
                <label for="password">Password:</label>
                <input type="password" id="password" placeholder="Coloca tu password" name="password">
            </div>
            <input type="submit" class="boton" value="Iniciar Sesión">
        </form>
        <div class="acciones">
            <a href="/crear">Crea tu cuenta aquí</a>
            <a href="/olvide">Recupera tu password</a>
        </div>
    </div>
</div>