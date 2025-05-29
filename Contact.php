<?php
    include('connection.php');
    if (isset($_POST['submit'])) {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        
        
        $sql = "Select * from customerquery where firstname='$firstname'";
        $result = mysqli_query($conn, $sql); 
        $count_user = mysqli_num_rows($result);  

        $sql = "Select * from signup where email='$email'";
        $result = mysqli_query($conn, $sql); 
        $count_user = mysqli_num_rows($result);  

        
        
        
                    
                // Password Hashing is used here. 
                $sql = "INSERT INTO customerquery(firstname, lastname, email, message) VALUES('$firstname', '$lastname','$email', '$message')";
        
                $result = mysqli_query($conn, $sql);
        
                if ($result) {
                    header("Location: response.php");
                }
            } 
            // else { 
            //     echo  '<script>
            //             alert("Passwords do not match")
            //             window.location.href = "signform.php";
            //         </script>';
            // }      
        // }  
        // else{  
        //     if($count_user>0){
        //         echo  '<script>
        //                 window.location.href = "signform.php";
        //                 alert("Username already exists!!")
        //             </script>';
        //     }
        //     if($count_email>0){
        //         echo  '<script>
        //                 window.location.href = "signform.php";
        //                 alert("Email already exists!!")
        //             </script>';
        //     }
        // }     
    // }
    ?>