<?php
    session_start();

    include_once  "config.php";
    $transaction = mysqli_real_escape_string($conn, $_POST['transaction']);
    $tstmp = date("Y-m-d",strtotime("+365 days"));
    

    // print_r(mysqli_query($conn, "SELECT * FROM users WHERE fname=$fname"));
    
    

    if(!empty($transaction)){
       
            $sql2 = mysqli_query($conn, "UPDATE patient 
                                                SET transaction = '{$transaction}',
                                                    tstmp = '{$tstmp}'
                                               
                                                    WHERE unique_id = {$_SESSION['unique_id']}");
            
            echo "Success";
                            
        
        
    }
    else{
        echo "All input field are required";
    }

?>