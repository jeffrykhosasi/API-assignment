<?php
	class Database
	{
		// //credential database
		// private $host = "localhost";
		// private $db_name = "api_db";
		// private $username = "root";
		// private $password = "";
		// public $conn;
		
		// //connect to database
		// public function getConnection()
		// {
		// 	$this->conn = null;
			
		// 	try
		// 	{
		// 		$this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
		// 		$this->conn->exec("set names utf8");
		// 	}
		// 	catch(PDOException $exception)
		// 	{
		// 		echo "Connection error: " . $exception->getMessage();
		// 	}
		// 	return $this->conn;
		// }	
		

		private $host = "ec2-23-23-235-86.compute-1.amazonaws.com";
		private $user = "vytogaqpgryrfs";
		private $password = "fa64d7f533ccda8b6f7d55e14412d90b76d29b0cc123b1ceba2ca26aa1511fea";
		private $dbname = "dcps966p2ecrlu";
		private $port = 5432;
		public $conn;

		public function getConnection()
		{
			$this->conn = null;
			try{
				//Set DSN data source name
				$dsn = "pgsql:host=" . $this->host . ";port=" . $this->$port . ";dbname=" . $this->$dbname . ";user=" . $this->$user . ";password=" . $this->$password . ";";
				//create a pdo instance
				$pdo = new PDO($dsn, $this->user, $this->password);
				$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
				$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
				$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		   }
		   		catch (PDOException $e) {
		   		echo 'Connection failed: ' . $e->getMessage();
		   }
			return $this->conn;
		}
	}
?>
