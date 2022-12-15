<?php 
    session_start();

    if (!isset($_SESSION['email'])) {
        header("Location: account/login.php?paper=1&msg=User is not authenticated");
    }

?>