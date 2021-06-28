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
            <section class="form myprofile">
                <?php
                include_once "PHP/config.php";
                $sql = mysqli_query($conn, "SELECT * FROM patient WHERE unique_id = {$_SESSION['unique_id']} ");
                if (mysqli_num_rows($sql) > 0) {
                    $row = mysqli_fetch_assoc($sql);
                }
                ?>
                <header>My Profile</header>
                <form action="#" enctype="multipart/form-data" method="POST">
                    <div class="error-txt">This is an error message!</div>
                    <div class="name-details">

                        <div class="field input">
                            <label>First Name</label>
                            <span ><?php echo $row['fname'] ?></span>
                        </div>


                        <div class="field input">
                            <label>Last Name</label>
                            <span><?php echo $row['lname'] ?></span>
                        </div>
                    </div>

                    <div class="field input">
                        <label>Email Address</label>
                        <span><?php echo $row['email'] ?></span>

                    </div>
                    <div class="field input">
                        <label>Address</label>
                        <span><?php echo $row['address'] ?></span>

                    </div>
                    <div class="field input">
                        <label>Phone Number</label>
                        <span><?php echo $row['phonenumber'] ?></span>

                    </div>
                    <div class="field input">
                        <label>Age</label>
                        <span><?php echo $row['age'] ?></span>

                    </div>
                    <div class="field input">
                        <label>Gender</label>
                        <span><?php echo $row['gender'] ?></span>

                    </div>

                    <div class="pimage">
                            <img src="PHP/images/<?php echo $row['img'] ?>" alt="">
                    </div>

                    <div class="field button space">
                        <a href="editprofile.php"><span>Edit Profile</span></a>
                    </div>


                </form>
            </section>
        </div>
    </div>
    <?php include "footer.php" ?>
    <script src="JavaScript/pass_showHide.js"></script>

</body>


</html>