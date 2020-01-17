<?php

include '../koneksi.php';
session_start();
if($_SESSION['sebagai'] !='admin'){
    header("location:../login.php");}

if(isset($_GET['id_student'])){

$id_student = $_GET['id_student'];
$cek= mysql_query("select id_student from student where id_student='$id_student'")or die (mysql_error());
    
    if (mysql_num_rows($cek) >0 ){
        $del = mysql_query ("delete from student where id_student='$id_student'");
    
    }

}
header("location:data_user.php");
?>


