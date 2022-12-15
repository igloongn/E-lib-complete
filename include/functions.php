<?php 
    // My First Function
    function banner($head, $head2, $homeID){
        echo '
        <section class="pager-section">
            <div class="container">
                <div class="pager-content text-center">
                    <h2>'.$head.'</h2>
                    <ul>
                        <li>
                            <a href="index.php?paper='.$homeID.'">Home</a>
                        </li>
                        <!-- 
                        <li>
                            <span>'.$head2.'</span>
                        </li>
                        -->
                    </ul>
                </div>
                <!--pager-content end-->
                <h2 class="page-titlee">Shelly</h2>
            </div>
        </section>
    ';
    }

?>