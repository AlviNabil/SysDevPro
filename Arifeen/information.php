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
        <table id="customers" style="max-width: 500px;">

            <tr>
                <th>Diseases name</th>
                <th>Recorded history</th>
            </tr>

            <tbody>

                <?php

                $connect = mysqli_connect('localhost', 'root', '', 'app');
                $hospitalname = $_GET['info'];
                //echo $hospitalname;
                $query = "SELECT COUNT(`patienthistory`), `patienthistory` FROM `hospitalpatientinfo` WHERE `hospitalname`='$hospitalname' GROUP BY `patienthistory`";
                //$query1 = "SELECT COUNT(`patienthistory`), `patienthistory` FROM `hospitalpatientinfo` WHERE `hospitalname`='$hospitalname' AND `releasedate`>1 AND `dateofdeath` = 0 GROUP BY `patienthistory`";

                $result = mysqli_query($connect, $query);
                //$result1 = mysqli_query($connect,$query1);
                //print_r($result1);
                if (mysqli_num_rows($result) > 0) {
                    foreach ($result as $row) {
                ?>
                        <tr>
                            <td><?= $row['patienthistory']; ?></td>
                            <td><?= $row['COUNT(`patienthistory`)']; ?></td>

                        </tr>

                <?php
                    }
                } else {
                    echo '<script type="text/javascript">alert("No Data Found")</script>';
                }
                ?>



            </tbody>
        </table>

    </div>

    <br><br>
    <br>
    <div>
        <table id="customers" style="max-width: 500px; left: 600px; right: 0px;">

            <tr>
                <th>Diseases name</th>
                <th>Number of Death patients</th>
            </tr>

            <tbody>

                <?php

                $connect = mysqli_connect('localhost', 'root', '', 'app');
                $hospitalname = $_GET['info'];
                //echo $hospitalname;
                //$query = "SELECT COUNT(`patienthistory`), `patienthistory` FROM `hospitalpatientinfo` WHERE `hospitalname`='$hospitalname' GROUP BY `patienthistory`";
                $query1 = "SELECT COUNT(`patienthistory`), `patienthistory` FROM `hospitalpatientinfo` WHERE `hospitalname`='$hospitalname'  AND `dateofdeath` > 0 GROUP BY `patienthistory`";

                //$result = mysqli_query($connect,$query);
                $result1 = mysqli_query($connect, $query1);
                //print_r($result1);
                if (mysqli_num_rows($result1) > 0) {
                    foreach ($result1 as $row1) {
                ?>
                        <tr>
                            <td><?= $row1['patienthistory']; ?></td>
                            <td><?= $row1['COUNT(`patienthistory`)']; ?></td>
                        </tr>

                <?php
                    }
                } else {
                }
                ?>



            </tbody>
        </table>

    </div>

</body>

</html>