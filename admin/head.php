<header>
        <nav>
            <div class="logo">DoctorTalks</div>
            <label for="btn" class="icon" class="mini">
                <span class="fas fa-bars"></span>
            </label>
            <input  type="checkbox" id="btn" class="mini">
            <ul>
                <li><a href="firstpage.php">Home</a></li>
                <li>
                    <label for="btn-1"  class="show" style="visibility: hidden;">Doctors +</label>
                    <a href="#" style="visibility: hidden;">Doctors</a>
                    <input type="checkbox" id="btn-1" class="mini">
                    <ul>
                       
                    </ul> 
                </li>
                <li>
                    <label for="btn-2"  class="show" style="visibility: hidden;">Services +</label>
                    <a href="#" style="visibility: hidden;">Services</a>
                    <input type="checkbox" id="btn-2" class="mini">
                     
                </li>
               
                <li><a href="PHP/logout.php?logout_id=<?php echo $row['unique_id'] ?>" class="loginH" style= "visibility: hidden;" >Logout</a></li>
                
            </ul>
        </nav>    
    </header>       