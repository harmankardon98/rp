<?php

include '../koneksi.php';
session_start();
if($_SESSION['sebagai'] !='admin'){
    header("location:../login.php");}

if(isset($_GET['id_jadwal'])){

$id_jadwal = $_GET['id_jadwal'];
$cek= mysql_query("select id_jadwal from jadwal where id_jadwal='$id_jadwal'")or die (mysql_error());
    
    if (mysql_num_rows($cek) >0 ){
        $del = mysql_query ("delete from jadwal where id_jadwal='$id_jadwal'");
    
    }

}
header("location:data_jadwal.php");
?>


