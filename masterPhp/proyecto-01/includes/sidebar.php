<?php
    require_once 'helper.php'
?>
<div class="col-3 p-2 ms-5">
    <article class="d-flex flex-column">
        <!-- login -->
        <div class="card p-3 my-3">
            <form name="login" action="/proyecto-01/controller/loginUser.php" method="POST">
                <h2>Iniciar sesion</h2>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="emailLogin" name="email" aria-describedby="emailHelp" placeholder="email@example.com">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="passwordLogin" name="password">
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <!-- register -->
        <div class="card p-3 my-3">
            <form name="register" action="../controller/register.php" method="POST">
                <h2>Registrate</h2>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input type="text" class="form-control" id="nameUSer" name="name" aria-describedby="textHelp" placeholder="Write your name">
                <div id="textHelp" class="form-text">We'll never share your information whit anyone.</div>
                <?php echo isset($_SESSION['errores'])? mostrarError($_SESSION['errores'],'name'):"" ?>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label" >Last name</label>
                    <input type="text" class="form-control" id="lastnameUser" name="lastname" placeholder="Your last name her">
                </div>
                <?php echo isset($_SESSION['errores'])? mostrarError($_SESSION['errores'],'lastname'):"" ?>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Email</label>
                    <input type="Email" class="form-control" id="emailUser" name="email" placeholder="email@example.com">
                </div>
                <?php echo isset($_SESSION['errores'])? mostrarError($_SESSION['errores'],'email'):"" ?>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="PassUser" name="password" required>
                </div>
                <?php echo isset($_SESSION['errores'])? mostrarError($_SESSION['errores'],'password'):"" ?>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                <?php borrarErrores()?>
            </form>
        </div>
    </article>
</div>