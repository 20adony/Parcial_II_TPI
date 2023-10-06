<div class="d-flex justify-content-center m-4">
        <main style="width: 30%;" class="">
            <h1 class="text-center" style="margin-top:5%; margin-bottom:5%;">Editar Cliente</h1>
            <form action="" method="post">
                <div class="container-fluid border border-2 border-secondary rounded-4 p-4 bg-light">
                    <div class="row d-flex justify-content-center pb-3">
                        <label class="form-label">Id:</label>
                        <input class="form-control" type="text" name="user_id" value="<?php echo $cliente["id"]; ?>" readonly>
                    </div>
                    <div class="row d-flex justify-content-center pb-3">
                        <label class="form-label">Nombres:</label>
                        <input class="form-control" type="text" name="Nombres" value="<?php echo $cliente["Nombres"]; ?>" readonly>
                    </div>
                    <div class="row d-flex justify-content-center pb-3">
                        <label class="form-label">Apellidos:</label>
                        <input class="form-control" type="text" name="Apellidos" value="<?php echo $cliente["Apellidos"]; ?>" readonly>
                    </div>
                    <div class="row d-flex justify-content-center pb-3">
                        <label class="form-label">Fecha de nacimiento:</label>
                        <input type="date" name="Nacimiento" class="form-control" value="<?php echo $cliente["Nacimiento"]; ?>" readonly>
                    </div>
                    <div class="row d-flex justify-content-center pb-3">
                        <label for="" class="form-label">Direccion:</label>
                        <textarea type="text" name="Direccion" class="form-control" readonly><?php echo $cliente["Direccion"]; ?></textarea>
                    </div>
                    <div class="row d-flex justify-content-center pb-3">
                        <label for="" class="form-label">Productos:</label>
                        <textarea type="text" name="Direccion" class="form-control" readonly><?php 
                        foreach ($cliente["Productos"] as $key) {
                            echo $key .PHP_EOL;
                        }
                         ?></textarea>
                    </div>
                    <div class="d-flex justify-content-center">
                        <a href="<?= BASE_DIR; ?>cliente/" class="btn btn-danger mt-3">Volver</a>
                    </div>
                </div>
            </form>
        </main>
    </div>