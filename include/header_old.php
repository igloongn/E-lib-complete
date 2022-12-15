    <nav class="navbar navbar-dark navbar-expand-lg bg-dark">
        <div class="container"><a class="navbar-brand" href="#"><b>CSS</b></a><button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" aria-controls="navbarResponsive"
                aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-align-justify"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive" style="color: rgb(0,0,0);">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="index.php?paper=1" title="">Home</a></li>
                    <li class="nav-item dropdown">
                        <div class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Files</div>
                        <ul class="dropdown-menu">
                            <!-- First Level -->
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
                                <a class="dropdown-item" href="#"> <?php echo $name; ?> &raquo</a>
                                <ul class="submenu dropdown-menu" style="background-color: #f7a37bt;">
                                    <!-- Second Level -->
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
                                    <li class="ml-4">
                                        <a class="dropdown-item" href="#" style="color: #fffn;"> <?php echo $deptname; ?>  &raquo</a>
                                        <ul class="submenu dropdown-menu">
                                            <!-- Third Level -->
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
                                            <li class="ml-4">
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
                            </li>
                             <?php 
                                }
                            ?>
                        </ul>   
                        <!-- First Level -->
                    </li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="about.php">About</a></li>
                    

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Services</a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="#"> Web Development &raquo</a>
                                <ul class="submenu dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="#"> Wordpress Website</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#"> Website Design</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#"> Open Source</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#"> Custom CMS</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#"> Software Development &raquo</a>
                                <ul class="submenu dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="#"> Android App</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#"> Windows Software</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#"> Designing &raquo</a>
                                <ul class="submenu dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="#"> Web Designing</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#"> UI Design</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#"> Wireframing</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#"> SEO</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#"> Management</a>
                            </li>
                        </ul>
                    </li>


                    <li class="nav-item" role="presentation">
                        <a class="nav-link" href="https://waeup.uniben.edu/login" target="_blank">Kofa Page</a>
                    </li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="admin/account/login.php" title="">Admin</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="index.php?paper=<?php echo $notwordID?>"><?php echo $notword;?>?</a></li>
                </ul>
            </div>
        </div>
    </nav>