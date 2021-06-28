<?php
    session_start();

    include_once  "config.php";
    $bknumber = mysqli_real_escape_string($conn, $_POST['bknumber']);

  
    

    // print_r(mysqli_query($conn, "SELECT * FROM users WHERE fname=$fname"));
    
    

    if(!empty($bknumber) ){
       
        
            
            $sql2 = mysqli_query($conn, "UPDATE patient 
                                                SET bknumber = '{$bknumber}'
                                                    WHERE unique_id = {$_SESSION['unique_id']}");
            
            echo "Success";
                            
        
        
    }
    else{
        echo "All input field are required";
    }

?>