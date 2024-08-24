<?php

include '../../function.php';

include_once '../../session.php';
Session::init();
session_start();
if (isset($_SESSION["email"]));

class UploadFile extends Functions
{

	private $db;
	public function __construct()
	{
		$this->db = new conn();
	}

	public function UploadChildrenFile($data)
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
			':barangay' => $data['barangay'],
			':municipality' => $data['municipality'],
			':province' => $data['province'],
			':region' => $data['region'],
			':year' => $data['year'],
			':longtitude' => $data['longitude'],
			':latitude' => $data['latitude'],
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
}

$UploadFile = new UploadFile();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn-upload-children-file'])) {

	$flag = $UploadFile->UploadChildrenFile($_POST);
	if ($flag == 1) {
		Session::set("msg", "<div style='background-color: #9fdf9f; color:black; border: solid #9fdf9f 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-check'></i> A new Beneficiary has been added! </center> </div><br>");
	} else {
		Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Something went wrong! </center> </div><br>");
	}

	header("Location: children.php");
}
