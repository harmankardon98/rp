

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
    Login Page
  </title>
  <!-- Favicon -->
  <link href="admin/assets/img/brand/favicon.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="admin/assets/js/plugins/nucleo/css/nucleo.css" rel="stylesheet" />
  <link href="admin/assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="admin/assets/css/argon-dashboard.css?v=1.1.0" rel="stylesheet" />
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
                <h3>Forgot Password</h3>
              </div>
              <form role="form" action="proses_lupa_password.php" method="post">
                <?php
session_start();
include "koneksi.php";
$id_user =$_POST['id_user'];

//cek akun dari data base
$cek = mysql_query("select * from login where id_user = '$id_user' ");


if (isset($_POST['act_resset']))  {
date_default_timezone_set("Asia/Jakarta");
$pass="1A2B4HTjsk5kwhadbwlff"; $panjang='8'; $len=strlen($pass); 
$start=$len-$panjang; $xx=rand('0',$start); 
$yy=str_shuffle($pass); 
$passwordbaru=substr($yy, $xx, $panjang);

$id_user = trim(strip_tags($_POST['id_user']));
$password = mysql_real_escape_string(htmlentities(($passwordbaru)));
$datetime=date("h:i:s-j-M-Y");

// mencari alamat email si user
$query = "SELECT * FROM login WHERE id_user ='$id_user'";
$hasil = mysql_query($query);
$data  = mysql_fetch_array($hasil);
$cek = mysql_num_rows($hasil);
$id_user = strip_tags($data['id_user']);
$username = strip_tags($data['username']);

if ($cek == 1) {

// title atau subject email
$title  = "Permintaan Password Baru";
// isi pesan email disertai password
$pesan  = "Kami telah mereset Ulang Kata sandi ".$username." Dan anda dapat login kembali ke web kami \n\n 
<br> DETAIL AKUN ANDA ^_^ \n <br> Nama : ".$username." \n 
<br>password baru anda adalah: <font color='red'> ".$passwordbaru." </font>\n\n 
<br>\n\n PESAN NO-REPLY";
// header email berisi alamat pengirim
$header = "From: nama-website<no-reply@domain.com>";
// mengirim email

// cek status pengiriman email
if ($id_user =$_POST['id_user']) { 

    // update password baru ke database (jika pengiriman email sukses)
    $query = "UPDATE login SET password='$password' WHERE id_user = '$id_user'";
    $hasil = mysql_query($query);

    if ($hasil) 
	echo'<div class="warning">Kata sandi baru telah direset dan sudah diganti Silahkan isi kembali dengan password baru</div><br><br><hr><h3>PESAN DARI HATI<hr><br>
	'.$pesan.'<hr>';
    }
	else {
echo'<div class="warning">Pengubahan kata sandi gagal</div>';
}
}
else{

echo'<div class="warning">ID tidak ditemukan</div>';
}}
?>
                
                
                <input type="hidden" name="act_resset" >
                
              </form>
              <div class="text-center">
                <a href="login.php"><button type="button" class="btn btn-primary my-4" style="margin-stop:-20px !;width: 100%;">Re login</button> </a>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </div>
  <!--   Core   -->
  <script src="admin/assets/js/plugins/jquery/dist/jquery.min.js"></script>
  <script src="admin/assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!--   Optional JS   -->
  <!--   Argon JS   -->
  <script src="admin/assets/js/argon-dashboard.min.js?v=1.1.0"></script>
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



