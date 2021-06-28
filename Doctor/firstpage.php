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
            <section class="users">
                <header>
                    <?php
                    include_once "PHP/config.php";
                    $sql = mysqli_query($conn, "SELECT * FROM doctor WHERE unique_id = {$_SESSION['unique_id']} ");
                    if (mysqli_num_rows($sql) > 0) {
                        $row = mysqli_fetch_assoc($sql);
                    }
                    ?>
                    <div class="content">
                        <a href="myprofile.php"><img src="PHP/images/<?php echo $row['img']  ?>" alt=""></a>
                        <div class="details">
                            <span><?php echo $row['fname'] . " " . $row['lname'] ?></span>
                            <p><?php echo $row['status'] ?></p>
                        </div>
                    </div>
                    <a href="PHP/logout.php?logout_id=<?php echo $row['unique_id'] ?>" class="logout">Logout</a>
                </header>

                <div class="gap">
                    <a href="patientlist.php" class="logout">Patient List</a>
                </div>
                <div class="gap">
                    <a href="user.php" class="logout">Chat with Patient<br></a>
                </div>
                <div class="gap">
                    <a href="appointmentlist.php" class="logout">Appointments</a>
                </div>

            </section>
        </div>
    </div>
    <?php include "footer.php" ?>
</body>


</html>