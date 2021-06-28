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
                $a_id = mysqli_real_escape_string($conn, $_GET['a_id']);
                $sql2 = mysqli_query($conn, "SELECT * FROM appointment WHERE a_id={$a_id}");
                $row2 = mysqli_fetch_assoc($sql2);
                $sql = mysqli_query($conn, "SELECT * FROM doctor WHERE unique_id = {$row2['doctor_id']} ");
                
                if(mysqli_num_rows($sql)>0){
                    $row = mysqli_fetch_assoc($sql);
                }
            ?>
                    <a href="appointmentlist.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
                    <img src="../Doctor/PHP/images/<?php echo $row['img']  ?>" alt="">
                    <div class="details">
                        <span style="font-size: 20px;">Appointment Details </span>
                        
                    </div>
            </header>
            
            <div class="chat-box">
                
                <div style="overflow: hidden;">
                        <p style="float: left;"><b>Doctor Name: </b></p>
                        <p style="float: right;"><?php echo $row['fname'] . ' ' . $row['lname'] ?></p>
                    </div>
                
                <div style="overflow: hidden;">
                        <p style="float: left;"><b>Doctor Email: </b></p>
                        <p style="float: right;"><?php echo $row['email'] ?></p>
                    </div>
                <div style="overflow: hidden;">
                        <p style="float: left;"><b>Status: </b></p>
                        <p style="float: right;"><?php echo $row['status'] ?></p>
                    </div>
                <div style="overflow: hidden;">
                        <p style="float: left;"><b>Phone Number: </b></p>
                        <p style="float: right;"><?php echo $row['phonenumber'] ?></p>
                    </div>
                    <div style="overflow: hidden;">
                        <p style="float: left;"><b>Specialization: </b></p>
                        <p style="float: right;"><?php echo $row['specialization'] ?></p>
                    </div>
                
                <img src="../Doctor/PHP/images/<?php echo $row['img']  ?>" alt="">

                <div style="overflow: hidden;">
                        <p style="float: left;"><b>Patient Name: </b></p>
                        <p style="float: right;"><?php echo $row2['fname'].' '.$row2['lname']  ?></p>
                    </div>
                    <div style="overflow: hidden;">
                        <p style="float: left;"><b>Patient Email: </b></p>
                        <p style="float: right;"><?php echo $row2['email']?></p>
                    </div>
                
                <div style="overflow: hidden;">
                        <p style="float: left;"><b>Phone Number: </b></p>
                        <p style="float: right;"><?php echo $row2['phonenumber']?></p>
                    </div>
                
                <div style="overflow: hidden;">
                        <p style="float: left;"><b>Appointment Date: </b></p>
                        <p style="float: right;"><?php echo $row2['date']?></p>
                    </div>
                    <div style="overflow: hidden;">
                        <p style="float: left;"><b>Appointment time: </b></p>
                        <p style="float: right;"><?php 
                
                    if($row2['time']==1){
                        echo "10:00AM-11:30AM";
                    }
                    elseif($row2['time']==2){
                        echo "11:40AM-1:00PM";
                    }
                    elseif($row2['time']==3){
                        echo "4:00PM-5:30PM";
                    }
                    elseif($row2['time']==4){
                        echo "5:40PM-7:00PM";
                    }
                    elseif($row2['time']==5){
                        echo "7:10PM-8:30PM";
                    }
                    
                ?></p>
                    </div>
                
                
            </div>
            
        </section>
    </div>
    </div>
    <?php include "footer.php" ?>
</body>
<!-- <script src="JavaScript/chat.js"></script> -->


</html>