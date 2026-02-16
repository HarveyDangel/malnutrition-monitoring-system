<?php

	class Conn{
		private $hostdb = "localhost:3306";
		private $userdb = "root";
		private $passdb = "";
		private $namedb = "malnutrition_monitoring_db";
		// public $conn;

		private static $instance = null;
		private $pdo;

		public function __construct(){

			try {
				$this->pdo = new PDO ('mysql:host='.$this->hostdb.';dbname='.$this->namedb, $this->userdb, $this->passdb);
				$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$this->pdo->exec("SET CHARACTER SET utf8");
			} catch (PDOException $e) {
				die("Failed to connect with Database: " . $e->getMessage());
			}

			// if (!isset($this->conn)){
			// 	try {
			// 		$link = new PDO("mysql:host=".$this->hostdb.";dbname=".$this->namedb, $this->userdb, $this->passdb);
			// 		$link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
			// 		$link->exec("SET CHARACTER SET utf8");
			// 		$this->conn = $link;
	
			// 	} catch (PDOException $e){
			// 		die("Failed to connect with Database".$e->getMessage());	
			// 	}
			// }
		}

		public static function getInstance(){
			if (self::$instance === null ) {
				self::$instance = new Conn();
			}
			return self::$instance;
		}

		public function getConnection() {
			return $this->pdo;
		}

	}
?> 