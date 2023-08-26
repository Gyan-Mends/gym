<?php
     session_start();
     $user = $_SESSION['login'];
     include('inc/database.php');
     error_reporting(0);
     $user = $_SESSION['login'];
     $month = date('F');
     $day = date('D');
     if (strlen($_SESSION['login']) == 0) {
         header('location:login.php');
     } else {
 include "inc/header.php";
?>

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <?php
            //including navigation bar
            include "inc/nav.php";
            //color settings
            include "inc/color_settings.php";
    ?>
    </div>
    <div class="app-main">
        <div class="app-sidebar sidebar-shadow">
            <div class="app-header__logo">
                <div class="logo-src"></div>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
                            data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button"
                        class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>

            <?php
            //slide bar
            include "inc/slidebar.php";
            ?>
        </div>
        <div class="app-main__outer">
            <div class="app-main__inner">
                <div class="app-page-title">
                    <div class="page-title-wrapper">

                    </div>
                </div>
                <div class="row">

                    <div class="tab-content">
                        <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                            <center>
                                <h3>Under Contruction</h3>
                                <img width="450" class="rounded-circle" src="fixing.gif" alt="">

                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
//include "inc/script.php";

?>

        <script type="text/javascript" src="assets/scripts/main.js"></script>
</body>

</html>
<?php } ?>