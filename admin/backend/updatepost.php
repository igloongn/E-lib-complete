<?php 
    include '../../backend/db.php';

    // This is for Add Post
    // if ($_SERVER['REQUEST_METHOD'] == 'POST b') {
    //     $author = $_POST['author'];
    //     $name = $_POST['name'];
    //     $code = $_POST['code'];
    //     $level = $_POST['level'];
    //     $dept = $_POST['dept'];
    //     $year = $_POST['year'];
    
    //     // This is for the Image
    //     $image = $_FILES['post_img'];
    //     $imagename = $image['name'];
    //     $imagename = rand(100, 1000) . "." . $imagename;
    //     $tmp_name = $image['tmp_name'];    
    
    //     // This is for the PDF
    //     $pdf = $_FILES['pdf'];
    //     // echo '<br>';
    //     // print_r($pdf);
    //     $pdfname = $pdf['name'];
    //     $pdfname = rand(100, 1000) . "." . $pdfname;
    //     $pdf_tmp_name = $pdf['tmp_name'];
    
    //     if ($pdf['type'] == 'application/pdf') {
    //         date_default_timezone_set("Europe/London");
    //         $currenttime = time();
    //         // $datetime =strftime("%b-%d-%Y %H:%M:%S", $currenttime);
    //         $datetime = strftime("%B-%d-%Y %H:%M", $currenttime);
    
    //         $create_datetime = date("Y-m-d H:i:s");
    
    //         // MOVE IMAGE FILE
    //         move_uploaded_file($tmp_name, "../pdf_images/" . $imagename);
    //         move_uploaded_file($pdf_tmp_name, "../pdfs/" . $pdfname);
    
    //         $query = "INSERT INTO `questions`(levelID, departmentID, posted_by, year, date_created, course_name, course_code, image, pdf) VALUES('$level', '$dept', '$author', '$year', '$create_datetime', '$name', '$code', '$imagename', '$pdfname' )";
    //         $result = mysqli_query($conn, $query);
    //         if (!$result) {
    //             die("Error in Query<br>" . mysqli_error($conn));
    //         } else {
    //             // $_SESSION['success'] = "Category Added Successfully";
    //             $question = $name." ".$level; 
    //             header("location: ../dashboard.php?msg=The upload of &course_name=$question&msg2= was successfully ");
    //         }
            
    //     }else {
    //         header('location: ../dashboard.php?msg=Please you have to upload a PDF in the PDF Section');
    
    //     }
    // }


    // This is for the Ajax Call
    if (isset($_GET['pid'])) {
        $pid = $_GET['pid'];
        $query = "SELECT * from questions where id='$pid'";
        $result = mysqli_query($conn, $query);
        if (!$result) {
            die("Error in Query<br>" . mysqli_error($conn));
        }
        while ($rows = mysqli_fetch_assoc($result)){
            echo json_encode($rows);
        }
    }    
    
    
        // This is for Update Post
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id = $_POST['id'];
            $author = $_POST['author'];
            $name = $_POST['name'];
            $paper = $_POST['paper'];
            $code = $_POST['code'];
            $faculty = $_POST['faculty'];
            $level = $_POST['level'];
            $dept = $_POST['dept'];
            $year = $_POST['year'];
        
            // This is for the Image
            $image = $_FILES['post_img'];
            $imagename = $image['name'];
            $imagename = rand(100, 1000) . "." . $imagename;
            $tmp_name = $image['tmp_name'];    
        
            // This is for the PDF
            $pdf = $_FILES['pdf'];
            // echo '<br>';
            // print_r($pdf);
            $pdfname = $pdf['name'];
            $pdfname = rand(100, 1000) . "." . $pdfname;
            $pdf_tmp_name = $pdf['tmp_name'];
        
            if ($pdf['type'] == 'application/pdf') {
                date_default_timezone_set("Europe/London");
                $currenttime = time();
                // $datetime =strftime("%b-%d-%Y %H:%M:%S", $currenttime);
                $datetime = strftime("%B-%d-%Y %H:%M", $currenttime);
        
                $create_datetime = date("Y-m-d H:i:s");
        
                // MOVE IMAGE FILE
                move_uploaded_file($tmp_name, "../pdf_images/" . $imagename);
                move_uploaded_file($pdf_tmp_name, "../pdfs/" . $pdfname);
        
                $query = "UPDATE  `questions`
                SET paperID='$paper',levelID =$level,departmentID='$dept', posted_by='$author', year='$year', date_created='$create_datetime', 
                course_name='$name', course_code='$code', image='$imagename', pdf='$pdfname'
                WHERE id = '$id';
                ";
                $result = mysqli_query($conn, $query);
                if (!$result) {
                    die("Error in Query<br>" . mysqli_error($conn));
                } else {
                    // $_SESSION['success'] = "Category Added Successfully";
                    $question = $name." ".$level; 
                    header("location: ../dashboard.php?msg=The upload was successfully ");
                }
                
            }else {
                header('location: ../dashboard.php?msg=Please you have to upload a PDF in the PDF Section');
        
            }
        }
    
    

    // This is for the delete Modal
    if (isset($_GET['postid'])) {
        $postid = $_GET['postid'];
        echo $postid;
        $dquery = "DELETE FROM questions WHERE id=$postid";
        $dresult = mysqli_query($conn, $dquery);
        if (!$dresult) {
            die("Error in Query<br>" . mysqli_error($conn));
        }
    }



?>