<?php
include 'conn.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


class Functions
{
	private $db;
	public function __construct()
	{
		$this->db = new conn();
	}

	//Sign up Admin

	public function SignUpAdmin($data)
	{
		$sql = "INSERT INTO tbl_admins (email, username, password) VALUES ( :email, :username, :password);";
		$password = $data['password'];
		$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

		$stmt = $this->db->conn->prepare($sql);
		$r = $stmt->execute([
			':email' => $data["email"],
			':username' => $data["username"],
			':password' => $hashedPassword
		]);
		if ($r) {

			$admin_id = $this->db->conn->lastInsertId();
			$logSql = "INSERT INTO tbl_account_log (username, description) VALUES (:username, :description)";
			$logStmt = $this->db->conn->prepare($logSql);
			$logStmt->execute([
				':username' => "New user",
				':description' => "Sign up as Administrator with ID:" . $admin_id
			]);
			// success!!!
			return 1;
		} else {
			// somthing wrong with queries
			return 0;
		}
	}


	//admin log in
	public function AdminLogin($username, $password)
	{
		// username and password sent from form 
		$sql = "SELECT * FROM tbl_admins WHERE username = :username";
		$stmt = $this->db->conn->prepare($sql);

		$stmt->execute([':username' => $username]);
		$count = $stmt->rowCount();
		$result = 0;

		if ($count === 1) {
			$data = $stmt->fetch(PDO::FETCH_OBJ);
			$hashedPassword = $data->password;
			if (password_verify($password, $hashedPassword)) {
				$_SESSION['admin_id'] =  $data->admin_id;
				$_SESSION['username'] =  $data->username;
				$_SESSION['role'] = $data->role;

				$logSql = "INSERT INTO tbl_account_log (username, description) VALUES (:username, :description)";
				$logStmt = $this->db->conn->prepare($logSql);
				$logStmt->execute([
					':username' => $_SESSION['username'],
					':description' => "Logged in"
				]);

				$result = 1;
				return $result;
			} else {

				$logSql = "INSERT INTO tbl_account_log (username, description) VALUES (:username, :description)";
				$logStmt = $this->db->conn->prepare($logSql);
				$logStmt->execute([
					':username' => 'Unknown User',
					':description' => "A user attempted to log in an Admin account"
				]);

				$result = 2;
				return $result;
			}
		} else {
			return 0;
		}
	}

	public function GetAdminInfo($admin_id)
	{
		$sql = 'SELECT * FROM tbl_admins WHERE admin_id=:admin_id';
		$stmt = $this->db->conn->prepare($sql);
		$stmt->execute([':admin_id' => $admin_id]);
		$data = $stmt->fetch(PDO::FETCH_OBJ);
		return $data;
	}

	//Change Admin Password
	public function ChangePassword($data, $admin_id)
	{
		$sql = 'UPDATE tbl_admins SET email=:email, password=:password WHERE admin_id = :admin_id';

		$HashedPassword = password_hash($data['password'], PASSWORD_DEFAULT);

		$stmt = $this->db->conn->prepare($sql);
		$r = $stmt->execute([
			':email' => $data['email'],
			':password' => $HashedPassword,
			':admin_id' => $admin_id
		]);
		if ($r) {

			$logSql = "INSERT INTO tbl_account_log (username, description) VALUES (:username, :description)";
			$logStmt = $this->db->conn->prepare($logSql);
			$logStmt->execute([
				':username' => $_SESSION['username'],
				':description' => "Change passsword"
			]);

			return 1;
		} else {
			return 0;
		}
	}

	//DOH login
	public function DOHLogin($username, $password)
	{
		// username and password from form 
		$sql = "SELECT * FROM tbl_doh WHERE username = :username AND status = :status";
		$stmt = $this->db->conn->prepare($sql);
		$stmt->execute([
			':username' => $username,
			':status' => 'activated'
		]);
		$count = $stmt->rowCount();
		$result = 0;
		if ($count === 1) {
			$data = $stmt->fetch(PDO::FETCH_OBJ);
			$hashedPassword = $data->password;
			if (password_verify($password, $hashedPassword)) {
				$_SESSION['doh_id'] =  $data->doh_id;
				$_SESSION['username'] = $data->username;
				$_SESSION['role'] = $data->role;
				$_SESSION['region'] = $data->region;
				$_SESSION['province'] = $data->province;

				$logSql = "INSERT INTO tbl_account_log (username, description) VALUES (:username, :description)";
				$logStmt = $this->db->conn->prepare($logSql);
				$logStmt->execute([
					':username' => $_SESSION['username'],
					':description' => "Logged in"
				]);

				$result =  1;
				return $result;
			} else {

				$logSql = "INSERT INTO tbl_account_log (username, description) VALUES (:username, :description)";
				$logStmt = $this->db->conn->prepare($logSql);
				$logStmt->execute([
					':username' => 'Unknown User',
					':description' => "A user attempted to log in a DOH account"
				]);

				$result = 2;
				return $result;
			}
		} else {
			return 0;
		}
	}
	//PHO login
	public function PHOLogin($username, $password)
	{
		// username and password from form 

		$sql = "SELECT * FROM tbl_pho WHERE username = :username AND status = :status";
		$stmt = $this->db->conn->prepare($sql);
		$stmt->execute([
			':username' => $username,
			':status' => 'activated'
		]);
		$count = $stmt->rowCount();
		$result = 0;
		if ($count === 1) {
			$data = $stmt->fetch(PDO::FETCH_OBJ);
			$hashedPassword = $data->password;
			if (password_verify($password, $hashedPassword)) {
				$_SESSION['pho_id'] =  $data->pho_id;
				$_SESSION['username'] =  $data->username;
				$_SESSION['role'] = $data->role;
				$_SESSION['fname'] = $data->fname;
				$_SESSION['mname'] = $data->mname;
				$_SESSION['lname'] = $data->lname;
				$_SESSION['suffix'] = $data->suffix;

				$logSql = "INSERT INTO tbl_account_log (username, description) VALUES (:username, :description)";
				$logStmt = $this->db->conn->prepare($logSql);
				$logStmt->execute([
					':username' => $_SESSION['username'],
					':description' => "Logged in"
				]);

				$result = 1;
				return $result;
			} else {

				$logSql = "INSERT INTO tbl_account_log (username, description) VALUES (:username, :description)";
				$logStmt = $this->db->conn->prepare($logSql);
				$logStmt->execute([
					':username' => 'Unknown User',
					':description' => "A user attempted to log in a PHO account"
				]);

				$result = 2;
				return $result;
			}
		} else {
			return 0;
		}
	}

