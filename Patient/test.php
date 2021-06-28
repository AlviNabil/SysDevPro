<?php
session_start();
if (!isset($_SESSION['unique_id'])) {
    header("location: login.php");
}
?>
<?php include "header.php"?>



  <body style="height:100%; width:100%">
    <div id="header" style="position:absolute; top:0px; left:0px; height:100px; right:0px;overflow:hidden;"> 
      
    <header>
        <nav>
            <div class="logo">LogoHere</div>
            <label for="btn" class="icon">
                <span class="fas fa-bars"></span>
            </label>
            <input type="checkbox" id="btn">
            <ul>
                <li><a href="#">Home</a></li>
                <li>
                    <label for="btn-1"  class="show">Doctors +</label>
                    <a href="#">Doctors</a>
                    <input type="checkbox" id="btn-1">
                    <ul>
                        <li><a href="#">Elements</a></li>
                        <li> <a href="#">Icons</a></li>
                        <li><a href="#">Pages</a></li>
                    </ul> 
                </li>
                <li>
                    <label for="btn-2"  class="show">Services +</label>
                    <a href="#">Services</a>
                    <input type="checkbox" id="btn-2">
                    <ul>
                        <li><a href="#">Consult Doctor</a></li>
                        <li> <a href="#">FVC</a></li>
                        <li>
                            <label for="btn-3"  class="show">More +</label>
                            <a href="#">More
                                <span><i class="fas fa-plus"></i>
                                </span>
                            </a>
                            <input type="checkbox" id="btn-3">
                            <ul>
                                <li><a href="#">This test</a></li>
                                <li><a href="#">That test</a></li>
                                <li><a href="#">Another test</a></li>
                            </ul>
                        </li>
                    </ul> 
                </li>
                <li><a class="login" href="index2.php">Login</a></li>
                <li><a class="login" href="#">Register</a></li>

            </ul>
        </nav>    
    </header>

    </div> 
    <div id="content" style="position:absolute; top:200px; bottom:200px; left:0px; right:0px; overflow:auto;"> 
    <div class="mid">
        <div class="wrapper">
            <section class="users">
                <header>
                    <?php
                    include_once "PHP/config.php";
                    $sql = mysqli_query($conn, "SELECT * FROM patient WHERE unique_id = {$_SESSION['unique_id']} ");
                    if (mysqli_num_rows($sql) > 0) {
                        $row = mysqli_fetch_assoc($sql);
                    }
                    ?>
                    <div class="content">
                        <a href="firstpage.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
                        <img src="PHP/images/<?php echo $row['img']  ?>" alt="">
                        <div class="details">
                            <span><?php echo $row['fname'] . " " . $row['lname'] ?></span>
                            <p><?php echo $row['status'] ?></p>
                        </div>
                    </div>
                    <a href="PHP/logout.php?logout_id=<?php echo $row['unique_id'] ?>" class="logout">Logout</a>
                </header>

                <div class="search">
                    <span class="text">Select an user to start chat</span>
                    <input type="text" placeholder="Enter name to search...">
                    <button><i class="fas fa-search"></i></button>
                </div>
                <div class="users-list">

                </div>

            </section>
        </div>
    </div>
    </div> 
    <div id="footer" style="position:absolute; bottom:0px; height:200px; left:0px; right:0px; overflow:hidden;"> 
      <div>
      <footer>
            <div class="main-content">
              <div class="left box">
                <h2>About us</h2>
                <div class="content">
                  <p>CodinNepal is a YouTube channel whet, </p>
                  <div class="social">
                    <a href="#"><span class="fab fa-facebook-f"></span></a>
                    <a href="#"><span class="fab fa-twitter"></span></a>
                    <a href="#"><span class="fab fa-instagram"></span></a>
                    <a href="#"><span class="fab fa-youtube"></span></a>
                  </div>
                </div>
              </div>
      
              <div class="center box">
                <h2>Address</h2>
                <div class="content">
                  <div class="place">
                    <span class="fas fa-map-marker-alt"></span>
                    <span class="text">Teligati, Khulna</span>
                  </div>
                  <div class="phone">
                    <span class="fas fa-phone-alt"></span>
                    <span class="text">+88019-983749</span>
                  </div>
                  <div class="email">
                    <span class="fas fa-envelope"></span>
                    <span class="text">bill@gmail.com</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="bottom">
              <center>
                <span class="credit">Created By <a href="#">AlviNabil</a> | </span>
                <span class="far fa-copyright"></span><span> 2020 All rights reserved.</span>
              </center>
            </div>
          </footer>
      </div>
    </div>
  </body>
</html> 