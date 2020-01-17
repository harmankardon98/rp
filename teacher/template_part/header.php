<?php 
include  "../koneksi.php";
if (empty($_SESSION['username'])) {
  header("location:../index.php");
}
$query = mysql_query ("select * from teacher where teacher.id_teacher='$_SESSION[id_user]'") or die(mysql_error());
while($rows = mysql_fetch_array($query)){
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
    RumahPelajar
  </title>
  <!-- Favicon -->
  <link href="./assets/img/brand/favicon.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="./assets/js/plugins/nucleo/css/nucleo.css" rel="stylesheet" />
  <link href="./assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="./assets/css/argon-dashboard.css?v=1.1.0" rel="stylesheet" />
</head>

<body class="">
  <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Brand -->
      <a class="navbar-brand pt-0" href="./index.php">
        <img src="./assets/img/brand/green.png" class="navbar-brand-img" alt="...">
      </a>
      <!-- User -->
      <ul class="nav align-items-center d-md-none">
       
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="media align-items-center">
              <span class="avatar avatar-sm rounded-circle">
                <img alt="Image placeholder" src="./assets/img/theme/<?=$rows['foto_profil'];?>">
              </span>
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
            <div class=" dropdown-header noti-title">
              <h6 class="text-overflow m-0">Welcome!</h6>
            </div>
            
            <div class="dropdown-divider"></div>
            <a href="logout.php" class="dropdown-item">
              <i class="ni ni-user-run"></i>
              <span>Logout</span>
            </a>
          </div>
        </li>
      </ul>
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Collapse header -->
        <div class="navbar-collapse-header d-md-none">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="./index.php">
                <img src="./assets/img/brand/green.png">
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <!-- Form -->
        
        <!-- Navigation -->
        <ul class="navbar-nav">
          <li class="nav-item"  class=" active" >
          <a class=" nav-link active " href="index.php"> <i class="ni ni-tv-2 text-primary"></i> Dashboard
            </a>
          </li>
            
             <li class="nav-item">
            <a class="nav-link " href="announcement.php">
              <i class="ni ni-paper-diploma text-green"></i> Announcement
            </a>
          </li>
            
            <li class="nav-item">
            <a class="nav-link " href="jadwal_teacher.php">
              <i class="ni ni-books text-black"></i> Jadwal Tutor
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="profile.php">
              <i class="ni ni-single-02 text-yellow"></i> <?=$rows['nama_teacher'];?> profile
            </a>
          </li>
            
             <li class="nav-item">
            <a class="nav-link" href="ubah_password.php">
              <i class="ni ni-planet text-blue"></i> Ubah Password
            </a>
          </li>
            
        </ul>
      </div>
    </div>
  </nav>
    
    <?php } ?>