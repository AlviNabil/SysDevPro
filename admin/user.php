<?php
session_start();
if (!isset($_SESSION['unique_id'])) {
    header("location: index.php");
}
?>



<?php
include_once "header.php"
?>

<body>
    <?php include_once "head.php" ?>
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
                    <a href="firstpage.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
                        <a href="myprofile.php"><img src="PHP/images/<?php echo $row['img']  ?>" alt=""></a>
                        <div class="details">
                            <span><?php echo $row['fname'] . " " . $row['lname'] ?></span>
                            <p><?php echo $row['status'] ?></p>
                        </div>
                    </div>
                    <a href="PHP/logout.php?logout_id=<?php echo $row['unique_id'] ?>" class="logout">Logout</a>
                </header>

                <div class="search">
                    <span class="text">Select an user to start chat</span>
                    <input type="text" placeholder="Enter name to search...">
                    <button><i class="fas fa-search"></i></button>
                </div>
                <div class="users-list">

                </div>

            </section>
        </div>
        <script src="JavaScript/users.js"></script>
    </div>
    <?php include_once "footer.php" ?>
</body>


</html>