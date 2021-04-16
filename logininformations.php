<html>
<head>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<div class="p-3 mb-2 bg-gradient-success text-white">.bg-gradient-success</div>
</head>
<body>

<?php
session_start();
$con=mysqli_connect("localhost","root","","rosegardens") or die("couldnt connect to the server");
if(isset($_SESSION['id']))
{
	?>


<?php
$sql1="select * from tbl_register";
$res1=mysqli_query($con,$sql1);
echo "<table class='table table-responsive' id='tbl' class='table' style='display:block;'>";
echo "<tr>";
echo"<th>First Name</th>";
echo"<th>Last Name</th>";
echo"<th>E-mail</th>";
echo"<th>Phone</th>";
echo"</tr>";
while($row=mysqli_fetch_array($res1))
{
echo"<tr >";
echo"<td>",$row['fname'],"</td><td>&nbsp;",$row['lname'],"</td><td>&nbsp;",$row['email'],"</td><td>&nbsp;",$row['phone'],"</td>";
echo"</tr>";

}
echo"  </table>";
?>

</body>
</html>
<?php
}
else
{
header("location:login.html");
}
?>
