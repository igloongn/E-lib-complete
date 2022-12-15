<!DOCTYPE html>
<?php 
    include '../backend/db.php';
    // print_r($_SESSION);
    include 'include/auth.php';

?>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DashBoard</title>
    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700&amp;display=swap" rel="stylesheet">
    
    <!-- bootstrap css -->
    <link id="rtl-link" rel="stylesheet" type="text/css" href="myadmin/css/vendors/bootstrap.css" >
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous"> -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    
    <!-- font-awesome css -->
    <link rel="stylesheet" type="text/css" href="myadmin/css/vendors/font-awesome.css" >

    <!-- feather icon css -->
    <link rel="stylesheet" type="text/css" href="myadmin/css/vendors/feather-icon.css" >

    <!-- animation css -->
    <link rel="stylesheet" type="text/css" href="myadmin/css/vendors/animate.css" >

    <!-- slick css -->
    <link rel="stylesheet" type="text/css" href="myadmin/css/vendors/slick/slick.css" >
    <link rel="stylesheet" type="text/css" href="myadmin/css/vendors/slick/slick-theme.css" >
    
    <!-- Theme css -->
    <link id="color-link" rel="stylesheet" type="text/css" href="myadmin/css/vendors/slick/slick-theme.css" >
    <link id="color-link" rel="stylesheet" type="text/css" href="myadmin//css/demo2.css" >


    <!--This is for the add Post  -->
    <link rel="stylesheet" href="assets/css/normalize.css">
	<link rel="stylesheet" href="assets/css/linearicons.css">
	<!-- <link rel="stylesheet" href="assets/css/font-awesome.min.css"> -->
	<link rel="stylesheet" href="assets/css/jquery-ui.css">
	<link rel="stylesheet" href="assets/css/owl.theme.css">
	<link rel="stylesheet" href="assets/css/prettyPhoto.css">
	<link rel="stylesheet" href="assets/css/owl.carousel.css">
	<link rel="stylesheet" href="assets/css/flipclock.css">
	<!-- <link rel="stylesheet" href="assets/css/slick.css"> -->
	<!-- <link rel="stylesheet" href="assets/css/slick-theme.css"> -->
	<link rel="stylesheet" href="assets/css/main.css">
	<link rel="stylesheet" href="assets/main.css">
	<link rel="stylesheet" href="assets/css/color.css">
	<link rel="stylesheet" href="assets/css/transitions.css">
	<link rel="stylesheet" href="assets/css/responsive.css">


</head>

