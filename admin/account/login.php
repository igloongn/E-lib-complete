<!DOCTYPE HTML>
<?php 
    session_start();
    include '../../backend/db.php';
    // print_r($_SESSION)

?>
<html lang="en-US">
    <head>
        <meta http-equiv="content-type" content="text/html;charset=UTF-8">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,700" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Questrial" rel="stylesheet" type="text/css">
        <!-- <link rel="stylesheet" type="text/css" href="../assets/css/font-linearicons.css">
        <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap-theme.css">
        <link rel="stylesheet" type="text/css" href="../assets/css/owl.carousel.css">
        <link rel="stylesheet" type="text/css" href="../assets/css/owl.theme.css">
        <link
            rel="stylesheet"
            type="text/css"
            href="../assets/css/theme.css"
            media="all"
        >
        <link
            rel="stylesheet"
            type="text/css"
            href="../assets/css/responsive.css"
            media="all"
        >
        <link
            rel="stylesheet"
            type="text/css"
            href="../assets/css/mynav.css"
            media="all"
        >
        <link rel="preconnect" href="https://fonts.gstatic.com/">
        <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700&amp;display=swap" rel="stylesheet">

        <link
            id="rtl-link"
            rel="stylesheet"
            type="text/css"
            href="../myadmin/css/vendors/bootstrap.css"
        >

        <link rel="stylesheet" type="text/css" href="../myadmin/css/vendors/font-awesome.css">

        <link rel="stylesheet" type="text/css" href="../myadmin/css/vendors/feather-icon.css">

        <link rel="stylesheet" type="text/css" href="../myadmin/css/vendors/animate.css">

        <link rel="stylesheet" type="text/css" href="../myadmin/css/vendors/slick/slick.css">
        <link rel="stylesheet" type="text/css" href="../myadmin/css/vendors/slick/slick-theme.css">

        <link
            id="color-link"
            rel="stylesheet"
            type="text/css"
            href="../myadmin/css/demo2.css"
        >  
        <link
            id="color-link"
            rel="stylesheet"
            type="text/css"
            href="../../assets/css/main.min.css"
        > -->


        

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="../../assets/css/button.min.css">
        <link rel="stylesheet" href="../../assets/css/style.css">
        <link rel="stylesheet" href="../../assets/css/style2.css">
        <link rel="stylesheet" href="../../assets/css/main.min.css">


    </head>
    <body class=app>
        <div class="wrap">
            <!-- <div class="container"> -->
            <div class="">
                <?php 
                    if (!isset($_GET['paper'])) {
                            header("location:login.php?paper=1");
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
                        header("location:login.php?paper=1&msg=sorry that page does not exist");
                    }

                ?>
                <!-- <div id="header" style="background-color: aliceblue;"> -->
                <?php 
                    include '../include/header.php';
                ?>
                <!-- </div> -->
                <section class="section-conten padding-y col-12" style="min-height:84vh;">

                    <div class="main d-flex justify-content-center w-100">
                        <main class="content d-flex p-0">
                            <div class="container d-flex flex-column">
                                <div class="row h-100">
                                    <div class="col-sm-12 col-md-12 col-lg-12 mx-auto d-table h-100">
                                        <div class="d-table-cell align-middle">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="m-sm-4">

                                                        <?php 
                                                            if (isset($_GET["msg"])) {

                                                            echo '<div class="alert alert-warning" role="alert">';
                                                                echo $_GET["msg"];
                                                                echo '</div>';
                                                            }
                                                        ?>

                                                        <form action="backend_login.php" method="POST" class="mt-5">
                                                            <div class="mb-3">
                                                                <label class="form-label">Email</label>
                                                                <input
                                                                    class="form-control form-control-lg"
                                                                    type="email"
                                                                    name="email"
                                                                    placeholder="Enter your email"
                                                                >
                                                            </div>
                                                            <div class="mb-3">
                                                                <label class="form-label">Password</label>
                                                                <input
                                                                    class="form-control form-control-lg"
                                                                    type="password"
                                                                    name="password"
                                                                    placeholder="Enter your password"
                                                                >
                                                            </div>
                                                            <div class="mb-3">
                                                                <input
                                                                    style="display: none;"
                                                                    readonly
                                                                    class="form-control form-control-lg"
                                                                    type="text"
                                                                    name="paper"
                                                                    placeholder="Enter your number just for something"
                                                                    value="<?php echo $_GET['paper']; ?>"
                                                                >
                                                            </div>
                                                            <div class="text-center mt-3">
                                                                <button type="submit" class="btn btn-lg btn-primary">Login</button>
                                                            </div>
                                                            <!-- <p class="text-center mt-4">Don't have account?
                                                                <a href="register.php?paper=<?php echo $_GET['paper']; ?>">Sign up</a>
                                                            </p> -->
                                                            <br>
                                                            <br>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </main>
                    </div>
                    <!-- ============================ COMPONENT LOGIN  END.// ================================= -->
                </section>
            </div>
        </div>
        <all>
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script type="text/javascript"src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js">
            </script>
            <script src="../../assets/js/bundle.min.js"></script>
            <script src="../../assets/js/contactEmail.js"></script>

            <script src="../../assets/js/style.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
            <script src="../../assets/js/style2.js"></script>
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
        </all>
    </body>
</html>
