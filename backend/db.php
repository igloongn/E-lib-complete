<?php 
    $username = 'root';
    $password = '';
    $host = 'localhost';
    $db_name = 'pastquestion';
    $conn = mysqli_connect($host, $username, $password, $db_name);
    if (!$conn) {
        die('There is an error somewhere');
    }




    // if ( idExists($_GET['id'] ) {
    //     //  run normal page function
    // }else{
    //  header("HTTP/1.0 404 Not Found");
    //  // print off page with not found information
    // }




    
    // $username = 'epiz_32538350';
    // $password = 'TXz4a8gjvwg';
    // $host = 'sql300.epizy.com';
    // $db_name = 'epiz_32538350_kadu';
    // $conn = mysqli_connect($host, $username, $password, $db_name);
    // if (!$conn) {
    //     die('There is an error somewhere');
    // }
?>

