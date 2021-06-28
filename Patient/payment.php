<?php
session_start();
if (!isset($_SESSION['unique_id'])) {
    header("location: login.php");
}
?>



<?php
include_once "header.php"
?>

<body class="Frame">
    <?php 
        include "head.php"
    ?> 
    <div class="mid">
        <div class="wrapper">
            <section class="users">
                <header>
                    <?php
                    include_once "PHP/config.php";
                    $sql = mysqli_query($conn, "SELECT * FROM patient WHERE unique_id = {$_SESSION['unique_id']} ");
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
                    <span class="text">Select a payment method</span>
                    <input type="text" placeholder="Enter name to search...">
                    
                </div>
                <div class="gap">
                    <a href="card.php" class="logout">Debit/Credit Card</a>
                    <i class="fab fa-cc-visa"></i>
                    <i class="fab fa-cc-mastercard"></i>
                </div>
                <div class="gap">
                    <a href="bkash.php" class="logout">BKash Payment</a>
                </div>

            </section>
        </div>
    </div>
    <?php include "footer.php" ?>
    
</body>


</html>