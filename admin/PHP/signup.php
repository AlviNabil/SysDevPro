<?php
    session_start();

    include_once  "config.php";
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $phonenumber = mysqli_real_escape_string($conn, $_POST['phonenumber']);
    $specialization = mysqli_real_escape_string($conn, $_POST['specialization']);
    $age = mysqli_real_escape_string($conn, $_POST['age']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    

    // print_r(mysqli_query($conn, "SELECT * FROM users WHERE fname=$fname"));

    

    if(!empty($fname) && !empty($lname) && !empty($email) && !empty($password) && !empty($address) && !empty($phonenumber) && !empty($specialization)){

        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            $sql = mysqli_query($conn, "SELECT email FROM doctor WHERE email = '{$email}'");
            if(mysqli_num_rows($sql)>0){
                echo "$email - This email already taken!";
            }
            else{
                if(isset($_FILES['image'])){
                    $img_name =  $_FILES['image']['name'];
                    $img_type = $_FILES['image']['type'];
                    $tmp_name = $_FILES['image']['tmp_name'];


                    $img_explode = explode('.', $img_name);
                    $img_ext = end($img_explode);
                    $extensions = ['png', 'jpeg', 'jpg'];
                    if(in_array($img_ext, $extensions ) === true){
                        $time = time();
                        
                        $new_img_name = $time.$img_name;

                        
                        if(move_uploaded_file($tmp_name, "images/".$new_img_name)){
                            $status = "Active Now";
                            $random_id = rand(time(), 100000);
                           
                            //all the users data insertion in the sql table
                            $sql2 = mysqli_query($conn, "INSERT INTO doctor (unique_id, fname, lname, email, password, address,phonenumber, specialization, age, img, status)
                                                        VALUES({$random_id},'{$fname}','{$lname}', '{$email}',  '{$password}','{$address}', {$phonenumber}, '{$specialization}', {$age},'{$new_img_name}', '{$status}' )");
                            
                        }
                        else{
                            echo "Didn't work";
                        }
                        if($sql2){
                            $sql3 = mysqli_query($conn, "SELECT * FROM doctor WHERE email = '{$email}'");
                            if(mysqli_num_rows($sql3)>0){
                                $row = mysqli_fetch_assoc($sql3);
                                $_SESSION['unique_id'] = $row['unique_id'];
                                echo "SignUp succeded";
                            }
                        }
                        else{
                            echo "Something went wrong";
                        }
                    }
                    else{
                        echo "Please Select an Image file with following extensions - jpg, png, jpeg";
                    }

                }
                else{
                    echo "Please select an Image File!";
                }
            }
        }
        else{
            echo "$email - this is not valid!";
        }

    }
    else{
        echo "All input field are required";
    }

?>