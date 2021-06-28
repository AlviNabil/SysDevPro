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
                        <label>Card Number<i class="fab fa-cc-visa"></i>
                        <i class="fab fa-cc-mastercard"></i></label>
                        
                        <input type="text" name="cnumber" placeholder="Enter Your Card Number">
                    </div>
                    <div class="field input">
                        <label>Expiry Date</label>
                        <input type="text" name="edate" placeholder="Enter Your Expiry Date(mm/yy)">
                    </div>
                    <div class="field input">
                        <label>CV Code</label>
                        <input type="text" name="cvcode" placeholder="Enter Your CV Code">
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

    <script src="JavaScript/card.js"></script>
</body>


</html>