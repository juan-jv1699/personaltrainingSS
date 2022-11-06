<?php if(isset($pro)):?>
    <h2><?=$pro->nombre?></h2>
    <div class="d-flex flex-wrap align-items-center justify-content-around text-start">
        <div class="image-one">
            <img class="card-img-top img-personalizada" src="<?=base_url?>/uploads/images/<?=($pro->producto_image != null)?$pro->producto_image: "descarga.jfif"?>" alt="Title">
        </div>    
        <div class="data-one ">
            <h2>descripcion</h2>
            <p><?= $pro->descripcion?></p>
            <p><?=$pro->precio?>$</p>
            <a name="" id="" class="btn btn-primary" href="#" role="button">Comprar</a>
        </div>    
    </div>
<?php else:?>
    <h2>El producto no existe</h2>
<?php endif?>