<body class="theme-color2 light ltr">

    <!-- header start -->
    <header class="header-style-2" id="home">
        <div class="main-header navbar-searchbar">
            <div class="container-fluid-lg">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="main-menu">
                            <div class="menu-left">
                                <div class="brand-logo">
                                    <a href="dashboard.php">
                                        <strong style="color: black;">Final Year Project</strong>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header end -->
    <!-- Breadcrumb section start -->
    <section class="breadcrumb-section section-b-space">
        <!-- The Floating Boxes in the Jumbotron banner -->
        <ul class="circles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3>User Dashboard</h3>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="dashboard.php">
                                    <i class="fas fa-home"></i>
                                </a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb section end -->

    <!-- user dashboard section start -->
    <section class="section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <ul class="nav nav-tabs custome-nav-tabs flex-column category-option" id="myTab">
                        <li class="nav-item mb-2">
                            <button class="nav-link font-light" id="tab" data-bs-toggle="tab"
                                data-bs-target="#dash" type="button"><i
                                    class="fas fa-angle-right"></i>Dashboard</button>
                        </li>

                        <li class="nav-item mb-2">
                            <button class="nav-link font-light active" id="1-tab" data-bs-toggle="tab" data-bs-target="#posts"
                                type="button"><i class="fas fa-angle-right"></i>Posts</button>
                        </li>

                        <li class="nav-item mb-2">
                            <button class="nav-link font-light" id="2-tab" data-bs-toggle="tab"
                                data-bs-target="#addpost" type="button"><i
                                    class="fas fa-angle-right"></i>Add Post</button>
                        </li>

                        <li class="nav-item mb-2">
                            <button class="nav-link font-light" id="5-tab" data-bs-toggle="tab"
                                data-bs-target="#profile" type="button"><i
                                    class="fas fa-angle-right"></i>Profile</button>
                        </li>

                        <!-- <li class="nav-item">
                            <button class="nav-link font-light" id="6-tab" data-bs-toggle="tab"
                                data-bs-target="#security" type="button"><i
                                    class="fas fa-angle-right"></i>Security</button>
                        </li>                         -->

                        <li class="nav-item">
                            <button class="nav-link font-light" id="7-tab" data-bs-toggle="tab"
                                type="button"><i
                                    class="fas fa-angle-right"></i><a href="logout.php">Logout</a></button>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-9">
                    <div class="filter-button dash-filter dashboard">
                        <button class="btn btn-solid-default btn-sm fw-bold filter-btn">Show Menu</button>
                    </div>

                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade" id="dash">
                            <div class="dashboard-right">
                                <div class="dashboard">
                                    <div class="page-title title title1 title-effect">
                                        <h2>My Dashboard</h2>
                                    </div>
                                    <div class="welcome-msg">
                                        <h6 class="font-light">Hello, <span style="text-transform: capitalize;"><?php echo $user;?></span></h6>
                                        <p class="font-light">From your My Account Dashboard you have the ability to
                                            view a snapshot of your recent website activity and update your account
                                            information. Select a link below to view or edit information.</p>
                                    </div>

                                    <div class="order-box-contain my-4">
                                        <div class="row g-4">
                                            <div class="col-lg-4 col-sm-6">
                                                <div class="order-box">
                                                    <div class="order-box-image">
                                                        <img src="assets/images/svg/box.png"
                                                            class="img-fluid blur-up lazyload" alt="">
                                                    </div>
                                                    <div class="order-box-contain">
                                                        <img src="assets/images/svg/box1.png"
                                                            class="img-fluid blur-up lazyload" alt="">
                                                        <div>
                                                            <h5 class="font-light">Total Pass Questions  
                                                                <span><strong> 
                                                                <?php
                                                                    $count_query = mysqli_query($conn, "SELECT count(*) from questions where paperID = '2'");
                                                                    $row = mysqli_fetch_array($count_query);
                                                                    $total = $row[0];
                                                                    echo $total;
                                                                 ?>
                                                                 </strong></span>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-sm-6">
                                                <div class="order-box">
                                                    <div class="order-box-image">
                                                        <img src="assets/images/svg/sent.png"
                                                            class="img-fluid blur-up lazyload" alt="">
                                                    </div>
                                                    <div class="order-box-contain">
                                                        <img src="assets/images/svg/box1.png"
                                                            class="img-fluid blur-up lazyload" alt="">
                                                        <div>
                                                            <h5 class="font-light">Total Materials  
                                                                <span><strong> 
                                                                <?php
                                                                    $count_query = mysqli_query($conn, "SELECT count(*) from questions where paperID = '1'");
                                                                    $row = mysqli_fetch_array($count_query);
                                                                    $total = $row[0];
                                                                    echo $total;
                                                                 ?>
                                                                 </strong></span>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!--<div class="col-lg-4 col-sm-6">
                                                <div class="order-box">
                                                    <div class="order-box-image">
                                                        <img src="assets/images/svg/wishlist.png"
                                                            class="img-fluid blur-up lazyload" alt="">
                                                    </div>
                                                    <div class="order-box-contain">
                                                        <img src="assets/images/svg/wishlist1.png"
                                                            class="img-fluid blur-up lazyload" alt="">
                                                        <div>
                                                            <h5 class="font-light">Comments</h5>
                                                            <h3>{{comments_count}}</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> -->
                                        </div>
                                    </div>

                                    <div class="box-account box-info">
                                        <div class="box-head">
                                            <h3>Account Information</h3>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="box">
                                                    <div class="box-title">
                                                        <h4>Contact Information</h4><a
                                                            href="javascript:void(0)">Edit</a>
                                                    </div>
                                                    <div class="box-content">
                                                        <h6 class="font-light">MARK JECNO</h6>
                                                        <h6 class="font-light">MARk-JECNO@gmail.com</h6>
                                                        <a href="javascript:void(0)">Change Password</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="box">
                                                    <div class="box-title">
                                                        <h4>Newsletters</h4><a href="javascript:void(0)">Edit</a>
                                                    </div>
                                                    <div class="box-content">
                                                        <h6 class="font-light">You are currently not subscribed to any
                                                            newsletter.</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="box address-box">
                                                <div class="box-title">
                                                    <h4>Address Book</h4><a href="javascript:void(0)">Manage
                                                        Addresses</a>
                                                </div>
                                                <div class="box-content">
                                                    <div class="row g-4">
                                                        <div class="col-sm-6">
                                                            <h6 class="font-light">Default Billing Address</h6>
                                                            <h6 class="font-light">You have not set a default
                                                                billing address.</h6>
                                                            <a href="javascript:void(0)">Edit Address</a>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <h6 class="font-light">Default Shipping Address</h6>
                                                            <h6 class="font-light">You have not set a default
                                                                shipping address.</h6>
                                                            <a href="javascript:void(0)">Edit Address</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade table-dashboard dashboard wish-list-section  show active " id="posts">
                            <div class="box-head mb-3">
                                <h3><strong>Posts (Pass Questions & Materials)</strong></h3>
                            </div>
                            <div class="table-responsive " >
                                <table class="table cart-table table table-striped">
                                    <thead>
                                        <tr class="table-head">
                                            <!-- <th scope="col">image</th> -->
                                            <th scope="col">S/N</th>
                                            <th scope="col">Course Code</th>
                                            <th scope="col">Course Title</th>
                                            <th scope="col">Type</th>
                                            <th scope="col">Level</th>
                                            <th scope="col">Department</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Year</th>
                                            <th scope="col">Date Created</th>
                                            <th scope="col">Edit</th>
                                            <th scope="col">Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            $query = "SELECT * from questions ORDER BY id desc";
                                            $result = mysqli_query($conn, $query);
                                            if (!$result) {
                                                die("Error in Query ". mysqli_error($conn));
                                            }
                                            $SN = 1;                                
                                            while ($row = mysqli_fetch_array($result)){
                                                $pid = $row['id'];
                                                $name = $row['course_name'];
                                                $title = $row['course_code'];
                                                $paper = $row['paperID'];
                                                $level = $row['levelID'];
                                                $dept = $row['departmentID'];
                                                $year = $row['year'];
                                                // $title = $row['fulltime'];
                                                $date_created = $row['date_created'];    
                                        ?>
                                        <tr>
                                            <td>
                                                <p class="mt-0"><?php echo $SN++; ?></p>
                                            </td>
                                            <td>
                                                <p class="mt-0"><?php echo $title; ?></p>
                                            </td>
                                            <td>
                                                <!-- <a href="product-left-sidebar.html">
                                                    <img src="{{ post.picture.url }}"
                                                    class="blur-up lazyload" alt="">
                                                </a> -->
                                                <p class="mt-0"><?php echo $name; ?></p>
                                            </td>
                                            <td>
                                                <p class="fs-6 m-0">
                                                    <?php 
                                                        $dquery = "SELECT name FROM `paper` where id='$paper'";
                                                        $dresult = mysqli_query($conn, $dquery);
                                                        while ($row = $dresult->fetch_assoc()) {
                                                            echo $row['name']."<br>";
                                                        }
                                                    ?>
                                                </p>
                                            </td>
                                            <td>
                                                <p class="fs-6 m-0">
                                                    <?php 
                                                        $dquery = "SELECT name FROM `level` where id='$level'";
                                                        $dresult = mysqli_query($conn, $dquery);
                                                        while ($row = $dresult->fetch_assoc()) {
                                                            echo $row['name']."<br>";
                                                        }
                                                    ?>
                                                </p>
                                            </td>
                                            <td>
                                                <p class="fs-6 m-0">
                                                    <?php 
                                                        $dquery = "SELECT name FROM `dept` where id='$dept'";
                                                        $dresult = mysqli_query($conn, $dquery);
                                                        while ($row = $dresult->fetch_assoc()) {
                                                            echo $row['name']."<br>";
                                                        }
                                                    ?>
                                                </p>
                                            </td>    
                                            <td>
                                                <p class="success-button btn btn-sm">Posted</p>
                                            </td>
                                            <td>
                                                <p class="fs-6 m-0"><?php echo $year; ?></p>
                                            </td>
                                            <td>
                                                <p class="fs-6 m-0">
                                                <?php 
                                                    // echo $date_created;
                                                    $cut_year = substr($date_created,0,11);
                                                    echo $cut_year;
                                                    
                                                ?>
                                                    </p>
                                            </td>
                                            <td>
                                                <!-- <a data-bs-toggle="modal" 
                                                    href="dashboard.php#modalScrollableCenter" 
                                                    data-bs-target="#modalScrollableCenter"
                                                    data-pid = "<?php echo $pid; ?>"
                                                    class="btn btn-warning">
                                                    Click me
                                                </a> -->
                                                <p 
                                                    class="primary-button btn btn-sm"
                                                    data-bs-toggle="modal" 
                                                    type="button" 
                                                    data-bs-target="#editmodal"
                                                    data-pid = "<?php echo $pid; ?>"
                                                    id="editbutton"
                                                    >Edit</p>
                                                <?php   
                                                    include '../include/update_modal.php';
                                                ?>
                                            </td>
                                            <td>
                                                <p 
                                                class="delete-button btn btn-sm"
                                                data-bs-toggle="modal" 
                                                type="button" 
                                                data-bs-target="#deletemodal"
                                                data-pid = "<?php echo $pid; ?>"
                                                id="deletebutton"
                                                >Delete</p>
                                            <?php   
                                                include '../include/delete_modal.php';
                                            ?>  
                                            </td>
                                        </tr>
                                        <?php 
                                        }
                                        ?>
                                        <hr noshade>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="tab-pane fade table-dashboard dashboard wish-list-section" id="addpost">
                            <!-- <div class="table-responsive"> -->
                              <?php 
                                include("../include/addpost.php")
                              ?>
                            <!-- </div> -->
                        </div>

                        <div class="tab-pane fade dashboard" id="save">
                            <div class="box-head">
                                <h3>Save Address</h3>
                                <button class="btn btn-solid-default btn-sm fw-bold ms-auto" data-bs-toggle="modal"
                                    data-bs-target="#addAddress"><i class="fas fa-plus"></i>
                                    Add New Address</button>
                            </div>
                            <div class="save-details-box">
                                <div class="row g-3">
                                    <div class="col-xl-4 col-md-6">
                                        <div class="save-details">
                                            <div class="save-name">
                                                <h5>Mark Jugal</h5>
                                                <div class="save-position">
                                                    <h6>Home</h6>
                                                </div>
                                            </div>

                                            <div class="save-address">
                                                <p class="font-light">549 Sulphur Springs Road</p>
                                                <p class="font-light">Downers Grove, IL</p>
                                                <p class="font-light">60515</p>
                                            </div>

                                            <div class="mobile">
                                                <p class="font-light mobile">Mobile No. +1-123-456-7890</p>
                                            </div>

                                            <div class="button">
                                                <a href="javascript:void(0)" class="btn btn-sm">Edit</a>
                                                <a href="javascript:void(0)" class="btn btn-sm">Remove</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-4 col-md-6">
                                        <div class="save-details">
                                            <div class="save-name">
                                                <h5>Method Zaki</h5>
                                                <div class="save-position">
                                                    <h6>Office</h6>
                                                </div>
                                            </div>

                                            <div class="save-address">
                                                <p class="font-light">549 Sulphur Springs Road</p>
                                                <p class="font-light">Downers Grove, IL</p>
                                                <p class="font-light">60515</p>
                                            </div>

                                            <div class="mobile">
                                                <p class="font-light mobile">Mobile No. +1-123-456-7890</p>
                                            </div>

                                            <div class="button">
                                                <a href="javascript:void(0)" class="btn btn-sm">Edit</a>
                                                <a href="javascript:void(0)" class="btn btn-sm">Remove</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-4 col-md-6">
                                        <div class="save-details">
                                            <div class="save-name">
                                                <h5>Mark Jugal</h5>
                                                <div class="save-position">
                                                    <h6>Home</h6>
                                                </div>
                                            </div>

                                            <div class="save-address">
                                                <p class="font-light">549 Sulphur Springs Road</p>
                                                <p class="font-light">Downers Grove, IL</p>
                                                <p class="font-light">60515</p>
                                            </div>

                                            <div class="mobile">
                                                <p class="font-light mobile">Mobile No. +1-123-456-7890</p>
                                            </div>

                                            <div class="button">
                                                <a href="javascript:void(0)" class="btn btn-sm">Edit</a>
                                                <a href="javascript:void(0)" class="btn btn-sm">Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade dashboard-profile dashboard" id="profile">
                            <div class="box-head">
                                <h3>Profile</h3>
                                <!-- <a href="javascript:void(0)" data-bs-toggle="modal"
                                    data-bs-target="#resetEmail">Edit</a> -->
                            </div>
                            <ul class="dash-profile">
                                <li>
                                    <div class="left">
                                        <h6 class="font-light">School Name</h6>
                                    </div>
                                    <div class="right">
                                        <h6>University Of Benin</h6>
                                    </div>
                                </li>

                                <li>
                                    <div class="left">
                                        <h6 class="font-light">Country / Region</h6>
                                    </div>
                                    <div class="right">
                                        <h6>Nigeria, Edo State</h6>
                                    </div>
                                </li>

                                <!-- <li>
                                    <div class="left">
                                        <h6 class="font-light">Year Adm</h6>
                                    </div>
                                    <div class="right">
                                        <h6>2018</h6>
                                    </div>
                                </li> -->

                                <li>
                                    <div class="left">
                                        <h6 class="font-light">Year</h6>
                                    </div>
                                    <div class="right">
                                        <h6>400LVL</h6>
                                    </div>
                                </li>

                                <li>
                                    <div class="left">
                                        <h6 class="font-light">Category</h6>
                                    </div>
                                    <div class="right">
                                        <h6>Information</h6>
                                    </div>
                                </li>

                                <!-- <li>
                                    <div class="left">
                                        <h6 class="font-light">Street Address</h6>
                                    </div>
                                    <div class="right">
                                        <h6>549 Sulphur Springs Road</h6>
                                    </div>
                                </li> -->

                                <li>
                                    <div class="left">
                                        <h6 class="font-light">City/State</h6>
                                    </div>
                                    <div class="right">
                                        <h6>Benin-City, Edo State</h6>
                                    </div>
                                </li>

                                <li>
                                    <div class="left">
                                        <h6 class="font-light">Zip</h6>
                                    </div>
                                    <div class="right">
                                        <h6>300302;</h6>
                                    </div>
                                </li>
                            </ul>

                            <div class="box-head mt-lg-5 mt-3">
                                <h3>Login Details</h3>
                                <!-- <a href="javascript:void(0)" data-bs-toggle="modal"
                                    data-bs-target="#resetEmail">Edit</a> -->
                            </div>

                            <ul class="dash-profile">
                                <li>
                                    <div class="left">
                                        <h6 class="font-light">Email Address</h6>
                                    </div>
                                    <div class="right">
                                        <h6>{{user.email}}</h6>
                                    </div>
                                    <!-- <a href="javascript:void(0)" data-bs-toggle="modal"
                                        data-bs-target="#resetEmail">Edit</a> -->
                                </li>

                                <li>
                                    <div class="left">
                                        <h6 class="font-light">Phone No.</h6>
                                    </div>
                                    <div class="right">
                                        <h6>{{user.phone_number}}</h6>
                                    </div>
                                    <!-- <a href="javascript:void(0)" data-bs-toggle="modal"
                                        data-bs-target="#resetEmail">Edit</a> -->
                                </li>

                                <li class="mb-0">
                                    <div class="left">
                                        <h6 class="font-light">Password</h6>
                                    </div>
                                    <div class="right">
                                        <h6>●●●●●●</h6>
                                    </div>
                                    <!-- <a href="javascript:void(0)" data-bs-toggle="modal"
                                        data-bs-target="#resetEmail">Edit</a> -->
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- user dashboard section end -->

    <!-- Subscribe Section Start -->
    <section class="subscribe-section section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-6">
                    <div class="subscribe-details">
                        <h2 class="mb-3">Subscribe Our News</h2>
                        <h6 class="font-light">Subscribe and receive our newsletters to follow the news about our fresh
                            and fantastic Products.</h6>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mt-md-0 mt-3">
                    <div class="subsribe-input">
                        <div class="input-group">
                            <input type="text" class="form-control subscribe-input" placeholder="Your Email Address">
                            <button class="btn btn-solid-default" type="button">Button</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Subscribe Section End -->

    <!-- footer start -->
    <footer class="footer-sm-space">
        <div class="main-footer">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="footer-contact">
                            <div class="brand-logo">
                                <a href="index.html" class="footer-logo">
                                    <svg class="svg-icon">
                                        <use class="fill-color" xlink:href="assets/svg/icons.svg#logo"></use>
                                    </svg>
                                    <img src="assets/images/logo.png" class="img-fluid blur-up lazyload" alt="logo">
                                </a>
                            </div>
                            <ul class="contact-lists">
                                <li>
                                    <span>
                                        <b>phone:</b>
                                        <span class="font-light"> + 185659635</span>
                                    </span>

                                </li>
                                <li>
                                    <span>
                                        <b>Address:</b>
                                        <span class="font-light"> 1418 Riverwood Drive, Suite 3245
                                            Cottonwood, CA 96052, United States</span>
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        <b>Email:</b>
                                        <span class="font-light"> Voxo123@gmail.com</span>
                                    </span>

                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="footer-links">
                            <div class="footer-title">
                                <h3>About us</h3>
                            </div>
                            <div class="footer-content">
                                <ul>
                                    <li>
                                        <a href="index.html" class="font-dark">Home</a>
                                    </li>
                                    <li>
                                        <a href="shop-left-sidebar.html" class="font-dark">Shop</a>
                                    </li>
                                    <li>
                                        <a href="about-us.html" class="font-dark">About Us</a>
                                    </li>
                                    <li>
                                        <a href="shop-left-sidebar.html" class="font-dark">Blog</a>
                                    </li>
                                    <li>
                                        <a href="shop-left-sidebar.html" class="font-dark">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                        <div class="footer-links">
                            <div class="footer-title">
                                <h3>New Categories</h3>
                            </div>
                            <div class="footer-content">
                                <ul>
                                    <li>
                                        <a href="shop-left-sidebar.html" class="font-dark">Latest Shoes</a>
                                    </li>
                                    <li>
                                        <a href="shop-left-sidebar.html" class="font-dark">Branded Jeans</a>
                                    </li>
                                    <li>
                                        <a href="shop-left-sidebar.html" class="font-dark">New Jackets</a>
                                    </li>
                                    <li>
                                        <a href="shop-left-sidebar.html" class="font-dark">Colorfull Hoodies</a>
                                    </li>
                                    <li>
                                        <a href="shop-left-sidebar.html" class="font-dark">Shiner Goggles</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                        <div class="footer-links">
                            <div class="footer-title">
                                <h3>Get Help</h3>
                            </div>
                            <div class="footer-content">
                                <ul>
                                    <li>
                                        <a href="user-dashboard.html" class="font-dark">Your Orders</a>
                                    </li>
                                    <li>
                                        <a href="user-dashboard.html" class="font-dark">Your Account</a>
                                    </li>
                                    <li>
                                        <a href="order-tracking.html" class="font-dark">Track Orders</a>
                                    </li>
                                    <li>
                                        <a href="wishlist.html" class="font-dark">Your Wishlist</a>
                                    </li>
                                    <li>
                                        <a href="faq.html" class="font-dark">Shopping FAQs</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6 d-none d-sm-block">
                        <div class="footer-newsletter">
                            <h3>Let’s stay in touch</h3>
                            <div class="form-newsletter">
                                <div class="input-group mb-4">
                                    <input type="text" class="form-control" placeholder="Your Email Address">
                                    <span class="input-group-text" id="basic-addon4"><i
                                            class="fas fa-arrow-right"></i></span>
                                </div>
                                <p class="font-dark mb-0">Keep up to date with our latest news and special offers.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sub-footer">
            <div class="container">
                <div class="row gy-3">
                    <div class="col-md-6">
                        <ul>
                            <li class="font-dark">We accept:</li>
                            <li>
                                <a href="javascript:void(0)">
                                    <img src="assets/images/payment-icon/1.jpg" class="img-fluid blur-up lazyload"
                                        alt="payment icon"></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <img src="assets/images/payment-icon/2.jpg" class="img-fluid blur-up lazyload"
                                        alt="payment icon"></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <img src="assets/images/payment-icon/3.jpg" class="img-fluid blur-up lazyload"
                                        alt="payment icon"></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <img src="assets/images/payment-icon/4.jpg" class="img-fluid blur-up lazyload"
                                        alt="payment icon"></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <p class="mb-0 font-dark">© 2022, Voxo Theme. Made with heart by Pixelstrap</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer end -->
    <!-- Reset Password Modal Start -->
    <div class="modal fade reset-email-modal" id="resetEmail">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Comfirm Email</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body pt-3">
                    <form>
                        <div class="mb-3">
                            <label for="email" class="form-label font-light">Email address</label>
                            <input type="email" class="form-control" id="email">
                        </div>
                        <div class="mb-3">
                            <label for="comfirmEmail" class="form-label font-light">Comfirm Email address</label>
                            <input type="email" class="form-control" id="comfirmEmail">
                        </div>
                        <div>
                            <label for="exampleInputPassword1" class="form-label font-light">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                    </form>
                </div>
                <div class="modal-footer pt-0">
                    <button class="btn bg-secondary rounded-1 modal-close-button" data-bs-dismiss="modal">Close</button>
                    <button class="btn btn-solid-default rounded-1" data-bs-dismiss="modal">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Reset Password Modal End -->

    <!-- Add Address Modal Start -->
    <div class="modal fade add-address-modal" id="addAddress">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label font-light">Full Name</label>
                            <input type="text" class="form-control" id="name" placeholder="full name">
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label font-light">Full Address</label>
                            <input type="text" class="form-control" id="address" placeholder="123, abcd, xyz">
                        </div>
                        <div>
                            <label for="number" class="form-label font-light">Mobile</label>
                            <input type="number" class="form-control" id="number" placeholder="+1-123-456-7890">
                        </div>
                    </form>
                </div>
                <div class="modal-footer pt-0 text-end d-block">
                    <button type="button" class="btn bg-secondary text-white rounded-1 modal-close-button"
                        data-bs-dismiss="modal">Close</button>
                    <button class="btn btn-solid-default rounded-1" data-bs-dismiss="modal">Save Address</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Add Address Modal End -->

    <!-- Add Payment Modal Start -->
    <div class="modal fade payment-modal" id="addPayment">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <label for="name" class="form-label">Card Type</label>
                        <select class="form-select form-select-lg mb-4">
                            <option selected disabled>Choose Your Card</option>
                            <option value="1">Creadit Card</option>
                            <option value="2">Debit Card</option>
                            <option value="3">Debit Card and ATM</option>
                        </select>

                        <div class="mb-4">
                            <label for="card" class="form-label">Name On Card</label>
                            <input type="text" class="form-control" id="card" placeholder="Name card">
                        </div>
                        <div class="mb-4">
                            <label for="cAddress" class="form-label">Card Number</label>
                            <input type="number" class="form-control" id="cAddress" placeholder="XXXX-XXXX-XXXX-XXXX">
                        </div>
                        <div class="row">
                            <div class="col-md-8 mb-4">
                                <label for="expiry" class="form-label">Expiry Date</label>
                                <input type="date" class="form-control font-light" id="expiry">
                            </div>
                            <div class="col-md-4 mb-4">
                                <label for="cvv" class="form-label">CVV</label>
                                <input type="number" class="form-control" id="cvv" placeholder="XX9">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer pt-0 text-end d-block">
                    <button type="button" class="btn bg-secondary text-white rounded-1 modal-close-button"
                        data-bs-dismiss="modal">Close</button>
                    <button class="btn btn-solid-default rounded-1" data-bs-dismiss="modal">Save Card Details</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Add Payment Modal End -->

    <!-- Comfirm Delete Modal Start -->
    <div class="modal delete-account-modal fade" id="deleteModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body pb-3 text-center mt-4">
                    <h4>Are you sure you want to delete your account?</h4>
                </div>
                <div class="modal-footer d-block text-center mb-4">
                    <button class="btn btn-solid-default btn-sm fw-bold rounded" data-bs-target="#doneModal"
                        data-bs-toggle="modal" data-bs-dismiss="modal">Yes Delete account</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal delete-account-modal fade" id="doneModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body pb-3 text-center mt-4">
                    <h4>Done!!! Delete Your Account</h4>
                </div>
                <div class="modal-footer d-block text-center mb-4">
                    <button class="btn btn-solid-default btn-sm fw-bold rounded" data-bs-target="#exampleModalToggle"
                        data-bs-toggle="modal" data-bs-dismiss="modal">Okay</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Comfirm Delete Modal End -->

    <!-- tap to top Section Start -->
    <div class="tap-to-top">
        <a href="#home">
            <i class="fas fa-chevron-up"></i>
        </a>
    </div>
    <!-- tap to top Section End -->

    <div class="bg-overlay"></div>

    <all>
        <!-- latest jquery-->
        <!-- <script src="assets/js/jquery-3.5.1.min.js"></script> -->
        <script type="text/javascript"  src="myadmin/js/jquery-3.5.1.min.js"></script>
        
        <!-- Add To Home js -->
        <script type="text/javascript"  src="myadmin/js/pwa.js"></script>
        
        <!-- Bootstrap js-->
        <script type="text/javascript"  src="myadmin/js/bootstrap/bootstrap.bundle.min.js"></script>
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script> -->
        
        <!-- feather icon js-->
        <script type="text/javascript"  src="myadmin/js/feather/feather.min.js"></script>
        
        <!-- lazyload js-->
        <script type="text/javascript"  src="myadmin/js/lazysizes.min.js"></script>
        
        <!-- Slick js-->
        <script type="text/javascript"  src="myadmin/js/slick/slick.js"></script>
        <script type="text/javascript"  src="myadmin/js/slick/slick-animation.min.js"></script>
        <script type="text/javascript"  src="myadmin/js/slick/custom_slick.js"></script>
        
        <!-- Filter Hide and show Js -->
        <script type="text/javascript"  src="myadmin/js/filter.js"></script>
        
        <!-- Notify js-->
        <script type="text/javascript"  src="myadmin/js/bootstrap/bootstrap-notify.min.js"></script>
        
        <!-- script js -->
        <script type="text/javascript"  src="myadmin/js/theme-setting.js"></script>
        <script type="text/javascript"  src="myadmin/js/script.js"></script>


    	<script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <script src="assets/global.js"></script>
        <script src="assets/js/addpost.js"></script>

    </all>

</body>


</html>