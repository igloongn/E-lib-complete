    <!-- This is for update form-->

    <div id="editmodal" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">


                <div class="page-wrapper  p-t-10 p-b-50">
                    <div class="wrapper wrapper--w900">
                        <div class="card card-6 bg-d">
                            <div class="card-heading">
                                <h2 style="color: black;margin-top: 50px;margin-bottom: 50px; text-align: center;"  class="title">Update a Past Question</h2>
                            </div>

                            <div class="card-body bg-g">
                                <!-- <input name="postid" value=""> -->
                                <form method="POST" action='backend/updatepost.php'  enctype="multipart/form-data" id="addform">
                                    <!-- <div class="form-row" style="display:none;">
                                        <div class="name">ID</div>
                                        <div class="value">
                                            <input required readonly class="input--style-6" id="id" name="id" type="text">
                                        </div>
                                    </div> -->
                                    <div class="form-row">
                                        <div class="name">Author</div>
                                        <div class="value">
                                            <input required readonly class="input--style-6" id="author" name="author" type="text" value="<?php echo "Admin"; ?>">
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
                                        <div class="name">Question/Material</div>
                                        <div class="value">
                                            <select class="form-select form-select-lg mb-3" id="paper" name="paper" aria-label=".form-select-lg example">
                                                <?php 
                                                $ytpquery = "SELECT * from paper";
                                                $ytpresult = mysqli_query($conn, $ytpquery);
                                                if (!$ytpresult) {
                                                    die('Error in Query '. mysqli_error($conn) );
                                                }
                                                while ($row = mysqli_fetch_array($ytpresult)) {
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
                                        <div class="name">Faculty</div>
                                        <div class="value">
                                            <select class="form-select form-select-lg mb-3" id="faculty" name="faculty" aria-label=".form-select-lg example">
                                                <?php 
                                                $tpquery = "SELECT * from faculty";
                                                $tpresult = mysqli_query($conn, $tpquery);
                                                if (!$tpresult) {
                                                    die('Error in Query '. mysqli_error($conn) );
                                                }
                                                while ($row = mysqli_fetch_array($tpresult)) {
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
                                        <div class="name">Year of the question</div>
                                        <div class="value">
                                            <input required placeholder="E.g 2000/2001, 2003/2004 "id="year" class="input--style-6" type="text" name="year" value="NO YEAR" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <img id="old_pic" class="rounded mx-auto d-block" alt="" src="dff">
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
                                        <div class="name">Upload Question</div>
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


                </div>
                <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="mclose">Close</button>
                    <button type="button" class="btn btn-primary" id="okaygotit">OK, Got it!</button>
                </div> -->
            </div>
        </div>
    </div>






