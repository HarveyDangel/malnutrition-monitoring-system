<?php

require_once __DIR__ . '/../core/conn.php';

class User
{

   private $db;

   public function __construct()
   {
      $this->db = Conn::getInstance()->getConnection();
   }

   // public function getAllUser() {
   //    $stmt = $this->db->query('SELECT * FROM tbl_rhu');
   //    return $stmt->fetchAll(PDO::FETCH_ASSOC);
   // }

   public function findByEmail($email)
   {
      $sql = 'SELECT * FROM tbl_rhu WHERE email = :email LIMIT 1';
      $stmt = $this->db->prepare($sql);
      $stmt->execute([':email' => $email]);
      return $stmt->fetch(PDO::FETCH_ASSOC);
   }

   public function createUser($data)
   {
      $hashed = password_hash($data['password'], PASSWORD_BCRYPT);
      $sql = "INSERT INTO tbl_rhu (fname, mname, lname, suffix, birthdate, sex, province, municipality, email, username, password ) VALUES (:fname, :mname, :lname, :suffix, :birthdate, :sex, :province, :municipality, :email, :username, :password)";
      $stmt = $this->db->prepare($sql);
      return $stmt->execute([
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
         ':password' => $hashed
      ]);
   }

}

?>