<?php

session_start();
include_once "config.php";

$outgoing_id = $_SESSION['unique_id'];
$sql = mysqli_query($conn, "SELECT * FROM doctor");
$output = " ";
if (mysqli_num_rows($sql) == 0) {
    
    $output .= "No users are available to chat";
} elseif (mysqli_num_rows($sql) > 0) {
    include "doctordata.php";
}
echo $output;
