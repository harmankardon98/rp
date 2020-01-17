<?php 
$con=mysqli_connect("localhost","atras","atras123","rumah");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

     
 
$id_user = $_POST['id_user'];
$username = $_POST['username'];
$password = $_POST['password'];
$sebagai = $_POST['sebagai'];


mysqli_query($con,"INSERT INTO login VALUES('$id_user','$username','$password','$sebagai')");
header("location:index.php");
     

?>

