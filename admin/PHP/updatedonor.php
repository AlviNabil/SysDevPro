<?php
session_start();

include_once  "config.php";
$fname = mysqli_real_escape_string($conn, $_POST['fname']);
$lname = mysqli_real_escape_string($conn, $_POST['lname']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$address = mysqli_real_escape_string($conn, $_POST['address']);
$phonenumber = mysqli_real_escape_string($conn, $_POST['phonenumber']);
$gender = mysqli_real_escape_string($conn, $_POST['gender']);
$age = mysqli_real_escape_string($conn, $_POST['age']);
$bgroup = mysqli_real_escape_string($conn, $_POST['bgroup']);
$l_date = mysqli_real_escape_string($conn, $_POST['l_date']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$user_id = mysqli_real_escape_string($conn, $_POST['user_id']);


// print_r(mysqli_query($conn, "SELECT * FROM users WHERE fname=$fname"));



if (!empty($fname) && !empty($lname) && !empty($email) && !empty($password) && !empty($phonenumber) && !empty($age) && !empty($address)) {

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        //all the users data insertion in the sql table
        $sql2 = mysqli_query($conn, "UPDATE blood 
                                                SET fname = '{$fname}',
                                                    lname = '{$lname}',
                                                    email = '{$email}',
                                                    password = '{$password}',
                                                    address = '{$address}',
                                                    gender = '{$gender}',
                                                    phonenumber = {$phonenumber},
                                                    age = {$age},
                                                    bgroup = '{$bgroup}',
                                                    l_date = '{$l_date}'



                                                    WHERE b_id = {$user_id}");


        if ($sql2) {
            $sql3 = mysqli_query($conn, "SELECT * FROM blood WHERE email = '{$email}'");
            if (mysqli_num_rows($sql3) > 0) {
                $row = mysqli_fetch_assoc($sql3);
                echo "Update succeded";
            }
        } else {
            echo "Something went wrong";
        }
    } else {
        echo "$email - this is not valid!";
    }
} else {
    echo "All input field are required";
}
