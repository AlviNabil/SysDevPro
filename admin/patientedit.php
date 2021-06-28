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
                    $sql = mysqli_query($conn, "SELECT * FROM patient WHERE unique_id = '{$user_id}' ");
                    if (mysqli_num_rows($sql) > 0) {
                        $row = mysqli_fetch_assoc($sql);
                    }
                    ?>
                <header>Edit Profile</header>
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
                        <label>Blood Group</label>
                        <input type="text" name="bgroup" value="<?php echo $row['bgroup']?>" required>
                    </div>
                    <div class="field input">
                        <label>Membership Status</label>
                        <input type="text" name="member" value="<?php echo $row['member']?>" required>
                    </div>
                    <div class="field input">
                        <label>Transaction ID</label>
                        <input type="text" name="transaction" value="<?php echo $row['transaction']?>" required>
                    </div>
                    <div class="field input">
                        <label>Card Number</label>
                        <input type="text" name="cardn" value="<?php echo $row['cardn']?>" required>
                    </div>

                    <div class="field input">
                        <label>CV Code</label>
                        <input type="text" name="cvcode" value="<?php echo $row['cvcode']?>" required>
                    </div>
                    <div class="field input">
                        <label>Card Expiry Date</label>
                        <input type="text" name="edate" value="<?php echo $row['edate']?>" required>
                    </div>
                    <div class="field input">
                        <label>Membership Expiry date</label>
                        <input type="text" name="tstmp" value="<?php echo $row['tstmp']?>" required>
                    </div>
                    <div class="field input">
                        <label>BKash Number</label>
                        <input type="text" name="bknumber" value="<?php echo $row['bknumber']?>" required>
                    </div>
                    <div class="field input" >
                        <label>User ID</label>
                        <input type="text" name="user_id" value="<?php echo $user_id?>" required>
                    </div>
                    <div class="field input">
                        <label>Password</label>
                        <input type="password" name="password" value="<?php echo $row['password']?>" required>
                        <i class="fas fa-eye"></i>
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
    <script src="JavaScript/updatepatient.js"></script>
</body>


</html>