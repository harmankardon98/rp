<?php 
include '../koneksi.php';
session_start();
if($_SESSION['sebagai'] !='admin'){
    header("location:../login.php");}
$id_student = $_GET['id_student'];
	$query = mysql_query("SELECT * FROM student WHERE id_student='$id_student'")or die(mysqli_error());
while($rows = mysql_fetch_array($query)){
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
   Edit Register Student
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
                <h3>Edit Bio Student</h3>
              </div>
              <form name="form" action="proses_edit_register_student.php" method="post" enctype="multipart/form-data">
                <div class="form-group mb-3">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" name="id_student" placeholder="ID" type="text" required="" value="<?php echo $rows['id_student'] ?>" >
                  </div>
                </div>
                
                <div class="form-group mb-3">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" name="nama_student" placeholder="Nama student" type="text" required="" value="<?php echo $rows['nama_student'] ?>">
                  </div>
                </div>
                  <div class="form-group">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control" name="email" placeholder="Email" type="text" required="" value="<?php echo $rows['email'] ?>">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control" name="alm_student" placeholder="Alamat" type="text" required="" value="<?php echo $rows['alm_student'] ?>">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control" name="no_tlp" placeholder="No Telp" type="text" required="" value="<?php echo $rows['no_tlp'] ?>">
                  </div>
                </div>
                  
                  <div class="form-group">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                      <td>
               <span class="avatar avatar-sm rounded-circle">
               <img alt="" src="../student/assets/img/theme/<?=$rows['foto_profil'];?> ">
                          </span> </td>
                    <input class="form-control" name="foto_profil"  type="file" required="" >
                  </div>
                </div>
                  
                <div class="text-center">
                  <button type="submit" class="btn btn-primary my-4" value="Submit" name="Submit" style="margin-top:-20px ;width: 100%;">Submit</button>
                </div> 
                  
                  <div class="text-center">
                      <a href="index.php"><button type="button" class="btn btn-primary my-4" style="margin-top:-20px ;width: 100%;" >Back</button></a>
                </div>
              </form>
                <?php } ?>
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