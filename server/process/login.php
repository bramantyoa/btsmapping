<?php

require_once '../../database/connection.php';


$login = new Login();
if($_POST['_login'] == "submit"){
	$uname = $_POST['_username'];
	$pass = $_POST['_password'];

	$login->getCredential($uname, $pass);
}

class Login {
		
	private $db;
	private $connection;
	function __construct() {
		$this->db = new DB_Connection();
		$this->connection = $this->db->getConnection();
		
	}
	
	public function getCredential($uname, $pass)
	{
		$query = "SELECT * FROM cred WHERE login='$uname'";
		$result = mysqli_query($this->connection, $query);
		$row = mysqli_fetch_array($result);

		if($row['word']==$pass){
			header("Location: ../map.html");
		} else {
			header("Location: ../index.html?mess=fail");
		}
	}
}

?>