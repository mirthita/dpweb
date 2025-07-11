<!-- Inicio de cuerpo de pagina -->
    <div class="container-fluid">
        <div class="card">
            <h5 class="card-header">Registro de Usuario</h5>
            <form id="frm_user" action="" method="">
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
                                <option value="1">Administrador</option>
                                <option value="2">Vendedor</option>
                                <option value="3">Cliente</option>
                            </select>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-dorger">Registrar</button>
                    <button type="reset" class="btn btn-primary">Limpiar</button>
                    <button type="button" class="btn btn-danger">Cancelar</button>
            </form>
                </div>
        </div>
    </div>
    <!-- Fin de cuerpo de pagina -->
<script src="<?php echo BD_URL; ?>view/function/user.js"></script>