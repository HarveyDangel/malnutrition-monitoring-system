<?php

require_once __DIR__ . '/../core/conn.php';

class Child
{

   private $db;

   public function __construct()
   {
      $this->db = Conn::getInstance()->getConnection();
   }

   public function getAllChild()
   {
      $sql = 'SELECT * FROM tbl_children WHERE status = :status ORDER BY child_id ASC';
      $stmt = $this->db->prepare($sql);  
      $stmt->execute([':status' => 'activated']);
      $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
      return $data ?: null;
   }

   public function getChildById($id)
   {
      $sql = 'SELECT * FROM tbl_children WHERE child_id = :child_id';
      $stmt = $this->db->prepare($sql);
      $stmt->execute([':child_id' => $id]);
      $data = $stmt->fetch(PDO::FETCH_OBJ);
      return $data ?: null;
   }

   public function addChild () {
      
   }
}

?>