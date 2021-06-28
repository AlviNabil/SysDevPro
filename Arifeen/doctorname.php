<!DOCTYPE html>
<html>
    <head>
    <title>Hospital Details</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
    <div>
        <table id="customers">
            
                <tr>
                <th>Doctor Name</th>
                <th>Designation</th>
                <th>Fields of Work</th>
                <th>Working Time</th>
                </tr>
            
            <tbody>

<?php
 
$connect = mysqli_connect('localhost', 'root', '', 'app');
$hospitalname = $_GET['state'];
//echo $hospitalname;

    $query = "SELECT * FROM `hospitaldoctorinfo` WHERE `hospitalname` = '$hospitalname'";
    $result = mysqli_query($connect,$query);
    if(mysqli_num_rows($result)>0){
        foreach($result as $row)
        {
            ?>
            <tr>
            <td><?= $row['doctorname']; ?></td>
            <td><?= $row['designation']; ?></td>
            <td><?= $row['fieldsofwork']; ?></td>
            <td><?= $row['workingtime']; ?></td>
            </tr>
            
            <?php
                    }
                }
                else{
                    echo '<script type="text/javascript">alert("No Data Found")</script>';
                }
                ?>



        </tbody>
        </table>

        </div>
    </body>

</html>



