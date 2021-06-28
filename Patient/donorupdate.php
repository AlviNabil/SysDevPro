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
        <section class="profile form appointment">
            <header>
            <?php
                include_once "PHP/config.php";
                $user_id = mysqli_real_escape_string($conn, $_GET['email']);
                $sql = mysqli_query($conn, "SELECT * FROM blood WHERE email = '{$user_id}' ");
                if(mysqli_num_rows($sql)>0){
                    $row = mysqli_fetch_assoc($sql);
                }
            ?>
                    <a href="donorlist.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
                    <div class="details">
                        <span><?php echo $row['fname'] ." " . $row['lname'] ?></span>
                        
                    </div>
            </header>
            
            <form action="#">
                    <div class="error-txt"></div>


                    <div class="field input">
                        <label>First Name</label>
                        <input type="text" name="fname" value="<?php echo $row['fname']?>">
                    </div>
                    <div class="field input">
                        <label>Last Name</label>
                        <input type="text" name="lname" value="<?php echo $row['lname']?>">
                    </div>
                    <div class="field input">
                        <label>Blood Group</label>
                        <input type="text" name="group" value="<?php echo $row['bgroup']?>">
                    </div>
                    <div class="field input">
                        <label>Email</label>
                        <input type="text" name="email" value="<?php echo $row['email']?>">
                    </div>
                   
                    <div class="field input">
                        <label>Update your last blood donation date</label>
                        <input type="date" name="date" placeholder="Select Date">
                    </div>

                   

                    <input type="text" name="patient_id" value="<?php echo $_SESSION['unique_id']; ?>" hidden>




                    <div class="field button">
                        <input type="submit" value="Save Information">
                    </div>


                </form>
            
        </section>
    </div>
    </div>
    <?php include "footer.php" ?>
</body>
<!-- <script src="JavaScript/chat.js"></script> -->
<script src="JavaScript/donorupdate.js"></script>


</html>