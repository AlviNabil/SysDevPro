<?php

session_start();
include_once "config.php";
$outgoing_id = $_SESSION['unique_id'];



$sql = mysqli_query($conn, "SELECT * FROM appointment WHERE doctor_id ={$outgoing_id} ");
$output = " ";
if (mysqli_num_rows($sql) == 0) {
    
    $output .= "No appointments yet";
    
} elseif (mysqli_num_rows($sql) > 0) {
    include "appointmentlistdata.php";
}
echo $output;



