<?php

	class conn{
		private $hostdb = "localhost:3306";
		private $userdb = "root";
		private $passdb = "";
		private $namedb = "malnutrition_monitoring_db";
		public $conn;

		public function __construct(){
			if (!isset($this->conn)){
				try {
					$link = new PDO("mysql:host=".$this->hostdb.";dbname=".$this->namedb, $this->userdb, $this->passdb);
					$link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
					$link->exec("SET CHARACTER SET utf8");
					$this->conn = $link;
	
				} catch (PDOException $e){
					die("Failed to connect with Database".$e->getMessage());	
				}
			}
		}
	}
?> 