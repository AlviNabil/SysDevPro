

<?php
    session_start();
    $connect = mysqli_connect('localhost','root','','app');
    $query = "SELECT * FROM `hospitalkuet`";
    $result = mysqli_query($connect,$query);
    if(mysqli_num_rows($result)>0){
        foreach($result as $row)
        {
            $name = $row['hospitalname'];
            echo '<a href="doctorname.php?state='.$name.'">'.$row['hospitalname'].'</a>';
            echo "<br>";
        }
    }
?>



