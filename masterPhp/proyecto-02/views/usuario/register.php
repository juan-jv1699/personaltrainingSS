<form action="/?controller=usuario&action=save" method="POST">
    <div class="mb-3">
      <label for="name" class="form-label">Nombre</label>
      <input class="form-control" type="text" placeholder="Escribe tu nombre aqui" name="name" required>
    </div>
    <div class="mb-3">
      <label for="lastname" class="form-label">Apellidos</label>
      <input class="form-control" type="text" placeholder="Escribe tu apellido aqui" name="lastname" required>
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input class="form-control" type="email" name="email" required>
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">contraseña</label>
      <input class="form-control" type="password" name="password" required>
    </div>
    <div class="mb-3 container-fluid">
        <div class="row">
            <div class="col-4 offset-4">
                <input class="form-control btn btn-outline-primary" type="submit" value="Enviar">
            </div>
        </div>
    </div>
</form>