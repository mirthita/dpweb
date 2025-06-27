<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mirtha</title>
    <link rel="stylesheet" href="<?php echo BD_URL; ?>view/bootstrap/css/bootstrap.min.css">
    <script>
        const bd_url = '<?php echo BD_URL; ?>';
    </script>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">logo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">users</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">clients</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">shops</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sales</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="card">
            <h5 class="card-header">Registro</h5>
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




</body>
<script src="<?php echo BD_URL; ?>view/function/user.js"></script>

<script src="<?php echo BD_URL; ?>view/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


</html>