<?php
// print_r($_POST);print_r($_FILES);die();

session_start();
$con=mysqli_connect("localhost","root","","rosegardens") or die("couldnt connect to the server");
if(isset($_SESSION['id']))
{

  if(isset($_POST['cpass'])) {
  	$currentpass = md5($_POST['passname1']) ;
  	$newpass = md5($_POST['passname2']);
  	$cnewpass = md5($_POST['passname3']);
  	$currentpass = addslashes($currentpass);
  	$newpass = addslashes($newpass);
  	$cnewpass = addslashes($cnewpass);
  	$currentpass = mysqli_real_escape_string($con, $currentpass);
  	$newpass = mysqli_real_escape_string($con, $newpass);
  	$cnewpass = mysqli_real_escape_string($con, $cnewpass);

  $sql =  mysqli_query($con, 'SELECT password FROM tbl_login WHERE id="'.$_SESSION['id'].'" ');
  $row = mysqli_fetch_assoc($sql);
  $pass = $row['password'];
  if ($currentpass != $pass) {
  	$error = "<center><h4><font color='#FF0000'>Incorrect Current Password!</h4></center></font>";
  	include ("change password.php");
  }
  else if ($currentpass == $pass && $newpass == $cnewpass){
  $sql1 = mysqli_query($con, 'UPDATE tbl_login SET password="'. md5($_POST['passname2']).'" WHERE username="'.$_SESSION['id'].'" ');
  $error = "<center><h4><font color='green'>Password successfully changed!</h4></center></font>";
  include ("change password.php");
  }
  else {
  	$error = "<center><h4><font color='#FF0000'>New Password and Confirm Password does not match!</h4></center></font>";
  	include ("change_pass.php");
  }
  }
  else {
  	$error = "<center><h4><font color='#FF0000'>Error!</h4></center></font>";
  	include ("change_pass.php");
  }}
  ?>
