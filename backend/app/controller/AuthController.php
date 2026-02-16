<?php

require_once __DIR__ . '/../model/User.php';

class AuthController
{

   private $userModel;

   public function __construct()
   {
      $this->userModel = new User();

      if (session_status() === PHP_SESSION_NONE) {
         session_start();
      }
   }

   public function login($data)
   {
      $email = strip_tags($data['email']);
      $password = strip_tags($data['password']);

      $user = $this->userModel->findByEmail($email);

      if ($user && password_verify($password, $user['password'])) {
         $_SESSION['rhu_id'] = $user['rhu_id'];
         $_SESSION['email'] = $user['email'];

         header("Location: index?id=" . $_SESSION['rhu_id']);

         // return json_encode([
         //    'status' => 'success',
         //    'message' => 'Login successful',
         //    'user' => ['id' => $user['id'], 'email' => $user['email']]
         // ]);
      }
      return json_encode([
         'status' => 'error',
         'message' => 'Invalid credentials'
      ]);
   }

   public function register($data)
   {
      if ($this->userModel->findByEmail($data['email'])) {
         return ['status' => 'error', 'message' => 'Email already registered'];
      }
      $this->userModel->createUser($data);
      return ['status' => 'success', 'message' => 'User registered'];

   }

   public function logout()
   {
      session_destroy();
      return json_encode([
         'status' => 'success',
         'message' => 'Logged out'
      ]);
   }

   public function checkAuth()
   {
      if (isset($_SESSION['user_id'])) {
         return json_encode([
            'status' => 'authenticated',
            'user' => ['id' => $_SESSION['user_id'], 'email' => $_SESSION['email']]
         ]);
      } else {
         return json_encode(['status' => 'unauthenticated']);
      }
   }
}
?>