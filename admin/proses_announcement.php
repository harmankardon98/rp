<?php 
$con=mysqli_connect("localhost","atras","atras123","rumah");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$id = $_POST['id'];
$nama_pengumuman = $_POST['nama_pengumuman'];
$isi_pengumuman = $_POST['isi_pengumuman'];

date_default_timezone_set('Asia/Jakarta');
$waktu = date("Y-m-d H:i:s"); //ini tanggal dan waktu
mysqli_query($con,"INSERT INTO announcement VALUES(NULL,'$nama_pengumuman','$isi_pengumuman','$waktu')");

header("location:index.php");
?>
