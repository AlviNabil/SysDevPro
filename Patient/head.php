<header>
    <nav>
        <div class="logo">DoctorTalks</div>
        <label for="btn" class="icon" class="mini">
            <span class="fas fa-bars"></span>
        </label>
        <input type="checkbox" id="btn" class="mini">
        <ul>
            <li><a href="firstPage.php">Home</a></li>
            <li>
                <label for="btn-1" class="show">Administration +</label>
                <a href="#">Administration</a>
                <input type="checkbox" id="btn-1" class="mini">
                <ul>
                    
                    <li> <a href="../Arifeen/admin.php">Hospital Registration</a></li>
                    <li><a href="../Arifeen/adminlogin.php">Hospital Login</a></li>
                    
                </ul>
            </li>
            <li>
                <label for="btn-2" class="show">Services +</label>
                <a href="#">Services</a>
                <input type="checkbox" id="btn-2" class="mini">
                <ul>
                    <li><a href="donorlist.php">Looking for Blood</a></li>
                    <li> <a href="bloodlist.php">Want to be a donor</a></li>
                    <li><a href="../Arifeen/hospitalprofile.php">Hospital Profile</a></li>
                    <li>
                        <label for="btn-3" class="show">More +</label>
                        <a href="#">More
                            <span><i class="fas fa-plus"></i>
                            </span>
                        </a>
                        <input type="checkbox" id="btn-3" class="mini">
                        <ul>

                            <?php
                            if (!isset($_SESSION['unique_id'])) {
                            } else {
                                include_once "PHP/config.php";
                                $sql0 = "SELECT * from patient where unique_id = '{$_SESSION['unique_id']}' ";
                                $query0 = mysqli_query($conn, $sql0);
                                if (mysqli_num_rows($query0) > 0) {
                                    $row0 = mysqli_fetch_assoc($query0);
                                    if ($row0['member'] != "active") { ?>
                                        <li><a href="payment.php">Be a member</a></li>
                                        <li><a href="link.php">Available Discounts</a></li>
                                        <li><a href="link.php">Special Features</a></li> <?php
                                                                            } else {
                                                                                ?>
                                        <li><a href="memstatus.php">Membership Status</a></li>
                                        <li><a href="discounts.php">Available Discounts</a></li>
                                        <li><a href="specialfeatures.php">Special Features</a></li> <?php
                                                                            }
                                                                        }
                                                                    }
                                                                                ?>

                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="PHP/logout.php?logout_id=<?php echo $row['unique_id'] ?>" class="loginH" style= "visibility:hidden;" >Logout</a></li>
                

        </ul>
    </nav>
</header>