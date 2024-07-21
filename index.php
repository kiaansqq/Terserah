            <!-- main content -->
            <?php
            session_start();
            if (isset($_GET['x']) && $_GET['x'] == 'Home') {
                $page = "home.php";
                include "main.php";
            } elseif (isset($_GET['x']) && $_GET['x'] == 'Enrollments') {
                $page = "enrollments.php";
                include "main.php";
            } elseif (isset($_GET['x']) && $_GET['x'] == 'Courses') {
                $page = "courses.php";
                include "main.php";
            } elseif (isset($_GET['x']) && $_GET['x'] == 'Intructors') {
                $page = "intructors.php";
                include "main.php";
            } elseif (isset($_GET['x']) && $_GET['x'] == 'Report') {
                if($_SESSION['level_course']==1){
                    $page = "report.php";
                    include "main.php";
                }
            } elseif (isset($_GET['x']) && $_GET['x'] == 'User') {
                $page = "user.php";
                include "main.php";
            } elseif (isset($_GET['x']) && $_GET['x'] == 'login') {
                include "login.php";
            } elseif (isset($_GET['x']) && $_GET['x'] == 'logout') {
                include "proses/proses_logout.php";
            } else {
                $page = "home.php";
                include "main.php";
            }
            ?>
            <!--close main content-->