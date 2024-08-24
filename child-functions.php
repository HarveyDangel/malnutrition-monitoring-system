<?php

class ChildFunctions extends Functions{

    private $db;
    public function __construct()
	{
		$this->db = new conn();
	}
    
    //Add child
	public function addChild($data)
	{

		$sql = "INSERT INTO tbl_children (
			purok, 
			name_of_caregiver, 
			name_of_child, 
			belong_to_ip, 
			sex, 
			date_of_birth, 
			date_last_measured, 
			date_measured, 
			age_in_months, 
			barangay, 
			municipality, 
			province, 
			region, 
			year,
			longitute,
			latitude,
			user_id   
			VALUES (
				:purok, 
				:name_of_caregiver, 
				:name_of_child, 
				:belong_to_ip, 
				:sex, 
				:date_of_birth, 
				:date_last_measured, 
				:age_in_months, 
				:barangay, 
				:municipality, 
				:province, 
				:region, 
				:year, 
				:longitute, 
				:latitude, 
				:user_id)";
		$stmt = $this->db->conn->prepare($sql);
		$r = $stmt->execute([
			':purok' => $data['purok'],
			':name_of_cargiver' => $data['name_of_caregiver'],
			':name_of_child' => $data['name_of_child'],
			':belong_to_ip' => $data['belong_to_ip'],
			':sex' => $data['sex'],
			':date_of_birth' => $data['date_of_birth'],
			':date_last_measured' => $data['date_last_measured'],
			':age_in_months' => $data['age_in_months'],
			':year' => $data['year'],
			':longtitude' => $data['latitude'],
			':user_id' => $data['user_id'],
		]);

		if ($r) {
			// success!!!
			return 1;
		} else {
			// somthing wrong with queries
			return 0;
		}
	}

	//Read All Beneficiary
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
	public function GetChildRecords($child_id)
	{
		$sql = 'SELECT * FROM tbl_children_records WHERE child_id=:child_id';
		$stmt = $this->db->conn->prepare($sql);
		$stmt->execute([':child_id' => $child_id]);
		$data = $stmt->fetch(PDO::FETCH_OBJ);
		return $data;
	}


	//Update User
	public function UpdateChild($data, $beneficiary_id)
	{
		$sql = 'UPDATE tbl_beneficiaries SET 
		b_firstname=:b_firstname, 
		b_middlename=:b_middlename, 
		b_lastname=:b_lastname, 
		suffix=:suffix, 
		age_by_months=:age_by_months, 
		gender=:gender, 
		birthdate=:birthdate, 
		weight=:weight, 
		height=:height, 
		date_measured=:date_measured, 
		bmi=:bmi, 
		nutritional_status=:nutritional_status, 
		province=:province, 
		municipality=:municipality, 
		barangay=:barangay, 
		p_firstname=:p_firstname, 
		p_middlename=:p_middlename, 
		p_lastname=:p_lastname, 
		p_suffix=:p_suffix, 
		p_age=:p_age, 
		p_gender=:p_gender, 
		p_occupation=:p_occupation 
		WHERE beneficiary_id = :beneficiary_id';


		$stmt = $this->db->conn->prepare($sql);
		$r = $stmt->execute([
			':b_firstname' => $data['b_firstname'],
			':b_middlename' => $data['b_middlename'],
			':b_lastname' => $data['b_lastname'],
			':suffix' => $data['suffix'],

			':age_by_months' => $data['age_by_months'],
			':gender' => $data['gender'],
			':birthdate' => $data['birthdate'],

			':weight' => $data['weight'],
			':height' => $data['height'],
			':date_measured' => $data['date_measured'],
			':bmi' => $data['bmi'],
			':nutritional_status' => $data['nutritional_status'],

			':province' => $data['province'],
			':municipality' => $data['municipality'],
			':barangay' => $data['barangay'],

			':p_firstname' => $data['p_firstname'],
			':p_middlename' => $data['p_middlename'],
			':p_lastname' => $data['p_lastname'],
			':p_suffix' => $data['p_suffix'],
			':p_age' => $data['p_age'],
			':p_gender' => $data['p_gender'],
			':p_occupation' => $data['p_occupation'],
			':beneficiary_id' => $beneficiary_id
		]);
		if ($r) {
			return 1;
		} else {
			return 0;
		}
	}

	//Delete Beneficiary
	public function DeleteChild($beneficiary_id)
	{
		$sql = 'DELETE FROM tbl_beneficiaries WHERE beneficiary_id=:beneficiary_id';
		$stmt = $this->db->conn->prepare($sql);
		$r = $stmt->execute([':beneficiary_id' => $beneficiary_id]);
		if ($r) {
			return 1;
		} else {
			return 0;
		}
	}

	public function GetAllMunicipality()
	{
		$sql = 'SELECT * FROM municipality ORDER BY municipal_id ASC';
		$stmt = $this->db->conn->prepare($sql);
		$stmt->execute();
		$data = $stmt->fetchAll();
		return $data;
	}
}

?>