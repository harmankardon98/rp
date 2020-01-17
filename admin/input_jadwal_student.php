<?php 
include '../koneksi.php';
session_start();
if($_SESSION['sebagai'] !='admin'){
    header("location:../login.php");}
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
  Input Jadwal Student
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

<body class="bg-default">
  <div class="main-content">
    <!-- Navbar -->

    <!-- Header -->
    <div class="header bg-gradient-primary py-7 py-lg-8">
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div>
    <!-- Page content -->
    <div class="container mt--8 pb-5">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7">
          <div class="card bg-secondary shadow border-0">
            <div class="card-body px-lg-5 py-lg-5">
              <div class="text-center text-muted mb-4">
                <h3>Input Jadwal Student</h3>
              </div>
              <form role="form" action="proses_jadwal_student.php" method="post">
                <div class="form-group mb-3">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" name="id_jadwal" placeholder="id jadwal" type="text" required="">
                  </div>
                </div>
                
                <div class="form-group mb-3">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" name="mapel" placeholder="mapel" type="text" required="">
                  </div>
                </div>
                  <div class="form-group">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control" name="tutor" placeholder="tutor" type="text" required="">
                  </div>
                </div>
                
                  
                  <tr>
                      <td><label for=""><b>pilih waktu :</b></label></td>
				<td><select name="waktu" size="1" class="form-control" required="">
  
  <option value="14.00 - 15.30">14.00 - 15.30</option>
  <option value="16.00 - 17.30">16.00 - 17.30</option>
  <option value="18.30 - 20.00">18.30 - 20.00</option>
 
  
</select></td>	
             <br>
			</tr>	
                  
                       <tr>
                      <td><label for=""><b>pilih hari :</b></label></td>
				      <td><select name="hari" size="1" class="form-control" required="">
  
                      <option value="senin">senin</option>
                      <option value="selasa">selasa</option>
                      <option value="rabu">rabu</option>
                      <option value="senin">kamis</option>
                      <option value="selasa">jumat</option>
                    <option value="senin">sabtu</option>
                      <option value="selasa">minggu</option>
                      
 
  
                      </select></td>	
                      <br>
			           </tr>
                  
                  
                
                  <div class="form-group">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control" name="id_student" placeholder="id student" type="text" required="">
                  </div>
                </div>
                  
                <div class="text-center">
                  <button type="submit" class="btn btn-primary my-4" value="simpan" style="margin-top:-20px ;width: 100%;">Submit</button>
                </div> 
                  
                  <div class="text-center">
                      <a href="index.php"><button type="button" class="btn btn-primary my-4" style="margin-top:-20px ;width: 100%;" >Back</button></a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
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

</html>