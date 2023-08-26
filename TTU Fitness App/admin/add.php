<?php
session_start();
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
                            <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
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
                        <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
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
                            <div class="page-title-heading">
                                <div class="page-title-icon">
                                    <i class="pe-7s-car icon-gradient bg-mean-fruit">
                                    </i>
                                </div>
                                <div>Analytics Dashboard
                                    <div class="page-title-subheading">This is an example dashboard created using build-in elements and components.
                                    </div>
                                </div>
                            </div>
                            <div class="page-title-actions">
                                <button type="button" data-toggle="tooltip" title="Example Tooltip" data-placement="bottom" class="btn-shadow mr-3 btn btn-dark">
                                    <i class="fa fa-star"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
                            <li class="nav-item">
                                <a role="tab" class="nav-link active" id="tab-0" data-toggle="tab" href="#tab-content-0">
                                    <span>Add Member</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a role="tab" class="nav-link" id="tab-1" data-toggle="tab" href="#tab-content-1">
                                    <span>Add Trainee</span>
                                </a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="main-card mb-3 card">
                                            <div class="card-body">
                                                <h5 class="card-title">Personal Details</h5>

                                                <form class="" action="" method="post">
                                                    <div class="position-relative form-group">
                                                        <label for="fname" class="">First Name</label>
                                                        <input name="text" required id="fName" placeholder="Enter first name" type="text" class="form-control">
                                                    </div>
                                                    <div class="position-relative form-group">
                                                        <label for="lname" class="">Last Name</label>
                                                        <input name="text" required id="lName" placeholder="Enter Last name" type="text" class="form-control">
                                                    </div>
                                                    <div class="position-relative form-group">
                                                        <label for="exampleSelect" class="" style="color:blue;">Goals
                                                            <i style="color:red;">*</i></label>
                                                        <select name="goal" id="exampleSelect" class="form-control">
                                                            <option value="0">Select From Here</option>
                                                            <option value="1">Loss Weight</option>
                                                            <option value="2">Build Muscles</option>
                                                            <option value="3">Get Strenght</option>
                                                            <option value="4">Normal Execise</option>
                                                            <option value="5">Special Request</option>
                                                        </select>
                                                    </div>
                                                    <div class="position-relative form-group">
                                                        <label for="phoneNo" class="">Phone No</label>
                                                        <input name="phoneNo" required id="phoneNumber" placeholder="Telephone number" type="phone" class="form-control">
                                                    </div>
                                                    <div class="position-relative form-group">
                                                        <label for="exampleSelect" class="">Gender</label>
                                                        <select name="gender" id="exampleSelect" class="form-control">
                                                            <option value="0">Male</option>
                                                            <option value="1">Female</option>
                                                        </select>
                                                    </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="main-card mb-3 card">
                                            <div class="card-body">
                                                <h5 class="card-title">Login Details</h5>
                                                <div class="position-relative form-group">
                                                    <label for="username" class="">Username</label>
                                                    <input name="username" required id="exampleEmail" placeholder="Enter username" type="username" class="form-control">
                                                </div>
                                                <div class="position-relative form-group">
                                                    <label for="email" class="">Email</label>
                                                    <input name="email" required id="email" placeholder="Enter email" type="email" class="form-control">
                                                </div>
                                                <div class="position-relative form-group">
                                                    <label for="password" class="">Password</label>
                                                    <input name="password" required id="password" placeholder="Enter password" type="password" class="form-control">
                                                </div>
                                                <div class="position-relative form-group">
                                                    <label for="Cpassword" class="">Confirm Password</label>
                                                    <input name="Cpassword" required id="CPassword" placeholder="Confirm password" type="Cpassword" class="form-control">
                                                </div>
                                                <div class="position-relative form-group">
                                                    <label for="exampleFile" class="">Upload Profile</label>
                                                    <input name="img" id="exampleFile" type="file" class="form-control-file">
                                                    <small class="form-text text-muted">Select from the above to upload your profile picture here.</small>
                                                </div>
                                                <button name="registerMember" class="mt-1 btn btn-primary">Register member</button>
                                                </form>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane tabs-animation fade" id="tab-content-1" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="main-card mb-3 card">
                                            <div class="card-body">
                                                <h5 class="card-title">Trainee Details</h5>
                                                <div>
                                                    <div class="input-group">

                                                        <form class="">
                                                            <div class="position-relative form-group">
                                                                <label for="fName" class="">First Name</label>
                                                                <input name="text" required id="fName" placeholder="Enter first name" type="text" class="form-control">
                                                            </div>
                                                            <div class="position-relative form-group">
                                                                <label for="lName" class="">Last Name</label>
                                                                <input name="text" required id="lName" placeholder="Enter Last name" type="text" class="form-control">
                                                            </div>
                                                            <div class="position-relative form-group">
                                                                <label for="address" class="">Address</label>
                                                                <input name="text" required id="address" placeholder="Enter address" type="address" class="form-control">
                                                            </div>
                                                            <div class="position-relative form-group">
                                                                <label for="phoneno" class="">Phone No</label>
                                                                <input name="text" required id="phoneNumber" placeholder="Telephone number" type="phone" class="form-control">
                                                            </div>
                                                            <div class="position-relative form-group">
                                                                <label for="exampleSelect" class="">Gender</label>
                                                                <select name="select" id="exampleSelect" class="form-control">
                                                                    <option>Male</option>
                                                                    <option>Female</option>
                                                                </select>
                                                            </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="main-card mb-3 card">
                                            <div class="card-body">
                                                <h5 class="card-title">Login Details</h5>
                                                <div>
                                                    <div class="input-group input-group-lg">
                                                        <div class="position-relative form-group">
                                                            <label for="username" class="">Username</label>
                                                            <input name="text" required id="exampleEmail" placeholder="Enter username" type="username" class="form-control">
                                                        </div>
                                                        <div class="position-relative form-group">
                                                            <label for="email" class="">Email</label>
                                                            <input name="email" required id="email" placeholder="Enter email" type="email" class="form-control">
                                                        </div>
                                                        <div class="position-relative form-group">
                                                            <label for="password" class="">Password</label>
                                                            <input name="password" required id="password" placeholder="Enter password" type="password" class="form-control">
                                                        </div>
                                                        <div class="position-relative form-group">
                                                            <label for="Cpassword" class="">Confirm Password</label>
                                                            <input name="Cpassword" required id="CPassword" placeholder="Confirm password" type="Cpassword" class="form-control">
                                                        </div>
                                                        <div class="position-relative form-group"><label for="exampleFile" class="">Upload Profile</label><input name="file" id="exampleFile" type="file" class="form-control-file">
                                                            <small class="form-text text-muted">Select from the above to upload your profile picture here.</small>
                                                        </div>
                                                        <button class="mt-1 btn btn-primary">Register member</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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