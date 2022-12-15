<!DOCTYPE html>
<?php 
    include('backend/db.php');
    include('include/functions.php');
?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>About</title>
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="description" content="Shelly - Website">
        <meta name="author" content="merkulove">
        <meta name="keywords" content="">
        <link rel="icon" href="assets/img/favicon.png">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="assets/css/button.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/style2.css">
        <link rel="stylesheet" href="assets/css/main.min.css">
    </head>
    <body class="app">
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
        <div class="wrapper">
          <?php 
            include 'include/header.php';
            banner('About Us', 'about',  $_GET['paper']);
          ?>
            <div class="container-wide">

                <!--pager-section end-->
                <section class="about-page-content">
                    <div class="container">
                        <div class="abt-page-row">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-md-6">
                                    <div class="section-title">
                                        <h2>Welcome to
                                            <br>
                                            <span>University Of Benin E-Library </span> 
                                        </h2>
                                        <p class="mw-100">Yohas was born to make academic resources accessible for everyone in the University of Benin.
And we mean everyone. No matter what faculty or department you’re from, Yohas online library has materials on your course of study.</p>
                                        <!-- <a href="allquestions.php" title="" class="btn-default">View All
                                            <i class="fa fa-long-arrow-alt-right"></i>
                                        </a> -->
                                    </div>
                                    <!--section-title end-->
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="avt-img">
                                        <img src="assets/img/abt1.png" alt="">
                                    </div>
                                    <!--avt-img end-->
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-md-6">
                                    <div class="avt-img">
                                        <img src="assets/img/abt2.png" alt="">
                                    </div>
                                    <!--avt-img end-->
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="act-inffo">
                                        <span>ABOUT US</span>
                                        <h2>Our Mission</h2>
                                        <p>Trusted by students, lecturers and scholars all over UNIBEN, we’re unlocking the true potential of your academic drive by empowering you with equal access to academic content.</p>
                                        <ul>
                                            <li>To build a better method of preventing book loss in the library</li>
                                            <li>To address the issue of book search delays.</li>
                                            <li>Help the Liberian operate the library more efficiently</li>
                                            <li>To reduce the amount of manual work done in the library</li>
                                            <li>To provide library services with high levels of efficiency.</li>
                                        </ul>
                                    </div>
                                    <!--act-inffo end-->
                                </div>
                            </div>
                        </div>
                        <!--abt-page-row end-->
                    </div>
                </section>
                <!--about-page-content end-->
                <section class="benifit-section">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-12">
                                <div class="about-us-section p-0">
                                    <div class="about-sec">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6">
                                                <div class="abt-col">
                                                    <img src="assets/img/icon5.png" alt="">
                                                    <h3>Updated Material</h3>
                                                    <p>We have a up-to date materials from several faculties</p>
                                                </div>
                                                <!--abt-col end-->
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6">
                                                <div class="abt-col">
                                                    <img src="assets/img/icon7.png" alt="">
                                                    <h3>Global Access</h3>
                                                    <p>Our website is accessible from any part of the world 24/7</p>
                                                </div>
                                                <!--abt-col end-->
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6">
                                                <div class="abt-col">
                                                    <img src="assets/img/icon9.png" alt="">
                                                    <h3>Student Support Service</h3>
                                                    <p>Students are able to apply for unavailable materials easily</p>
                                                </div>
                                                <!--abt-col end-->
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6">
                                                <div class="abt-col">
                                                    <img src="assets/img/icon8.png" alt="">
                                                    <h3>Easy to use</h3>
                                                    <p>We provide student easy and faster access to their desired materials and past questions to encourage studying and Develop the society in general</p>
                                                </div>
                                                <!--abt-col end-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--about-rw end-->
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--benefit-section end-->
                <section class="classes-section">
                    <div class="container">
                        <div class="sec-title">
                            <h2 class="no-bg">Our Latest</h2>
                            <p>View and download up-to date Materials and Past Questions</p>
                        </div>
                        <!--sec-title end-->
                        <div class="classes-sec">
                            <div class="row classes-carousel">
                                <?php 
                                    $query = "SELECT * FROM `questions` ORDER BY id desc limit 0,8";
                                    $result = mysqli_query($conn, $query);
                                    if (!$result) {
                                        die("Error in Query<br>".mysqli_error($conn));
                                    }
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
                                        $pdf = $rows['pdf'];
                                        $pdf = htmlentities($pdf);
                                        $course_code = $rows['course_code'];
                                        $course_code = htmlentities($course_code);
                                ?>
                                <div class="col-lg-6">
                                    <div class="classes-col">
                                        <div class="class-thumb">
                                            <img src="assets/img/img1.jpg" alt="" class="w-100">
                                            <a href="backend/read.php?pdf=<?php echo $pdf; ?>" title="" class="crt-btn" >
                                                <img style="width: 40px;" src="assets/img/play.png" alt="">
                                            </a>
                                        </div>
                                        <div class="class-info">
                                            <h3>
                                                <a href="#" title=""><?php echo $course_name; ?></a>
                                            </h3>
                                            <h3>
                                                <a href="#" title=""><?php echo $course_code; ?></a>
                                            </h3>
                                            <span style="display:block; margin-bottom: -2px" >
                                            <?php 
                                                    $dquery = "SELECT name FROM `dept` where id='$departmentID'";
                                                    $dresult = mysqli_query($conn, $dquery);
                                                    while ($row = $dresult->fetch_assoc()) {
                                                        echo $row['name']."<br>";
                                                    }
                                                ?>
                                            </span>       
                                            <span style="display:block;">
                                            <?php 
                                                $dquery = "SELECT name FROM `level` where id='$departmentID'";
                                                $dresult = mysqli_query($conn, $dquery);
                                                while ($row = $dresult->fetch_assoc()) {
                                                    echo $row['name']." Level  <br>";
                                                }
                                                ?>
                                            </span>
                                            <div class="d-flex flex-wrap align-items-center">
                                                <div class="posted-by">
                                                    <img src="assets/img/ico.png" alt="">
                                                    <a href="#" title="">posted by <?php echo $author; ?></a>
                                                </div>
                                                <strong class="price"><?php echo $year; ?></strong>
                                            </div>
                                        </div>
                                    </div>
                                    <!--classes-col end-->
                                </div>
                                <?php } ?>
                            </div>
                            <div class="lnk-dv text-center">
                                <a href="allquestions.php" title="" class="btn-default">View All
                                    <i class="fa fa-long-arrow-alt-right"></i>
                                </a>
                            </div>
                        </div>
                        <!--classes-sec end-->
                    </div>
                </section>
                <?php 
                    include 'include/join_us.php';
                    include 'include/footer.php';
                
                ?>
            </div>
        </div>      
        <!-- <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script> -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script type="text/javascript"src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
        <script src="assets/js/bundle.min.js"></script>
        <script src="assets/js/contactEmail.js"></script>

        <script src="assets/js/style.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
        <script src="assets/js/style2.js"></script>
        <script type="text/javascript">

                var _gaq = _gaq || [];
                _gaq.push(['_setAccount', 'UA-36251023-1']);
                _gaq.push(['_setDomainName', 'jqueryscript.net']);
                _gaq.push(['_trackPageview']);

                (function() {
                var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
                })();
                                </script>
                                <script>
            try {
                fetch(new Request("https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js", { method: 'HEAD', mode: 'no-cors' })).then(function(response) {
                return true;
                }).catch(function(e) {
                var carbonScript = document.createElement("script");
                carbonScript.src = "//cdn.carbonads.com/carbon.js?serve=CK7DKKQU&placement=wwwjqueryscriptnet";
                carbonScript.id = "_carbonads_js";
                document.getElementById("carbon-block").appendChild(carbonScript);
                });
            } catch (error) {
                console.log(error);
            }
        </script>
</html>
