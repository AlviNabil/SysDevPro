
<?php
include_once "header.php"
?>

<body>
    <?php
    include "head.php"
    ?>
    <div class="mid">
        <div class="wrapper">
            <section class="form login">
                <header>Login as Donor to Update info</header>
                <form action="#">
                    <div class="error-txt"></div>


                    <div class="field input">
                        <label>Email Adress</label>
                        <input type="text" name="email" placeholder="Enter Your Email">
                    </div>


                    <div class="field input">
                        <label>Password</label>
                        <input type="password" name="password" placeholder="Enter your Password">
                        <i class="fas fa-eye"></i>
                    </div>




                    <div class="field button">
                        <input type="submit" value="Continue to Update">
                    </div>


                </form>
            </section>
        </div>
    </div>
    <?php include "footer.php" ?>
    <script src="JavaScript/pass_showHide.js"></script>
    <script src="JavaScript/donorlogin.js"></script>
</body>


</html>