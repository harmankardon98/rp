<!--

=========================================================
* Argon Dashboard - v1.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright 2019 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<?php 
session_start();
include  "../koneksi.php";
if($_SESSION['sebagai'] !='student'){
    header("location:../login.php");}

$query = mysql_query ("select * from student where student.id_student='$_SESSION[id_user]'") or die(mysql_error());
while($rows = mysql_fetch_array($query)){ 
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
    Rumah Pelajar
  </title>
  <!-- Favicon -->
  <link href="assets/img/brand/favicon.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="assets/js/plugins/nucleo/css/nucleo.css" rel="stylesheet" />
  <link href="assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="assets/css/argon-dashboard.css?v=1.1.0" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="style.css">
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
        <img src="assets/img/brand/green.png" class="navbar-brand-img" alt="...">
      </a>
      <!-- User -->
      <ul class="nav align-items-center d-md-none">
        <li class="nav-item dropdown">
          
          
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="media align-items-center">
              <span class="avatar avatar-sm rounded-circle">
                <img alt="Image placeholder" src="assets/img/theme/<?=$rows['foto_profil'];?>">
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
                <img src="assets/img/brand/green.png">
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
        <form class="mt-4 mb-3 d-md-none">
         
        </form>
        <!-- Navigation -->
        <ul class="navbar-nav">
          <li class="nav-item"  class=" active" >
          <a class=" nav-link " href=" index.php"> <i class="ni ni-tv-2 text-primary"></i> Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active " href="announcement.php">
              <i class="ni ni-paper-diploma text-green"></i> Announcement
            </a>
          </li>
            
            <li class="nav-item">
            <a class="nav-link " href="jadwal.php">
              <i class="ni ni-books text-black"></i> Jadwal Siswa
            </a>
          </li>
            

          <li class="nav-item">
            <a class="nav-link   " href="profile.php">
              <i class="ni ni-single-02 text-yellow"></i> <?=$rows['nama_student'];?> profile
            </a>
          </li>
            
            <li class="nav-item">
            <a class="nav-link " href="ubah_password.php">
              <i class="ni ni-planet text-blue"></i> Ubah Password
            </a>
          </li>
         
         
     
        </ul>
        <!-- Divider -->
        <hr class="my-3">
        <!-- Heading -->
        <h6 class="navbar-heading text-muted"></h6>
        <!-- Navigation -->
       
      </div>
    </div>
  </nav>
  <div class="main-content">
    <!-- Navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">
        <!-- Brand -->
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="../index.html">Laman Pengumuman</a>
        <!-- Form -->
       
        <!-- User -->
        <ul class="navbar-nav align-items-center d-none d-md-flex">
          <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media align-items-center">
                <span class="avatar avatar-sm rounded-circle">
                  <img alt="Image placeholder" src="assets/img/theme/<?=$rows['foto_profil'];?>">
                </span>
                <div class="media-body ml-2 d-none d-lg-block">
                  <span class="mb-0 text-sm  font-weight-bold"><?=$rows['nama_student'];?></span>
                </div>
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
      </div>
    </nav>
    <!-- End Navbar -->
    <!-- Header -->
    <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 600px; background-image: url(assets/img/theme/<?=$rows['foto_profil'];?>); background-size: cover; background-position: center top;">
      <!-- Mask -->
      <span class="mask bg-gradient-default opacity-8"></span>
      <!-- Header container -->
      <div class="container-fluid d-flex align-items-center">
        <div class="row">
          <div class="col-lg-7 col-md-10">
            <h1 class="display-2 text-white">Hello <?=$rows['nama_student'];?></h1>
            <p class="text-white mt-0 mb-5">This is your announcement page. You can see the progress you've made with your work and manage your projects or assigned tasks</p>
            
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--7">
      <div class="row">
        <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
          
        </div>
        <div class="col-xl-8 order-xl-1">
          <div class="card bg-secondary shadow">
           
              
              
              <div class="row mt-5">
        <div class="col">
          <div class="card bg-default shadow">
            <div class="card-header bg-transparent border-0">
              <h3 class="text-white mb-0">Pengumuman Terkini</h3>
            </div>
            <div class="table-responsive">
              <table class="table align-items-center table-dark table-flush">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Waktu</th>
                    <th scope="col">Judul Pengumuman</th>
                    <th scope="col">Isi Pengumuman</th>
                      
                    
                    
                  </tr>
                </thead>
                  
                  <?php
                $hasil = mysql_query ("select * from announcement order by id desc limit 1 ") or die(mysql_error());
                while($rows = mysql_fetch_array($hasil)){
                    
                ?>
                <tbody>
                  
                  <tr>
                     
                      
                            <td ><?=$rows['waktu'];?></td>
                            <td><?=$rows['nama_pengumuman']; ?></td>
                      <td> <button id="tombol" onclick="ditekan()"> Lihat </button> </td>
                        
  
         
        <html lang="en"> 
    
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="alert/css/sweetalert.css">
</head>
<body >


<!--Scripts-->
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script src="alert/js/sweetalert.min.js"></script>
<script src="alert/js/qunit-1.18.0.js"></script>

    <?php
    
   if (isset($hasil)>=1) { ?>
<script type="text/javascript" >
    function ditekan() {
    swal("Isi Pengumuman", "<?=$rows['isi_pengumuman'];?>" );
    }
        
</script>
    
    <?php } ?>
    
    
</body>
</html>
        
                  
                      
                      <?php } ?>
                       
                        </tr>
                    
                   
                    
                    
                </tbody>
              </table>
                
                
            </div>
           
          </div>
        </div>
      </div>
    
              
              
            
          </div>
        </div>
      </div>
      <!-- Footer -->
      <footer class="footer">
        <div class="row align-items-center justify-content-xl-between">
          <div class="col-xl-6">
            <div class="copyright text-center text-xl-left text-muted">
              &copy; 2019 <a href="#" class="font-weight-bold ml-1" >Smart Brain</a>
            </div>
          </div>
          <div class="col-xl-6">
          
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core   -->
  <script src="assets/js/plugins/jquery/dist/jquery.min.js"></script>
  <script src="assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!--   Optional JS   -->
  <!--   Argon JS   -->
  <script src="assets/js/argon-dashboard.min.js?v=1.1.0"></script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "argon-dashboard-free"
      });
  </script>
</body>
    
<?php } ?>
</html>
