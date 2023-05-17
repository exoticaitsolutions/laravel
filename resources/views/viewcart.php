<div class="container">
    <div class="row"><?php

foreach ($products as $key => $cart_vale) {
   ?>
    <div class="col-md-6">
            <h2><?php echo  $cart_vale->name ; ?></h2>
            <p><strong>ID:</strong> <?php echo $cart_vale->product_id ;?></p>
            <p><strong>Description:</strong> <?php  echo $cart_vale->description;?></p>
            <p><strong>Price:</strong> $<?php echo $cart_vale->price;?></p>
            
        </div>
   <?php
}
?>
</div>
</div>
<!-- product.blade.php -->


