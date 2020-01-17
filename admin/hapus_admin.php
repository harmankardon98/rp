<?php

include '../koneksi.php';
session_start();
if($_SESSION['sebagai'] !='admin'){
    header("location:../login.php");}

if(isset($_GET['id_admin'])){


$id_admin = $_GET['id_admin'];
$cek= mysql_query("select id_admin from admin where id_admin='$id_admin'")or die (mysql_error());
    
    if (mysql_num_rows($cek) >0 ){
        $del = mysql_query ("delete from admin where id_admin='$id_admin'");
      
    
    }
    
    

}
header("location:data_user.php");
?>


