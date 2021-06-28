<?php
session_start();
if (!isset($_SESSION['unique_id'])) {
    header("location: login.php");
}
?>

<?php
include_once "header.php"
?>


<body>
    <?php
    include "head.php"
    ?>
    <div class="mid">
        <div class="wrapper">
            <section class="form signup">
            <?php
                    include_once "PHP/config.php";
                    $user_id = mysqli_real_escape_string($conn, $_GET['user_id']);
                    $sql = mysqli_query($conn, "SELECT * FROM appointment WHERE a_id = '{$user_id}' ");
                    if (mysqli_num_rows($sql) > 0) {
                        $row = mysqli_fetch_assoc($sql);
                    }
                    ?>
                <header>Edit Appointment Details</header>
                <form action="#" enctype="multipart/form-data" method="POST">
                    <div class="error-txt">This is an error message!</div>
                    <div class="name-details">


                        <div class="field input">
                            <label>First Name</label>
                            <input type="text" name="fname" value="<?php echo $row['fname']?>" required>
                        </div>


                        <div class="field input">
                            <label>Last Name</label>
                            <input type="text" name="lname" value="<?php echo $row['lname']?>"" required>
                        </div>
                    </div>

                    <div class="field input">
                        <label>Email Adress</label>
                        <input type="text" name="email" value="<?php echo $row['email']?>" required>
                    </div>
                    <div class="field input">
                        <label>Address</label>
                        <input type="text" name="address" value="<?php echo $row['address']?>" required>
                    </div>
                    <div class="field input">
                        <label>Phone Number</label>
                        <input type="text" name="phonenumber" value="<?php echo $row['phonenumber']?>" required>
                    </div>
                    <div class="field input">
                        <label>Gender</label>
                        <select name="gender" id="gender">

                            <option value="female">Female</option>
                            <option value="male">Male</option>
                            <option value="other">Other</option>
                            
                            <option value="" hidden disable selected>Select an option</option>
                        </select>
                    </div>
                    <div class="field input">
                        <label>Age</label>
                        <input type="text" name="age" value="<?php echo $row['age']?>" required>
                    </div>
                    <div class="field input">
                        <label>Date</label>
                        <input type="text" name="date" value="<?php echo $row['date']?>" required>
                    </div>
                    <div class="field input">
                        <label>Time</label>
                        <input type="text" name="time" value="<?php echo $row['time']?>" required>
                    </div>
                    <div class="field input">
                        <label>Doctor ID</label>
                        <input type="text" name="transaction" value="<?php echo $row['doctor_id']?>" required>
                    </div>
                    <div class="field input">
                        <label>Patient Id</label>
                        <input type="text" name="cardn" value="<?php echo $row['patient_id']?>" required>
                    </div>
                    <div class="field button">
                        <input type="submit" value="Save">
                    </div>


                </form>
                
            </section>
        </div>
    </div>
    <?php include "footer.php" ?>
    <script src="JavaScript/pass_showHide.js"></script>
    <script src="JavaScript/updateappointment.js"></script>
</body>


</html>