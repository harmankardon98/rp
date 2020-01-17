<?PHP
SESSION_START();
//error_reporting(E_ERROR | E_PARSE);
define('_DB_HOST', 'localhost');
define('_DB_USER', 'root');
define('_DB_PASS', '');
define('_DB_NAME', 'rumah');
define('ROOT', dirname(__FILE__));
require_once(ROOT."/engine/db.class.php");
$db=new Database(_DB_HOST, _DB_USER, _DB_PASS, _DB_NAME);
?>
