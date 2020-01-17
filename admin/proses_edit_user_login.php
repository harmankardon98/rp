<?php 
include "../koneksi.php";

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

if ($_POST['Submit'] == "Submit") {
$id_user = $_POST['id_user'];
$username = $_POST['username'];

$sebagai = $_POST['sebagai'];



  

//$move = move_uploaded_file($_FILE ['picture']['tmp_name'], $folder.$filename);


$input = ("UPDATE login SET username='$username',sebagai='$sebagai' where id_user='$id_user'" );

    $query_input =mysql_query($input);
if ($query_input) {
	//Jika Sukses
		?>
				<script language="JavaScript">
				alert('Edit Berhasil!');
				document.location='data_user_login.php';
				</script>
		<?php
	}else {
	//Jika Gagal
	echo "Edit Gagal, Silahkan diulangi!";
	}
	//Tutup koneksi engine MySQL


}

?>