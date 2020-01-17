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
if($_SESSION['sebagai'] !='admin'){
    header("location:../login.php");}

$query = mysql_query ("select * from admin where admin.id_admin='$_SESSION[id_user]'") or die(mysql_error());
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
          <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="media align-items-center">
              <span class="avatar avatar-sm rounded-circle">
                <img alt="Image placeholder" src="assets/img/theme/team-4-800x800.jpg">
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
        
        <!-- Navigation -->
        <ul class="navbar-nav">
          <li class="nav-item"  class=" active" >
          <a class=" nav-link " href=" index.php"> <i class="ni ni-tv-2 text-primary"></i> Dashboard
            </a>
          </li>
            <li class="nav-item">
            <a class="nav-link " href="input_jadwal_student.php">
              <i class="ni ni-ruler-pencil text-pink"></i>Input Jadwal Student 
            </a>
          </li>
            
            <li class="nav-item">
            <a class="nav-link " href="input_jadwal_teacher.php">
              <i class="ni ni-ruler-pencil text-pink"></i>Input Jadwal Teacher
            </a>
          </li>
            
              <li class="nav-item">
            <a class="nav-link  " href="data_jadwal.php">
              <i class="ni ni-single-02 text-red"></i> Data Jadwal
            </a>
          </li>
            
           <li class="nav-item">
            <a class="nav-link " href="announcement.php">
              <i class="ni ni-ruler-pencil text-pink"></i>Input Announcement
            </a>
          </li>

            <li class="nav-item">
            <a class="nav-link " href="laman_announcement.php">
              <i class="ni ni-align-left-2 text-black"></i>Laman Announcement
            </a>
          </li>

            
            <li class="nav-item">
            <a class="nav-link " href="register_teacher.php">
              <i class="ni ni-archive-2 text-orange"></i> Register Bio Teacher
            </a>
          </li>
            
          <li class="nav-item">
            <a class="nav-link " href="register_student.php">
              <i class="ni ni-archive-2 text-blue"></i> Register Bio Student
            </a>
          </li>
            
            <li class="nav-item">
            <a class="nav-link " href="register_admin.php">
              <i class="ni ni-archive-2 text-blue"></i> Register Bio Admin
            </a>
          </li>
            
            
            
            <li class="nav-item">
            <a class="nav-link " href="reglogin.php">
              <i class="ni ni-check-bold text-green"></i>Register Login 
            </a>
          </li>
            
            <li class="nav-item">
            <a class="nav-link " href="data_user.php">
              <i class="ni ni-bullet-list-67 text-green"></i>Data User
            </a>
          </li>
            
            <li class="nav-item">
            <a class="nav-link " href="data_user_login.php">
              <i class="ni ni-bullet-list-67 text-green"></i>Data User Login
            </a>
          </li>
            
            <li class="nav-item">
            <a class="nav-link active " href="profile.php">
              <i class="ni ni-single-02 text-red"></i> <?=$rows['nama_admin'];?> Profile
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
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="./profile.php"><?=$rows['nama_admin'];?> Profile</a>
        <!-- Form -->
        
        <!-- User -->
        <ul class="navbar-nav align-items-center d-none d-md-flex">
          <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media align-items-center">
                <span class="avatar avatar-sm rounded-circle">
                  <img alt="Image placeholder" src="assets/img/theme/team-4-800x800.jpg">
                </span>
                <div class="media-body ml-2 d-none d-lg-block">
                  <span class="mb-0 text-sm  font-weight-bold"><?=$rows['nama_admin'];?></span>
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
    <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 600px; background-image: url(assets/img/theme/profile-cover.jpg); background-size: cover; background-position: center top;">
      <!-- Mask -->
      <span class="mask bg-gradient-default opacity-8"></span>
      <!-- Header container -->
      <div class="container-fluid d-flex align-items-center">
        <div class="row">
          <div class="col-lg-7 col-md-10">
            <h1 class="display-2 text-white">Hello <?=$rows['nama_admin'];?></h1>
            <p class="text-white mt-0 mb-5">This is your profile page. You can see the progress you've made with your work and manage your projects or assigned tasks</p>
          
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--7">
      <div class="row">
        <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
          <div class="card card-profile shadow">
            <div class="row justify-content-center">
              <div class="col-lg-3 order-lg-2">
                <div class="card-profile-image">
                  <a href="#">
                    <img src="assets/img/theme/team-4-800x800.jpg" class="rounded-circle">
                  </a>
                </div>
              </div>
            </div>
            <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
              
            </div>
            <div class="card-body pt-0 pt-md-4">
           <br/>
                <br/>
                <br/>
              <div class="text-center">
                <h3>
                  <?=$rows['nama_admin'];?><span class="font-weight-light">, <?=$rows['no_tlp'];?></span>
                </h3>
                <div class="h5 font-weight-300">
                  <i class="ni location_pin mr-2"></i><?=$rows['alm_admin'];?>, 
                </div>
                <div class="h5 mt-4">
                  <i class="ni business_briefcase-24 mr-2"></i><?=$rows['email'];?>
                </div>
                <div>
                  <i class="ni education_hat mr-2"></i><?=$rows['school'];?>
                </div>
                <hr class="my-4" />
                <p>GOD. inisial ini digunakan karena hanya untuk username</p>
                
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-8 order-xl-1">
          <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">My account</h3>
                </div>
                <div class="col-4 text-right">
                  
                </div>
              </div>
            </div>
            <div class="card-body">
              <form>
                <h6 class="heading-small text-muted mb-4">User information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Username</label>
                         <div class="h5 mt-4">
                  <i class="ni business_briefcase-24 mr-2"></i><?=$rows['nama_admin'];?>
                </div>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Email address</label>
                        <div class="h5 mt-4">
                  <i class="ni business_briefcase-24 mr-2"></i><?=$rows['email'];?>
                </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-first-name">First name</label>
                         <div class="h5 mt-4">
                  <i class="ni business_briefcase-24 mr-2"></i><?=$rows['first_name'];?>
                </div>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-last-name">Last name</label>
                         <div class="h5 mt-4">
                  <i class="ni business_briefcase-24 mr-2"></i><?=$rows['last_name'];?>
                </div>
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4" />
                <!-- Address -->
                <h6 class="heading-small text-muted mb-4">Contact information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="form-control-label" for="input-address">Address</label>
                        <div class="h5 mt-4">
                  <i class="ni business_briefcase-24 mr-2"></i><?=$rows['alm_admin'];?>
                </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-city">City</label>
                        <div class="h5 mt-4">
                  <i class="ni business_briefcase-24 mr-2"></i><?=$rows['kota'];?>
                </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country">Country</label>
                        <div class="h5 mt-4">
                  <i class="ni business_briefcase-24 mr-2"></i><?=$rows['negara'];?>
                </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country">Postal code</label>
                        <div class="h5 mt-4">
                  <i class="ni business_briefcase-24 mr-2"></i><?=$rows['kode_pos'];?>
                </div>
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4" />
                <!-- Description -->
                <h6 class="heading-small text-muted mb-4">About me</h6>
                <div class="pl-lg-4">
                  <div class="form-group">
                    <label>About Me</label>
                     <div class="h5 mt-4">
                  <i class="ni business_briefcase-24 mr-2"></i><?=$rows['about'];?>
                </div>
                  </div>
                </div>
              </form>
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
