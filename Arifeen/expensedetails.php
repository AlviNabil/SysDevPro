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
                <th>Equipment</th>
                <th>Floor No</th>
                <th>Total Bed</th>
                <th>Fill Bed No</th>
                <th>Cost</th>
                <th>Facilites</th>

                
                </tr>
            
            <tbody>

<?php
 
$connect = mysqli_connect('localhost', 'root', '', 'app');
$hospitalname = $_GET['expense'];
    $query = "SELECT COUNT(`floar`), `bed`,`floar`,`fillbed`,`totalbed`,`cost`,`facilities` FROM `hospitalkuetdetails` WHERE `hospitalname`='$hospitalname' AND `bed`='Bed' GROUP BY `floar`";
    //$query1 = "SELECT COUNT(`patienthistory`), `patienthistory` FROM `hospitalpatientinfo` WHERE `hospitalname`='$hospitalname' AND `releasedate`>1 AND `dateofdeath` = 0 GROUP BY `patienthistory`";

    $result = mysqli_query($connect,$query);
    //$result1 = mysqli_query($connect,$query1);
    //print_r($result1);
    if(mysqli_num_rows($result)>0){
        foreach($result as $row)
        {
            ?>
            <tr>
            <td><?= $row['bed']; ?></td>
            <td><?= $row['floar']; ?></td>
            <td><?= $row['totalbed']; ?></td>
            <td><?= $row['fillbed']; ?></td>
            <td><?= $row['cost']; ?></td>
            <td><?= $row['facilities']; ?></td>
            
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
        <br><br>

        <div>
        <table id="customers">
            
                <tr>
                <th>Equipment</th>
                <th>Floor No</th>
                <th>Total ICU</th>
                <th>Fill ICU No</th>
                <th>Cost</th>
                <th>Facilites</th>

                
                </tr>
            
            <tbody>

<?php
 
$connect = mysqli_connect('localhost', 'root', '', 'app');
$hospitalname = $_GET['expense'];
    $query = "SELECT COUNT(`floar`), `bed`,`floar`,`fillbed`,`totalbed`,`cost`,`facilities` FROM `hospitalkuetdetails` WHERE `hospitalname`='$hospitalname' AND `bed`='ICU' GROUP BY `floar`";
    //$query1 = "SELECT COUNT(`patienthistory`), `patienthistory` FROM `hospitalpatientinfo` WHERE `hospitalname`='$hospitalname' AND `releasedate`>1 AND `dateofdeath` = 0 GROUP BY `patienthistory`";

    $result = mysqli_query($connect,$query);
    //$result1 = mysqli_query($connect,$query1);
    //print_r($result1);
    if(mysqli_num_rows($result)>0){
        foreach($result as $row)
        {
            ?>
            <tr>
            <td><?= $row['bed']; ?></td>
            <td><?= $row['floar']; ?></td>
            <td><?= $row['totalbed']; ?></td>
            <td><?= $row['fillbed']; ?></td>
            <td><?= $row['cost']; ?></td>
            <td><?= $row['facilities']; ?></td>
            
            </tr>
            
            <?php
                    }
                }
                else{
                    
                }
                ?>



        </tbody>
        </table>

        </div>


        </body>
        </html>
