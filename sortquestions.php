<!DOCTYPE html>
    <?php 
    include('backend/db.php');
    if (isset($_GET['dept'])  ) {
        $dept = $_GET['dept']
    ?>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <title>Questions</title>
            <meta name="viewport" content="width=device-width,initial-scale=1">
            <meta name="description" content="Shelly - Website">
            <meta name="author" content="merkulove">
            <meta name="keywords" content="">
            <link rel="icon" href="assets/img/favicon.png">
            <link rel="stylesheet" type="text/css" href="assets/css/main.min.css">
            <link rel="stylesheet" type="text/css" href="assets/css/button.min.css">
        </head>
        <body>
            <div class="wrapper">
                <?php 
                    include("include/header.php");
                ?>
                <section class="pager-section">
                    <div class="container">
                        <div class="pager-content text-center">
                            <h2>Past Questions (Dept)</h2>
                            <ul>
                                <li>
                                    <a href="index.php" title="">Home</a>
                                </li>
                                <li>
                                    <span>Questions</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </section>
                <!--pager-section end-->
                <section class="page-content">
                    <div class="container">
                        <div class="course-section">
                            <div class="courses-list" style="min-height: 50vh;">
                                <div class="row">
                                    <?php 
                                        $count_query = mysqli_query($conn, "SELECT count(*) from questions WHERE departmentID='$dept' ORDER BY id desc");
                                        $row = mysqli_fetch_array($count_query);
                                        $total = $row[0];
                                        // echo $total;
                                        if ($total > 0) {
                                            $query ="SELECT * FROM `questions` WHERE departmentID='$dept'";
                                            $result = mysqli_query($conn, $query);
                                            // print_r($result);
                                            if (!$result) {
                                                die("Error in Query<br>".mysqli_error($conn));
                                            }
                                            // This is for the count
                                            // echo "Total rows: " . $total;
                                            while ($rows = mysqli_fetch_assoc($result)) {
                                                $id = $rows['id'];
                                                $id = htmlentities($id);
                                                $course_name = $rows['course_name'];
                                                $course_name = htmlentities($course_name);
                                                $date_created = $rows['date_created'];
                                                $levelID = $rows['levelID'];
                                                $levelID = htmlentities($levelID);
                                                $departmentID = $rows['departmentID'];
                                                $departmentID = htmlentities($departmentID);
                                                $author = $rows['posted_by'];
                                                $author = htmlentities($author);
                                                // $fulltime = $rows['fulltime'];
                                                // $fulltime = htmlentities($fulltime);
                                                $year = $rows['year'];
                                                $year = htmlentities($year);
                                                $image = $rows['image'];
                                                $image = htmlentities($image);
                                                $course_code = $rows['course_code'];
                                                $course_code = htmlentities($course_code);
                                    ?>
                                    <div class="col-lg-6">
                                        <div class="course-card">
                                            <div class="d-flex flex-wrap align-items-center">
                                                <ul class="course-meta">
                                                <?php echo $year?>
                                                </ul>
                                                <span style="display: block;">
                                                    <a href="admin/pdfs/<?php echo $pdf; ?>">Download Now</a>
                                                </span>
                                            </div>
                                            <h3>
                                                <a href="event-single.html" title=""><?php echo $course_name?></a>
                                            </h3>
                                            <h3>
                                                <a href="event-single.html" title=""><?php echo $course_code?></a>
                                            </h3>
                                            <div class="d-flex flex-wrap">
                                                <div class="posted-by">
                                                    <a href="#" title="">Posted by Admin</a>
                                                </div>
                                                <span class="locat">
                                                <span style="display: block;"><?php 
                                                    $dquery = "SELECT name FROM `dept` where id='$departmentID'";
                                                    $dresult = mysqli_query($conn, $dquery);
                                                    while ($row = $dresult->fetch_assoc()) {
                                                        echo $row['name']."<br>";
                                                    }
                                                ?></span>
                                                <span> <?php 
                                                $dquery = "SELECT name FROM `level` where id='$levelID'";
                                                $dresult = mysqli_query($conn, $dquery);
                                                while ($row = $dresult->fetch_assoc()) {
                                                    echo $row['name']." Level  <br>";
                                                }
                                                ?></span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <?php 
                                            }
                                        }
                                        else {
                                    ?>
                                            <h1 style="color:black; font-size: 30px; text-align: center; font-weight: bold;">Sorry, there is NO result on <?php
                                                $dquery = "SELECT name FROM `dept` where id=$dept";
                                                $dresult = mysqli_query($conn, $dquery);
                                                while ($row = $dresult->fetch_assoc()) {
                                                    echo $row['name'];
                                                }?> level past Questions at the moment</span>
                                    <?php
                                        }
                                    ?>
                                </div>                            
                            </div>
                            <!--courses-list end-->
                        </div>
                    </div>
                </section>
                <!--page-content end-->
                <?php 
                    include('include/join_us.php')
                ?>
                <?php 
              include 'include/footer.php';
                ?>
            </div>
            <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous">
            </script>
            <script type="text/javascript"src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js">
            </script>
            <script src="assets/js/bundle.min.js"></script>
            <script src="assets/js/contactEmail.js"></script>
        </body>
    </html>
    <?php 
    }
    else {
        header("Location: index.php?msg='Page Does Not Exist'");
    }
    ?>

