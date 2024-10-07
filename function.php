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
				$result = 1;
				return $result;
			} else {
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
			return 1;
		} else {
			return 0;
		}
	}

	//DOH login
	public function DOHLogin($username, $password)
	{
		// username and password from form 

		$sql = "SELECT * FROM tbl_doh WHERE username = :username";
		$stmt = $this->db->conn->prepare($sql);
		$stmt->execute([':username' => $username]);
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
				$result =  1;
				return $result;
			} else {
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
			if (password_verify($password, $hashedPassword)) {
				$_SESSION['pho_id'] =  $data->pho_id;
				$_SESSION['username'] =  $data->username;
				$_SESSION['role'] = $data->role;
				$result = 1;
				return $result;
			} else {
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
			if (password_verify($password, $hashedPassword)) {
				$_SESSION['rhu_id'] =  $data->rhu_id;
				$_SESSION['username'] = $data->username;
				$_SESSION['role'] = $data->role;
				$_SESSION['municipality'] = $data->municipality;
				$result = 1;
				return $result;
			} else {
				$result = 2;
				return $result;
			}
		} else {
			return 0;
		}
	}

	function generateToken()
	{
		$token = rand();
		return $token;
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
	public function addChild($data, $wfa, $hfa, $wfh)
	{
		$sql = "INSERT INTO tbl_children ( purok, name_of_caregiver, name_of_child, belong_to_ip, sex, date_of_birth, date_last_measured, weight, height, age_by_months, nutritional_status_WFA, nutritional_status_HFA, nutritional_status_WFH, barangay, municipality, province, region, year, latitude, longitude, rhu_id ) VALUES (:purok, :name_of_caregiver, :name_of_child, :belong_to_ip, :sex, :date_of_birth, :date_last_measured, :weight, :height, :age_by_months,  :nutritional_status_WFA, :nutritional_status_HFA, :nutritional_status_WFH, :barangay, :municipality, :province, :region, :year, :latitude, :longitude, :rhu_id)";

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

	//Read Child History
	public function GetChildHistory($child_id)
	{
		$sql = 'SELECT * FROM tbl_child_history WHERE child_id=:child_id';
		$stmt = $this->db->conn->prepare($sql);
		$stmt->execute([':child_id' => $child_id]);
		$data = $stmt->fetch(PDO::FETCH_OBJ);
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
			':barangay' => $data['barangay_text'],
			':municipality' => $data['city_text'],
			':province' => $data['province_text'],
			':region' => $data['region_text'],
			':year' => $data['year'],
			':latitude' => $data['latitude'],
			':longitude' => $data['longitude'],
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

	//generate report
	//count number of recorded child by Municipal and Barangay 0-59 months old
	public function GetNumberOfRecordedChildren($municipality, $barangay)
	{
		$sql = 'SELECT FROM tbl_children COUNT child_id WHERE municipality = :municipality AND barangay = :barangay AND age_by_months < 59';

		$stmt = $this->db->conn->prepare($sql);
		$stmt->execute([
			':municipality' => $municipality,
			':barangay' => $barangay,
		]);
		$numOfRecordedChildren = $stmt->fetch(PDO::FETCH_OBJ);
		return $numOfRecordedChildren;
	}

	public function GetEstimatedPopulation()
	{
		$sql = 'SELECT FROM tbl_address ORDER BY psgc ASC';

		$stmt = $this->db->conn->prepare($sql);
		$stmt->execute();
		$data = $stmt->fetchAll();
		return $data;
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

	public function importCSVFile($csvFilePath, $barangay, $municipality, $province, $region, $year)
	{
		try {
		$file = fopen($csvFilePath, 'r');
		
		//$header = fgetcsv($file);

		$placeholders = implode(',', array_fill(0, 18, '?'));

		$sql = "INSERT INTO tbl_children ( purok, name_of_caregiver, name_of_child, belong_to_ip, sex, date_of_birth, date_last_measured, weight, height, age_by_months, nutritional_status_WFA, nutritional_status_HFA, nutritional_status_WFH, barangay, municipality, province, region, year ) VALUES ($placeholders)";
		$stmt = $this->db->conn->prepare($sql);
		while (($row = fgetcsv($file)) !== false) 
			{
				$row[] = $barangay;
				$row[] = $municipality;
				$row[] = $province;
				$row[] = $region;
				$row[] = $year;
				$stmt->execute($row);
			}
		fclose($file);
			return 1;
		} catch (Exception $e) {
			echo "Error:". $e->getMessage();
		}
	}

	//get Barangay
	public function getBarangayByMunicipality($municipality)
	{
		$sql = 'SELECT barangay FROM tbl_children WHERE municipality = :municipality';
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
	public function GetAllMunicipality()
	{
		$sql = 'SELECT DISTINCT municipality FROM tbl_address';
		$stmt = $this->db->conn->prepare($sql);
		$stmt->execute();
		$data = $stmt->fetchAll();
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

	public function CountBarangayByMunicipal($municipality){
		$sql = 'SELECT COUNT("barangay") AS total FROM tbl_address WHERE municipality = :municipality';
		$stmt = $this->db->conn->prepare($sql);
		$stmt->execute([':municipality' => $municipality]);
		$data = $stmt->fetch(PDO::FETCH_OBJ);
		$r = $data->total;
		return $r;
	}

	public function totalCount($table){
		$sql = 'SELECT COUNT('.$table.'_id) AS total FROM tbl_'.$table;
		$stmt = $this->db->conn->prepare($sql);
		$stmt->execute();
		$data = $stmt->fetch(PDO::FETCH_OBJ);
		$t = $data->total;
		return $t;
	}
	public function totalCountWithCondition($table, $condition, $value){
		$sql = 'SELECT COUNT('.$table.'_id) AS total FROM tbl_'.$table.'WHERE'.$condition.'='.$value;
		$stmt = $this->db->conn->prepare($sql);
		$stmt->execute();
		$data = $stmt->fetch(PDO::FETCH_OBJ);
		$t = $data->total;
		return $t;
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

		$placeholders = implode(',', array_fill(0, 4, '?'));

		$sql = "INSERT INTO tbl_address ( municipality, muni_code, barangay, brgy_psgc ) VALUES ($placeholders)";
		$stmt = $this->db->conn->prepare($sql);
		while (($row = fgetcsv($file)) !== false) 
			{
				$stmt->execute($row);
			}
		fclose($file);
			return 1;
		} catch (Exception $e) {
			echo "Error:". $e->getMessage();
		}
	}
}
