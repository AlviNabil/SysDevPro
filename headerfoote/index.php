<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Patient</title>
    <link rel="stylesheet" href="css2/style.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.css">
    <!-- <link rel="stylesheet" href="css/fontawesome.min.css"> -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="css2/style2.css">
<script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=dLX-KKS4d0j8cfApJCagsYuyLdsQ5NfZMv3vd8GbxhNTKU5UfeYIwaeV3Ou4jliMxAzfSHJvTj06xqOzyina4JPSFbyMlkiHwHu6nfa6ZZnS8udtCO-hHPSIuYE-p6U2htgdOUbq_TLDFZxLErXmzga-3Kb-YhtxjyJzROuAY_ePw-idlh0m7RR6U0bV_L9mgLvcql8UCoIhmbKAezG6WFrmIkb0G9Ve48QuA4nFRMKym3fihE5sNGBObxCVEzs3aO3alVFW6nR5t_NZxjG5rAj1mqHNPldf19dtjHA-v1b1feSg8cafUFRM6d6YwzEBH_s5mBQjPO5oorE2D6LKaN-zBc0WO86LHXojDGuA4XBGR5PlseU_hjSur-rUzY-mMJoTCEH9jXU54-u3mqIO-WvesZgOb3sxuxnXfaU9giyrz1L0mn5k7oAWDvs1RDs1erlaamILXhwif9EVpSWtSQ" charset="UTF-8"></script><link rel="stylesheet" crossorigin="anonymous" href="https://gc.kis.v2.scr.kaspersky-labs.com/E3E8934C-235A-4B0E-825A-35A08381A191/abn/main.css?attr=aHR0cHM6Ly9kb2MtMDQtOTgtZG9jcy5nb29nbGV1c2VyY29udGVudC5jb20vZG9jcy9zZWN1cmVzYy9uNnRha2xhbjQ3bjY1amE5bHIwYzdjbDc0MHIzNjFnYi9xN3JvYzhlNzk0cm8xZ2R1YTRrcGpkdmQxbmUxMGExcS8xNjIzMzM5MDAwMDAwLzEyOTA0OTc5ODUxNzU1ODQzMzMzLzEyOTA0OTc5ODUxNzU1ODQzMzMzLzFhUGFFZ0pIb09OV1pDUGVhSW9jazdpQUcybXNzLURPMD9lPWRvd25sb2FkJmF1dGh1c2VyPTAmbm9uY2U9NXNuZ3FoMGxlajEybSZ1c2VyPTEyOTA0OTc5ODUxNzU1ODQzMzMzJmhhc2g9bWM3bHJwcWQxdTlpZW90aWVubWM2MGVndWduaWloaWQ"/></head>


<body>
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
    <!-- <h1>This is the heading</h1>
    <p>This is a new line</p> -->

    
        
        <?php include 'user.php' ?>

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
</body>
</html>