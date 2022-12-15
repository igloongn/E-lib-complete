<?php 
    session_start();

    include '../../backend/db.php';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email = $_POST['email'];
        $email = mysqli_real_escape_string($conn, $email);
        $password = $_POST['password'];
        // $password = mysqli_real_escape_string($conn, $password);        
        $paper = $_POST['paper'];
        $paper = mysqli_real_escape_string($conn, $paper);
    
         // Check if user  exist in the database
         $query = "SELECT * FROM `users` WHERE email='$email'";
    
         $result = mysqli_query($conn, $query);
         if (!$result) {
             die("Error in query " . mysqli_error($conn));
         }
         $verification = mysqli_num_rows($result);

         // Converts $query to boolean
     
         if ($verification !== 1) {
            header('location: login.php?paper='.$paper.'&msg=User Does Not Exist');
         } else {
             if ($row = mysqli_fetch_assoc($result)) {
                echo $password;
                echo '<br>';
                echo $row['password'];
                echo '<br>';

                $hashedPwdCheck = password_verify($password, $row['password']);
                
                 echo $hashedPwdCheck;
                 if ($hashedPwdCheck == false) {
                      header('location: login.php?paper=1&msg=Invalid Password');
                    } elseif ($hashedPwdCheck == true) {
                        //Logs the user in
                     $_SESSION['id'] = $row['id'];
                     $_SESSION['email'] = $row['email'];
                    //  Login Successful
                    header('location: ../dashboard.php');
     
                 }
             }
         }
    
    }

?>