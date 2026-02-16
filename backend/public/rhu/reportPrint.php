<?php
require_once('../packages/dompdf/autoload.inc.php');

use Dompdf\Dompdf;
use Dompdf\Options;

// Initialize Dompdf with options
$options = new Options();
$options->set('isRemoteEnabled', TRUE);
$dompdf = new Dompdf($options);

//Retrieve filter parameters from GET request
$filterCriteria = [
    'nutritional_status_WFA' => $_GET['nutritional_status_WFA'] ?? '',
    'nutritional_status_HFA' => $_GET['nutritional_status_HFA'] ?? '',
    'nutritional_status_WFH' => $_GET['nutritional_status_WFH'] ?? '',
    'sex' => $_GET['sex'] ?? '',
    'age_group' => $_GET['age_group'] ?? '',
    'barangay' => $_GET['barangay'] ?? '',
    'belong_to_ip' => $_GET['belong_to_ip'] ?? ''
];

//Construct the query string for report.php
$queryString = http_build_query($filterCriteria);

// Capture the filtered report data
ob_start();

//include 'report.php?'.$queryString;
include 'reportFilteredDataToPrint.php';

$html = ob_get_clean();

// Load the HTML content
$dompdf->loadHtml($html);

// Set paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream("Report.pdf", array("Attachment" => 1)); // Attachment 0 to view in browser
?>
