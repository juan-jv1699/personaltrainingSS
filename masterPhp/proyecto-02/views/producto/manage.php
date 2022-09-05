<h2>Gestion de productos</h2>
<hr>

<a href="<?=base_url?>/?controller=producto&action=create" class="btn btn-outline-dark">Crear producto</a>

<?php if(isset($_SESSION['product']) && $_SESSION['product'] == "complete"):?>
    <div class="alert alert-success" role="alert">
        Registro completo correctamente
    </div>
<?php elseif(isset($_SESSION['product']) && $_SESSION['product'] != "complete"):?>
    <div class="alert alert-warning" role="alert">
        Error en el registro
    </div>
<?php endif;?>
<?php utils::deleteSession('product')?>

<?php if(isset($_SESSION['delete']) && $_SESSION['delete'] == "complete"):?>
    <div class="alert alert-success" role="alert">
        Registro eliminado correctamente
    </div>
<?php elseif(isset($_SESSION['delete']) && $_SESSION['delete'] != "complete"):?>
    <div class="alert alert-warning" role="alert">
        Error en la eliminacion
    </div>
<?php endif;?>
<?php utils::deleteSession('delete')?>


<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Categoria_id</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Precio</th>
            <th>Stock</th>
            <th>Oferta</th>
            <th>Fecha</th>
            <th>Producto_img</th>
            <th>Acciones</th>

        </tr>
    </thead>
<?php while($pro = $productos->fetch_object()):?>
    <tbody>
        <tr>
            <td>
                <?=$pro->id?>
            </td>
            <td>
                <?=$pro->categoria_id?>
            </td>
            <td>
                <?=$pro->nombre?>
            </td>
            <td>
                <?=$pro->descripcion?>
            </td>
            <td>
                <?=$pro->precio?>
            </td>
            <td>
                <?=$pro->stock?>
            </td>
            <td>
                <?=$pro->oferta?>
            </td>
            <td>
                <?=$pro->fecha?>
            </td>
            <td>
                <?=$pro->producto_image?>
            </td>
            <td>
                <a class="btn btn-sm" href="<?=base_url?>/?controller=producto&action=edit&id=<?=$pro->id?>">✏</a>
                <a class="btn btn-sm" href="<?=base_url?>/?controller=producto&action=delete&id=<?=$pro->id?>">❌</a>
            </td
        </tr>
    </tbody>
<?php endwhile;?>
</table>