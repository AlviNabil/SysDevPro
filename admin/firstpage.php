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
                   Admin Panel
                   <a href="PHP/logout.php?logout_id=<?php echo $_SESSION['unique_id']?>" class="logout">Logout</a>
                </header>

                <div class="gap">
                    <a href="patientlist.php" class="logout">Patient List</a>
                </div>
                <div class="gap">
                    <a href="doctorlist.php" class="logout">Doctor List<br></a>
                </div>
                <div class="gap">
                    <a href="appointmentlist.php" class="logout">Appointments</a>
                </div>
                <div class="gap">
                    <a href="donorlist.php" class="logout">Blood Donors</a>
                </div>

            </section>
        </div>
    </div>
    <?php include "footer.php" ?>
</body>


</html>