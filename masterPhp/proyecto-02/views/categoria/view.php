<?php if(isset($categoria)):?>
    <h2><?=$categoria->nombre?></h2>
    <?php if($productos->num_rows == 0):?>
        <p>No hay productos para mostrar</p>
    <?php else:?>
        <div class="d-flex flex-wrap align-items-center justify-content-center text-center">
            <!-- cards -->
            <?php while($pro = $productos->fetch_object()):?>
            <div class="card card-personalizada text-start p-2 m-1">
              <img class="card-img-top img-personalizada" src="<?=base_url?>/uploads/images/<?=($pro->producto_image != null)?$pro->producto_image: "descarga.jfif"?>" alt="Title">
              <div class="card-body">
                <h4 class="card-title"><?=$pro->nombre?></h4>
                <p class="card-text">Precio: <?=$pro->precio?></p>
                <a name="" id="" class="btn btn-primary" href="#" role="button">Buy</a>
              </div>
            </div>
            <?php endwhile?>
        </div>
    <?php endif?>
<?php else:?>
    <h2>Categoria no encontrada</h2>
<?php endif?>