<?php

session_start();
include_once "config.php";


$sql = mysqli_query($conn, "SELECT * FROM blood");
$output = " ";
if (mysqli_num_rows($sql) == 0) {
    
    $output .= "No users are available to chat";
} elseif (mysqli_num_rows($sql) > 0) {
    include "donordata.php";
}
echo $output;
