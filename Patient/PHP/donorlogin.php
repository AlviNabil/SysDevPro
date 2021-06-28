<?php

session_start();
include_once "config.php";
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);


if (!empty($email) && !empty($password)) {
    $sql = mysqli_query($conn, "SELECT * FROM blood WHERE  email = '{$email}' AND password = '{$password}' ");
    if (mysqli_num_rows($sql) > 0) {
        $row = mysqli_fetch_assoc($sql);
        echo "success";
    } else {
        echo "Invalid email or password";
    }
} else {
    echo "All input fields are required";
}
