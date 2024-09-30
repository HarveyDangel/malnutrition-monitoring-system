<?php


class ErrorHandler extends Functions
{

    private $db;
    public function __construct()
	{
		$this->db = new conn();
	}

    
    // public function emptyInputAddRhu($fname, $lname, $birthdate, $sex, $province, $municipality, $email, $username, $password, $rptpassword)
    // {
    //     if(empty($fname) || empty($lname) || empty($birthdate) || empty($sex) || empty($province) || empty($municipality) || empty($email) || empty($username) || empty($password) || empty($rptpassword) )
    //         {
    //         $result = true;
    //     } else {
    //         $result = false;
    //     }
    //     return $result;
    // }
    
    // public function emptyInputAddDoh($fname, $lname, $email, $username, $password, $rptpassword)
    // {
    //     if (empty($fname) || empty($lname) || empty($email) || empty($username) || empty($password) || empty($rptpassword)) {
    //         $result = true;
    //     } else {
    //         $result = false;
    //     }
    //     return $result;
    // }

    public function invalidUsername($username)
    {

        if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
            $result = true;
        } else {
            $result = false;
        }
        return $result;
    }

    public function invalidEmail($email)
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $result = true;
        } else {
            $result = false;
        }
        return $result;
    }

    public function passwordMatch($password, $rptpassword)
    {
        if ($password === $rptpassword) {
            $result = true;
        } else {
            $result = false;
        }
        return $result;
    }

    public function usernameTaken($username, $email)
    {
        $sql = "SELECT * FROM tbl_doh WHERE username = :username OR email = :email;";
		$stmt = $this->db->conn->prepare($sql);
		$stmt->execute([
			':username' => $username,
			':email' => $email
		]);

        $count = $stmt->rowCount();

        if($count === 1){
            $result = true;
        }
        else{
            $result = false;
        }
        return $result;
    }
}