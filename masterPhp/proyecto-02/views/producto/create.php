<h2>Crear un nuevo producto</h2>
<hr>
<form class="form" action="<?= base_url?>/?controller=producto&action=save" method="POST" enctype="multipart/form-data">
    <div class="form-outline mb-4">
        <label class="form-label" for="name" requiered>Nombre del producto</label>
        <input type="text" name="name" class="form-control" />
    </div>
    <div class="form-outline mb-4">
        <label class="form-label" for="description" requiered>Descripcion del producto</label><br>
        <textarea name="description" cols="100" rows="5"></textarea>
    </div>
    <div class="form-outline mb-4">
        <label class="form-label" for="price" requiered>Precio del producto</label>
        <input type="text" name="price" class="form-control" />
    </div>
    <div class="form-outline mb-4">
        <label class="form-label" for="stock" requiered>Stock del producto</label>
        <input type="number" name="stock" class="form-control" />
    </div>
    <div class="form-outline mb-4">
        <label class="form-label" for="categoria" requiered>categoria del producto</label><br>
        <?php $categorias = utils::showCategorias();?>
        <select name="category" >
            <?php while($cat = $categorias->fetch_object()):?>
                <option value="<?= $cat->id?>"><?= $cat->nombre?></option>
            <?php endwhile;?>
        </select>
    </div>
    <div class="form-outline mb-4">
        <label class="form-label" for="image" requiered>Imagen del producto</label>
        <input type="file" name="image" class="form-control" />
    </div>
    <div class="form-outline mb-4">
        <input type="submit" name="submit" class="btn btn-outline-dark"/>
    </div>
</form>