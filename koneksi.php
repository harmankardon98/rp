<?php 
$host = "localhost";
$user = "atras";
$pass = "atras123";
$dbnm = "rumah";
$conn = mysql_connect($host, $user, $pass);
if ($conn) {
	$buka = mysql_select_db($dbnm);
	if (!$buka) {
		die ("database tidak dapat dibuka");
	}
}else {
	die ("server mysql tidak terhubung");
}
 ?>
