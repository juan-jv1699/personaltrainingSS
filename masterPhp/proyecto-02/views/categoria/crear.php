<h2>Crear nueva categoria</h2>

<form class="form" action="<?=base_url?>/?controller=categorias&action=save" method="POST">
    <div class="form-outline mb-4">
        <input type="text" name="name" class="form-control" />
        <label class="form-label" for="name" requiered>Nombre categoria</label>
    </div>
    <div class="form-outline mb-4">
        <input type="submit" name="submit" class="btn btn-outline-dark"/>
    </div>
</form>