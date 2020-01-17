<?php 
include "../koneksi.php";

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

if ($_POST['Submit'] == "Submit") {
$id_jadwal = $_POST['id_jadwal'];
$mapel = $_POST['mapel'];
$tutor = $_POST['tutor'];
$waktu = $_POST['waktu'];
$hari = $_POST['hari'];
$id_student = $_POST['id_student'];


//$move = move_uploaded_file($_FILE ['picture']['tmp_name'], $folder.$filename);


$input = ("UPDATE jadwal SET mapel='$mapel', tutor='$tutor', waktu='$waktu', hari='$hari', id_student='$id_student' where id_jadwal='$id_jadwal'" );

    $query_input =mysql_query($input);
if ($query_input) {
	//Jika Sukses
		?>
				<script language="JavaScript">
				alert('Edit Berhasil!');
				document.location='data_jadwal.php';
				</script>
		<?php
	}else {
	//Jika Gagal
	echo "Edit Gagal, Silahkan diulangi!";
	}
	//Tutup koneksi engine MySQL


}

?>