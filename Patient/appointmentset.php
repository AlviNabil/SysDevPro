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
    <?php
    $doctor_id = $_GET['user_id'];
    ?>
    <div class="mid">
        <div class="wrapper">
            <section class="form appointment">
                <header>Set Appointment With Doctor</header>
                <form action="#">
                    <div class="error-txt"></div>


                    <div class="field input">
                        <label>First Name</label>
                        <input type="text" name="fname" placeholder="Enter Your Name">
                    </div>
                    <div class="field input">
                        <label>Last Name</label>
                        <input type="text" name="lname" placeholder="Enter Your Name">
                    </div>
                    <div class="field input">
                        <label>Email</label>
                        <input type="text" name="email" placeholder="Enter Your Email">
                    </div>

                    <div class="field input">
                        <label>Address</label>  
                        <input type="text" name="address" placeholder="Enter your Address">
                    </div>
                    <div class="field input">
                        <label>Age</label>  
                        <input type="text" name="age" placeholder="Enter your Age">
                    </div>
                    <div class="field input">
                        <label>Phone Number</label>  
                        <input type="text" name="phonenumber" placeholder="Enter your Phone Number">
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
                        <label>Date</label>
                        <input type="date" name="date" placeholder="Select Date">
                    </div>

                    <div class="field input">
                        <label>Appoinment Time</label>

                        <select name="time" id="time">

                            <option value="1">10:00AM-11:30AM</option>
                            <option value="2">11:40AM-1:00PM</option>
                            <option value="3">4:00PM-5:30PM</option>
                            <option value="4">5:40PM-7:00PM</option>
                            <option value="5">7:10PM-8:30PM</option>
                            <option value="" hidden disable selected>Select an option</option>
                        </select>
                    </div>

                    <input type="text" name="patient_id" value="<?php echo $_SESSION['unique_id']; ?>" hidden>
                    <input type="text" name="doctor_id" value="<?php echo $doctor_id; ?>" hidden>




                    <div class="field button">
                        <input type="submit" value="Confirm Appoinment">
                    </div>


                </form>

            </section>
        </div>
    </div>
    <?php include "footer.php" ?>

    <script src="JavaScript/appointment.js"></script>
</body>


</html>