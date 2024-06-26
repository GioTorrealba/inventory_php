<div class="container">
    <div class="card">
        <div class="card-body">
            <h2>Está seguro de que desea borrar este registro?</h2>
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>?id=<?= $_GET['id'] ?>" method="POST">
                <div class="d-flex justify-content-center">
                    <button class="btn btn-lg btn-danger">Confirmar</button>
                </div>
            </form>
        </div>
    </div>
</div>
