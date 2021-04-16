<?php
session_start();
if(!isset($_SESSION['id'])){
  header('login.php');
}
if ($_SESSION["role"]!="admin")
 {
  header("Location: index.html");
}
// print_r($_SESSION);die();

?><!DOCTYPE html>
<html lang="en">

<head>
    <title> ROSE GARDENS </title>
	<link rel="icon" href="img/core-img/favicon.ico">
	<link rel="stylesheet" href="style.css">

</head>

<body>

    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-circle"></div>
        <div class="preloader-img">
            <img src="img/core-img/leaf.png" alt="">
        </div>
    </div>

    <header class="header-area">


        <div class="top-header-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="top-header-content d-flex align-items-center justify-content-between">

                            <div class="top-header-meta">
                                <a href="#" data-toggle="tooltip" data-placement="bottom" title="rosegardens@gmail.com"><i class="fa fa-envelope-o" aria-hidden="true"></i> <span>Email: plantnursery@gmail.com</span></a>

                            </div>

                            <!-- Top Header Content -->
                            <div class="top-header-meta d-flex">

                                <!-- Login -->
                                <div class="login">
                                    <a href="login.html"><i class="fa fa-user" aria-hidden="true"></i> <span>Logout</span></a>
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

                    <!-- Search Form -->
                    <div class="search-form">
                        <form action="#" method="get">
                            <input type="search" name="search" id="search" placeholder="Type keywords &amp; press enter...">
                            <button type="submit" class="d-none"></button>
                        </form>
                        <!-- Close Icon -->
                        <div class="closeIcon"><i class="fa fa-times" aria-hidden="true"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="breadcrumb-area">
        <!-- Top Breadcrumb Area -->
        <div class="top-breadcrumb-area bg-img bg-overlay d-flex align-items-center justify-content-center" style="background-image: url(img/bg-img/24.jpg);">
            <h2>Admin</h2>
        </div>

    </div>

<br>
<br>
<center>
<form enctype="multipart/form-data" action="addplant_processing.php" method="post" class="container">
  <input type="hidden" id="uid" name="user_id" value="<?php echo $_SESSION['id']; ?>" class="form-control">
  <table class="table" >
    <tbody>
      <tr>
        <th scope="row"><label for="pname">Plant_name:</label></th>
        <td><input type="text" id="pname" name="Plant_name" class="form-control"></td>
      </tr>
      <tr>
        <th scope="row"><label for="pcat">Plant_category:</label></th>
        <td>
          <select name="Plant_category" class="form-control">
            <option value="NULL" disabled selected>Choose one</option>
            <?php
            require('dbconnection.php');
            $query = "select * from category";
            $result = mysqli_query($con, $query);
            mysqli_close($con);
            if (!$result){
              die("QUERY MOONCHI");
            } else {
              while ($row = mysqli_fetch_array($result)){
                echo "<option value=\"".$row['category_id']."\">".$row['category_name']."</option>";
              }
            }
            ?>
          </select>
        </td>
      </tr>
      <tr>
        <th scope="row"><label for="pdesc">Plant_description:</label></th>
        <td><input type="text" id="pdesc" name="Plant_description" class="form-control"></td>
      </tr>
      <tr>
        <th scope="row"><label for="pamt">Plant_amount:</label></th>
        <td><input type="number" id="pamt" name="Plant_amount" class="form-control"></td>
      </tr>
      <tr>
        <th scope="row"><label for="img">Image1:</label></th>
        <td>
          <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text">Upload</span>
  </div>
  <div class="custom-file">
    <!-- <input type="file" class="custom-file-input" id="inputGroupFile01"> -->
    <input type="file" id="file1" name="file1" class="form-control custom-file-input">
    <label class="custom-file-label" for="file1">Choose file</label>
  </div>
</div>
        </td>
      </tr>
      <tr>
      <center>  <td colspan="2" style="text-align:center;"><input type="submit" class="btn btn-success" value="Submit"></td></center>
      </tr>
    </tbody>
  </table>
</form>
</center>




    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Shop Area Start ##### -->
    <section class="shop-page section-padding-0-100">
        <div class="container">
            <div class="row">
                <!-- Shop Sorting Data -->
                <div class="col-12">
                    <div class="shop-sorting-data d-flex flex-wrap align-items-center justify-content-between">

                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Sidebar Area -->
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="shop-sidebar-area">
				</div>
                </div>


            </div>
        </div>
    </section>
    <!-- ##### Shop Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area bg-img" style="background-image: url(img/bg-img/3.jpg);">
        <!-- Main Footer Area -->
        <div class="main-footer-area">
            <div class="container">
                <div class="row">

					</div>
                    </div>
					</div>
                    </div>


                </div>
            </div>
        </div>

        <!-- Footer Bottom Area -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="border-line"></div>
                    </div>
                    <!-- Copywrite Text -->
                    <div class="col-12 col-md-6">
                        <div class="copywrite-text">

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- ##### All Javascript Files ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>
