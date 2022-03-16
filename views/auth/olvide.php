<div class="contenedor olvide">
<?php include_once __DIR__ . '/../templates/nombre-sitio.php'; ?>

    <div class="contenedor-sm">
        <p class="descripcion-pagina">Recuperar acceso</p>
        <form action="/olvide" method="POST" class="formulario">
            <div class="campo">
                <label for="email">Email:</label>
                <input type="email" id="email" placeholder="Coloca tu email" name="email">
            </div>
           
            <input type="submit" class="boton" value="Enviar instrucciones">
        </form>
        <div class="acciones">
            <a href="/">Iniciar sesión</a>
            <a href="/crear">Crear cuenta</a>
        </div>
    </div>
</div>