	//RHU login
	public function RHULogin($username, $password)
	{
		// username and password from form 

		$sql = "SELECT * FROM tbl_rhu WHERE username = :username AND status = :status";
		$stmt = $this->db->conn->prepare($sql);
		$stmt->execute([
			':username' => $username,
			':status' => 'activated'
		]);
		$count = $stmt->rowCount();
		$result = 0;
		if ($count === 1) {
			$data = $stmt->fetch(PDO::FETCH_OBJ);
			$hashedPassword = $data->password;
			if (password_verify($password, $hashedPassword)) {
				$_SESSION['rhu_id'] =  $data->rhu_id;
				$_SESSION['username'] = $data->username;
				$_SESSION['role'] = $data->role;
				$_SESSION['municipality'] = $data->municipality;
				$_SESSION['fname'] = $data->fname;
				$_SESSION['mname'] = $data->mname;
				$_SESSION['lname'] = $data->lname;
				$_SESSION['suffix'] = $data->suffix;

				$logSql = "INSERT INTO tbl_account_log (username, description) VALUES (:username, :description)";
				$logStmt = $this->db->conn->prepare($logSql);
				$logStmt->execute([
					':username' => $_SESSION['username'],
					':description' => "Logged in"
				]);

				$result = 1;
				return $result;
			} else {

				$logSql = "INSERT INTO tbl_account_log (username, description) VALUES (:username, :description)";
				$logStmt = $this->db->conn->prepare($logSql);
				$logStmt->execute([
					':username' => 'Unknown User',
					':description' => "A user attempted to log in a RHU account"
				]);

				$result = 2;
				return $result;
			}
		} else {

			return 0;
		}
	}

	//Create DOH Account
	public function AddDOH($data)
	{
		$sql = "INSERT INTO tbl_doh (fname, mname, lname, suffix, sex, province, region, email, username, password) VALUES (:fname, :mname, :lname, :suffix, :sex, :province, :region, :email, :username, :password);";
		$password = $data['password'];
		$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

		$stmt = $this->db->conn->prepare($sql);
		$r = $stmt->execute([
			':fname' => $data["fname"],
			':mname' => $data["mname"],
			':lname' => $data["lname"],
			':suffix' => $data["suffix"],
			':sex' => $data["sex"],
			':province' => $data["province"],
			':region' => $data["region"],
			':email' => $data["email"],
			':username' => $data["username"],
			':password' => $hashedPassword
		]);
		if ($r) {

			$doh_id = $this->db->conn->lastInsertId();
			$logSql = "INSERT INTO tbl_account_log (username, description) VALUES (:username, :description)";
			$logStmt = $this->db->conn->prepare($logSql);
			$logStmt->execute([
				':username' => $_SESSION['username'],
				':description' => "Created a new DOH account with ID: " . $doh_id
			]);
			// success!!!
			return 1;
		} else {
			// somthing wrong with queries
			return 0;
		}
	}

	//Update DOH
	public function UpdateDOH($data, $doh_id)
	{
		$sql = 'UPDATE tbl_doh SET fname=:fname, mname=:mname, lname=:lname, suffix=:suffix, sex=:sex, province=:province, region=:region, email=:email, username=:username, password=:password WHERE doh_id = :doh_id';

		$HashedPassword = password_hash($data['password'], PASSWORD_DEFAULT);

		$stmt = $this->db->conn->prepare($sql);
		$r = $stmt->execute([
			':fname' => $data['fname'],
			':mname' => $data['mname'],
			':lname' => $data['lname'],
			':suffix' => $data['suffix'],
			':sex' => $data['sex'],
			':province' => $data['province'],
			':region' => $data['region'],
			':email' => $data['email'],
			':username' => $data['username'],
			':password' => $HashedPassword,
			':doh_id' => $doh_id
		]);
		if ($r) {

			$logSql = "INSERT INTO tbl_account_log (username, description) VALUES (:username, :description)";
			$logStmt = $this->db->conn->prepare($logSql);
			$logStmt->execute([
				':username' => $_SESSION['username'],
				':description' => "Modify a DOH account with ID: " . $doh_id
			]);

			return 1;
		} else {
			return 0;
		}
	}

	//Get all doh
	public function GetAllDOH()
	{
		$sql = 'SELECT * FROM tbl_doh WHERE status = :status ORDER BY doh_id ASC';
		$stmt = $this->db->conn->prepare($sql);
		$stmt->execute([':status' => 'activated']);
		$data = $stmt->fetchAll();
		return $data;
	}

	//Read Only DOH
	public function GetDOHInfo($doh_id)
	{
		$sql = 'SELECT * FROM tbl_doh WHERE doh_id=:doh_id';
		$stmt = $this->db->conn->prepare($sql);
		$stmt->execute([':doh_id' => $doh_id]);
		$data = $stmt->fetch(PDO::FETCH_OBJ);
		return $data;
	}

	//Delete DOH
	public function DeleteDOH($doh_id)
	{
		$sql = 'DELETE FROM tbl_doh WHERE doh_id=:doh_id';
		$stmt = $this->db->conn->prepare($sql);
		$r = $stmt->execute([':doh_id' => $doh_id]);
		if ($r) {

			$logSql = "INSERT INTO tbl_account_log (username, description) VALUES (:username, :description)";
			$logStmt = $this->db->conn->prepare($logSql);
			$logStmt->execute([
				':username' => $_SESSION['username'],
				':description' => "Deleted a DOH account with ID: " . $doh_id
			]);

			return 1;
		} else {
			return 0;
		}
	}

