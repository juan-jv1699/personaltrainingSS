<?php if(isset($edit) && isset($pro) && is_object($pro)):?>
    <h1>Editar producto <?=$pro->nombre?></h1>
    <?php $url_action=base_url."/?controller=producto&action=save&id=".$pro->id;?>
<?php else:?>
    <h2>Crear un nuevo producto</h2>
    <?php $url_action=base_url."/?controller=producto&action=save";?>
<?php endif ?>
<hr>

<form class="form" action="<?=$url_action?>" method="POST" enctype="multipart/form-data">
    <div class="form-outline mb-4">
        <label class="form-label" for="name" requiered>Nombre del producto</label>
        <input type="text" name="name" class="form-control" value="<?= isset($pro) && is_object($pro)? $pro->nombre : ''?>" />
    </div>
    <div class="form-outline mb-4">
        <label class="form-label" for="description" requiered>Descripcion del producto</label><br>
        <textarea name="description" cols="100" rows="5"><?= isset($pro) && is_object($pro)? $pro->descripcion : ''?></textarea>
    </div>
    <div class="form-outline mb-4">
        <label class="form-label" for="price" requiered>Precio del producto</label>
        <input type="text" name="price" class="form-control" value="<?= isset($pro) && is_object($pro)? $pro->precio : ''?>" />
    </div>
    <div class="form-outline mb-4">
        <label class="form-label" for="stock" requiered>Stock del producto</label>
        <input type="number" name="stock" class="form-control" value="<?= isset($pro) && is_object($pro)? $pro->stock : ''?>"/>
    </div>
    <div class="form-outline mb-4">
        <label class="form-label" for="categoria" requiered>categoria del producto</label><br>
        <?php $categorias = utils::showCategorias();?>
        <select name="category" >
            <?php while($cat = $categorias->fetch_object()):?>
                <option value="<?= $cat->id?>" <?= isset($pro) && is_object($pro) && $cat->id == $pro-> categoria_id ? 'selected': '';?>>
                    <?=$cat->nombre?>
                </option>
            <?php endwhile;?>
        </select>
    </div>
    <div class="form-outline mb-4">
        <label class="form-label" for="image" requiered>Imagen del producto</label>
        <br>
        <?php if (isset($pro) && is_object($pro) && !empty($pro->producto_image)): ?>
            <img src="<?=base_url?>/uploads/images/<?= $pro->producto_image?>" class="img-thumbnail" style="height: 400px;">
        <?php endif?>
        <input type="file" name="image" class="form-control" />
    </div>
    <div class="form-outline mb-4">
        <input type="submit" name="submit" class="btn btn-outline-dark"/>
    </div>
</form>