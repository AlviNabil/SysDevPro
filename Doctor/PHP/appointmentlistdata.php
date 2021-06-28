<?php
while ($row = mysqli_fetch_assoc($sql)) {
    
    $sql2 = "SELECT * FROM patient where unique_id = {$row['patient_id']}";
    $query2 = mysqli_query($conn, $sql2);
    $row2 = mysqli_fetch_assoc($query2);
    if(mysqli_num_rows($query2)>0){
    }


    $output .= '<a href="appointmentdet.php?a_id='.$row['a_id'].'">
             <div class="content">
                 <div class="details">
                     <span>' . $row2['fname'] . " " . $row2['lname'] . ' <br></span>
                     <span> Date: ' . $row['date'] .  '</span>                     
                 </div>
             </div>
             </div>
         </a>';
    
}