	//Deactivate DOH
	public function DeactivateDOH($doh_id)
	{
		$sql = 'UPDATE tbl_doh SET status =:status WHERE doh_id=:doh_id';
		$stmt = $this->db->conn->prepare($sql);
		$r = $stmt->execute([
			':status' => 'deactivated',
			':doh_id' => $doh_id
		]);
		if ($r) {

			$logSql = "INSERT INTO tbl_account_log (username, description) VALUES (:username, :description)";
			$logStmt = $this->db->conn->prepare($logSql);
			$logStmt->execute([
				':username' => $_SESSION['username'],
				':description' => "Deactivated a DOH account with ID: " . $doh_id
			]);

			return 1;
		} else {
			return 0;
		}
	}

	//Create RHU
	public function AddRHU($data)
	{

		$sql = "INSERT INTO tbl_rhu (fname, mname, lname, suffix, birthdate, sex, province, municipality, email, username, password ) VALUES (:fname, :mname, :lname, :suffix, :birthdate, :sex, :province, :municipality, :email, :username, :password)";

		$HashedPassword = password_hash($data['password'], PASSWORD_DEFAULT);

		$stmt = $this->db->conn->prepare($sql);
		$r = $stmt->execute([
			':fname' => $data['fname'],
			':mname' => $data['mname'],
			':lname' => $data['lname'],
			':suffix' => $data['suffix'],
			':birthdate' => $data['birthdate'],
			':sex' => $data['sex'],
			':province' => $data['province'],
			':municipality' => $data['municipality'],
			':email' => $data['email'],
			':username' => $data['username'],
			':password' => $HashedPassword
		]);

		if ($r) {

			$rhu_id = $this->db->conn->lastInsertId();
			$logSql = "INSERT INTO tbl_account_log (username, description) VALUES (:username, :description)";
			$logStmt = $this->db->conn->prepare($logSql);
			$logStmt->execute([
				':username' => $_SESSION['username'],
				':description' => "Created a new RHU account with ID: " . $rhu_id
			]);
			// success!!!
			return 1;
		} else {
			// somthing wrong with queries
			return 0;
		}
	}

	//Read All RHU
	public function GetAllRHU()
	{
		$sql = 'SELECT * FROM tbl_rhu WHERE status = :status ORDER BY rhu_id ASC';
		$stmt = $this->db->conn->prepare($sql);
		$stmt->execute([':status' => 'activated']);
		$data = $stmt->fetchAll();
		return $data;
	}

	//Read Only RHU
	public function GetRHUInfo($rhu_id)
	{
		$sql = 'SELECT * FROM tbl_rhu WHERE rhu_id=:rhu_id';
		$stmt = $this->db->conn->prepare($sql);
		$stmt->execute([':rhu_id' => $rhu_id]);
		$data = $stmt->fetch(PDO::FETCH_OBJ);
		return $data;
	}

	//Update RHU
	public function UpdateRHU($data, $rhu_id)
	{
		$sql = 'UPDATE tbl_rhu SET fname=:fname, mname=:mname, lname=:lname, suffix=:suffix, birthdate=:birthdate, sex=:sex, province=:province, municipality=:municipality, email=:email, username=:username, password=:password WHERE rhu_id = :rhu_id';

		$HashedPassword = password_hash($data['password'], PASSWORD_DEFAULT);

		$stmt = $this->db->conn->prepare($sql);
		$r = $stmt->execute([
			':fname' => $data['fname'],
			':mname' => $data['mname'],
			':lname' => $data['lname'],
			':suffix' => $data['suffix'],
			':birthdate' => $data['birthdate'],
			':sex' => $data['sex'],
			':province' => $data['province'],
			':municipality' => $data['municipality'],
			':email' => $data['email'],
			':username' => $data['username'],
			':password' => $HashedPassword,
			':rhu_id' => $rhu_id
		]);
		if ($r) {

			$logSql = "INSERT INTO tbl_account_log (username, description) VALUES (:username, :description)";
			$logStmt = $this->db->conn->prepare($logSql);
			$logStmt->execute([
				':username' => $_SESSION['username'],
				':description' => "Edit RHU account with ID: " . $rhu_id
			]);

			return 1;
		} else {
			return 0;
		}
	}
	//Delete RHU
	// public function DeleteRHU($rhu_id)
	// {
	// 	$sql = 'DELETE FROM tbl_rhu WHERE rhu_id=:rhu_id';
	// 	$stmt = $this->db->conn->prepare($sql);
	// 	$r = $stmt->execute([':rhu_id' => $rhu_id]);
	// 	if ($r) {
	// 		return 1;
	// 	} else {
	// 		return 0;
	// 	}
	// }

	//Deactivate RHU
	public function DeactivateRHU($rhu_id)
	{
		$sql = 'UPDATE tbl_rhu SET status =:status WHERE rhu_id=:rhu_id';
		$stmt = $this->db->conn->prepare($sql);
		$r = $stmt->execute([
			':status' => 'deactivated',
			':rhu_id' => $rhu_id
		]);
		if ($r) {

			$logSql = "INSERT INTO tbl_account_log (username, description) VALUES (:username, :description)";
			$logStmt = $this->db->conn->prepare($logSql);
			$logStmt->execute([
				':username' => $_SESSION['username'],
				':description' => "Deactivated a RHU account with ID: " . $rhu_id
			]);

			return 1;
		} else {
			return 0;
		}
	}

