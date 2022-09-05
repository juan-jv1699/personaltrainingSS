<h1>Gestionar categorias</h1>

<a href="<?=base_url?>/?controller=categorias&action=create" class="btn btn-outline-dark">Crear nueva categoria</a>

<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
        </tr>
    </thead>
<?php while($cat = $categorias->fetch_object()):?>
    <tbody>
        <tr>
            <td>
                <?=$cat->id?>
            </td>
            <td>
                <?=$cat->nombre?>
            </td>
        </tr>
    </tbody>
<?php endwhile;?>
</table>
