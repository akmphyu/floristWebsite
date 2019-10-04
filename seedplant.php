  <!-- Header -->
  <?php 
  include("header.php");
?>
  <!-- Navigation -->
  <?php 
  include("navigationRest.php");
?>
<div class="container shopcart">
<div class="row">

<!-- Single Product -->
<?php
  for($x = 1; $x <= 34; $x++){
?>
<div class="col-12 col-sm-6 col-lg-4">
    <div class="single-product-wrapper">
        <!-- Product Image -->
        <div class="product-img">
            <img class="shopping" src="img/seedPlant/<?php echo $x; ?>.JPG" alt="">
            <!-- Hover Thumb -->
            <img class="hover-img shopping" src="img/seedPlant/<?php echo $x; ?>.JPG" alt="">

       
            <!-- Favourite -->
            <div class="product-favourite">
                <a href="#" class="favme fa fa-heart"></a>
            </div>
        </div>

        <!-- Product Description -->
        <div class="product-description">
           
            <a href="single-product-details.html">
                <h6>Knot Front Mini Dress</h6>
              
            </a>
            <p class="product-price"> $55.00</p>

            <!-- Hover Content -->
            <div class="hover-content">
                <!-- Add to Cart -->
                <div class="add-to-cart-btn">
                    <a href="#" class="btn essence-btn">Add to Cart</a>
                </div>
            </div>
        </div>
    </div>
</div>
  <?php } ?>
<!-- Single Product -->

</div>
</div>

 
 

  <!-- footer-->
  <?php 
  include("footer.php");
?>