	//Create PHO
	public function addPHO($data)
	{
		$sql = "INSERT INTO tbl_pho (fname, mname, lname, suffix, birthdate, sex, province, municipality, email, username, password ) VALUES (:fname, :mname, :lname, :suffix, :birthdate, :sex, :province, :municipality, :email, :username, :password)";

		$HashedPassword = password_hash($data['password'], PASSWORD_DEFAULT);

		$stmt = $this->db->conn->prepare($sql);
		$r = $stmt->execute([
			':fname' => $data['fname'],
			':mname' => $data['mname'],
			':lname' => $data['lname'],
			':suffix' => $data['suffix'],
			':birthdate' => $data['birthdate'],
			':sex' => $data['sex'],
			':province' => $data['province'],
			':municipality' => $data['municipality'],
			':email' => $data['email'],
			':username' => $data['username'],
			':password' => $HashedPassword
		]);

		if ($r) {

			$pho_id = $this->db->conn->lastInsertId();
			$logSql = "INSERT INTO tbl_account_log (username, description) VALUES (:username, :description)";
			$logStmt = $this->db->conn->prepare($logSql);
			$logStmt->execute([
				':username' => $_SESSION['username'],
				':description' => "Created a new PHO account with ID: " . $pho_id
			]);
			// success!!!
			return 1;
		} else {
			// somthing wrong with queries
			return 0;
		}
	}
	//Update PHO
	public function UpdatePHO($data, $pho_id)
	{
		$sql = 'UPDATE tbl_pho SET fname=:fname, mname=:mname, lname=:lname, suffix=:suffix, birthdate=:birthdate, sex=:sex, province=:province, municipality=:municipality, email=:email, username=:username, password=:password WHERE pho_id = :pho_id';

		$HashedPassword = password_hash($data['password'], PASSWORD_DEFAULT);

		$stmt = $this->db->conn->prepare($sql);
		$r = $stmt->execute([
			':fname' => $data['fname'],
			':mname' => $data['mname'],
			':lname' => $data['lname'],
			':suffix' => $data['suffix'],
			':birthdate' => $data['birthdate'],
			':sex' => $data['sex'],
			':province' => $data['province'],
			':municipality' => $data['municipality'],
			':email' => $data['email'],
			':username' => $data['username'],
			':password' => $HashedPassword,
			':pho_id' => $pho_id
		]);
		if ($r) {

			$logSql = "INSERT INTO tbl_account_log (username, description) VALUES (:username, :description)";
			$logStmt = $this->db->conn->prepare($logSql);
			$logStmt->execute([
				':username' => $_SESSION['username'],
				':description' => "Modify a PHO account with ID: " . $pho_id
			]);

			return 1;
		} else {
			return 0;
		}
	}
	// GET ALL PHO
	public function GetAllPHO()
	{
		$sql = 'SELECT * FROM tbl_pho WHERE status = :status ORDER BY pho_id ASC';
		$stmt = $this->db->conn->prepare($sql);
		$stmt->execute(['status' => 'activated']);
		$data = $stmt->fetchAll();
		return $data;
	}

	//Read Only PHO
	public function GetPHOInfo($pho_id)
	{
		$sql = 'SELECT * FROM tbl_pho WHERE pho_id=:pho_id';
		$stmt = $this->db->conn->prepare($sql);
		$stmt->execute([':pho_id' => $pho_id]);
		$data = $stmt->fetch(PDO::FETCH_OBJ);
		return $data;
	}

	//Deactivate PHO
	public function DeactivatePHO($pho_id)
	{
		$sql = 'UPDATE tbl_pho SET status =:status WHERE pho_id=:pho_id';
		$stmt = $this->db->conn->prepare($sql);
		$r = $stmt->execute([
			':status' => 'deactivated',
			':pho_id' => $pho_id
		]);
		if ($r) {

			$logSql = "INSERT INTO tbl_account_log (username, description) VALUES (:username, :description)";
			$logStmt = $this->db->conn->prepare($logSql);
			$logStmt->execute([
				':username' => $_SESSION['username'],
				':description' => "Deactivated a PHO account with ID: " . $pho_id
			]);

			return 1;
		} else {
			return 0;
		}
	}

	// public function DeletePHO($pho_id)
	// {
	// 	$sql = 'DELETE FROM tbl_pho WHERE pho_id=:pho_id';
	// 	$stmt = $this->db->conn->prepare($sql);
	// 	$r = $stmt->execute([':pho_id' => $pho_id]);
	// 	if ($r) {

	// 		$logSql = "INSERT INTO tbl_account_log (username, description) VALUES (:username, :description)";
	// 		$logStmt = $this->db->conn->prepare($logSql);
	// 		$logStmt->execute([
	// 			':username' => $_SESSION['username'],
	// 			':description' => "Deleted a PHO Account with ID: " . $pho_id
	// 		]);

	// 		return 1;
	// 	} else {
	// 		return 0;
	// 	}
	// }

	//add child
	public function addChild($data, $wfa, $hfa, $wfh)
	{
		// Insert into tbl_children
		$sql = "INSERT INTO tbl_children (purok, name_of_caregiver, name_of_child, belong_to_ip, sex, date_of_birth, date_last_measured, weight, height, age_by_months, nutritional_status_WFA, nutritional_status_HFA, nutritional_status_WFH, barangay, municipality, province, region, year, latitude, longitude, rhu_id) 
				VALUES (:purok, :name_of_caregiver, :name_of_child, :belong_to_ip, :sex, :date_of_birth, :date_last_measured, :weight, :height, :age_by_months, :nutritional_status_WFA, :nutritional_status_HFA, :nutritional_status_WFH, :barangay, :municipality, :province, :region, :year, :latitude, :longitude, :rhu_id)";
		$stmt = $this->db->conn->prepare($sql);
		$r = $stmt->execute([
			':purok' => $data['purok'],
			':name_of_caregiver' => $data['name_of_caregiver'],
			':name_of_child' => $data['name_of_child'],
			':belong_to_ip' => $data['belong_to_ip'],
			':sex' => $data['sex'],
			':date_of_birth' => $data['date_of_birth'],
			':date_last_measured' => $data['date_last_measured'],
			':weight' => $data['weight'],
			':height' => $data['height'],
			':age_by_months' => $data['age_by_months'],
			':nutritional_status_WFA' => $wfa,
			':nutritional_status_HFA' => $hfa,
			':nutritional_status_WFH' => $wfh,
			':barangay' => $data['barangay_text'],
			':municipality' => $data['city_text'],
			':province' => $data['province_text'],
			':region' => $data['region_text'],
			':year' => $data['year'],
			':latitude' => $data['latitude'],
			':longitude' => $data['longitude'],
			':rhu_id' => $data['rhu_id']
		]);

		if ($r) {
			// Get the last inserted ID to use as child_id in child_history
			$child_id = $this->db->conn->lastInsertId();

			// Insert into child_history
			$sqlHistory = "INSERT INTO tbl_child_history (child_id, date_measured, age_in_months, weight, height, wfa, hfa, wfh) VALUES (:child_id, :date_measured, :age_by_months, :weight, :height, :wfa, :hfa, :wfh)";
			$stmtHistory = $this->db->conn->prepare($sqlHistory);
			$rHistory = $stmtHistory->execute([
				':child_id' => $child_id,
				':date_measured' => $data['date_last_measured'],
				':age_by_months' => $data['age_by_months'],
				':weight' => $data['weight'],
				':height' => $data['height'],
				':wfa' => $wfa,
				':hfa' => $hfa,
				':wfh' => $wfh
			]);

			if ($rHistory) {

				$logSql = "INSERT INTO tbl_account_log (username, description) VALUES (:username, :description)";
				$logStmt = $this->db->conn->prepare($logSql);
				$logStmt->execute([
					':username' => $_SESSION['username'],
					':description' => "Added a child record with ID: " . $child_id
				]);
				// Success in both inserts
				return 1;
			} else {
				// Something went wrong with inserting into child_history
				return 0;
			}
		} else {
			// Something went wrong with inserting into tbl_children
			return 0;
		}
	}

