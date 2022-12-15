<!DOCTYPE html>
<?php 
    include('backend/db.php');
    include('include/functions.php');

    ?>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <title>Search Results</title>
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
                banner( $word , 'Search Results', $_GET['paper'])
            ?>
                <div class="container-wide">
                    <section class="page-content">
                        <div class="container">
                            <div class="course-section">
                                <div class="courses-list">
                                    <div class="row">
                                        <?php 
                                            $searchWord = $_POST['searchWord'];
                                            $paperID = $_GET['paper'];
                                            $count_query = mysqli_query($conn, "SELECT count(*) from questions WHERE course_name LIKE '%".$searchWord."%'");
                                            $row = mysqli_fetch_array($count_query);
                                            $total = $row[0];
                                            // echo $total;
                                            echo '<br>';
                                            // echo $total;
                                            if ($total > 0) {
                                                // $query ="SELECT * FROM `questions` where facultyID = '$facultyID' and departmentID = '$departmentID' and levelID = '$levelID' and paperID = '$paperID' ORDER BY id desc";

                                                $query = "SELECT * FROM `questions` WHERE course_name LIKE '%".$searchWord."%'";

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
                                                    $video_url = $rows['video_url'];
                                                    $video_url = htmlentities($video_url);
                                                    // $fulltime = $rows['fulltime'];
                                                    // $fulltime = htmlentities($fulltime);
                                                    $year = $rows['year'];
                                                    $year = htmlentities($year);
                                                    $pdf = $rows['pdf'];
                                                    $pdf = htmlentities($pdf);
                                                    $image = $rows['image'];
                                                    $image = htmlentities($image);
                                                    $course_code = $rows['course_code'];
                                                    $course_code = htmlentities($course_code);
                                        ?>
                                        <div class="col-lg-6">
                                            <div class="course-card">
                                                <div class="d-flex flex-wrap align-items-center">
                                                    <ul class="course-meta">
                                                    <?php echo $year; ?>
                                                    </ul>
                                                    <span style="display: block;">
                                                        <a href="admin/pdfs/<?php echo $pdf; ?>">Download Now</a>
                                                    </span>
                                                    <!-- <span style="display: block;">
                                                        <a href="backend/read.php?pdf=<?php echo $pdf; ?>">Read PDF</a>
                                                    </span> -->
                                                </div>
                                                <h3>
                                                    <?php echo $course_name; ?>
                                                </h3>
                                                <h3>
                                                    <?php echo $course_code; ?>
                                                </h3>
                                                <div class="d-flex flex-wrap">
                                                    <div class="posted-by">
                                                        <a href="#" title="">Posted by Admin</a>
                                                        <span style="display: block;">
                                                            <?php 
                                                                $dquery = "SELECT name FROM `dept` where id='$departmentID'";
                                                                $dresult = mysqli_query($conn, $dquery);
                                                                while ($row = $dresult->fetch_assoc()) {
                                                                    echo $row['name']."<br>";
                                                                }
                                                            ?>
                                                        </span>
                                                        <span> 
                                                            <?php 
                                                                $dquery = "SELECT name FROM `level` where id='$levelID'";
                                                                $dresult = mysqli_query($conn, $dquery);
                                                                while ($row = $dresult->fetch_assoc()) {
                                                                    echo $row['name']." Level  <br>";
                                                                }
                                                            ?>
                                                        </span>
                                                        <span> 
                                                            <?php echo $word; ?>
                                                        </span>
                                                    </div>
                                                    <span class="locat">
                                                        <span style="
                                                            display: block;
                                                            color:#155799;
                                                            font-size: 18px;
                                                            margin-left: auto;
                                                            font-weight: 700;
                                                            ">
                                                            <a href="backend/read.php?pdf=<?php echo $pdf; ?>">Read PDF</a>
                                                        </span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <?php 
                                                }
                                            }
                                            else {
                                        ?>
                                                <h1 style="color:black; font-size: 30px; text-align: center; font-weight: bold;">Sorry There is NO Question available at the moment</span>
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
            </div>
            <!-- <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"> </script> -->
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script type="text/javascript"src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js">
            </script>
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
        </body>
    </html>
    <?php 
    // }
    // else {
    //     header("Location: index.php?msg='Page Does Not Exist'");
    // }
    ?>

