<?php 
      
    if (isset($_GET['pdf'])) {
        $file1 = $_GET['pdf'];
    
        header('Content-Type: application/pdf');
        header('Content-Description: inline;filename="'.$file1.'"');
        header('Content-Transfer-Encoding:binary');
        header('Accept-Ranges:Bytes');
        @readfile('../admin/pdfs/'.$file1);

    } else {
        header('location: index.php?msg="You Read that PDF or It does not exist."');
    }
    

?>