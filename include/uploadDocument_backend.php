<?php 
    include '../backend/db.php';

    // This is for Add Post
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $author = 'Student';
        $name = $_POST['name'];
        $paper = $_POST['paper'];
        $code = $_POST['code'];
        $faculty = $_POST['faculty'];
        $level = $_POST['level'];
        $dept = $_POST['dept'];
        $year = $_POST['year'];

        echo $dept;

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
            move_uploaded_file($tmp_name, "../admin/pdf_images/" . $imagename);
            move_uploaded_file($pdf_tmp_name, "../admin/pdfs/" . $pdfname);

            $query = "INSERT INTO `questions`(facultyID, paperID, levelID, departmentID, posted_by, year, date_created, course_name, course_code, image, pdf) VALUES('$faculty', '$paper', '$level', '$dept', '$author', '$year', '$create_datetime', '$name', '$code', '$imagename', '$pdfname' )";
            $result = mysqli_query($conn, $query);
            if (!$result) {
                die("Error in Query<br>" . mysqli_error($conn));
            } else {
                // $_SESSION['success'] = "Category Added Successfully";
                $question = $name." ".$level; 
                header("location: ../article.php?paper=1&msg=The upload was successfully ");
            }

        }else {
            header('location: ../article.php?paper=1&msg=Please you have to upload a PDF in the PDF Section');

        }
    }



?>