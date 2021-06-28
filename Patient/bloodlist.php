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
            <section class="form appointment">
                <header>Fill up the following form</header>
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
                        <label>Blood Group</label>
                        <input type="text" name="group" placeholder="Enter Your Email">
                    </div>
                    <div class="field input">
                        <label>Email</label>
                        <input type="text" name="email" placeholder="Enter Your Email">
                    </div>
                    <div class="field input">
                        <label>Password</label>
                        <input type="password" name="password" placeholder="Enter new Password" required>
                        <i class="fas fa-eye"></i>
                    </div>
                    <div class="field input">
                        <label>Address</label>  
                        <input type="text" name="address" placeholder="Enter your Address">
                    </div>
                    <div class="field input">
                        <label>Phone Number</label>  
                        <input type="text" name="phonenumber" placeholder="Enter your Phone Number">
                    </div>
                    <div class="field input">
                        <label>Age</label>  
                        <input type="text" name="age" placeholder="Enter your Age">
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
                        <label>When did you donate blood last time</label>
                        <input type="date" name="date" placeholder="Select Date">
                    </div>

                   

                    <input type="text" name="patient_id" value="<?php echo $_SESSION['unique_id']; ?>" hidden>




                    <div class="field button">
                        <input type="submit" value="Save Information">
                    </div>


                </form>

            </section>
        </div>
    </div>
    <?php include "footer.php" ?>
    <script src="JavaScript/pass_showHide.js"></script>
    <script src="JavaScript/bloodlistset.js"></script>
</body>


</html>