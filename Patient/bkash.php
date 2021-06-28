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
                        <label>BKash Number</label>
                        <input type="text" name="bknumber" placeholder="Enter Your Bkash Number">
                    </div>
                    



                    
                    <div style="overflow:hidden;">
                        <p style="float: left;"><b>Total Amount </b></p>
                        <p style="float:right;">20,000 TAKA</p>
                    </div>


                    <div class="field button">
                        <input type="submit" value="PAY">
                    </div>


                </form>

            </section>
        </div>
    </div>
    <?php include "footer.php" ?>

    <script src="JavaScript/bkash.js"></script>
</body>


</html>