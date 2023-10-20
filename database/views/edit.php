<div class="d-flex justify-content-center m-4">
        <main style="width: 30%;" class="">
            <?php foreach($cliente as $user):
                $direccion = BASE_DIR . "User/index/";
                $edit = BASE_DIR . "User/change/"; 
                echo
                
                <<<OUTPUT
                    <h1 class="text-center" style="margin-top:5%; margin-bottom:5%;">User: {$user["username"]}</h1>
                    <form action="{$edit}" method="post">
                        <div class="container-fluid border border-2 border-secondary rounded-4 p-4 bg-light">
                            <div class="row d-flex justify-content-center pb-3">
                                <label class="form-label">Id:</label>
                                <input class="form-control" type="text" name="user_id" value="{$user["id"]}" readonly>
                            </div>
                            <div class="row d-flex justify-content-center pb-3">
                                <label class="form-label">Name User:</label>
                                <input class="form-control" type="text" name="user_name" value="{$user["username"]}" required>
                            </div>
                            <div class="row d-flex justify-content-center pb-3">
                                <label class="form-label">Clave:</label>
                                <input class="form-control" type="text" name="pass" value="{$user["password"]}" required>
                            </div>
                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-danger">Modificar</button>
                            </div>
                            <div class="d-flex justify-content-center">
                                <a href="{$direccion}" class="btn btn-primary mt-3">Cancelar</a>
                            </div>
                            
                        </div>
                    </form>
                OUTPUT;
                endforeach; ?>
            
        </main>
    </div>