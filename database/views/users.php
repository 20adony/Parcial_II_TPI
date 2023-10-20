<main>
    <h1 class="p-0 m-0 mt-5">Todos los Usuarios del Sistema</h1>
    <table class="table table-striped">
        <tr>
            <th>Usuario</th>
            <th>Password</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
    <?php foreach($users as $user): 
    $direccionEliminar = BASE_DIR . "User/delete/";
    $direccionVer = BASE_DIR . "User/show/";
    $direccionEditar = BASE_DIR . "User/edit/";
    echo
    
    <<<OUTPUT
            <tr>
                <td>{$user["username"]}</td>
                <td>{$user["password"]}</td>
                <td>
                    <form action="{$direccionVer}" method="post">
                        <input type="hidden" name="user_name" value="{$user["username"]}">
                        <button type="submit" class="btn btn-primary">Seleccionar</button>
                    </form>
                </button>
                <td>
                    <form action="{$direccionEliminar}" method="post">
                        <input type="hidden" name="user_name" value="{$user["username"]}">
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
                <td>
                    <form action="{$direccionEditar}" method="post">
                        <input type="hidden" name="user_name" value="{$user["username"]}">
                        <button type="submit" class="btn btn-success">Editar</button>
                    </form>
                </td>
            </tr>
    OUTPUT;
    endforeach; ?>
    </table>
</main>