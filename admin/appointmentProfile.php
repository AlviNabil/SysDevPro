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
                $user_id = mysqli_real_escape_string($conn, $_GET['user_id']);
                $sql = mysqli_query($conn, "SELECT * FROM appointment WHERE a_id = {$user_id} ");
                if(mysqli_num_rows($sql)>0){
                    $row = mysqli_fetch_assoc($sql);
                }
                $doctor_id = $row['doctor_id'];
                $sql2 = mysqli_query($conn, "SELECT * FROM doctor WHERE unique_id = {$doctor_id} ");
                if(mysqli_num_rows($sql2)>0){
                    $row2 = mysqli_fetch_assoc($sql2);
                }
            ?>
                    <a href="appointmentlist.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
                    <div class="details">
                        <span><?php echo $row['fname'] ." " . $row['lname'] ?></span>
                    </div>
            </header>
            
            <div class="chat-box">
                <p>Name: <?php echo $row['fname'].' '.$row['lname'] ?></p>
                <p>Email: <?php echo $row['email'] ?></p>
                <p>Age: <?php echo $row['age']?></p>
                <p>Address: <?php echo $row['address']?></p>
                <p>Phone Number: <?php echo $row['phonenumber']?></p>
                <p>Gender: <?php echo $row['gender']?></p>
                <p>Doctor Name: <?php echo $row2['fname']." ". $row2['lname']?></p>
                <p>Appointment Date: <?php echo $row['date']?></p>
                <div style="overflow: hidden;">
                        <p style="float: left;"><b>Appointment time: </b></p>
                        <p style="float: right;"><?php 
                
                    if($row['time']==1){
                        echo "10:00AM-11:30AM";
                    }
                    elseif($row['time']==2){
                        echo "11:40AM-1:00PM";
                    }
                    elseif($row['time']==3){
                        echo "4:00PM-5:30PM";
                    }
                    elseif($row['time']==4){
                        echo "5:40PM-7:00PM";
                    }
                    elseif($row['time']==5){
                        echo "7:10PM-8:30PM";
                    }
                    
                ?></p>
                    </div>
                <a href="appointmentedit.php?user_id=<?php echo $row['a_id']?>" class="messageB">Edit</a>
                
            </div>
            
        </section>
    </div>
    </div>
    <?php include "footer.php" ?>
</body>
<!-- <script src="JavaScript/chat.js"></script> -->


</html>