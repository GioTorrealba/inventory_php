<div class="container">
    <h2>Iniciar Sesion</h2>
    <hr class="border">
    <form class="formulario" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" name="login"> 
        <div class="form-group">
            <i class="izquierda fa fa-user "></i><input type="text" class="usuario" name="usuario" placeholder="Usuario">
            <i class="izquierda fa fa-lock"></i><input type="password" class="password" name="password" placeholder="Contrasena">
            <button class="submit-btn fa fa-arrow-right" onclick="login.submit()"></button>
        </div>
        <?php if(!empty($errores)): ?>
        <div class="error">
            <ul>
            <?php echo $errores; ?>
            </ul>
        </div>
        <?php endif; ?>
    </form>
</div>
