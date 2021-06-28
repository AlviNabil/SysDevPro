<?php
    session_start();

    include_once  "config.php";
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $age = mysqli_real_escape_string($conn, $_POST['age']);
    $phonenumber = mysqli_real_escape_string($conn, $_POST['phonenumber']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);
    $time = mysqli_real_escape_string($conn, $_POST['time']);
    $doctor_id = mysqli_real_escape_string($conn, $_POST['doctor_id']);
    $patient_id = mysqli_real_escape_string($conn, $_POST['patient_id']);
    

    // print_r(mysqli_query($conn, "SELECT * FROM users WHERE fname=$fname"));
    
    

    if(!empty($fname) && !empty($lname) && !empty($email) && !empty($address) && !empty($date) && !empty($time) && !empty($gender) && !empty($age) && !empty($phonenumber) && !empty($address)){
       
        
        $sql = mysqli_query($conn, "SELECT * FROM appointment WHERE date = '{$date}' AND time = $time");
        if(mysqli_num_rows($sql)>0){
            echo "Time is booked, Select another time";
        }
        else{
            $sql2 = mysqli_query($conn, "INSERT INTO appointment (fname, lname, email, address , gender, age, phonenumber, date , time, doctor_id, patient_id  )
                                        VALUES('{$fname}','{$lname}', '{$email}',  '{$address}','{$gender}', {$age}, {$phonenumber} , '{$date}', {$time}, '{$doctor_id}', '{$patient_id}' )");
            
            echo "Appointment Set Successfully";
                            
        }
        
    }
    else{
        echo "All input field are required";
    }

?>
