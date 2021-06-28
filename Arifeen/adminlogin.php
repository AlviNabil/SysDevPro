<?php
    session_start();
    $connect = mysqli_connect('localhost','root','','app');

    if(isset($_POST['login'])) //login
    {
        //echo "hello";
        $phonenumber = $_POST['phonenumber'];
        $password = $_POST['password'];
        $sql1 = "SELECT * FROM `hospitalkuet` WHERE `phonenumber`='$phonenumber' AND `password`=$password ";
        
        //echo $password;
        //echo $phonenumber;
        //print_r($sql1);
        $result1 = mysqli_query($connect,$sql1);
        //print_r($result1);
        $row = mysqli_fetch_array($result1);
        
        if($row['phonenumber'] == $phonenumber && $row['password'] == $password)
        {
            $_SESSION['user_login'] = $phonenumber;
            header('location: updateadmin.php');
            echo '<script type="text/javascript">alert("Login")</script>';
            
        }
        else{
            echo '<script type="text/javascript">alert("Sorry")</script>';
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
    <div class="title">Hospital Login</div>
    <div class="content">
      <form action="adminlogin.php" method="post" id="login">
        <div class="user-details">
         
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" name="phonenumber" placeholder="Phone Number" required>
          </div>
          <div class="input-box">
            <span class="details">Hospital Password</span>
            <input type="text" name="password" placeholder="Enter Password" required>
          </div>
          
        </div>
        <div class="button">
          <input type="submit" name="login" value="Login">
        </div>
        
      </form>
      
    </div>
  </div>

</body>
</html>