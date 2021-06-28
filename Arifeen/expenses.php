<?php

    session_start();
    $connect = mysqli_connect('localhost','root','','app');
    //session_start();
    //$connect = mysqli_connect('localhost','root','','hospital');
    $session_user =  $_SESSION['user_login'];
    $sql1 = "SELECT `hospitalname` FROM `hospitalkuet` WHERE `phonenumber` = '$session_user'";
    $result1 = mysqli_query($connect,$sql1);
    //print_r($result1);
    $row = mysqli_fetch_array($result1);
    if(isset($_POST['save'])) //for register
    {
        $hospitalname = $_POST['hospitalname'];
        $bed = $_POST['bed'];
        $floar = $_POST['floar'];
        $totalbed = $_POST['totalbed'];
        $fillbed = $_POST['fillbed'];
        $cost = $_POST['cost'];
        $facilities = $_POST['facilities'];
        $sql = "INSERT INTO `hospitalkuetdetails`(`hospitalname`,`bed`,`floar`,`totalbed`,`fillbed`,`cost`,`facilities`) VALUES('$hospitalname','$bed','$floar','$totalbed ',' $fillbed',' $cost','$facilities')";
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
    <div class="title">Expenses Details</div>
    <div class="content">
      <form action="expenses.php" method="post" id="expenses.php">
        <div class="user-details">
        <div class="input-box">
            <span class="details">Hospital Name</span>
            <input type="text" name="hospitalname" placeholder="Enter Hospital name" value="<?php echo $row['hospitalname']; ?>">
          </div>
          <div class="input-box">
            <span class="details">Bed/ICU</span>
            <input type="text" name="bed" placeholder="Bed/ICU">
          </div>
          <div class="input-box">
            <span class="details">Floor</span>
            <input type="number" name="floar" placeholder="Enter Floor No">
          </div>
          <div class="input-box">
            <span class="details">Total Bed</span>
            <input type="number" name="totalbed" placeholder="Enter Bed Quantity">
          </div>
          
          <div class="input-box">
            <span class="details">Fill Up Bed Quanity</span>
            <input type="number" name="fillbed" placeholder="Enter Fill Up Bed quantity">
          </div>
          <div class="input-box">
            <span class="details">Cost Per Day</span>
            <input type="number" name="cost" placeholder="Enter Cost of Per Day">
          </div>
          <div class="input-box">
            <span class="details">Facilities</span>
            <input type="text" name="facilities" placeholder="Enter The Facilites">
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