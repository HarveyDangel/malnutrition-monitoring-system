
<?php
include "connectdb.php";
echo '<table border="1">';
$start_row = 1;
$insertquery =
    "INSERT INTO tbl_children ( purok, name_of_caregiver, name_of_child, belong_to_ip, sex, date_of_birth, date_last_measured, weight, height, age_by_months, nutritional_status_WFA, nutritional_status_HFA, nutritional_status_WFH) VALUES";
$subquery = "";
date_default_timezone_set("Asia/Qatar");
if (($csv_file = fopen("testFile.csv", "r")) !== false) {
    $temp_count = 0;
    while (($read_data = fgetcsv($csv_file, 1000, ",")) !== false) {
        $column_count = count($read_data);
        $subquery = $subquery . " (";
        $temp_count++;
        echo "<tr>";
        $start_row++;
        for ($c = 0; $c < $column_count; $c++) {
           // echo "<td>" . $read_data[$c] . "</td>";
            $subquery = $subquery . '\'' . $read_data[$c] . '\',';
        }
        echo "</tr>";
        //$date = date("m/d/Y h:i:s a", time());
        //$subquery = $subquery . '\'' . $date . '\'';
        $subquery = substr($subquery, 0, strlen($subquery) - 2);
        $subquery = $subquery . '\')' . " , ";
        if ($temp_count % 10 == 0) {
            $insertquery = $insertquery . $subquery;
            $insertquery = substr($insertquery, 0, strlen($insertquery) - 2);
            // echo $insertquery.'<br><br><br>';
            if (mysqli_query($conn, $insertquery)) {
                //  echo "<br>New record created successfully - ".$temp_count;
                $insertquery =
                    "INSERT INTO tbl_children ( purok, name_of_caregiver, name_of_child, belong_to_ip, sex, date_of_birth, date_last_measured, weight, height, age_by_months, nutritional_status_WFA, nutritional_status_HFA, nutritional_status_WFH) VALUES";
                $subquery = "";
            } else {
                echo "Error: " . mysqli_error($conn);
            }
        }
    }
    // echo $insertquery;
    fclose($csv_file);
    mysqli_close($conn);
}
echo "</table>";
?>

