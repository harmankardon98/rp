<?php 
include "../koneksi.php";

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

if ($_POST['Submit'] == "Submit") {
$id_student = $_POST['id_student'];
$nama_student = $_POST['nama_student'];
$email = $_POST['email'];
$alm_student = $_POST['alm_student'];
$no_tlp = $_POST['no_tlp'];
$foto_profil = $_FILES['foto_profil']['name'];
$folder = '../student/assets/img/theme/';

    if (strlen($foto_profil)>0) {
			//upload Photo
			if (is_uploaded_file($_FILES['foto_profil']['tmp_name'])) {
				move_uploaded_file ($_FILES['foto_profil']['tmp_name'], "$folder/".$foto_profil);
			}
		}

//$move = move_uploaded_file($_FILE ['picture']['tmp_name'], $folder.$filename);


$input = ("UPDATE student SET nama_student='$nama_student',email='$email',alm_student='$alm_student',no_tlp='$no_tlp',foto_profil='$foto_profil' where id_student='$id_student'" );

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