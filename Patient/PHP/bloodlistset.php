<?php
    session_start();

    include_once  "config.php";
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $age = mysqli_real_escape_string($conn, $_POST['age']);
    $phonenumber = mysqli_real_escape_string($conn, $_POST['phonenumber']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);
    $group = mysqli_real_escape_string($conn, $_POST['group']);
   
    

    // print_r(mysqli_query($conn, "SELECT * FROM users WHERE fname=$fname"));
    
    

    if(!empty($fname) && !empty($lname) && !empty($email) && !empty($address) && !empty($date) && !empty($gender) && !empty($age) && !empty($address) && !empty($group) && !empty($password)){
       
        
        $sql = mysqli_query($conn, "SELECT * FROM blood WHERE email = '{$email}' ");
        if(mysqli_num_rows($sql)>0){
            echo "This email is already taken";
        }
        else{
            $sql2 = mysqli_query($conn, "INSERT INTO blood  (fname, lname, email, password, address , gender, age, phonenumber, l_date , bgroup  )
                                        VALUES('{$fname}','{$lname}', '{$email}','{$password}',  '{$address}','{$gender}', {$age}, {$phonenumber} , '{$date}', '{$group}' )");
            
            echo "Data Saved Successfully";
                            
        }
        
    }
    else{
        echo "All input field are required";
    }

?>
