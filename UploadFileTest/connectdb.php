<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'malnutrition_monitoring_db';

$conn = new mysqli($hostname, $username, $password, $database);
if(!$conn){
 die ("Connection Error". mysqli_connect_error());
}else{
    echo "Connection Success <br>";
}

?>