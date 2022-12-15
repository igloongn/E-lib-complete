<!DOCTYPE html>
<?php 
    include('backend/db.php');
    include('include/functions.php');

    ?>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <title><?php echo 'Files' ?></title>
            <meta name="viewport" content="width=device-width,initial-scale=1">
            <meta name="description" content="CSC">
            <meta name="author" content="Kadu">
            <meta name="keywords" content="">
            <link rel="icon" href="assets/img/favicon.png">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
            <link rel="stylesheet" type="text/css" href="assets/css/button.min.css">
            <link rel="stylesheet" href="assets/css/style.css">
            <link rel="stylesheet" href="assets/css/style2.css">
            <link rel="stylesheet" href="assets/css/main.min.css">
        </head>
        <body class="app">
            <div class="wrapper">
            <?php 
                if (!isset($_GET['paper'])) {
                        header("location:index.php?paper=1");
                    }
                if ($_GET['paper'] == 1 or $_GET['paper'] == 2 ) {
                    if ($_GET['paper'] == 1) {
                        $wordID = $_GET['paper'];
                        $word = 'Materials';
                        $notword = 'Past Questions';
                        $notwordID = '2';
                    }
                    if ($_GET['paper'] == 2) {
                        $wordID = $_GET['paper'];
                        $word = 'Past Questions';
                        $notword = 'Materials';
                        $notwordID = '1';
                    }
                } else{
                    header("location:index.php?paper=1&msg=sorry that page does not exist");
                }
            
            ?>
            <?php 
                include 'include/header.php';
                banner( $word , 'Questions', $_GET['paper'])
            ?>
                <div class="container-wide">
                    <section class="page-content">
                        <div class="container">
                            <div class="course-section">
                                <div class="courses-list">
                                    <div class="row">
                                        <?php 
                                            $facultyID = $_GET['faculty'];
                                            $levelID = $_GET['level'];
                                            $departmentID = $_GET['dept'];
                                            $paperID = $_GET['paper'];
                                            $count_query = mysqli_query($conn, "SELECT count(*) from questions where facultyID = '$facultyID' and departmentID = '$departmentID' and levelID = '$levelID' and paperID = '$paperID'");
                                            $row = mysqli_fetch_array($count_query);
                                            $total = $row[0];
                                            // echo $total;
                                            echo '<br>';
                                            // echo $total;
                                            if ($total > 0) {
                                                $query ="SELECT * FROM `questions` where facultyID = '$facultyID' and departmentID = '$departmentID' and levelID = '$levelID' and paperID = '$paperID' ORDER BY id desc";
                                                $result = mysqli_query($conn, $query);
                                                // print_r($result);
                                                if (!$result) {
                                                    die("Error in Query<br>".mysqli_error($conn));
                                                }
                                                // This is for the count
                                                // echo "Total rows: " . $total;
                                                while ($rows = mysqli_fetch_assoc($result)) {
                                                    $id = $rows['id'];
                                                }
                                            }