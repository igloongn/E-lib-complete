<header>
    <div class="container">
        <div class="header-content d-flex flex-wrap align-items-center">
            <div class="logo">
                <a href="index.php?paper=1" title="">
                    <h1><strong>Final Year Project</strong></h2>
                </a>
            </div>
            <!--logo end-->
            <ul class="contact-add d-flex flex-wrap">
                <li>
                    <div class="contact-info">
                        <img src="assets/img/icon1.png" alt="">
                        <div class="contact-tt">
                            <h4>Call</h4>
                            <span>+234 814 0570 059</span>
                        </div>
                    </div>
                    <!--contact-info end-->
                </li>
                <li>
                    <div class="contact-info">
                        <img src="assets/img/icon3.png" alt="">
                        <div class="contact-tt">
                            <h4>Kadu One</h4>
                            <span>Mon - Fri 8 AM - 5 PM</span>
                        </div>
                    </div>
                    <!--contact-info end-->
                </li>
                <li>
                    <div class="contact-info">
                        <img src="assets/img/icon3.png" alt="">
                        <div class="contact-tt">
                            <h4>Computer Science</h4>
                            <span>400 Level</span>
                        </div>
                    </div>
                    <!--contact-info end-->
                </li>
            </ul>
            <!--contact-information end-->
            <div class="menu-btn">
                <a href="#">
                    <span class="bar1"></span>
                    <span class="bar2"></span>
                    <span class="bar3"></span>
                </a>
            </div>
            <!--menu-btn end-->
        </div>
        <!--header-content end-->
        <div class="navigation-bar d-flex flex-wrap align-items-center">
            <nav>
                <ul>
                    <li>
                        <a class="active" href="index.php?paper=1" title="">Home</a>
                    </li>
                    <li class="dropdown">
                        <a href="#">Faculty</a>
                        <!-- First Level -->
                        <ul class="dropdown-menur" aria-labelledby="dropdownMenuButton">
                            <?php 
                                $poquery = "SELECT * FROM `faculty` ORDER BY id desc";
                                $poresult = mysqli_query($conn, $poquery);
                                if (!$poresult) {
                                    die("Error in Query<br>".mysqli_error($conn));
                                }
                                while ($rows = mysqli_fetch_assoc($poresult)) {
                                    $id = $rows['id'];
                                    $id = htmlentities($id);
                                    $name = $rows['name'];
                                    $name = htmlentities($name);
                                    ?>


                                <li>
                                    <a href="#" class="dropdown-item"><?php echo $name; ?></a>
                                    <!-- Second Level -->
                                    <ul class="dropdown-menur dropdown-submenur">
                                        <?php 
                                            $gjquery = "SELECT * FROM `dept` where facultyID = '$id'  ORDER BY id desc";
                                            $gjresult = mysqli_query($conn, $gjquery);
                                            if (!$gjresult) {
                                                die("Error in Query<br>".mysqli_error($conn));
                                            }
                                            while ($rows = mysqli_fetch_assoc($gjresult)) {
                                                $deptid = $rows['id'];
                                                $deptid = htmlentities($deptid);
                                                $deptname = $rows['name'];
                                                $deptname = htmlentities($deptname);
                                                $ddate_created = $rows['date created'];
                                        ?>


                                            <li>
                                                <a href="#" class="dropdown-item"><?php echo $deptname; ?></a>
                                                <!-- Third Level -->
                                                <ul class="dropdown-menur dropdown-submenur">
                                                    <?php 
                                                        $rjquery = "SELECT * FROM `level` where facultyID = '$id'";
                                                        $rjresult = mysqli_query($conn, $rjquery);
                                                        if (!$rjresult) {
                                                            die("Error in Query<br>".mysqli_error($conn));
                                                        }
                                                        while ($rows = mysqli_fetch_assoc($rjresult)) {
                                                            $rlevelid = $rows['id'];
                                                            $rlevelid = htmlentities($rlevelid);
                                                            $levelname = $rows['name'];
                                                            $levelname = htmlentities($levelname);
                                                    ?>

                                                        <li>
                                                            <a class="dropdown-item" href="questions.php?faculty=<?php echo $id; ?>&dept=<?php echo $deptid;?>&level=<?php echo $rlevelid?>&paper=<?php echo $_GET['paper']; ?>" ><?php echo $levelname; ?></a>
                                                        </li>
                                                    <?php 
                                                        }
                                                    ?>
                                                </ul>
                                            </li>
                                        <?php 
                                            }
                                        ?>
                                    </ul>
                                    <!-- Second Level -->
                                </li>
                            <?php 
                                }
                            ?>
                        </ul>
                        <!-- First Level -->
                    </li>
                    <li>
                        <a href="about.php" >About</a>
                    </li>
                    <li>
                        <a href="https://waeup.uniben.edu/login">Kofa Page</a>
                    </li>
                    <li>
                        <!-- <a href="admin/dashboard.php" title="">Admin</a> -->
                        <a href="admin/account/login.php" >Admin</a>
                    </li>
                    <li>
                        <a href="index.php?paper=<?php echo $notwordID?>"><?php echo $notword;?>?</a>
                    </li>
                </ul>                    
            </nav>
        </div>
        <!--navigation-bar end-->
    </div>
