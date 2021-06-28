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
        $doctorname = $_POST['doctorname'];
        $designation = $_POST['designation'];
        $fieldsofwork = $_POST['fieldsofwork'];
        $workingtime = $_POST['workingtime'];
        $sql = "INSERT INTO `hospitaldoctorinfo`(`hospitalname`,`doctorname`,`designation`,`fieldsofwork`,`workingtime`) VALUES('$hospitalname','$doctorname','$designation','$fieldsofwork','$workingtime')";
        $result = mysqli_query($connect,$sql);
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
    <div class="title">Doctor Details</div>
    <div class="content">
      <form action="hospitaldoctor.php" method="post" id="hosiptaldoctor">
        <div class="user-details">
        <div class="input-box">
            <span class="details">Hospital Name</span>
            <input type="text" name="hospitalname" placeholder="Enter Hospital name" value="<?php echo $row['hospitalname']; ?>">
          </div>
          <div class="input-box">
            <span class="details">Doctor Name</span>
            <input type="text" name="doctorname" placeholder="Enter Doctor name" required>
          </div>
          <div class="input-box">
            <span class="details">Designation</span>
            <input type="text" name="designation" placeholder="Doctor Designation" required>
          </div>
          <div class="input-box">
            <span class="details">Fields of work</span>
            <input type="text" name="fieldsofwork" placeholder="Doctor Fields of Work" required>
          </div>
          <div class="input-box">
            <span class="details">Working Time</span>
            <input type="text" name="workingtime" placeholder="Working Time" required>
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