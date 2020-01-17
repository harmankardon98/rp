session_start();
include_once dirname(__FILE__).DIRECTORY_SEPARATOR.'db.data.php';
if(!isset($_SESSION['my_user_agent']) || ($_SESSION['my_user_agent']!=($_SERVER['HTTP_USER_AGENT']))){
	$__role = 'guest';
}else{
	$__role = $_SESSION['__role'];
}

$aksesFilename = dirname(__FILE__).DIRECTORY_SEPARATOR.'akses\..'.DIRECTORY_SEPARATOR.$__role.'.php';
if(!file_exists($aksesFilename)){
	die('terjadi kesalahan sistem');
}
include $aksesFilename;

require_once('db.data.php');

$arrayCurrentPath = explode('?',$_SERVER['REQUEST_URI']);
$currentPath = substr($arrayCurrentPath[0], strlen(BASE_URL));

$allow = in_array($currentPath,$__akses_role);

if(!$allow){
	if($__role == 'guest' && $currentPath != 'login.php'){
		header ("location: ".BASE_URL.'login.php');
	}else{
		echo "anda tidak diizinkan mengakses halaman ini";
	}
	exit;
}