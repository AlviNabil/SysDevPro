<?php

session_start();
$connect = mysqli_connect('localhost', 'root', '', 'app');
if (!isset($_SESSION['user_login'])) {
  header('location: admin.php');
}

$session_user =  $_SESSION['user_login'];
//echo $session_user;

$hospital_user_data = mysqli_query($connect, "SELECT * FROM `hospitalkuet` WHERE `phonenumber` = '$session_user' ");
//print_r($hospital_user_data);
$hospital_user_row = mysqli_fetch_assoc($hospital_user_data);
//print_r($hospital_user_row);

$icu = $hospital_user_row['icuquantity'];
$doctor = $hospital_user_row['doctor'];
//echo $doctor;

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
      <form action="updateadmin.php" method="post" id="updateadmin">
        <div class="user-details">
          <div class="input-box">
            <span class="details">ICU Quanity</span>
            <input type="number" name="icuquantity" placeholder="Enter ICU Quantity" value="<?php echo $icu; ?>">
          </div>
          <div class="input-box">
            <span class="details">Bed Quanity</span>
            <input type="number" name="bedquantity" placeholder="Enter Bed Quantity" value="<?php echo $hospital_user_row['bedquantity']; ?>">
          </div>
          <div class="input-box">
            <span class="details">Total Doctor</span>
            <input type="number" name="doctor" placeholder="Enter Doctor Quantity" value="<?php echo $doctor; ?>">
          </div>

          <div class="input-box">
            <span class="details">Fill Up ICU Quanity</span>
            <input type="number" name="fillicu" placeholder="Enter Fill Up ICU quantity" value="<?php echo $hospital_user_row['fillicu']; ?>">
          </div>
          <div class="input-box">
            <span class="details">Fiil Up Bed Quanity</span>
            <input type="number" name="fillbed" placeholder="Enter Fill Up Bed Quantity" value="<?php echo $hospital_user_row['fillbed']; ?>">
          </div>
        </div>
        <div class="button">
          <input type="submit" name="update" value="Update">
        </div>

      </form>
      <p>
        <a href="payment.html">Bill Section</a>
      </p>
      <p>
        <a href="hospitalpatient.php">Patient Infromation</a>
      </p>
      <p>
      <a href="updatepatient.php">Update Patient Infromation</a>
      </p>
      <a href="hospitaldoctor.php">Doctor Infromation</a>
      </p>
      </p>
      <a href="expenses.php">Expenses Infromation</a>
      </p>
      <p>
      <a href="expenseupdate.php">Expenses Update Infromation</a>
      </p>
      



    </div>
  </div>

</body>

</html>



<?php

$connect = mysqli_connect("localhost", "root", "", "app");
if (isset($_POST['update'])) {

  //echo "heloo from update";

  $icuquantity = $_POST['icuquantity'];
  $bedquantity = $_POST['bedquantity'];
  $doctor = $_POST['doctor'];
  $fillicu = $_POST['fillicu'];
  $fillbed = $_POST['fillbed'];
  //$phonenumber = $_POST['phonenumber'];


  $query = "UPDATE `hospitalkuet` SET `icuquantity`='$icuquantity',`bedquantity`='$bedquantity',`doctor`='$doctor',`fillicu`='$fillicu',`fillbed`='$fillbed' where phonenumber='$session_user' ";
  $result = mysqli_query($connect, $query);

  if ($result) {
    header('location: updateadmin.php');
    echo '<script type="text/javascript">alert("Data Update")</script>';
  } else {
    echo '<script type="text/javascript">alert("Data Not  Update")</script>';
  }
}


?>