<div class="page-wrapper  p-t-10 p-b-50">
    <div class="wrapper wrapper--w900">
        <div class="card card-6 bg-d">
            <div class="card-heading">
                <h2 style="color: black;margin-top: 50px;margin-bottom: 50px; text-align: center;"  class="title">Add a Past Question</h2>
            </div>
            <?php 
                if (isset($_GET['msg'])) {
            ?>
            <div class="alert alert-warning" id='uploadnotification'>
                <h3><center><b><?php 
                echo $_GET['msg'];
                echo $_GET['course_name'];
                echo $_GET['msg2'];
                ?></b></center></h3>
            </div>

            <?php
                } else {
                    # code...
                }
            ?>
            <div class="card-body bg-g">
                <form method="POST" action='backend/addpost.php'  enctype="multipart/form-data" id="addform">
                    <div class="form-row">
                        <div class="name">Author</div>
                        <div class="value">
                            <input required readonly class="input--style-6" id="author" name="author" type="text" value="<?php echo "Admin"; ?>">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="name">Question/Material</div>
                        <div class="value">
                            <select class="form-select form-select-lg mb-3" id="paper" name="paper" aria-label=".form-select-lg example">
                                <!-- <option selected>Select one</option> -->
                                <?php 
                                 $pquery = "SELECT * from paper";
                                 $presult = mysqli_query($conn, $pquery);
                                 if (!$presult) {
                                    die('Error in Query '. mysqli_error($conn) );
                                 }
                                 while ($row = mysqli_fetch_array($presult)) {
                                    $id = $row['id'];
                                    $name = $row['name'];
                                ?>
                                    <option value="<?php echo $id; ?>"><?php echo $name; ?></option>
                                <?php
                                 }
                                ?>
                            </select>    
                        </div>
                    </div>                            

                    <div class="form-row">
                        <div class="name">Course Name</div>
                        <div class="value">
                            <input required class="input--style-6" type="text" id="name" name="name">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="name">Course Code</div>
                        <div class="value">
                            <input required placeholder="" class="input--style-6" type="text" id="code" name="code">
                        </div>
                    </div> 
                    <div class="form-row">
                        <div class="name">Faculty</div>
                        <div class="value">
                            <select class="form-select form-select-lg mb-3" id="faculty" name="faculty" aria-label=".form-select-lg example">
                                <option selected>Select a Faculty</option>
                                <?php 
                                 $pquery = "SELECT * from faculty";
                                 $presult = mysqli_query($conn, $pquery);
                                 if (!$presult) {
                                    die('Error in Query '. mysqli_error($conn) );
                                 }
                                 while ($row = mysqli_fetch_array($presult)) {
                                    $id = $row['id'];
                                    $name = $row['name'];
                                ?>
                                    <option value="<?php echo $id; ?>"><?php echo $name; ?></option>
                                <?php
                                 }
                                ?>
                            </select>    
                        </div>
                    </div>                            
                    <div class="form-row">
                        <div class="name">Level</div>
                        <div class="value">
                            <select class="form-select form-select-lg mb-3" id="level" name="level" aria-label=".form-select-lg example">
                                <option selected>Select a Level</option>
                                <?php 
                                 $pquery = "SELECT * from level";
                                 $presult = mysqli_query($conn, $pquery);
                                 if (!$presult) {
                                    die('Error in Query '. mysqli_error($conn) );
                                 }
                                 while ($row = mysqli_fetch_array($presult)) {
                                    $id = $row['id'];
                                    $name = $row['name'];
                                ?>
                                    <option value="<?php echo $id; ?>"><?php echo $name; ?></option>
                                <?php
                                 }
                                ?>
                            </select>    
                        </div>
                    </div>                            
                    <div class="form-row">
                        <div class="name">Department</div>
                        <div class="value">
                            <select class="form-select form-select-lg mb-3" id="dept" name="dept" aria-label=".form-select-lg example">
                                <option selected>Select a Department</option>
                                <?php 
                                 $pquery = "SELECT * from dept";
                                 $presult = mysqli_query($conn, $pquery);
                                 if (!$presult) {
                                    die('Error in Query '. mysqli_error($conn) );
                                 }
                                 while ($row = mysqli_fetch_array($presult)) {
                                    $id = $row['id'];
                                    $name = $row['name'];
                                ?>
                                    <option value="<?php echo $id; ?>"><?php echo $name; ?></option>
                                <?php
                                 }
                                ?>
                            </select>    
                        </div>
                    </div>
                    <div class="form-row">
                        <small style="padding-left:4%; width: 100%; text-align: left">E.g 2000/2001, 2003/2004 e.t.c...</small>
                        <div class="name">Year of the Paper</div>
                        <div class="value">
                            <input required placeholder="E.g 2000/2001, 2003/2004 "id="year" class="input--style-6" type="text" name="year" value="NO YEAR">
                        </div>
                    </div>
                    <div class="form-row">
                        <small style="padding-left:9%; width: 100%; text-align: left">Please you will need to upload the first page of your Question</small>
                        <div class="name">Upload Photo</div>
                        <div>
                            <input required name="post_img" type="file" id="post_img" accept="image/*">
                        </div>
                        <!-- <div class="value">
                            <div class="input-group js-input-file">
                                <input class="input-file" type="file" name="post_img" accept="image/*" id="file" >
                                <label class="label--file" for="file" >Choose file</label>
                                <span class="input-file__info">No file chosen</span>
                            </div>
                            <div class="label--desc">Upload Image. Max file size 50 MB</div>
                        </div> -->
                    </div>                            
                    
                    <div class="form-row">
                    <small style="padding-left:6%; width: 100%; text-align: left">It has to be a PDF</small>
                        <div class="name">Upload Documents</div>
                        <div>
                            <input required name="pdf" id="pdf" type="file">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn--radius-2 btn--mine" id="Hellow " type="submit">Upload</button>
                        <!-- <button class="danger-button" type="submit">Upload</button> -->
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>