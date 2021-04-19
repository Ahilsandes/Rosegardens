<?php
require('dbconnection.php');
$q2="SELECT * FROM `tbl_plant` WHERE `Status`=1";
$result=mysqli_query($con,$q2);
while ($row = mysqli_fetch_array($result)){
?>


<!-- Single Product Area -->
<div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-product-area mb-50 wow fadeInUp" data-wow-delay="100ms">
                        <!-- Product Image -->
                        <div class="product-img">
                            <a href="shop-details.html"><img src="<?php echo 'uploads/'.$row['Image1']; ?>" alt=""></a>

                            <div class="product-meta d-flex">
                                <a href="#" class="wishlist-btn"><i class="icon_heart_alt"></i></a>
                                <a href="cart.html" class="add-to-cart-btn">Add to cart</a>
                                <a href="#" class="delete_plant"><i class="fa fa-trash" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <!-- Product Info -->
                        <div class="product-info mt-15 text-center">
                            <a href="shop-details.html">
                                <p><?php echo $row['Plant_name']; ?></p>
                            </a>
                            <h6><?php echo $row['Plant_amount']; ?>/-</h6>
                        </div>
                    </div>
                  </div>



<?php
}
?>
