<?php
session_start();
if(isset($_SESSION['id']))
{
	?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>ROSE GARDENS</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-circle"></div>
        <div class="preloader-img">
            <img src="img/core-img/leaf.png" alt="">
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- ***** Top Header Area ***** -->
        <div class="top-header-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="top-header-content d-flex align-items-center justify-content-between">
                            <!-- Top Header Content -->
                            <div class="top-header-meta">
                                <a href="#"  title="rosegardens@gmail.com"><i class="fa fa-envelope-o" aria-hidden="true"></i> <span>Email: rosegardens@gmail.com</span></a>
                                <a href="#"  title="+919961466935"><i class="fa fa-phone" aria-hidden="true"></i> <span>Call Us: +919961466935</span></a>
                            </div>
			    <!-- Top Header Content -->
                            <div class="top-header-meta d-flex">
															<!-- Top Header Content -->
															<div class="top-header-meta d-flex">

	                                <div class="login">
	                                    <a href="admin-index.php"> <span>Home</span></a>
	                                </div>
	                                <div class="login">
	                                    <a href="addplant.php"> <span>Add Plants</span></a>
	                                </div>
	                                <div class="login">
	                                    <a href="addedplant.php"> <span>View Plants</span></a>
	                                </div>
	                                <div class="login">
	                                    <a href="addcategory.php"> <span>Add Category</span></a>
	                                </div>
	                                <div class="login">
	                                    <a href="logininformations.php"> <span>View Users</span></a>
	                                </div>
	                                <div class="login">
	                                    <a href="report1.php"> <span>Reports</span></a>
	                                </div>

                                <!-- Login -->
                                <div class="login">
                                    <a href="logout.php" onclick="logout()"><i class="fa fa-user" aria-hidden="true"></i> <span>Logout</span></a>
                                </div>
                                <!-- Cart -->
                                <div class="cart">
                                    <a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i> <span>Cart <span class="cart-quantity">(1)</span></span></a>
                                </div>
                            </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ***** Navbar Area ***** -->
        <div class="alazea-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="alazeaNav">

                        <!-- Nav Brand -->


                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                        </div>
                    </nav>


                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Hero Area Start ##### -->
    <section class=	"hero-area">
        <div class="hero-post-slides owl-carousel">

            <!-- Single Hero Post -->


            <!-- Single Hero Post -->
            <div class="single-hero-post bg-overlay">
                <!-- Post Image -->

                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <!-- Post Content -->
                            <div class="hero-slides-content text-center">
                                <h2>Latest Arrivals</h2>


                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Service Area Start ##### -->

    <!-- ##### Service Area End ##### -->

    <!-- ##### About Area Start ##### -->

    <!-- ##### About Area End ##### -->

    <!-- ##### Portfolio Area Start ##### -->
    <section class="alazea-portfolio-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12">

                </div>
            </div>
        </div>


    </section>

    <section class="new-arrivals-products-area bg-gray section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">

                </div>
            </div>

            <div class="row">

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


                <div class="col-12 text-center">
<a href="addplant.php" class="btn alazea-btn">click to add plant</a>                </div>
                <div class="col-12 text-center">
<a href="addcategory.php" class="btn alazea-btn">click to add category</a>                </div>

            </div>
        </div>
    </section>
    <!-- ##### Product Area End ##### -->

    <!-- ##### Blog Area Start ##### -->


    <script src="js/jquery/jquery-2.2.4.min.js"></script>

    <script src="js/bootstrap/popper.min.js"></script>

    <script src="js/bootstrap/bootstrap.min.js"></script>

    <script src="js/plugins/plugins.js"></script>

    <script src="js/active.js"></script>

		<div id="delete_plant" class="modal fade" role="dialog">


		<div class="modal-dialog">


		<div class="modal-content">


		<div class="modal-header">


		<h3>Delete a Plant?</h3>


		<button type="button" class="close" data-dismiss="modal">&times;</button>


		</div>


		<div class="modal-body modal-md deleteblockbody">


		<p>Are you sure you want to delete?</p>


		</div>


		<div class="modal-footer">


				<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">


				<input type="submit" class="btn btn-danger" id="delHbutton" class="delHbutton" value="Delete">


				</div>


		</div>

		</div>


		</div>

</body>

</html>
<?php
}
else
{
	header("location:login.html");
}
?>
<script>
 function logout()
 {
         var x=confirm("Click ok  to logout");
         if(x===true)
         {


             window.location.assign("logout.php");


         }
         else
         {
             return false;
         }
 }
 </script>
