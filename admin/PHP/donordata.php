<?php
while ($row = mysqli_fetch_assoc($sql)) {
    
    $output .= '<a href="donorProfile.php?user_id='.$row['b_id'].'">
             <div class="content">
                 <div class="details">
                     <span>' . $row['fname'] . " " . $row['lname'] . ' <br></span>
                     <span class="smaller">Email: ' . $row['email'] . '<br></span>
                 </div>
             </div>
         
            
             </div>
         </a>';
    
}