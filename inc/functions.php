<?PHP
require_once('db.data.php');
if(isset($_REQUEST['act'])){
	$act=$_REQUEST['act'];

	if ($act == "login-user") {

		echo "<script>alert('Selamat Datang');</script>";
		
		 $username = $db->escape_string($_POST['username']);
		 $password = $db->escape_string($_POST['password']);

		 $getdata = $db->wheres("login", "id_user,username,password,sebagai", "username='$username'");

		 if ($getdata) {
		 	$username = $getdata['username'];
		 	$pass = $getdata['password'];
		 	$sebagai   = $getdata['sebagai'];

		 	if ( $username !== $username && $password !== $pass) {
		 		echo "<script>alert('Mohon Cek Username atau Password Anda');</script>";
		 	}else if( $username == $username && $password != $pass){
		 		echo "<script>alert('password salah');</script>";
		 	}else if ($username != $username && $password == $pass) {
		 		echo "<script>alert('Username salah');</script>";
		 	}else{
		 		echo "<script>alert('Anda Berhasil Login');</script>";
		 		$getdataz = $db->wheres("login", "username", "username='$id'");
				
		 		$_SESSION['username'] = $username;
		 		$_SESSION['id_user'] = $getdataz['id_user'];
		 		$_SESSION['sebagai'] = $getdata['sebagai'];
		 	}
		 }else{
		 	echo "<script>alert('Username salah');</script>";
		 }

	}
	if ($act == "logout") {
		session_destroy();
		$message = "Anda Berhasil Keluar dari Web Kami !!";
		echo $message;
	}
}
?>
