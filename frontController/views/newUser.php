<main>
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            
            <form class="formularios" action="<?= BASE_DIR; ?>cliente/add" method="post">
                <div class="row d-flex justify-content-center">
                    <div>
                    <label for="exampleInputEmail1">Nombres :</label>
                    <input type="text"  name="Nombres" placeholder="Nombres"><br>
                    <label for="exampleInputEmail1">Apellidos :</label>
                    <input type="text"  name="Apellidos" placeholder="Apellidos"><br>
                    <label for="exampleInputEmail1">Fecha de Nacimiento :</label>
                    <input type="date"  name="Nacimiento" placeholder="Fecha de nacimiento"><br>
                    <label for="exampleInputEmail1">Direccion :</label>
                    <input type="text"  name="Direccion" placeholder="Direccion"><br
                    </div>
                    <label for="">Productos:</label>
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
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </form>
        </div>
    </div>
    
</main>