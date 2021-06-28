
<!DOCTYPE html>
<html>
    <head>
    <title>Hospital Details</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <header >
            <h2 ><p style="margin-top: 10px;"><a href="../Patient/firstPage.php" style="color: #fff;">DoctorTalks</a></p></h2>
        </header>
        <div class="nav">
        
                
        </div>
        <br><br><br>
        <div>
        <table id="customers">
            
                <tr>
                <th>Hospital Name</th>
                <th>ICU Quanity</th>
                <th>Bed Quanity</th>
                <th>Doctor Quanity</th>
                <th>Fill Up ICU</th>
                <th>Fill Up Bed</th>
                <th>Available ICU</th>
                <th>Available Bed</th>
                <th>Hospital Address</th>
                <th>Statically Data</th>
                <th>Seat Details</th>
                <th>Doctor Info</th>
                </tr>
                <br>
            
            <tbody>
            <?php
                $connect = mysqli_connect("localhost","root","","app");
                $query = "SELECT * FROM hospitalkuet";
                $result = mysqli_query($connect,$query);

                if(mysqli_num_rows($result)>0)
                {
                    foreach($result as $row){
                    ?>
                    <tr>
                    
                    <td><?= $row['hospitalname']; ?></td>
                    <td><?= $row['icuquantity']; ?></td>
                    <td><?= ($row['bedquantity']); ?></td>
                    <td><?= ($row['doctor']); ?></td>
                    <td><?= ($row['fillicu']); ?></td>
                    <td><?= ($row['fillbed']); ?></td>
                    <td><?= abs(floor(($row['icuquantity'])-($row['fillicu']))); ?></td>
                    <td><?= abs(floor(($row['bedquantity'])-($row['fillbed']))); ?></td>
                    <td><?= ($row['address']); ?></td>
                    <td>
                        <button>
                            <a href="information.php?info=<?= $row['hospitalname']; ?>"><?= $row['hospitalname']; ?></a>
                        </button>
                    </td>
                    <td>
                        <button>
                            <a href="expensedetails.php?expense=<?= $row['hospitalname']; ?>"><?= $row['hospitalname']; ?></a>
                        </button>
                    </td>
                    <td>
                        <button>
                            
                            <a href="doctorname.php?state=<?php echo $row['hospitalname'];?>">Doctor Info</a>
                        </button>
                    </td>
                    </tr>
                    <?php
                    }
                }
                else{
                    echo "No data found";
                }
                ?>



        </tbody>
        </table>

        </div>
    </body>

</html>



