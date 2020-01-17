<?php

include '../koneksi.php';
session_start();
if($_SESSION['sebagai'] !='admin'){
    header("location:../login.php");}

if(isset($_GET['id_user'])){

$id_user = $_GET['id_user'];
$cek= mysql_query("select id_user from login where id_user='$id_user'")or die (mysql_error());
    
    if (mysql_num_rows($cek) >0 ){
        $del = mysql_query ("delete from login where id_user='$id_user'");
    
    }

}
header("location:data_user_login.php");
?>


