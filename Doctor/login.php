<?php
    session_start();
    if(isset($_SESSION['unique_id'])){
        header("location: user.php");
    }
?>
<?php
    include_once "header.php"
?>

<body>
<?php include_once "head.php" ?>
    <div class="mid">
    <div class="wrapper">
        <section class="form login">
            <header>Login as Doctor</header>
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
                        <input type="submit" value="Continue to Chat">
                    </div>

              
            </form>
            <div class="link">Not yet signed up? <a href="index.php">Signup now</a></div>
        </section>
    </div>
    <script src="JavaScript/pass_showHide.js"></script>
    <script src="JavaScript/login.js"></script>
    </div>
    <?php include_once "footer.php" ?>
</body>


</html>