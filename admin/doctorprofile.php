<?php
    session_start();
    if(!isset($_SESSION['unique_id'])){
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
        <section class="profile">
            <header>
            <?php
                include_once "PHP/config.php";
                $user_id = mysqli_real_escape_string($conn, $_GET['user_id']);
                $sql = mysqli_query($conn, "SELECT * FROM doctor WHERE unique_id = {$user_id} ");
                if(mysqli_num_rows($sql)>0){
                    $row = mysqli_fetch_assoc($sql);
                }
            ?>
                    <a href="doctorlist.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
                    <img src="../Doctor/PHP/images/<?php echo $row['img']  ?>" alt="">
                    <div class="details">
                        <span><?php echo $row['fname'] ." " . $row['lname'] ?></span>
                        <p><?php echo $row['status'] ?> </p>
                    </div>
            </header>
            
            <div class="chat-box">
                <p>Name: <?php echo $row['fname'].' '.$row['lname'] ?></p>
                <p>Email: <?php echo $row['email'] ?></p>
                <p>Age: <?php echo $row['age']?></p>
                <p>Status: <?php echo $row['status'] ?></p>
                <p>Address: <?php echo $row['address']?></p>
                <p>Phone Number: <?php echo $row['phonenumber']?></p>
                <img src="../Doctor/PHP/images/<?php echo $row['img']  ?>" alt="">
                <a href="doctoredit.php?user_id=<?php echo $row['unique_id']?>" class="messageB">Edit</a>
                
            </div>
            
        </section>
    </div>
    </div>
    <?php include "footer.php" ?>
</body>
<!-- <script src="JavaScript/chat.js"></script> -->


</html>