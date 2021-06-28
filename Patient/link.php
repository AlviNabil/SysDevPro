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
                $user_id = $_SESSION['unique_id'];
                $sql = mysqli_query($conn, "SELECT * FROM patient WHERE unique_id = {$user_id} ");
                if(mysqli_num_rows($sql)>0){
                    $row = mysqli_fetch_assoc($sql);
                }
            ?>
                    <a href="firstpage.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
                    <div class="details">
                        <span>Special Features</span>
                        
                    </div>
            </header>
            
            <div class="chat-box">
                
            <div class="users" >
                    <a href="payment.php" class="logout" style="margin: 3px; padding: 5px; font-size: 14px;">Become a member to access this features</a>
                </div>
                
            </div>
            
        </section>
    </div>
    </div>
    <?php include "footer.php" ?>
</body>
<!-- <script src="JavaScript/chat.js"></script> -->


</html>