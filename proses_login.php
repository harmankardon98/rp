<?php
session_start();
include "koneksi.php";
$username =$_POST['username'];
$password =  ($_POST['password']);
//cek akun dari data base
$cek = mysql_query("select * from login where username = '$username' and password ='$password'");
if (mysql_num_rows($cek) > 0){
    
    $data = mysql_fetch_array($cek);

    $_SESSION['id_user']=$data['id_user'];
    $_SESSION['username']=$data['username'];
    $_SESSION['sebagai']=$data['sebagai'];
    if($data['sebagai'] == 'admin'){
        header("location:admin/index.php");
    }else if ($data['sebagai'] == 'teacher'){
        header("location:teacher/index.php");
    }else {
        header("location:student/index.php");
    }
}else{
    header("location:login.php");
}

?>
