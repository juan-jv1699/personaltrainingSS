<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url?>/public/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="<?=base_url?>/public/css/personalizado.css">
    <title>Index</title>
</head>
<body>
    <section class="container-fluid">
        <!-- header -->
        <div class="row">
            <!-- navbar -->
            <nav class="navbar navbar-expand navbar-dark bg-dark">
                <div class="nav navbar-nav">
                    <?php $categorias = utils::showCategorias();?>
                    <a class="nav-item nav-link active" href="<?=base_url?>" aria-current="page">Home <span class="visually-hidden">(current)</span></a>
                    <?php while($cat = $categorias->fetch_object()):?>
                    <a class="nav-item nav-link" href="<?=base_url?>/?controller=categorias&action=viweCtg&id=<?=$cat->id?>"><?=$cat->nombre?></a>
                    <?php endwhile?>
                </div>
            </nav>
        </div>