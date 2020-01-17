<?php 
include "../koneksi.php";

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

if ($_POST['Submit'] == "Submit") {
$id_admin = $_POST['id_admin'];
$nama_admin = $_POST['nama_admin'];
$email = $_POST['email'];
$alm_admin = $_POST['alm_admin'];
$no_tlp = $_POST['no_tlp'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$school = $_POST['school'];
    $kota = $_POST['kota'];
    $negara = $_POST['negara'];
    $kode_pos = $_POST['kode_pos'];
    $about = $_POST['about'];
$foto_profil = $_FILES['foto_profil']['name'];
$folder = '../admin/assets/img/theme/';

    if (strlen($foto_profil)>0) {
			//upload Photo
			if (is_uploaded_file($_FILES['foto_profil']['tmp_name'])) {
				move_uploaded_file ($_FILES['foto_profil']['tmp_name'], "$folder/".$foto_profil);
			}
		}

//$move = move_uploaded_file($_FILE ['picture']['tmp_name'], $folder.$filename);


$input = "INSERT INTO admin(id_admin,nama_admin,email,alm_admin,no_tlp,first_name,last_name,school,kota,negara,kode_pos,about,foto_profil) VALUES('$id_admin','$nama_admin','$email','$alm_admin','$no_tlp','$first_name','$last_name','$school','$kota','$negara','$kode_pos','$about','$foto_profil')";

    $query_input =mysql_query($input);
if ($query_input) {
	//Jika Sukses
		?>
				<script language="JavaScript">
				alert('Register Berhasil!');
				document.location='data_user.php';
				</script>
		<?php
	}else {
	//Jika Gagal
	echo "Register Gagal, Silahkan diulangi!";
    
	}
	//Tutup koneksi engine MySQL


}

?>