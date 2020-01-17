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
$siswa_yang_diajar = $_POST['siswa_yang_diajar'];
$waktu = $_POST['waktu'];
$hari = $_POST['hari'];
$id_teacher = $_POST['id_teacher'];


//$move = move_uploaded_file($_FILE ['picture']['tmp_name'], $folder.$filename);


$input = ("UPDATE jadwal_teacher SET mapel='$mapel', siswa_yang_diajar='$siswa_yang_diajar', waktu='$waktu', hari='$hari', id_teacher='$id_teacher' where id_jadwal='$id_jadwal'" );

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