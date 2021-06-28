<?php
    session_start();

    include_once  "config.php";
    $date = mysqli_real_escape_string($conn, $_POST['date']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);

    // print_r(mysqli_query($conn, "SELECT * FROM users WHERE fname=$fname"));
    
    

    if(!empty($date)){
            $sql2 = mysqli_query($conn, "UPDATE blood 
                                                SET l_date = '{$date}'
                                               
                                                    WHERE email = '{$email}' ");
            
            echo "Success";
                            
        
        
    }
    else{
        echo "All input field are required";
    }

?>