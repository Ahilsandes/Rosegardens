<?php
// print_r($_POST);print_r($_FILES);die();

if(
  !isset($_POST['cname'])
  )
  die('invalid data');

  else{

//MOVE UPLOADED IMAGE TO DB FOLDERS

$category_name= $_POST['cname'];


    require("dbconnection.php");
$q = "select * from category where category_name = '$category_name'";
$result = mysqli_query($con, $q);
if (!$result) die('check result moonchi');
if (mysqli_num_rows($result) > 0){
  die("ithe nerthe undallo");
}
$q="INSERT INTO `category`( `category_name`) VALUES ('$category_name')";
$result = mysqli_query($con, $q);
mysqli_close($con);
if (!$result){
  die("RESULT KITTILA<br>$q");
} else {
  header("Location: admin-index.php");
}
  }
?>
