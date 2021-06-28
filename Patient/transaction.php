<?php
session_start();
if (!isset($_SESSION['unique_id'])) {
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
            <section class="form appointment">
                <header>Payment Details for 1 Year Subscription</header>
                <form action="#">
                    <div class="error-txt"></div>


                    <div class="field input">
                        <label>Enter the transaction Number</label>
                        <input type="text" name="transaction" placeholder="Enter Your Transaction Number">
                    </div>
                    


                    
                    


                    <div class="field button">
                        <input type="submit" value="Confirm">
                    </div>


                </form>

            </section>
        </div>
    </div>
    <?php include "footer.php" ?>

    <script src="JavaScript/transaction.js"></script>
</body>


</html>