<main>
    <h1 class="p-0 m-0 mt-5">Todos los Usuarios del Sistema</h1>
    <table class="table">
        <tr>
            <td>Id</td>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
    <?php 
    foreach($users["users"] as $user): 
        $direccionMostrar = BASE_DIR . "cliente/{$user["id"]}/";
        $direccionEliminar = BASE_DIR . "cliente/delete/";
        $direccionEditar = BASE_DIR . "cliente/{$user["id"]}/edit/";
        echo
    
    <<<OUTPUT
            <tr>
                <td>{$user["id"]}</td>
                <td>{$user["Nombres"]}</td>
                <td>{$user["Apellidos"]}</td>
                <td>
                    <a href="{$direccionEditar}" class="btn btn-secondary">Editar</a>
                </td>
                <td>
                    <a href="{$direccionMostrar}" class="btn btn-primary">Mostrar</a>
                </td>
                <td>
                    <form action="{$direccionEliminar}" method="post">
                        <input type="hidden" name="user_name" value="{$user["id"]}">
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
    OUTPUT;
    endforeach; ?>
    </table>
    <form action="<?= BASE_DIR; ?>cliente/new" method="post">
        <div class="row d-flex justify-content-center">
            <input class="btn btn-success mt-3" type="submit" value="AGREGAR">
        </div>
    </form>
    
</main>