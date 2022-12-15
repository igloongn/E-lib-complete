<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <meta http-equiv="content-type" content="text/html;charset=UTF-8">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Register</title>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,700" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Questrial" rel="stylesheet" type="text/css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="../../assets/css/button.min.css">
        <link rel="stylesheet" href="../../assets/css/style.css">
        <link rel="stylesheet" href="../../assets/css/style2.css">
        <link rel="stylesheet" href="../../assets/css/main.min.css">
    </head>
    <body>
        <div class="wrap">
            <!-- <div class=""> -->
                <?php 
                    include("../../backend/db.php");
                    ?>

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
                <?php 
                    include '../include/header.php';
                ?>
            <!-- </div> -->
            <div class="container">
                    <section class="section-content padding-y w-100" style="margin-top:60px;">
                        <div class=" d-flex justify-content-center">
                            <div class="w-75 d-flex flex-column align-items-center">
                                <div class="card w-75" style="margin-top:40px;">
                                    <article class="card-body">
                                        <header class="mb-4">
                                            <h4 class="card-title text-center">Do not be here...For real</h4>
                                        </header>
                                        <div class="alert alert-warning" role="alert">
                                            <?php 
                                                echo $_GET['msg'];
                                            ?>
                                        </div>
                                        <form id="regenerationform" class="uniform" action="backend_register.php" method="POST">
                                            <!-- form-row end.// -->
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label>Email</label>
                                                    <input type="email" class="form-control" name="email">
                                                </div>
                                                <div class="col form-group col-md-6">
                                                    <label>Phone Number</label>
                                                    <input type="tel" class="form-control" name="phone_number">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label>Create password</label>
                                                    <input type="password" id="password" class="form-control" name="password">
                                                </div>
                                                <!-- form-group end.// -->
                                                <div class="form-group col-md-6">
                                                    <label>Repeat password</label>
                                                    <input type="password" id="cpassword" class="form-control" name="cpassword">
                                                </div>
                                                <!-- form-group end.// -->
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary btn-block"> Register</button>
                                            </div>
                                        </form>
                                    </article>
                                    <!-- card-body.// -->
                                </div>
                                <!-- card .// -->
                                <p class="text-center mt-4">Have an account?
                                    <a href="login.php">Log In</a>
                                </p>
                                <br>
                                <br>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <all>
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script type="text/javascript"src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
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
