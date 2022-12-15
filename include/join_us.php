
<section class="newsletter-section">
    <div class="container">
        <div class="newsletter-sec">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="newsz-ltr-text">
                        <h2>Request for a 
                            <br><?php echo $word;?>
                        </h2>
                        <a id="submit-button" href="#" title="" class="btn-default">
                            <button  style="background-color: transparent; color: white;">
                                Request
                            <i class="fa fa-long-arrow-alt-right"></i></button>
                        </a>
                    </div>
                    <!--newsz-ltr-text end-->
                </div>
                <div class="col-lg-8">
                    <!-- Request A Past Question -->
                    <form id="request-form" class="newsletter-form">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input id='name' type="text" name="name" placeholder="Name">
                                </div>
                                <!--form-group end-->
                            </div>    
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input id='phone_number' type="text" name="phone_number" placeholder="Phone Number">
                                </div>
                                <!--form-group end-->
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input id='email' type="email" name="email" placeholder="Email">
                                </div>
                                <!--form-group end-->
                            </div>
                            <div class="col-md-4">
                                <div class="form-group select-tg">
                                    <select id='level'>
                                        <option>Level</option>
                                        <option>100</option>
                                        <option>200</option>
                                        <option>300</option>
                                        <option>400</option>
                                        <option>500</option>
                                        <option>600</option>
                                    </select>
                                </div>
                                <!--form-group end-->
                            </div>     
                            <div class="col-md-4">
                                <div class="form-group select-tg">
                                    <select id='dept'>
                                        <option>Dept</option>
                                        <?php
                                            $query = "SELECT * from dept";
                                            $result = mysqli_query($conn, $query);
                                            while ($row = mysqli_fetch_array($result)){
                                                $name = $row['name'];
                                        ?>
                                            <option><?php echo $name; ?></option>
                                        <?php
                                            }
                                        ?>
                                    </select>
                                </div>
                                <!--form-group end-->
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input id='paper' type="text" name="paper" value="<?php echo $word?>" readonly>
                                </div>
                                <!--form-group end-->
                            </div>                            
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea id='message' name="message" placeholder="Message"></textarea>
                                </div>
                                <!--form-group end-->
                            </div>
                        </div>
                    </form>
                    <!--newsletter-form end-->
                </div>
            </div>
        </div>
        <!--newsletter-sec end-->
    </div>
</section>
<!--newsletter-sec end-->