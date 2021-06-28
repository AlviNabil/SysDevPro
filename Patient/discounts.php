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
                        <span>Dicounts Details</span>
                        
                    </div>
            </header>
            
            <div class="chat-box">
                
                <ul>
                    <li>Use Code X4040 on all kind of pathological tests to get 40% off</li>
                    <li>Use Code X5050 on all kind of surgery to get 10% off</li>
                    <li>Use Code X3030 to get 25% off on selected medicine from our authorized reseller</li>
                </ul>
                
            </div>
            
        </section>
    </div>
    </div>
    <?php include "footer.php" ?>
</body>
<!-- <script src="JavaScript/chat.js"></script> -->


</html>