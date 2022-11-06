<p class="h2 text-center">ALGUNOS DE NUESTROS PRODUCTOS</p>
    <hr>
    <div class="d-flex flex-wrap align-items-center justify-content-center text-center">
        <!-- cards -->
        <?php while($pro = $productos->fetch_object()):?>
        <div class="card card-personalizada text-start p-2 m-1">
          <a href="<?=base_url?>/?controller=producto&action=view&id=<?=$pro->id?>">
            <img class="card-img-top img-personalizada" src="<?=base_url?>/uploads/images/<?=($pro->producto_image != null)?$pro->producto_image: "descarga.jfif"?>" alt="Title">
          </a>
          <div class="card-body">
            <h4 class="card-title"><?=$pro->nombre?></h4>
            <p class="card-text">Precio: <?=$pro->precio?></p>
            <a name="" id="" class="btn btn-primary" href="#" role="button">Buy</a>
          </div>
        </div>
        <?php endwhile?>
        
    </div>
</div>