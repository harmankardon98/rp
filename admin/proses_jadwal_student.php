<?php 
$con=mysqli_connect("localhost","atras","atras123","rumah");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$id_jadwal = $_POST['id_jadwal'];
$mapel = $_POST['mapel'];
$tutor = $_POST['tutor'];
$waktu = $_POST['waktu'];
$hari = $_POST['hari'];
$id_student = $_POST['id_student'];
mysqli_query($con,"INSERT INTO jadwal VALUES('$id_jadwal','$mapel','$tutor','$waktu','$hari','$id_student')");

header("location:index.php");
?>
