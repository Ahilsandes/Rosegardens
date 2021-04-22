<?php
// print_r($_POST);print_r($_FILES);die();

if(
  !isset($_POST['user_id']) ||
  !isset($_POST['Plant_name']) ||
  !isset($_POST['Plant_category']) ||
  !isset($_POST['Plant_description']) ||
  !isset($_POST['Plant_amount'])
  )
  die('invalid data');
/*elseif(
  !isset($_FILES['Image1']['name'])){
    die('invalid data');
  }
  elseif($_FILES['Image1']['type']!="image/jpeg"){
    die('invalid file type');
  }*/
  else{

//MOVE UPLOADED IMAGE TO DB FOLDERS

$user_id = $_POST['user_id'];
$Plant_name = $_POST['Plant_name'];
$Plant_category = $_POST['Plant_category'];
$Plant_description = $_POST['Plant_description'];
$Plant_amount = $_POST['Plant_amount'];
$file=$_FILES["file1"]["name"];
$target_dir="uploads/";
$target_path=$target_dir.$file;
move_uploaded_file($_FILES['file1']['tmp_name'],$target_path);
    require("dbconnection.php");
$q="INSERT INTO `tbl_plant`( `user_id`, `Plant_name`, `Plant_category`, `Plant_description`, `Plant_amount`, `Status`, `Image1`) VALUES
($user_id,'$Plant_name', $Plant_category,'$Plant_description',$Plant_amount, 1, '$file')";
 mysqli_query($con, $q) or  die("RESULT will not get<br>$q");
mysqli_close($con);
  header("Location: addedplant.php");
}

?>
