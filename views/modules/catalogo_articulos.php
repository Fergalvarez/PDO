<div id="catalogo" class="container pb-5">
     <div id="imagenes">
         <div class="row">
             <?php foreach ($results as $product) {
                 if($product['id_categoria']==1){
                ?>
                 <div class="col-lg-4">
                     <div class="card border border-secondary" style="width: 18rem;">
                         <img class="card-img-top" src="<?= $product['imagen'] ?>">
                         <div class="card-body text-center">
                             <h5 class="card-title"><?= $product['producto'] ?></h5>
                             <p class="card-text"><?= $product['precio_unitario'] ?></p>
                             <div class="btn-group" role="group" aria-label="Basic example">
                                 <a href="index.php?action=ver_producto&id=<?= $product['id_producto'] ?>" class="card-link text-decoration-none btn btn-danger">Ver aquí</a>
                                 <a href="index.php?action=agregar_carrito&id=<?= $product['id_producto'] ?>" class="card-link text-decoration-none btn btn-success">Agregar carrito</a>
                             </div>
                         </div>
                     </div>
                 </div>
             <?php }
             } ?>
         </div>
     </div>
 </div>