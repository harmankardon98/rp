<?php

include '../koneksi.php';
session_start();
if($_SESSION['sebagai'] !='admin'){
    header("location:../login.php");}

if(isset($_GET['id_teacher'])){


$id_teacher = $_GET['id_teacher'];
$cek= mysql_query("select id_teacher from teacher where id_teacher='$id_teacher'")or die (mysql_error());
    
    if (mysql_num_rows($cek) >0 ){
        $del = mysql_query ("delete from teacher where id_teacher='$id_teacher'");
      
    
    }
    
    

}
header("location:data_user.php");
?>


