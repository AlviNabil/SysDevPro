
 



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

                <form action="#">
                    <div>
                        <select name="type" id="type">

                            <option value="1">A+</option>
                            <option value="2">A-</option>
                            <option value="3">B+</option>
                            <option value="4">B-</option>
                            <option value="5">AB+</option>
                            <option value="6">AB-</option>
                            <option value="7">O+</option>
                            <option value="8">O-</option>
                            <option value="null" hidden disable selected>Select an option</option>
                        </select>
                        <input class="button" type="submit" value="go">
                    </div>
                </form>
                
                
                <div class="users-list">

                </div>

            </section>
        </div>
    </div>
    <?php include "footer.php" ?>
    <script src="JavaScript/donorlisttype.js"></script>
</body>


</html>