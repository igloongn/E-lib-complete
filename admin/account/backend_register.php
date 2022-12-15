<?php 

    include '../../backend/db.php';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // This is for Register
    $email = $_POST['email'];
    $password = $_POST['password'];

    date_default_timezone_set('Europe/London');
    $datestamp = date('m/d/Y h:i:s a', time());
    
    
    // $datestamp = date("Y-m-d H:i:s");

    // check
    $sql = "SELECT * FROM users  WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        mysqli_error($conn);
    }
    // This Occurs when the Query is a success
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0) {
        header('location: su.php?paper=1&msg=Email already in use');
    } else {
        // This is where the creation of the New User Occurs


        // This is the command that hash the password
        $enc_password = password_hash($password, PASSWORD_DEFAULT);
        $query = "insert into users (email, password) values ('$email', '$enc_password')";
        $query = mysqli_query($conn, $query);
        if (!$query) {
            die (mysqli_error($conn));
        } else {
            // This is Where we make use of the Email Sender

            // This is the first Level of Authentication
            // $otp = rand(100000, 999999);
            // $_SESSION['otp'] = $otp;
            // $_SESSION['email'] = $email;
            // $_SESSION['date'] = $datestamp;

            // require "../email/Mail/phpmailer/PHPMailerAutoload.php";
            // $mail = new PHPMailer;
            // $mail->isSMTP();
            // $mail->Host = 'smtp.gmail.com';
            // $mail->Port = 587;
            // $mail->SMTPAuth = true;
            // $mail->SMTPSecure = 'tls';

            // // This is for the Sender
            // $mail->Username = 'kingpeace12345@gmail.com';
            // $mail->Password = 'Temitope1234';

            // // This is for the Client/Reciever
            // $mail->setFrom('email account', 'OTP Verification');
            // $mail->addAddress($_POST["reg_email"]);

            // $mail->isHTML(true);
            // $mail->Subject = "Your verification code";
            // $mail->Body = "Dear user, We received your request for a verification code</p>
            // <h3>Your verify OTP code is $otp <br></h3>
            // <br><br>
            // <p>With regrads,</p>
            // <b>...................</b>";
                header('location: login.php?paper=1&msg=User has been created');
        }
    }

    }

?>