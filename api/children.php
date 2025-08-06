<?php
header('Content-Type: application/json');

require_once '../function.php'; // Include necessary functions
require_once '../session.php'; // Only if you want to check logged-in user
require_once '../rhu/classification-model/wfa.php'; // Include classification models
require_once '../rhu/classification-model/hfa.php'; // Include classification models
require_once '../rhu/classification-model/wfh.php'; // Include classification models

$function = new Functions();


$method = $_SERVER['REQUEST_METHOD'];
$input = json_decode(file_get_contents('php://input'), true);

switch ($method) {

   // 📌 GET - Fetch children
   case 'GET':
      if (isset($_GET['child_id'])) {
         $child = $function->GetChildInfo($_GET['child_id']);
         echo json_encode($child ?: ["error" => "Child not found"]);
      } else {
         $children = $function->getAllChildren();

         // Remove numeric keys
         $children_clean = array_map(function ($row) {
            return array_filter($row, 'is_string', ARRAY_FILTER_USE_KEY);
         }, $children);

         echo json_encode($children_clean);
      }
      break;

   case 'POST':
      $data = json_decode(file_get_contents('php://input'), true);

      // Map user-friendly keys to what addChild() expects
      $data['barangay_text'] = $data['barangay'] ?? null;
      $data['city_text'] = $data['municipality'] ?? null;
      $data['province_text'] = $data['province'] ?? null;
      $data['region_text'] = $data['region'] ?? null;

      // Validate required fields
      $required = [
         'purok',
         'name_of_caregiver',
         'name_of_child',
         'belong_to_ip',
         'sex',
         'date_of_birth',
         'date_last_measured',
         'weight',
         'height',
         'age_by_months',
         'barangay_text',
         'city_text',
         'province_text',
         'region_text',
         'year',
         'latitude',
         'longitude',
         'status'
      ];

      foreach ($required as $field) {
         if (!isset($data[$field]) || $data[$field] === '') {
            http_response_code(400);
            echo json_encode(["error" => "Missing required field: $field"]);
            exit;
         }
      }

      // Calculate classifications
      $wfa = weightForAge($data['age_by_months'], $data['sex'], $data['weight']);
      $hfa = heightForAge($data['age_by_months'], $data['sex'], $data['height']);
      $wfh = weightForHeight($data['weight'], $data['sex'], $data['height']);

      // TEMP fix for session username in API context
      if (!isset($_SESSION['username'])) {
         $_SESSION['username'] = "API_USER"; // Or from auth token later
      }

      $flag = $function->addChild($data, $wfa, $hfa, $wfh);

      if ($flag) {
         http_response_code(201);
         echo json_encode([
            "message" => "Child added successfully",
            "data" => array_merge($data, [
               "nutritional_status_WFA" => $wfa,
               "nutritional_status_HFA" => $hfa,
               "nutritional_status_WFH" => $wfh
            ])
         ]);
      } else {
         http_response_code(500);
         echo json_encode(["error" => "Failed to add child"]);
      }
      break;

   // 📌 PUT - Update child
   case 'PUT':
      // Read JSON body from php://input
      $data = json_decode(file_get_contents('php://input'), true);

      // Always prioritize URL param
      $child_id = isset($_GET['id']) ? trim($_GET['id']) : null;
      if (!$child_id && isset($data['child_id'])) {
         $child_id = trim($data['child_id']);
      }

      if (!$child_id) {
         http_response_code(400);
         echo json_encode(["error" => "Missing child_id"]);
         exit;
      }
      
      // Map incoming fields to what UpdateChild() expects
      $data['barangay_text'] = $data['barangay'] ?? null;
      $data['city_text'] = $data['municipality'] ?? null;
      $data['province_text'] = $data['province'] ?? null;
      $data['region_text'] = $data['region'] ?? null;

      // TEMP username for API
      if (!isset($_SESSION['username'])) {
         $_SESSION['username'] = "API_USER";
      }

      // Debug: Log input
      error_log("Updating child_id: " . $child_id);
      error_log("PUT data: " . print_r($data, true));

      // Calculate nutritional status
      $wfa = weightForAge($data['age_by_months'], $data['sex'], $data['weight']);
      $hfa = heightForAge($data['age_by_months'], $data['sex'], $data['height']);
      $wfh = weightForHeight($data['weight'], $data['sex'], $data['height']);

      // Call UpdateChild() from your functions
      $flag = $function->UpdateChild($data, $wfa, $hfa, $wfh, $child_id);

      if ($flag) {
         http_response_code(200);
         echo json_encode(["message" => "Child updated successfully", "child_id" => $child_id]);
      } else {
         http_response_code(500);
         echo json_encode(["error" => "Failed to update child"]);
      }
      break;



   // 📌 DELETE - Remove child
   case 'DELETE':
      // Get child_id from query string (?id=123)
      $child_id = $_GET['id'] ?? null;

      // Allow JSON body alternative
      if (!$child_id) {
         $data = json_decode(file_get_contents('php://input'), true);
         $child_id = $data['child_id'] ?? null;
      }

      if (!$child_id) {
         http_response_code(400);
         echo json_encode(["error" => "Missing child_id"]);
         exit;
      }

      // TEMP: Set username for API context (since $_SESSION might not exist)
      if (!isset($_SESSION['username'])) {
         $_SESSION['username'] = "API_USER";
      }

      $flag = $function->DeleteChild($child_id);

      if ($flag) {
         http_response_code(200);
         echo json_encode([
            "message" => "Child deleted successfully (status set to 'deleted')",
            "child_id" => $child_id
         ]);
      } else {
         http_response_code(500);
         echo json_encode(["error" => "Failed to delete child"]);
      }
      break;


   default:
      http_response_code(405);
      echo json_encode(["error" => "Method not allowed"]);
}
