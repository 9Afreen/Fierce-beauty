<?php
    include('connection.php');
    if (isset($_POST['submit'])) {
        $username = $_POST['user'];
        $email = $_POST['email'];
        $password = $_POST['pass'];
        $cpassword = $_POST['cpass'];
        
        
        $sql = "Select * from signup where username='$username'";
        $result = mysqli_query($conn, $sql); 
        $count_user = mysqli_num_rows($result);  

        $sql = "Select * from signup where email='$email'";
        $result = mysqli_query($conn, $sql); 
        $count_user = mysqli_num_rows($result);  

        
        
        if($count_user == 0 && $count_email==0){  
            if($password == $cpassword) {
                $hash = password_hash($password, PASSWORD_DEFAULT);
                    
                // Password Hashing is used here. 
                $sql = "INSERT INTO signup(username, email, password) VALUES('$username', '$email','$hash')";
        
                $result = mysqli_query($conn, $sql);
        
                if ($result) {
                    header("Location: welcome.php");
                }
            } 
            else { 
                echo  '<script>
                        alert("Passwords do not match")
                        window.location.href = "signform.php";
                    </script>';
            }      
        }  
        else{  
            if($count_user>0){
                echo  '<script>
                        window.location.href = "signform.php";
                        alert("Username already exists!!")
                    </script>';
            }
            if($count_email>0){
                echo  '<script>
                        window.location.href = "signform.php";
                        alert("Email already exists!!")
                    </script>';
            }
        }     
    }
    ?>