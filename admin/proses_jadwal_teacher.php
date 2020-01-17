<?php 
$con=mysqli_connect("localhost","atras","atras123","rumah");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$id_jadwal = $_POST['id_jadwal'];
$mapel = $_POST['mapel'];
$siswa_yang_diajar = $_POST['siswa_yang_diajar'];
$waktu = $_POST['waktu'];
$hari = $_POST['hari'];
$id_teacher = $_POST['id_teacher'];
mysqli_query($con,"INSERT INTO jadwal_teacher VALUES('$id_jadwal','$mapel','$siswa_yang_diajar','$waktu','$hari','$id_teacher')");

header("location:index.php");
?>
