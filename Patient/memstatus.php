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
                        <span>Membership Details</span>
                        
                    </div>
            </header>
            
            <div class="chat-box">
                <div style="overflow:hidden;">
                    <p style="float: left;"><b>Name: </b></p>
                    <p style="float:right;"><?php echo $row['fname'].' '.$row['lname'] ?></p>
                </div>
                <div style="overflow:hidden;">
                    <p style="float: left;"><b>Blood Group: </b></p>
                    <p style="float:right;"><?php echo $row['bgroup'] ?></p>
                </div>
                <div style="overflow:hidden;">
                    <p style="float: left;"><b>Age: </b></p>
                    <p style="float:right;"><?php echo $row['age'] ?></p>
                </div>
                <div style="overflow:hidden;">
                    <p style="float: left;"><b>Gender: </b></p>
                    <p style="float:right;"><?php echo $row['gender'] ?></p>
                </div>
                <div style="overflow:hidden;">
                    <p style="float: left;"><b>Email: </b></p>
                    <p style="float:right;"><?php echo $row['email'] ?></p>
                </div>
               
                
                <div style="overflow:hidden;">
                    <p style="float: left;"><b>Address: </b></p>
                    <p style="float:right;"><?php echo $row['address'] ?></p>
                </div>
                
                <div style="overflow:hidden;">
                    <p style="float: left;"><b>Phone Number: </b></p>
                    <p style="float:right;"><?php echo $row['phonenumber'] ?></p>
                </div>
                
                <div style="overflow:hidden;">
                    <p style="float: left;"><b>Expired On:</b></p>
                    <p style="float:right;"> <?php echo $row['tstmp']?>(<?php 
                    $date = date("Y-m-d");
                    $period = abs(floor((strtotime($row['tstmp'])-strtotime($date))/(60*60*24)));
                    echo "$period days remaining";
                ?>)</p>
                </div>
            </div>
            
        </section>
    </div>
    </div>
    <?php include "footer.php" ?>
</body>
<!-- <script src="JavaScript/chat.js"></script> -->


</html>