	//Read All Children by Municipality
	public function GetAllChildrenByMunicipality($municipality)
	{
		$sql = 'SELECT * FROM tbl_children WHERE municipality = :municipality AND status = :status ORDER BY child_id ASC';
		$stmt = $this->db->conn->prepare($sql);
		$stmt->execute([
			':municipality' => $municipality,
			':status' => 'activated'
		]);
		$data = $stmt->fetchAll();
		return $data;
	}
	//Read All Children
	public function GetAllChildren()
	{
		$sql = 'SELECT * FROM tbl_children WHERE status = :status ORDER BY child_id ASC';
		$stmt = $this->db->conn->prepare($sql);
		$stmt->execute([':status' => 'activated']);
		$data = $stmt->fetchAll();
		return $data;
	}

	//Read Only Child
	public function GetChildInfo($child_id)
	{
		$sql = 'SELECT * FROM tbl_children WHERE child_id=:child_id';
		$stmt = $this->db->conn->prepare($sql);
		$stmt->execute([':child_id' => $child_id]);
		$data = $stmt->fetch(PDO::FETCH_OBJ);
		return $data;
	}

	//Read Child History
	public function GetChildHistory($child_id)
	{
		$sql = 'SELECT * FROM tbl_child_history WHERE child_id = :child_id AND status = :status ORDER BY record_id ASC';
		$stmt = $this->db->conn->prepare($sql);
		$stmt->execute([
			':child_id' => $child_id,
			':status' => 'active'
		]);
		$data = $stmt->fetchAll();
		return $data;
	}

	//Update Child
	public function UpdateChild($data, $wfa, $hfa, $wfh, $child_id)
	{
		$sql = 'UPDATE tbl_children SET purok=:purok, name_of_caregiver=:name_of_caregiver, name_of_child=:name_of_child, belong_to_ip=:belong_to_ip, sex=:sex, date_of_birth=:date_of_birth, date_last_measured=:date_last_measured, weight=:weight, height=:height, age_by_months=:age_by_months, nutritional_status_WFA=:nutritional_status_WFA, nutritional_status_HFA=:nutritional_status_HFA, nutritional_status_WFH=:nutritional_status_WFH, barangay=:barangay, municipality=:municipality, province=:province, region=:region, year=:year, latitude=:latitude, longitude=:longitude, rhu_id=:rhu_id WHERE child_id=:child_id';

		$stmt = $this->db->conn->prepare($sql);
		$r = $stmt->execute([
			':purok' => $data['purok'],
			':name_of_caregiver' => $data['name_of_caregiver'],
			':name_of_child' => $data['name_of_child'],
			':belong_to_ip' => $data['belong_to_ip'],
			':sex' => $data['sex'],
			':date_of_birth' => $data['date_of_birth'],
			':date_last_measured' => $data['date_last_measured'],
			':weight' => $data['weight'],
			':height' => $data['height'],
			':age_by_months' => $data['age_by_months'],
			':nutritional_status_WFA' => $wfa,
			':nutritional_status_HFA' => $hfa,
			':nutritional_status_WFH' => $wfh,
			':barangay' => $data['brgy'],
			':municipality' => $data['muni'],
			':province' => $data['province_text'],
			':region' => $data['region_text'],
			':year' => $data['year'],
			':latitude' => $data['latitude'],
			':longitude' => $data['longitude'],
			':rhu_id' => $data['rhu_id'],
			':child_id' => $child_id,
		]);

		if ($r) {

			// Insert into child_history
			$sqlHistory = "INSERT INTO tbl_child_history (child_id, date_measured, age_in_months, weight, height, wfa, hfa, wfh) VALUES (:child_id, :date_measured, :age_by_months, :weight, :height, :wfa, :hfa, :wfh)";
			$stmtHistory = $this->db->conn->prepare($sqlHistory);
			$rHistory = $stmtHistory->execute([
				':child_id' => $child_id,
				':date_measured' => $data['date_last_measured'],
				':age_by_months' => $data['age_by_months'],
				':weight' => $data['weight'],
				':height' => $data['height'],
				':wfa' => $wfa,
				':hfa' => $hfa,
				':wfh' => $wfh
			]);

			if ($rHistory) {

				$logSql = "INSERT INTO tbl_account_log (username, description) VALUES (:username, :description)";
				$logStmt = $this->db->conn->prepare($logSql);
				$logStmt->execute([
					':username' => $_SESSION['username'],
					':description' => "Update a child record with ID: " . $child_id
				]);
				// Success in both inserts
				return 1;
			} else {
				// Something went wrong with inserting into child_history
				return 0;
			}
		} else {
			// Something went wrong with inserting into tbl_children
			return 0;
		}
	}

	//generate report
	//count number of recorded child by Municipal and Barangay 0-59 months old
	public function GetNumberOfRecordedChildren($municipality, $barangay)
	{
		$sql = 'SELECT FROM tbl_children COUNT child_id WHERE municipality = :municipality AND barangay = :barangay AND age_by_months < 60 AND status = :status';

		$stmt = $this->db->conn->prepare($sql);
		$stmt->execute([
			':municipality' => $municipality,
			':barangay' => $barangay,
			':status' => 'activated'
		]);
		$numOfRecordedChildren = $stmt->fetch(PDO::FETCH_OBJ);
		return $numOfRecordedChildren;
	}

	// public function GetEstimatedPopulation()
	// {
	// 	$sql = 'SELECT FROM tbl_address ORDER BY psgc ASC';

