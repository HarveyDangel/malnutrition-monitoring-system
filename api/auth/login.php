<?php

require_once '../../core/function.php';
header('Content-Type: application/json');

$function = new Functions();

// Parse JSON body
$data = json_decode(file_get_contents('php://input'), true);
$role = strtolower(trim($data['role'] ?? ''));
$username = trim($data['username'] ?? '');
$password = trim($data['password'] ?? '');
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// Validate input
if (!$role || !$username || !$password) {
    http_response_code(400);
    echo json_encode(["error" => "Role, username, and password are required"]);
    exit;
}

if (!isset($roleTableMap[$role])) {
    http_response_code(400);
    echo json_encode(["error" => "Invalid role"]);
    exit;
}

$flag = $function->MultiLogin($data, $roleTableMap, $role, $username, $hashedPassword);
// Query the correct table
$sql = "SELECT * FROM {$roleTableMap[$role]} WHERE username = :username LIMIT 1";
$stmt = $this->db->conn->prepare($sql);
$stmt->execute([':username' => $username]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$user || !password_verify($password, $user['password'])) {
    http_response_code(401);
    echo json_encode(["error" => "Invalid username or password"]);
    exit;
}

// Generate token
$token = bin2hex(random_bytes(32)); // 64-character random string

// Store token in common table
$sqlToken = "INSERT INTO tbl_api_tokens (username, role, token) VALUES (:username, :role, :token)";
$stmtToken = $this->db->conn->prepare($sqlToken);
$stmtToken->execute([
    ':username' => $username,
    ':role' => $role,
    ':token' => $token
]);

echo json_encode([
    "message" => "Login successful",
    "role" => $role,
    "token" => $token
]);
