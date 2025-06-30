<div class="container">
    <h1>Ingresar a tu cuenta: </h1>

    <?php if (!empty($mensaje)): ?>
        <div class="alert alert-danger"><?= htmlspecialchars($mensaje) ?></div>
    <?php endif; ?>

    <form method="GET" action="index.php">
        <input type="hidden" name="m" value="ingreso">
        <input name="redirect" type="hidden" value="<?= isset($_GET['redirect']) ? htmlspecialchars($_GET['redirect']) : ''; ?>">

        <div class="container">
            <div class="row">
                <div class="col-2">
                    <label for="nombre">Nombre de usuario: </label>
                </div>
                <div class="col-10">
                    <input name="nombre" type="text" required>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-2">
                    <label for="password">Contraseña: </label>
                </div>
                <div class="col-10">
                    <input name="password" type="password" required>
                </div>
            </div>
            <input class="mt-2" type="submit" value="Ingresar">
            <div>
                <a href="index.php?m=recuperacionPass" class="btn btn-outline-warning mt-5">Perdí mi contraseña</a>
            </div>
        </div>
    </form>
</div>