	// 	$stmt = $this->db->conn->prepare($sql);
	// 	$stmt->execute();
	// 	$data = $stmt->fetchAll();
	// 	return $data;
	// }


	//Delete Child
	public function DeleteChild($child_id)
	{
		$sql = 'UPDATE tbl_children SET status =:status WHERE child_id=:child_id';
		$stmt = $this->db->conn->prepare($sql);
		$r = $stmt->execute([
			':status' => 'deleted',
			':child_id' => $child_id
		]);
		if ($r) {

			$logSql = "INSERT INTO tbl_account_log (username, description) VALUES (:username, :description)";
			$logStmt = $this->db->conn->prepare($logSql);
			$logStmt->execute([
				':username' => $_SESSION['username'],
				':description' => "Deleted child record with ID: " . $child_id
			]);

			return 1;
		} else {
			return 0;
		}
	}

	//Delete Child History
	public function DeleteChildHistory($record_id, $child_id)
	{
		try {
			//$sql = 'UPDATE tbl_child_history SET status = :status WHERE record_id = :record_id';
			$sql = 'UPDATE `tbl_child_history` SET `status` = `:status` WHERE `tbl_child_history`.`record_id` = :record_id';
			$stmt = $this->db->conn->prepare($sql);
			$r = $stmt->execute([
				':status' => 'deleted',
				':record_id' => $record_id
			]);

			if ($r) {
				$logSql = "INSERT INTO tbl_account_log (username, description) VALUES (:username, :description)";
				$logStmt = $this->db->conn->prepare($logSql);
				$logStmt->execute([
					':username' => $_SESSION['username'],
					':description' => "Deleted child $child_id history with ID: " . $record_id
				]);

				return 1;
			} else {
				return 0;
			}
		} catch (PDOException $e) {
			echo "Error: " . $e->getMessage();
			return 0;
		}
	}


	//Permanently Delete Child
	public function PermanentDeleteChild($child_id)
	{
		$sql = 'DELETE FROM tbl_children WHERE child_id=:child_id';
		$stmt = $this->db->conn->prepare($sql);
		$r = $stmt->execute([':child_id' => $child_id]);
		if ($r) {
			return 1;
		} else {
			return 0;
		}
	}

	public function importCSVFile($csvFilePath, $barangay, $municipality, $province, $region, $year, $latitude, $longitude, $rhu_id)
	{
		// Enable error reporting for debugging
		ini_set('display_errors', 1);
		ini_set('display_startup_errors', 1);
		error_reporting(E_ALL);

		// Open the CSV file for reading
		$file = fopen($csvFilePath, 'r');
		if (!$file) {
			die("Error: Could not open the file!");
		}

		// Get the file name from the file path
		$fileName = basename($csvFilePath);

		// Define abbreviation mappings for nutritional statuses
		$abbreviationMap = [
			'N'   => 'Normal',
			'OW'  => 'Overweight',
			'UW'  => 'Underweight',
			'SUW' => 'Severely Underweight',
			'T'   => 'Tall',
			'St'  => 'Stunted',
			'SSt' => 'Severely Stunted',
			'Ob'  => 'Obese',
			'MW'  => 'Wasted',
			'SW'  => 'Severely Wasted'
		];

		// Prepare SQL statement
		$placeholders = implode(',', array_fill(0, 21, '?'));
		$sql = "INSERT INTO tbl_children (purok, name_of_caregiver, name_of_child, belong_to_ip, sex, date_of_birth, date_last_measured, weight, height, age_by_months, nutritional_status_WFA, nutritional_status_HFA, nutritional_status_WFH, barangay, municipality, province, region, year, latitude, longitude, rhu_id) 
				VALUES ($placeholders)";
		$stmt = $this->db->conn->prepare($sql);

		// Helper function to capitalize each word correctly
		function capitalize($string)
		{
			return ucwords(strtolower($string));
		}

		// Read each row from the CSV file
		while (($row = fgetcsv($file)) !== false) {
			// Capitalize names
			$row[0] = capitalize($row[0]); // purok
			$row[1] = capitalize($row[1]); // name_of_caregiver
			$row[2] = capitalize($row[2]); // name_of_child

			// Store only the first letter for belong_to_ip
			$row[3] = strtoupper($row[3][0]);
			// Convert date format from DD/MM/YYYY to YYYY-MM-DD
			$row[5] = date("Y-m-d", strtotime(str_replace('/', '-', $row[5]))); // date_of_birth
			$row[6] = date("Y-m-d", strtotime(str_replace('/', '-', $row[6]))); // date_last_measured

			// Replace abbreviations with full words for the nutritional status columns
			if (isset($abbreviationMap[$row[10]])) {
				$row[10] = $abbreviationMap[$row[10]];  // nutritional_status_WFA
			}
			if (isset($abbreviationMap[$row[11]])) {
				$row[11] = $abbreviationMap[$row[11]];  // nutritional_status_HFA
			}
			if (isset($abbreviationMap[$row[12]])) {
				$row[12] = $abbreviationMap[$row[12]];  // nutritional_status_WFH
			}

			// Add location and year data
			$row[] = $barangay;
			$row[] = $municipality;
			$row[] = $province;
			$row[] = $region;
			$row[] = $year;
			$row[] = $latitude;
			$row[] = $longitude;
			$row[] = $rhu_id;


			// Execute prepared statement
			$stmt->execute($row);

			$child_id = $this->db->conn->lastInsertId();
			// Insert into child_history
			$sqlHistory = "INSERT INTO tbl_child_history (child_id, date_measured, age_in_months, weight, height, wfa, hfa, wfh) VALUES (:child_id, :date_measured, :age_by_months, :weight, :height, :wfa, :hfa, :wfh)";
			$stmtHistory = $this->db->conn->prepare($sqlHistory);
			$stmtHistory->execute([
				':child_id' => $child_id,
				':date_measured' => $row[6],
				':age_by_months' => $row[9],
				':weight' => $row[7],
				':height' => $row[8],
				':wfa' => $row[10],
				':hfa' => $row[11],
				':wfh' => $row[12]
			]);
		}

		// Close the CSV file
		fclose($file);

		// Log the action in tbl_account_log
		$logSql = "INSERT INTO tbl_account_log (username, description) VALUES (:username, :description)";
		$logStmt = $this->db->conn->prepare($logSql);
		$logStmt->execute([
			':username' => $_SESSION['username'],
			':description' => "Imported CSV file: " . $fileName
		]);


		return 1;
	}


