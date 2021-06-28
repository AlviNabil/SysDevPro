<?php
while ($row = mysqli_fetch_assoc($sql)) {
    

    ($row['status'] == "Offline Now") ? $offline = "offline" : $offline = "";


    $output .= '<a href="doctorProfile.php?user_id='.$row['unique_id'].'">
             <div class="content">
                 <img src="../Doctor/PHP/images/' . $row['img'] . '" alt="">
                 <div class="details">
                     <span>' . $row['fname'] . " " . $row['lname'] . ' <br></span>
                     <span class="smaller">Email: ' . $row['email'] . '<br></span>
                 </div>
             </div>
             <div class="status-dot '.$offline.'">
                 <i class="fas fa-circle"></i>
             </div>
         </a>';
    
}