<?php
session_start();
if (isset($_SESSION['unique_id'])) {
    header("location: user.php");
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
                <header>Signup as Patient</header>
                <form action="#" enctype="multipart/form-data" method="POST">
                    <div class="error-txt">This is an error message!</div>
                    <div class="name-details">


                        <div class="field input">
                            <label>First Name</label>
                            <input type="text" name="fname" placeholder="First Name" required>
                        </div>


                        <div class="field input">
                            <label>Last Name</label>
                            <input type="text" name="lname" placeholder="Last Name" required>
                        </div>
                    </div>

                    <div class="field input">
                        <label>Email Adress</label>
                        <input type="text" name="email" placeholder="Enter Your Email" required>
                    </div>
                    <div class="field input">
                        <label>Address</label>
                        <input type="text" name="address" placeholder="Enter Your Address" required>
                    </div>
                    <div class="field input">
                        <label>Phone Number</label>
                        <input type="text" name="phonenumber" placeholder="Enter Your Phone Number" required>
                    </div>
                    <div class="field input">
                        <label>Age</label>
                        <input type="text" name="age" placeholder="Enter Your Age" required>
                    </div>
                    <div class="field input">
                        <label>Blood Group</label>
                        <input type="text" name="bgroup" placeholder="Enter Your Blood Group" required>
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
                        <label>Password</label>
                        <input type="password" name="password" placeholder="Enter new Password" required>
                        <i class="fas fa-eye"></i>
                    </div>


                    <div class="field image">
                        <label>Select Image</label>
                        <input type="file" name="image" required>
                    </div>

                    <div class="field button">
                        <input type="submit" value="Sign Up">
                    </div>


                </form>
                <div class="link">Already signed up? <a href="login.php">Login now</a></div>
                <div class="alter-signup">


                    <div class="field link">
                        <a href="../Doctor/index.php">Signup as Doctor?</a>
                    </div>


                    <div class="field link">
                        <a href="../Doctor/login.php">Login as Doctor</a>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <?php include "footer.php" ?>
    <script src="JavaScript/pass_showHide.js"></script>
    <script src="JavaScript/signup.js"></script>
</body>


</html>