	//get Barangay
	public function getBarangayByMunicipality($municipality)
	{
		$sql = 'SELECT barangay FROM tbl_address WHERE municipality = :municipality';
		$stmt = $this->db->conn->prepare($sql);
		$stmt->execute([':municipality' => $municipality]);
		$data = $stmt->fetchAll();
		return $data;
	}

	public function GetNumOfMunicipality()
	{
		$sql = 'SELECT * FROM tbl_address GROUP BY municipality';
		$stmt = $this->db->conn->prepare($sql);
		$stmt->execute();
		$data = $stmt->rowCount();
		return $data;
	}
	public function GetNumOfBarangay()
	{
		$sql = 'SELECT * FROM tbl_address';
		$stmt = $this->db->conn->prepare($sql);
		$stmt->execute();
		$data = $stmt->rowCount();
		return $data;
	}

	public function GetAllBarangay()
	{
		$sql = 'SELECT * FROM tbl_address';
		$stmt = $this->db->conn->prepare($sql);
		$stmt->execute();
		$data = $stmt->fetchAll();
		return $data;
	}

	public function CountBarangayByMunicipal($municipality)
	{
		$sql = 'SELECT COUNT("barangay") AS total FROM tbl_address WHERE municipality = :municipality';
		$stmt = $this->db->conn->prepare($sql);
		$stmt->execute([':municipality' => $municipality]);
		$data = $stmt->fetch(PDO::FETCH_OBJ);
		$r = $data->total;
		return $r;
	}


	public function RankChildCountByBarangay($municipality)
	{
		$sql = 'SELECT barangay, COUNT(*) AS child_count FROM tbl_children WHERE municipality = :municipality AND status = :status GROUP BY barangay ORDER BY child_count DESC';
		$stmt = $this->db->conn->prepare($sql);
		$stmt->execute([
			':municipality' => $municipality,
			':status' => 'activated',
		]);
		$data = $stmt->fetchAll();
		$t = $data;
		return $t;
	}

	public function RankChildCountByMunicipality()
	{
		$sql = 'SELECT municipality, COUNT(*) AS child_count FROM tbl_children WHERE status = :status GROUP BY municipality ORDER BY child_count DESC';
		$stmt = $this->db->conn->prepare($sql);
		$stmt->execute([':status' => 'activated']);
		$data = $stmt->fetchAll();
		$t = $data;
		return $t;
	}

	public function CountChildByNutriStatusByMunicipality($nutStatus, $value, $municipality)
	{
		$sql = 'SELECT COUNT(child_id) AS child_count FROM tbl_children WHERE ' . $nutStatus . ' = :value AND municipality = :municipality AND status = :status';
		$stmt = $this->db->conn->prepare($sql);
		$stmt->execute([
			':municipality' => $municipality,
			':value' => $value,
			':status' => 'activated',
		]);
		$data = $stmt->fetch(PDO::FETCH_OBJ);
		$t = $data->child_count;
		return $t;
	}

	public function CountChildByNutriStatus($nutstatus, $value)
	{
		$sql = 'SELECT COUNT(child_id) AS child_count FROM tbl_children WHERE ' . $nutstatus . ' = :value AND status = :status';
		$stmt = $this->db->conn->prepare($sql);
		$stmt->execute([
			':value' => $value,
			':status' => 'activated',
		]);
		$data = $stmt->fetch(PDO::FETCH_OBJ);
		$t = $data->child_count;
		return $t;
	}

	public function CountChildByNutriStatusByBarangay($nutstatus, $value, $value2, $muni)
	{
		$sql = 'SELECT barangay COUNT(child_id) AS child_count FROM tbl_children WHERE ' . $nutstatus . ' = :value OR' . $nutstatus . ' = :value2 AND municipality = :muni AND status = :status';
		$stmt = $this->db->conn->prepare($sql);
		$stmt->execute([
			':value' => $value,
			':value2' => $value2,
			':muni' => $muni,
			':status' => 'activated',
		]);
		$data = $stmt->fetch(PDO::FETCH_OBJ);
		$t = $data->child_count;
		return $t;
	}

	public function CountChildByNutriStatusByMuni($nutstatus, $value, $muni)
	{
		$sql = 'SELECT COUNT(child_id) AS child_count FROM tbl_children WHERE ' . $nutstatus . ' = :value AND municipality = :muni AND status = :status';
		$stmt = $this->db->conn->prepare($sql);
		$stmt->execute([
			':value' => $value,
			':muni' => $muni,
			':status' => 'activated',
		]);
		$data = $stmt->fetch(PDO::FETCH_OBJ);
		$t = $data->child_count;
		return $t;
	}

	public function ChildCountByMunicipality($muni)
	{
		$sql = 'SELECT COUNT(child_id) AS total FROM tbl_children WHERE municipality = :municipality AND status = :status';
		$stmt = $this->db->conn->prepare($sql);
		$stmt->execute([
			':municipality' => $muni,
			':status' => 'activated'
		]);
		$data = $stmt->fetch(PDO::FETCH_OBJ);
		$t = $data->total;
		return $t;
	}

	public function totalChildCount()
	{
		$sql = 'SELECT COUNT(child_id) AS total FROM tbl_children WHERE status = :status';
		$stmt = $this->db->conn->prepare($sql);
		$stmt->execute([':status' => 'activated']);
		$data = $stmt->fetch(PDO::FETCH_OBJ);
		$t = $data->total;
		return $t;
	}

	public function totalCount($table)
	{
		$sql = 'SELECT COUNT(' . $table . '_id) AS total FROM tbl_' . $table;
		$stmt = $this->db->conn->prepare($sql);
		$stmt->execute();
		$data = $stmt->fetch(PDO::FETCH_OBJ);
		$t = $data->total;
		return $t;
	}

