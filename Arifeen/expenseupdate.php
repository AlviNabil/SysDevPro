<?php
     session_start();
     $connect = mysqli_connect('localhost','root','','app');
     $session_user =  $_SESSION['user_login'];
        //echo $session_user;
        $sql = "SELECT `hospitalname` FROM `hospitalkuet` WHERE `phonenumber` = '$session_user'";
        $result = mysqli_query($connect,$sql);
        $row = mysqli_fetch_array($result);
        $hospitalname = $row['hospitalname'];
       
    if(isset($_POST['save'])){
        $bed = $_POST['bed'];
        
        $floar = $_POST['floar'];

        $cost = $_POST['cost'];
        $facilities = $_POST['facilities'];
        
        $fillbed = $_POST['fillbed'];
        $query = "UPDATE `hospitalkuetdetails` SET `fillbed`='$fillbed',`floar`='$floar',`cost`='$cost',`facilities`='$facilities' WHERE `hospitalname`='$hospitalname' AND `bed`='$bed' AND `floar`='$floar' ";
        $result = mysqli_query($connect,$query);
        print_r($result);

        if($result)
        {
            header('location: expenseupdate.php');
            echo '<script type="text/javascript">alert("Data Update")</script>';
            

        }
        else{
            echo '<script type="text/javascript">alert("Data Not  Update")</script>';

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
    <div class="title">Hospital Details</div>
    <div class="content">
      <form action="expenseupdate.php" method="post" id="expenseupdateadmin">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Bed/ICU</span>
            <input type="text" name="bed" placeholder="Enter Bed/ICU">
          </div>
          <div class="input-box">
            <span class="details">Fill Bed/ICU Quanity</span>
            <input type="number" name="fillbed" placeholder="Enter Bed/ICU Quantity">
          </div>
          <div class="input-box">
            <span class="details">Floor</span>
            <input type="number" name="floar" placeholder="Enter Floor No">
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
        
          <input type="submit" name="save" value="Want to Update">
        
        </div>
        
      </form>  
    </div>
  </div>

</body>
</html>