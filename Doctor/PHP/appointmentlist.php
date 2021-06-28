<?php

session_start();
include_once "config.php";
$outgoing_id = $_SESSION['unique_id'];

$date = $_POST['date'];
// date_default_timezone_set('Asia/Dhaka');
// $date = date("Y-m-d");
$sql = mysqli_query($conn, "SELECT * FROM appointment WHERE doctor_id ={$outgoing_id} and date = '{$date}' ");
$output = " ";
if (mysqli_num_rows($sql) == 0) {
    
    $output .= "No appointments on $date";
    
} elseif (mysqli_num_rows($sql) > 0) {
    include "appointmentlistdata.php";
}
echo $output;



