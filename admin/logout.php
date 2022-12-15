<?php 
    session_start();
    session_destroy();
    header("Location: account/login.php?paper=1&msg='User is not authenticated'");

?>