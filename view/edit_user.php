<!-- Inicio de cuerpo de pagina -->
    <div class="container-fluid">
        <div class="card">
            <h5 class="card-header">Editar Usuario</h5>
            <?php
            if (isset($_GET["views"])) {
                $ruta = explode("/", $_GET["views"]);
                //echo $ruta[1];

            }
            ?>
            <form id="frm_edit_user" action="" method="">
                <input type="hidden" id="id_persona" name="id_persona" value="<?= $ruta[1]?>">
                <div class="card-body">
                    <div class="mb-3 row">
                        <label for="nro_doc" class="col-sm-2 col-form-label">Nro de Documento :</label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" id="nro_doc" name="nro_doc" required>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="Razon_Social" class="col-sm-2 col-form-label">Razon_Social :</label>
                        <div class="col-sm-8">
                            <input type="tex" class="form-control" id="Razon_social" name="Razon_Social" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="Telefono" class="col-sm-2 col-form-label">Telefono:</label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" id="Telefono" name="Telefono" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="correo" class="col-sm-2 col-form-label">Correo :</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="correo" name="correo" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="Departamento" class="col-sm-2 col-form-label">Departamento :</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="Departamento" name="Departamento" required>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="Provincia" class="col-sm-2 col-form-label">Provincia :</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="Provincia" name="Provincia" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="distrito" class="col-sm-2 col-form-label">distrito :</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="distrito" name="distrito" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="Codigo_postal" class="col-sm-2 col-form-label">Codigo postal:</label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" id="Codigo_postal" name="Codigo_postal" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="Direccion" class="col-sm-2 col-form-label">Direccion :</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="Direccion" name="Direccion" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="Rol" class="col-sm-2 col-form-label">Rol :</label id="Rol" name="Rol" required>
                        <div class="col-sm-8">
                            <select class="form-control" name="Rol" id="Rol" required>
                                <option value="" disabled selected>Seleccione</option>
                                <option value="Administrador">Administrador</option>
                                <option value="Vendedor">Vendedor</option>
                                <option value="Empleado">Empleado</option>
                            </select>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-dorger">Actualizar</button>
                    <a href="<?= BD_URL ?>users" class="btn btn-danger">Cancelar</a>
            </form>
            </div>
        </div>
    </div>
    <!-- Fin de cuerpo de pagina -->
<script src="<?php echo BD_URL; ?>view/function/user.js"></script>
<script>
    edit_user();
</script>
