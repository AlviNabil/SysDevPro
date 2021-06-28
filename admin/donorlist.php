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
        <section class="users">
            <header>
            
                <div class="content">
                <a href="firstpage.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
                
                    <div class="details">
                       Donor List
                        
                    </div>
                </div>
                <a href="PHP/logout.php?logout_id=<?php echo $_SESSION['unique_id']?>" class="logout">Logout</a>
            </header>
            <div class="users-list gap" >
                
            </div>

        </section>
    </div>
    </div>
    <?php include "footer.php" ?>
    <script src="JavaScript/donorlist.js"></script>
</body>


</html>