</header>

<!-- Mobile View -->
<div class="responsive-menu">
    <ul id="headfind">
        <li><a href="#"><?php echo $word; ?></a></li>
        <li>
            <a href="index.php?paper=1" >Home</a>
        </li>
        <li>
            <a href="about.php">About</a>
        </li>
        <li class="qparent"><a href="#">Faculty</a>
            <!-- First Level -->
            <ul class="qchild">
                <?php 
                    $query = "SELECT * FROM `faculty` ORDER BY id desc";
                    $result = mysqli_query($conn, $query);
                    if (!$result) {
                        die("Error in Query<br>".mysqli_error($conn));
                    }
                    while ($rows = mysqli_fetch_assoc($result)) {
                        $id = $rows['id'];
                        $id = htmlentities($id);
                        $faculty_name = $rows['name'];
                        $faculty_name = htmlentities($faculty_name);
                        $date_created = $rows['date_created'];
                ?>
                <!-- Second Level -->
                <li class="qparent dropdown"><a href="#"><?php echo $faculty_name;?></a>
                    <ul class="qchild" >
                        <?php 
                            $jquery = "SELECT * FROM `dept` where facultyID = '$id'  ORDER BY id desc";
                            $jresult = mysqli_query($conn, $jquery);
                            if (!$jresult) {
                                die("Error in Query<br>".mysqli_error($conn));
                            }
                            while ($rows = mysqli_fetch_assoc($jresult)) {
                                $deptid = $rows['id'];
                                $deptid = htmlentities($deptid);
                                $deptname = $rows['name'];
                                $deptname = htmlentities($deptname);
                                $ddate_created = $rows['date created'];
                        ?>
                        <!-- Third Level -->
                        <li class="qparent dropdown"><a href="#"><?php echo $deptname;?></a>
                            <ul class="qchild" >
                                <?php 
                                    $rjquery = "SELECT * FROM `level` where facultyID = '$id'";
                                    $rjresult = mysqli_query($conn, $rjquery);
                                    if (!$rjresult) {
                                        die("Error in Query<br>".mysqli_error($conn));
                                    }
                                    while ($rows = mysqli_fetch_assoc($rjresult)) {
                                        $rlevelid = $rows['id'];
                                        $rlevelid = htmlentities($rlevelid);
                                        $levelname = $rows['name'];
                                        $levelname = htmlentities($levelname);
                                ?>
                                <a href="questions.php?faculty=<?php echo $id; ?>&dept=<?php echo $deptid;?>&level=<?php echo $rlevelid?>&paper=<?php echo $_GET['paper']; ?>" nowrap><li id="dropdown"><?php echo $levelname;?></li></a>
                                <?php }?>
                            </ul>
                        </li>
                        <!-- Third Level -->
                            <?php }?>
                    </ul>
                </li>
                <!-- Second Level -->
                <?php }?>
            </ul>
            <!-- First Level -->
        </li>
        <li>
            <a href="https://waeup.uniben.edu/login" target="_blank">Kofa Page</a>
        </li>
        <li>
            <a href="admin/account/login.php" title="">Admin?</a>
        </li>
    </ul>
    <!-- TO go to the Bottom -->
    <ul>
        <li>
        <a href="index.php?paper=<?php echo $notwordID?>" title=""><?php echo $notword;?>?</a>
        </li>
    </ul>
</div>
