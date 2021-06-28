<?php
while ($row = mysqli_fetch_assoc($sql)) {
    

    
    $date = date("Y-m-d");
    $period = abs(floor((strtotime($date)-strtotime($row['l_date']))/(60*60*24)));
    if($period>=112){
        $output .= '<a href="donorprofile.php?user_id='.$row['b_id'].'">
        <div class="content">
            <div class="details">
                <span>' . $row['fname'] . " " . $row['lname'] . ' <br></span>
                <span class="smaller">Email: ' . $row['email'] . '<br></span>
                <span class="smaller">Blood Group: ' . $row['bgroup'] . '</span>
            </div>
        </div>

    </a>';
    }

  
    
}