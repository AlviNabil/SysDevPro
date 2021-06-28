<?php

    session_start();
    $connect = mysqli_connect('localhost','root','','app');
    $session_user =  $_SESSION['user_login'];
    $sql1 = "SELECT `hospitalname` FROM `hospitalkuet` WHERE `phonenumber` = '$session_user'";
    $result1 = mysqli_query($connect,$sql1);
    //print_r($result1);
    $row = mysqli_fetch_array($result1);
    //echo $row['hospitalname'];
    if(isset($_POST['save'])) //for register
    {   
        $hospitalname = $_POST['hospitalname'];
        $patientname = $_POST['patientname'];
        $phonenumber = $_POST['phonenumber'];
        $releasedate = $_POST['releasedate'];
        $dateofdeath = $_POST['dateofdeath'];
        $reasonofdeath = $_POST['reasonofdeath'];
        $sql = "UPDATE `hospitalpatientinfo` SET `releasedate`= '{$releasedate}',`dateofdeath`='{$dateofdeath}',`reasonofdeath`='{$reasonofdeath}' WHERE `patientname`='{$patientname}' AND `phonenumber`= $phonenumber";
        
        
        
        
        $result = mysqli_query($connect,$sql);
        print_r($result);
        if($result)
        {
            echo '<script type="text/javascript">alert("Data Save")</script>';
            //$_SESSION['user_login'] = $phonenumber;
            //header('location: updateadmin.php');
        }
        else{
            echo '<script type="text/javascript">alert("Sorry!Try Again")</script>';
        }
       
    }
    

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style4.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">Patient Details</div>
    <div class="content">
      <form action="updatepatient.php" method="post" id="hosiptalpatient">
        <div class="user-details">
        <div class="input-box">
            <span class="details">Hospital Name</span>
            <input type="text" name="hospitalname" placeholder="Enter Hospital name" value="<?php echo $row['hospitalname']; ?>">
          </div>
          <div class="input-box">
            <span class="details">Patient Name</span>
            <input type="text" name="patientname" placeholder="Enter Patient name"  required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" name="phonenumber" placeholder="Phone Number" required>
          </div>
          <div class="input-box">
            <span class="details">Release Date</span>
            <input type="date" name="releasedate" placeholder="Enter Release Date" >
          </div>
          <div class="input-box">
            <span class="details">Date of death</span>
            <input type="date" name="dateofdeath" placeholder="Enter Date of Death">
          </div>
          <div class="input-box">
            <span class="details">Reason of Death</span>
            <input type="text" name="reasonofdeath" placeholder="Enter Reason of Death">
          </div>
          
        </div>
        <div class="button">
          <input type="submit" name="save" value="Save">
        </div>
        
      </form>
           
    </div>

    </div>
  

</body>
</html>