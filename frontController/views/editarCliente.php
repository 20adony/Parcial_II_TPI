<div class="d-flex justify-content-center m-4">
        <main style="width: 30%;" class="">
            <h1 class="text-center" style="margin-top:5%; margin-bottom:5%;">Editar Cliente</h1>
            <form action="<?= BASE_DIR; ?>cliente/editEnable" method="post">
                <div class="container-fluid border border-2 border-secondary rounded-4 p-4 bg-light">
                    <div class="row d-flex justify-content-center pb-3">
                        <label class="form-label">Id:</label>
                        <input class="form-control" type="text" name="user_id" value="<?php echo $cliente["id"]; ?>" readonly>
                    </div>
                    <div class="row d-flex justify-content-center pb-3">
                        <label class="form-label">Nombres:</label>
                        <input class="form-control" type="text" name="Nombres" value="<?php echo $cliente["Nombres"]; ?>">
                    </div>
                    <div class="row d-flex justify-content-center pb-3">
                        <label class="form-label">Apellidos:</label>
                        <input class="form-control" type="text" name="Apellidos" value="<?php echo $cliente["Apellidos"]; ?>">
                    </div>
                    <div class="row d-flex justify-content-center pb-3">
                        <label class="form-label">Fecha de nacimiento:</label>
                        <input type="date" name="Nacimiento" class="form-control" value="<?php echo $cliente["Nacimiento"]; ?>">
                    </div>
                    <div class="row d-flex justify-content-center pb-3">
                        <label for="" class="form-label">Direccion:</label>
                        <textarea type="text" name="Direccion" class="form-control"><?php echo $cliente["Direccion"]; ?></textarea>
                    </div>

                    <div class="row d-flex justify-content-center">
                        <label class="form-label">Productos favoritos:</label>
                        <div class="mb-3 form-check check">
                            <input type="checkbox" class="form-check-input" name="productos[]" value="Arroz">
                            <label class="form-check-label" for="exampleCheck1">Arroz</label><br>
                            <input type="checkbox" class="form-check-input" name="productos[]" value="Frijoles">
                            <label class="form-check-label" for="exampleCheck1">Frijoles</label><br>
                            <input type="checkbox" class="form-check-input" name="productos[]" value="Queso">
                            <label class="form-check-label" for="exampleCheck1">Queso</label><br>
                            <input type="checkbox" class="form-check-input" name="productos[]" value="Atun">
                            <label class="form-check-label" for="exampleCheck1">Atun</label><br>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <input class="btn btn-success mt-3 me-4" type="submit" value="Editar">
                        <a href="<?= BASE_DIR; ?>cliente/" class="btn btn-danger mt-3">Cancelar</a>
                    </div>
                </div>
            </form>
        </main>
    </div>
