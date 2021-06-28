<?php

session_start();
include_once "config.php";


$group = $_POST['type'];
if($group==1){
    $search = "A+";
}
else if($group==2){
    $search = "A-";
}
else if($group==3){
    $search = "B+";
}
else if($group==4){
    $search = "B-";
}
else if($group==5){
    $search = "AB+";
}
else if($group==6){
    $search = "AB-";
}
else if($group==7){
    $search = "O+";
}
else if($group==8){
    $search = "O-";
}


$sql = mysqli_query($conn, "SELECT * FROM blood WHERE bgroup = '{$search}'");
$output = " ";
if (mysqli_num_rows($sql) == 0) {
    
    $output .= "No donor available with that type right now";
} elseif (mysqli_num_rows($sql) > 0) {
    include "donordata.php";
}
echo $output;
