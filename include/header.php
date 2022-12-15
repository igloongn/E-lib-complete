<div class="sidebar">
    <div class="sidebar-inner">
        <div class="sidebar-logo">
            <div class="d-flex align-items-center flex-nowrap">
                <a class="sidebar-link text-decoration-none" href="#">
                    <div class="d-flex align-items-center flex-nowrap">
                        <div class="logo-sm">
                            <div class="logo d-flex align-items-center justify-content-center">
                                E-Lib
                            </div>
                        </div>
                        <div class="logo-text d-flex align-items-center justify-content-center">
                            E-Library Uniben
                        </div>
                    </div>
                </a>
                <div class="">
                    <div class="mobile-toggle sidebar-toggle">
                        <a href="#" class="text-decoration-none">
                            <i class="far fa-times-circle"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <ul class="sidebar-menu scrollable position-relatives pt-3e">
            <li class="nav-item dropdown">
                <a class="nav-link wave-effect" href="index.php?paper=<?php echo $notwordID?>">
                    <span class="icon-holder">
                        <i class="<?php echo $icon;?>" aria-hidden="true"></i>
                    </span>
                    <span class="title"><?php echo $notword;?>?</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link wave-effect" href="index.php?paper=<?php echo $wordID?>">
                    <span class="icon-holder">
                        <i class="fa fa-home"></i>
                    </span>
                    <span class="title">Home</span>
                </a>
            </li>
            <!-- Faculty -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#">
                    <span class="icon-holder">
                        <i class="fas fa-folder-plus"></i>
                    </span>
                    <span class="title">Faculty</span>
                    <span class="arrow">
                        <i class="fas fa-angle-right"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                
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

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#">
                            <span class="title"><?php echo $faculty_name;?></span>
                            <span class="arrow">
                                <i class="fas fa-angle-right"></i>
                            </span>
                        </a>
                        <ul class="dropdown-menu">
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


                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#">
                                    <span class="title"><?php echo $deptname;?></span>
                                    <span class="arrow">
                                        <i class="fas fa-angle-right"></i>
                                    </span>
                                </a>
                                <ul class="dropdown-menu">
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
                                        <a href="questions.php?faculty=<?php echo $id; ?>&dept=<?php echo $deptid;?>&level=<?php echo $rlevelid?>&paper=<?php echo $_GET['paper']; ?>" nowrap><li><?php echo $levelname;?></li></a>
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

            </li>
            <li class="nav-item dropdown">
                <a class="nav-link wave-effect" target="_blank" href="https://waeup.uniben.edu/login">
                    <span class="icon-holder">
                        <i class="far fa-folder-open"></i>
                    </span>
                    <span class="title">Kofa Page</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link wave-effect" href="admin/account/login.php?paper=<?php echo $notwordID?>">
                    <span class="icon-holder">
                        <i class="fa fa-lock"></i>
                    </span>
                    <span class="title">Admin?</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link wave-effect" href="about.php?paper=<?php echo $wordID?>">
                    <span class="icon-holder">
                        <i class="fas fa-code"></i>
                    </span>
                    <span class="title">About</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link wave-effect" href="article.php?paper=<?php echo $wordID?>">
                    <span class="icon-holder">
                        <i class="fa fa-newspaper"></i>
                    </span>
                    <span class="title">Upload a Document</span>
                </a>
            </li>
        </ul>
    </div>
</div>



<!-- Top Bar -->
<div class="" style="background-color: #909090;">
    <nav class="navbar navbar-expand navbar-light bg-light">
        <li class="nav-item active">
            <a id="sidebar-toggle" class="sidebar-toggle nav-link" href="#">
                <i class="fas fa-bars"></i>
            </a>
        </li>
        <ul class="navbar-nav mx-auto d-flex justify-content-between">
            <li class="nav-item">
                <a class="nav-link" href="index.php?paper=<?php echo $wordID?>">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="about.php?paper=<?php echo $wordID?>">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://waeup.uniben.edu/login">Kofa Page</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="admin/account/login.php?paper=<?php echo $notwordID?>">Admin</a>
            </li>
        </ul>
    </nav>
</div>
