<?php

    session_start();
    $connect = mysqli_connect('localhost','root','','app');
    if(isset($_POST['save'])) //for register
    {
        $hospitalname = $_POST['hospitalname'];
        $icuquantity= $_POST['icuquantity'];
        $bedquantity = $_POST['bedquantity'];
        $doctor = $_POST['doctor'];
        $fillicu = $_POST['fillicu'];
        $fillbed = $_POST['fillbed'];
        $addrees = $_POST['address'];
        $phonenumber = $_POST['phonenumber'];
        $password = $_POST['password'];
        $sql = "INSERT INTO `hospitalkuet`(`hospitalname`,`icuquantity`,`bedquantity`,`doctor`,`fillicu`,`fillbed`,`address`,`phonenumber`,`password`) VALUES('$hospitalname','$icuquantity','$bedquantity','$doctor','$fillicu',' $fillbed',' $addrees','$phonenumber',' $password')";
        $result = mysqli_query($connect,$sql);
        if($result)
        {
            echo '<script type="text/javascript">alert("Data Save")</script>';
            $_SESSION['user_login'] = $phonenumber;
            header('location: updateadmin.php');
            
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
    <div class="title">Hospital Registration</div>
    <div class="content">
      <form action="admin.php" method="post" id="hosiptalregister">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Hospital Name</span>
            <input type="text" name="hospitalname" placeholder="Enter Hospital name" required>
          </div>
          <div class="input-box">
            <span class="details">ICU Quanity</span>
            <input type="number" name="icuquantity" placeholder="Enter ICU Quantity" required>
          </div>
          <div class="input-box">
            <span class="details">Bed Quanity</span>
            <input type="number" name="bedquantity" placeholder="Enter Bed Quantity" required>
          </div>
          <div class="input-box">
            <span class="details">Total Doctor</span>
            <input type="number" name="doctor" placeholder="Enter Doctor Quantity" required>
          </div>
          <div class="input-box">
            <span class="details">Hospital Address</span>
            <input type="text" name="address" placeholder="Enter Hospital Address" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" name="phonenumber" placeholder="Enter Hospital Phone Number" required>
          </div>
          <div class="input-box">
            <span class="details">Fill Up ICU Quanity</span>
            <input type="number" name="fillicu" placeholder="Enter Fill Up ICU quantity" required>
          </div>
          <div class="input-box">
            <span class="details">Fiil Up Bed Quanity</span>
            <input type="number" name="fillbed" placeholder="Enter Fill Up Bed Quantity" required>
          </div>
          <div class="input-box">
            <span class="details">Hospital Password</span>
            <input type="text" name="password" placeholder="Enter Password" required>
          </div>
          
        </div>
        <div class="button">
          <input type="submit" name="save" value="Register">
        </div>
      </form>
           
    </div>

    </div>
  

</body>
</html>