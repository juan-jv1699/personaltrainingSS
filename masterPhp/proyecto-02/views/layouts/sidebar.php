 <!-- body -->
 <div class="row">
            <div class="container">
                <div class="row">
                    <div class="card col-3 offset-1 m-1 p-4 h-75">
                        <!-- login menu -->
                        <?php if(!isset($_SESSION['identity'])):?>
                        <form class="p-2" action="<?=base_url?>/?controller=usuario&action=login" method="POST">
                            <h2>Iniciar sesion</h2>
                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <input type="email" name="email" class="form-control" />
                                <label class="form-label" for="email">Email address</label>
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <input type="password" name="password" class="form-control" />
                                <label class="form-label" for="password">Password</label>
                            </div>

                            <!-- 2 column grid layout for inline styling -->
                            <div class="row mb-4">
                                <div class="col">
                                <a href="#!">Forgot password?</a>
                                </div>
                            </div>

                            <!-- Submit button -->
                            
                            <!-- Register buttons -->
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>
                                <p>Not a member? <a href="<?= base_url?>/?controller=usuario&action=register">Register</a></p>
                            </div>
                        </form>
                        <?php else: ?>
                            <h3><?= $_SESSION['identity']->nombre?> <?= $_SESSION['identity']->apellidos?> </h3>
                            
                            <div class="row mb-4">
                                <div class="col">
                                <a href="<?= base_url?>/?controller=usuario">Mis pedidos</a>
                                </div>
                            </div>
                            <?php if(isset($_SESSION['admin'])): ?>
                                <div class="row mb-4">
                                    <div class="col">
                                    <a href="<?=base_url?>/?controller=categorias&action=index">Gestionar categorias</a>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col">
                                    <a href="<?=base_url?>/?controller=producto&action=manage">Gestionar productos</a>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col">
                                    <a href="#!">Gestionar pedidos</a>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <?php if(isset($_SESSION['identity'])):?>
                                <div class="row mb-4">
                                    <div class="col">
                                    <a class="btn btn-outline-primary" href="<?= base_url?>/?controller=usuario&action=logout">cerrar sesion</a>
                                    </div>
                                </div>  
                            <?php endif; ?>
                            
                        <?php endif;?>
                    </div>
                    <div class="card col-8 p-4">
                        <div class="container">
                            <div class="row">
                                <div class="col">