<?PHP
/**
 * @Simple MySQLi Class
 * By Dewa Megablogging, Update by Galang Yoga Pradan
 * @copyright 2015
  * Date Created : 15 Agustus 2015
 * @Lastest-Update May 2019
 * @version 3
 */
class Database{
	private $mysqli;
	public function __construct($host, $user, $pass, $db){
		$this->mysqli =  new mysqli($host, $user, $pass, $db);
		if(mysqli_connect_errno()) {
			$r_url=APP_URL;
			echo "Can't Connect to database";
			exit();
		}
	}

	/**
	 * run select : run query select
	 * @since v1
	 */

	public function wheres($table, $row, $where){
		$q= 'SELECT '.$row.' FROM '.$table.' WHERE '.$where;
		$result = mysqli_query($this->mysqli,$q);
		$row = mysqli_fetch_assoc($result);
		return $row;
	}

	public function select($table, $rows = "*", $where = null, $order = null, $limit = null){
		$q = 'SELECT '.$rows.' FROM '.$table;
		$data= [];
		if($where != null){
			$q .= ' WHERE '.$where;
		}
		if($order != null){
			$q .= ' ORDER BY '.$order;
		}
		if ($limit != null){
			$q .= ' LIMIT '.$limit;
		}
		$result = mysqli_query($this->mysqli,$q);
		while ($row = mysqli_fetch_assoc($result)){
			$data[] = $row;
		}
		return $data;
	}

	/**
	 * run insert : run query insert
	 * @since v1
	 */
	private function quote($string,$param=''){
		if(empty($param)){
			return "'$string'";
		}
		return $string;
	}
	public function insert($table,$insert,$parameters=array()){
		$param="";
		$val="";
		//Build Query
		$query="INSERT INTO $table";
		if(is_array($insert)){
			$count=count($insert);
			$i=0;
			foreach ($insert as $key => $value) {
				$param.="`$key`";
				$val.=$this->quote($value,$parameters);
				if(++$i != $count) {
				    $param.=",";
				    $val.=",";
				}
			}
			$query.=" ($param) VALUES ($val)";
		}
		$sql = $this->query($query);
		if ($sql){
			return true;
		}else{
			return false;
		}
	}

	/**
	 * mysqli shortcut
	 * @since v1
	 */
	public function query($sql){
		$result = mysqli_query($this->mysqli,$sql);
		return $result;
	}
	public function fetch($sql){
		$data="";
		$result = mysqli_query($this->mysqli,$sql);
		$data = mysqli_fetch_array($result);
		return $data;
	}
	public function fetch_multiple($sql){
		$data=[];
		$result = mysqli_query($this->mysqli,$sql);
		while($row = mysqli_fetch_array($result)){
			$data[] = $row;
		}
		return $data;
	}
	public function num_rows($sql){
		$result = mysqli_query($this->mysqli,$sql);
		$data = mysqli_num_rows($result);
		return $data;
	}
	public function escape_string($string){
		return mysqli_real_escape_string($this->mysqli,$string);
	}



}
?>
