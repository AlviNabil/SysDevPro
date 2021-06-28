


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
                    ?>
                    <div class="content">
                        <a href="firstpage.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
                        <div class="details" style="font-size: 20px;">
                            Available donor lists
                        </div>
                    </div>
                </header>

                <div class="search">
                    <span class="text">Select one to see profile</span>
                    
                </div>
                <div style="margin: 7px;">
                <a href="donorlisttype.php" class="logout">Select Group</a>
                </div>
                
                
                <div class="users-list">

                </div>
                <div class="field link">
                    <button class="logout" ><a href="donorlogin.php" style="color:#fff;">Are you donor? Update Info.</a></button>
                        
                    </div>

            </section>
        </div>
        
    </div>
    
    <?php include "footer.php" ?>
    <script src="JavaScript/donorlist.js"></script>
</body>


</html>