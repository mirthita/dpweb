
<div class="container">
    <h4 class="mt-3 mb-3">Lista de Categorias</h4>
    <a href="<?= BD_URL ?>new-categoria" class="btn btn-primary">Nuevo +</a>
    <br><br>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Nro</th>
                <th>Nombre</th>
                <th>Detalle</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody id="content_categorias">

        </tbody>
    </table>
</div>
<script src="<?= BD_URL ?>view/function/categoria.js"></script>