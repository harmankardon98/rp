<?php 
include "../koneksi.php";

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

if ($_POST['Submit'] == "Submit") {
$id_teacher = $_POST['id_teacher'];
$nama_teacher = $_POST['nama_teacher'];
$email = $_POST['email'];
$alm_teacher = $_POST['alm_teacher'];
$no_tlp = $_POST['no_tlp'];
$foto_profil = $_FILES['foto_profil']['name'];
$folder = '../teacher/assets/img/theme/';

    if (strlen($foto_profil)>0) {
			//upload Photo
			if (is_uploaded_file($_FILES['foto_profil']['tmp_name'])) {
				move_uploaded_file ($_FILES['foto_profil']['tmp_name'], "$folder/".$foto_profil);
			}
		}

//$move = move_uploaded_file($_FILE ['picture']['tmp_name'], $folder.$filename);


$input = ("UPDATE teacher SET nama_teacher='$nama_teacher',email='$email',alm_teacher='$alm_teacher',no_tlp='$no_tlp',foto_profil='$foto_profil' where id_teacher='$id_teacher'" );

    $query_input =mysql_query($input);
if ($query_input) {
	//Jika Sukses
		?>
				<script language="JavaScript">
				alert('Edit Berhasil!');
				document.location='data_user.php';
				</script>
		<?php
	}else {
	//Jika Gagal
	echo "Edit Gagal, Silahkan diulangi!";
	}
	//Tutup koneksi engine MySQL


}

?>