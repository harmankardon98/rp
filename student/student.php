<?php 
session_start();
if($_SESSION['sebagai'] != 'student') {
	header("location:login.php");

}
echo $_SESSION['username'];
echo "<a href='logout.php>logout</a>";
 ?>
