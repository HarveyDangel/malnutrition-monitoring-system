<?php
include 'conn.php';

class Functions
{
	private $db;
	public function __construct()
	{
		$this->db = new conn();
	}
	//admin log in
	public function AdminLogin($username, $password)
	{
		// username and password sent from form 
		$sql = "SELECT * FROM tbl_admins WHERE username = :username AND password = :password";
		$stmt = $this->db->conn->prepare($sql);
		
		$stmt->execute(array(
			':username' => $username, 
			':password' => $password));
			
		$count = $stmt->rowCount();
		if ($count === 1) {
			$data = $stmt->fetch(PDO::FETCH_OBJ);
			$_SESSION['username'] =  $data->username;
			$_SESSION['role'] = $data->role;
			return 1;
		} else {
			return 0;
		}
	}
	//DOH login
	public function DOHLogin($username, $password)
	{
		// username and password from form 

		$sql = "SELECT * FROM tbl_doh WHERE doh_username = :username";
		$stmt = $this->db->conn->prepare($sql);
		$stmt->execute([':username' => $username]);
		$count = $stmt->rowCount();
		$result = 0;
		if ($count === 1) { 
			$data = $stmt->fetch(PDO::FETCH_OBJ);
			$hashedPassword = $data->doh_password;
			if(password_verify($password, $hashedPassword)){
				$_SESSION['username'] =  $data->username;
				$_SESSION['role'] = $data->role;
				$result =  1;
				return $result;
			}
			else{
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

		$sql = "SELECT * FROM tbl_pho WHERE username = :username";
		$stmt = $this->db->conn->prepare($sql);
		$stmt->execute([':username' => $username]);
		$count = $stmt->rowCount();
		$result = 0;
		if ($count === 1) { 
			$data = $stmt->fetch(PDO::FETCH_OBJ);
			$hashedPassword = $data->password;
			if(password_verify($password, $hashedPassword)){
				$_SESSION['username'] =  $data->username;
				$_SESSION['role'] = $data->role;
				$result = 1;
				return $result;
			}
			else{
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

		$sql = "SELECT * FROM tbl_rhu WHERE username = :username";
		$stmt = $this->db->conn->prepare($sql);
		$stmt->execute([':username' => $username]);
		$count = $stmt->rowCount();
		$result = 0;
		if ($count === 1) { 
			$data = $stmt->fetch(PDO::FETCH_OBJ);
			$hashedPassword = $data->password;
			if(password_verify($password, $hashedPassword)){
				$_SESSION['rhu_id'] =  $data->rhu_id;
				$_SESSION['username'] = $data->username;
				$_SESSION['role'] = $data->role;
				$_SESSION['municipality'] = $data->municipality;
				$result = 1;
				return $result;
			}
			else{
				$result = 2;
				return $result;
			}
		} else {
			return 0;	
		}
	}

	function generateToken(){
		$token = rand();
		return $token;
	}

	//Create DOH Account
	public function AddDOH($data)
	{
		$sql = "INSERT INTO tbl_doh (doh_fname, doh_lname, doh_email, doh_username, doh_password) VALUES (:fname, :lname, :email, :username, :password);";
		$password = $data['password'];
		$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

		$stmt = $this->db->conn->prepare($sql);
		$r = $stmt->execute([
			':fname' => $data["fname"],
			':lname' => $data["lname"],
			':email' => $data["email"],
			':username' => $data["username"],
			':password' => $hashedPassword
		]);
		if ($r) {
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
		$sql = 'UPDATE tbl_doh SET doh_fname=:fname, doh_lname=:lname, doh_email=:email, doh_username=:username, doh_password=:password WHERE doh_id = :doh_id';

		$HashedPassword = password_hash($data['password'], PASSWORD_DEFAULT);

		$stmt = $this->db->conn->prepare($sql);
		$r = $stmt->execute([
			':fname' => $data['fname'],
			':lname' => $data['lname'],
			':email' => $data['email'],
			':username' => $data['username'],
			':password' => $HashedPassword,
			':doh_id' => $doh_id
		]);
		if ($r) {
			return 1;
		} else {
			return 0;
		}
	}

	//Get all doh
	public function GetAllDOH()
	{
		$sql = 'SELECT * FROM tbl_doh ORDER BY doh_id ASC';
		$stmt = $this->db->conn->prepare($sql);
		$stmt->execute();
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
		$sql = 'SELECT * FROM tbl_rhu ORDER BY rhu_id ASC';
		$stmt = $this->db->conn->prepare($sql);
		$stmt->execute();
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
			return 1;
		} else {
			return 0;
		}
	}
	//Delete RHU
	public function DeleteRHU($rhu_id)
	{
		$sql = 'DELETE FROM tbl_rhu WHERE rhu_id=:rhu_id';
		$stmt = $this->db->conn->prepare($sql);
		$r = $stmt->execute([':rhu_id' => $rhu_id]);
		if ($r) {
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
			return 1;
		} else {
			return 0;
		}
	}
	// GET ALL PHO
	public function GetAllPHO()
	{
		$sql = 'SELECT * FROM tbl_pho ORDER BY pho_id ASC';
		$stmt = $this->db->conn->prepare($sql);
		$stmt->execute();
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

	//Delete User
	public function DeletePHO($pho_id)
	{
		$sql = 'DELETE FROM tbl_pho WHERE pho_id=:pho_id';
		$stmt = $this->db->conn->prepare($sql);
		$r = $stmt->execute([':pho_id' => $pho_id]);
		if ($r) {
			return 1;
		} else {
			return 0;
		}
	}

	//add child
	public function addChild($data)
	{
		$sql = "INSERT INTO tbl_children ( purok, name_of_caregiver, name_of_child, belong_to_ip, sex, date_of_birth, date_last_measured, weight, height, age_by_months, nutritional_status_WFA, nutritional_status_HFA, nutritional_status_WFH, barangay, municipality, province, region, year, rhu_id ) VALUES (:purok, :name_of_caregiver, :name_of_child, :belong_to_ip, :sex, :date_of_birth, :date_last_measured, :weight, :height, :age_by_months,  :nutritional_status_WFA, :nutritional_status_HFA, :nutritional_status_WFH, :barangay, :municipality, :province, :region, :year, :rhu_id)";


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
			':nutritional_status_WFA' => $data['nutritional_status_WFA'],
			':nutritional_status_HFA' => $data['nutritional_status_HFA'],
			':nutritional_status_WFH' => $data['nutritional_status_WFH'],
			':barangay' => $data['barangay'],
			':municipality' => $data['municipality'],
			':province' => $data['province'],
			':region' => $data['region'],
			':year' => $data['year'],
			':rhu_id' => $data['rhu_id'],
		]);

		if ($r) {
			// success!!!
			return 1;
		} else {
			// somthing wrong with queries
			return 0;
		}
	}

	//Read All Children by Municipality
	public function GetAllChildrenByMunicipality($municipality)
	{
		$sql = 'SELECT * FROM tbl_children WHERE municipality = :municipality ORDER BY child_id ASC';
		$stmt = $this->db->conn->prepare($sql);
		$stmt->execute([':municipality' => $municipality]);
		$data = $stmt->fetchAll();
		return $data;		
	}
	//Read All Children
	public function GetAllChildren()
	{
		$sql = 'SELECT * FROM tbl_children ORDER BY child_id ASC';
		$stmt = $this->db->conn->prepare($sql);
		$stmt->execute();
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
	
	//Read Only Beneficiary
	public function GetChildHistory($child_id)
	{
		$sql = 'SELECT * FROM tbl_child_history WHERE child_id=:child_id';
		$stmt = $this->db->conn->prepare($sql);
		$stmt->execute([':child_id' => $child_id]);
		$data = $stmt->fetch(PDO::FETCH_OBJ);
		return $data;
	}

	//Update Child
	public function UpdateChild($data, $child_id)
	{
		$sql = 'UPDATE tbl_children SET purok=:purok, name_of_caregiver=:name_of_caregiver, name_of_child=:name_of_child, belong_to_ip=:belong_to_ip, sex=:sex, date_of_birth=:date_of_birth, date_last_measured=:date_last_measured, weight=:weight, height=:height, age_by_months=:age_by_months, nutritional_status_WFA=:nutritional_status_WFA, nutritional_status_HFA=:nutritional_status_HFA, nutritional_status_WFH=:nutritional_status_WFH, barangay=:barangay, municipality=:municipality, province=:province, region=:region, year=:year, rhu_id=:rhu_id WHERE child_id=:child_id';

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
			':nutritional_status_WFA' => $data['nutritional_status_WFA'],
			':nutritional_status_HFA' => $data['nutritional_status_HFA'],
			':nutritional_status_WFH' => $data['nutritional_status_WFH'],
			':barangay' => $data['barangay'],
			':municipality' => $data['municipality'],
			':province' => $data['province'],
			':region' => $data['region'],
			':year' => $data['year'],
			':rhu_id' => $data['rhu_id'],
			':child_id' => $child_id,
		]);

		if ($r) {
			// success!!!
			return 1;
		} else {
			// somthing wrong with queries
			return 0;
		}
	}

	//Delete Child
	public function DeleteChild($child_id)
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

	public function GetAllMunicipality()
	{
		$sql = 'SELECT COUNT(DISTINCT municipality) * FROM tbl_children';
		$stmt = $this->db->conn->prepare($sql);
		$stmt->execute();
		$data = $stmt->fetchAll();
		return $data;
	}
	public function GetAllBarangay()
	{
		$sql = 'SELECT COUNT(DISTINCT barangay) * FROM tbl_children GROUP BY municipality';
		$stmt = $this->db->conn->prepare($sql);
		$stmt->execute();
		$data = $stmt->fetchAll();
		return $data;
	}
}

