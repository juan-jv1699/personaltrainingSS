<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>Index</title>
</head>
<body>
    <section class="container-fluid">
        <!-- header -->
        <div class="row">
            <!-- navbar -->
            <nav class="navbar navbar-expand navbar-dark bg-dark">
                <div class="nav navbar-nav">
                    <a class="nav-item nav-link active" href="#" aria-current="page">Home <span class="visually-hidden">(current)</span></a>
                    <a class="nav-item nav-link" href="#">Categoria 1</a>
                    <a class="nav-item nav-link" href="#">Categoria 2</a>
                    <a class="nav-item nav-link" href="#">Categoria 3</a>
                </div>
            </nav>
        </div>
         <!-- body -->
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="card col-3 offset-1 m-1 p-4 h-75">
                        <!-- login menu -->
                        <form class="p-2">
                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <input type="email" id="form2Example1" class="form-control" />
                                <label class="form-label" for="form2Example1">Email address</label>
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <input type="password" id="form2Example2" class="form-control" />
                                <label class="form-label" for="form2Example2">Password</label>
                            </div>

                            <!-- 2 column grid layout for inline styling -->
                            <div class="row mb-4">
                                <div class="col d-flex justify-content-center">
                                <!-- Checkbox -->
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                                    <label class="form-check-label" for="form2Example31"> Remember me </label>
                                </div>
                                </div>

                                <div class="col">
                                <!-- Simple link -->
                                <a href="#!">Forgot password?</a>
                                </div>
                            </div>

                            <!-- Submit button -->
                            
                            <!-- Register buttons -->
                            <div class="text-center">
                                <button type="button" class="btn btn-primary btn-block mb-4">Sign in</button>
                                <p>Not a member? <a href="#!">Register</a></p>
                            </div>
                        </form>
                    </div>
                    <div class="card col-8 p-4">
                        <div class="container">
                            <div class="row text-center">
                                <div class="col">
                                <p class="h2">PRODUCTOS DESTACADOS</p>
                                    <hr>
                                    <div class="d-flex flex-wrap align-items-center justify-content-center">
                                        <!-- cards -->
                                        <div class="card text-start p-2 m-1">
                                          <img class="card-img-top" src="/public/images/descarga.jfif" alt="Title">
                                          <div class="card-body">
                                            <h4 class="card-title">Title object</h4>
                                            <p class="card-text">cost</p>
                                            <a name="" id="" class="btn btn-primary" href="#" role="button">Buy</a>
                                          </div>
                                        </div>
                                        <div class="card text-start p-2 m-1">
                                          <img class="card-img-top" src="/public/images/descarga.jfif" alt="Title">
                                          <div class="card-body">
                                            <h4 class="card-title">Title object</h4>
                                            <p class="card-text">cost</p>
                                            <a name="" id="" class="btn btn-primary" href="#" role="button">Buy</a>
                                          </div>
                                        </div>
                                        <div class="card text-start p-2 m-1">
                                          <img class="card-img-top" src="/public/images/descarga.jfif" alt="Title">
                                          <div class="card-body">
                                            <h4 class="card-title">Title object</h4>
                                            <p class="card-text">cost</p>
                                            <a name="" id="" class="btn btn-primary" href="#" role="button">Buy</a>
                                          </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
    <footer id="footer">
        <p>Desarrollado por JJV &copy; <?= date('y')?></p>
    </footer>
    <script src="public/js/bootstrap.bundle.min.js"></script>
</body>
</html>