	public function totalCountWithCondition($table, $condition, $value)
	{
		$sql = 'SELECT COUNT(' . $table . '_id) AS total FROM tbl_' . $table . ' WHERE ' . $condition . ' = :value';
		$stmt = $this->db->conn->prepare($sql);
		$stmt->execute([':value' => $value]);
		$data = $stmt->fetch(PDO::FETCH_OBJ);
		$t = $data->total;
		return $t;
	}

	public function GetAllMunicipality()
	{
		$sql = 'SELECT DISTINCT municipality FROM tbl_address';
		$stmt = $this->db->conn->prepare($sql);
		$stmt->execute();
		$data = $stmt->fetchAll();
		return $data;
	}

	public function GetAllBarangayAndMunicipality()
	{
		$sql = 'SELECT DISTINCT barangay, municipality FROM tbl_address';
		$stmt = $this->db->conn->prepare($sql);
		$stmt->execute();
		$data = $stmt->fetchAll();
		return $data;
	}

	public function AddAddress()
	{
		$sql = 'SELECT barangay FROM tbl_address GROUP BY psgc';
		$stmt = $this->db->conn->prepare($sql);
		$stmt->execute();
		$data = $stmt->rowCount();
		return $data;
	}

	public function importCSVAddress($csvFilePath)
	{
		try {
			$file = fopen($csvFilePath, 'r');

			//$header = fgetcsv($file);

			$fileName = basename($csvFilePath);

			$placeholders = implode(',', array_fill(0, 4, '?'));

			$sql = "INSERT INTO tbl_address ( municipality, muni_code, barangay, brgy_psgc ) VALUES ($placeholders)";
			$stmt = $this->db->conn->prepare($sql);
			while (($row = fgetcsv($file)) !== false) {
				$stmt->execute($row);
			}
			fclose($file);

			$logSql = "INSERT INTO tbl_account_log (username, description) VALUES (:username, :description)";
			$logStmt = $this->db->conn->prepare($logSql);
			$logStmt->execute([
				':username' => $_SESSION['username'],
				':description' => "Imported CSV file: " . $fileName
			]);

			return 1;
		} catch (Exception $e) {
			echo "Error:" . $e->getMessage();
		}
	}

	public function logLogoutAction($username)
	{
		$logSql = "INSERT INTO tbl_account_log (username, description) VALUES (:username, :description)";
		$logStmt = $this->db->conn->prepare($logSql);
		$logDescription = "Logged out";
		$r = $logStmt->execute([
			':username' => $username,
			':description' => $logDescription
		]);

		if ($r) {
			return 1;
		} else {
			return 0;
		}
	}

	// GET ALL AUDIT LOG
	public function GetAllAuditLog()
	{
		$sql = 'SELECT * FROM tbl_account_log ORDER BY log_id DESC';
		$stmt = $this->db->conn->prepare($sql);
		$stmt->execute();
		$data = $stmt->fetchAll();
		return $data;
	}

	public function generateToken($email)
	{

		$token = bin2hex(random_bytes(50));
		$expires_at = date('Y-m-d H:i:s', strtotime('+1 hour'));

		// Insert the reset request into the password_resets table
		$sql = 'INSERT INTO tbl_password_reset (email, token, expires_at) VALUES (:email, :token, :expires_at)';
		$stmt = $this->db->conn->prepare($sql);
		$r = $stmt->execute([
			':email' => $email,
			':token' => $token,
			':expires_at' => $expires_at
		]);

		if ($r) {

			$mail = new PHPMailer(true);

			$mail->isSMTP();                                    // Set mailer to use SMTP
			$mail->Host       = 'smtp.gmail.com';               // Specify main and backup SMTP servers
			$mail->SMTPAuth   = true;                           // Enable SMTP authentication
			$mail->Username   = 'mmsgsm07@gmail.com';         	// Your Gmail address
			$mail->Password   = 'czco tmqg ckfu ruxl';          // Your Gmail App Password (NOT your Gmail password)
			$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Enable TLS encryption
			$mail->Port       = 587;                            // TCP port to connect to


			// Recipients
			$mail->setFrom('no-reply@BPHO-MMSGSM.com', 'no-reply@MMSGSM');
			$mail->addAddress($email, ''); // Add recipient
			// $mail->addAddress('another@example.com');         // Add multiple recipients if needed

			//reset-link
			$reset_link = "localhost/malnutrition-monitoring-system/admin/reset-password.php?token=$token";
			// Content
			$mail->isHTML(true);                                // Set email format to HTML
			$mail->Subject = 'Password Reset Request';
			$mail->Body    = 'Please do not share this link to others. Click the link below to reset your password: ' . $reset_link;
			$mail->AltBody = 'This is the plain text version of the email content.';

			// Send email
			$r2 = $mail->send();

			$_SESSION['token'] = $token;

			if ($r2) {
				return 1;
			} else {
				return 2;
			}
		} else {
			return 0;
		}
	}

	public function resetPassword($data, $token)
	{
		$sql = 'SELECT reset_id FROM tbl_password_reset WHERE token =:token';
		$stmt = $this->db->conn->prepare($sql);
		$stmt->execute([
			':token' => $token,
		]);
		$getinfo = $stmt->fetch(PDO::FETCH_OBJ);
		if($getinfo) {
			
			$email = $getinfo->email;

			$password = $data['password'];
			// $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
			$HashedPassword = password_hash($password, PASSWORD_DEFAULT);

			$sql2 = 'UPDATE `tbl_admins` SET `password`=:password WHERE email=:email'; //query problem
			// $sql2 = 'UPDATE tbl_admins SET password =:password WHERE email=:email';
			$update = $this->db->conn->prepare($sql2);
			$u = $update->execute([
				':password' => $HashedPassword,
				':email' => $email,
			]);

			if ($u) {

				$sql3 = 'DELETE FROM tbl_password_reset WHERE `token` =:token';
				$delete = $this->db->conn->prepare($sql3);
				$d = $delete->execute([
					':token' => $token
				]);

				$logSql = "INSERT INTO tbl_account_log (username, description) VALUES (:username, :description)";
				$logStmt = $this->db->conn->prepare($logSql);
				$logStmt->execute([
					':username' => 'User',
					':description' => "Reset a password with email: " . $email,
				]);

				if ($d) {
					return 1;
				} else {
					return 2;
				}
			}
		} else {
			return 0;
		}
	}
}
