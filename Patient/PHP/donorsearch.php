<?php
    session_start();
    include_once "config.php";
    $outgoing_id = $_SESSION['unique_id'];

    $searchTerm = $_POST['searchTerm'];
    

    $output = "";
    // echo $group;
    echo $searchTerm;
    $sql = mysqli_query($conn, "SELECT * FROM blood WHERE (bgroup LIKE '%{$searchTerm}%')  ");

    if(mysqli_num_rows($sql)>0){
        include "donordata.php";
    }
    else{
        $output .= "No such user found";
    }
    // echo $searchTerm;
    echo $output;

?>