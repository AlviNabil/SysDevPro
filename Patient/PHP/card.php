<?php
    session_start();

    include_once  "config.php";
    $cnumber = mysqli_real_escape_string($conn, $_POST['cnumber']);
    $edate = mysqli_real_escape_string($conn, $_POST['edate']);
    $cvcode = mysqli_real_escape_string($conn, $_POST['cvcode']);
  
    

    // print_r(mysqli_query($conn, "SELECT * FROM users WHERE fname=$fname"));
    
    

    if(!empty($cnumber) && !empty($edate) && !empty($cvcode) ){
       
        
            
            $sql2 = mysqli_query($conn, "UPDATE patient 
                                                SET cardn = '{$cnumber}',
                                                edate = '{$edate}',
                                                cvcode = '{$cvcode}'
                                                    WHERE unique_id = {$_SESSION['unique_id']}");
            
            echo "Success";
                            
        
        
    }
    else{

        echo "All input field are required";
    }

?>