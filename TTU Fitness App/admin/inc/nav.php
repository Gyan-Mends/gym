<div class="app-header header-shadow">
    <div class="app-header__logo">
        <div class="logo-src">

        </div>
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
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>
    <div class="app-header__content">
        <div class="app-header-left">
            <div class="search-wrapper">
                <div class="input-holder">
                    <input type="text" class="search-input" placeholder="Type to search">
                    <button class="search-icon"><span></span></button>
                </div>
                <button class="close"></button>
            </div>
            <ul class="header-menu nav">
                <li class="nav-item">
                    <a href="javascript:void(0);" class="nav-link">
                        <i class="nav-link-icon fa fa-database"> </i>
                        Statistics
                    </a>
                </li>
                <li class="btn-group nav-item">
                    <a href="javascript:void(0);" class="nav-link">
                        <i class="nav-link-icon fa fa-edit"></i>
                        Projects
                    </a>
                </li>
                <li class="dropdown nav-item">
                    <a href="javascript:void(0);" class="nav-link">
                        <i class="nav-link-icon fa fa-cog"></i>
                        Settings
                    </a>
                </li>
            </ul>
        </div>
        <div class="app-header-right">
            <div class="header-btn-lg pr-0">
                <div class="widget-content p-0">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left">
                            <div class="btn-group">
                                <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                    <img width="42" class="rounded-circle" src="assets/images/avatars/1.jpg" alt="">
                                    <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                </a>
                                <div tabindex="-1" role="menu" aria-hidden="true"
                                    class="dropdown-menu dropdown-menu-right">
                                    <button type="button" tabindex="0" class="dropdown-item" data-toggle="modal"
                                        data-target="#account">
                                        User Account</button>
                                    <button type="button" tabindex="0" class="dropdown-item">Status :
                                        <i type="button" class="btn-info"> Active</i></button>
                                    <button type="button" tabindex="0" class="dropdown-item"><a href="logout.php">
                                            Logout
                                        </a></button>

                                </div>
                            </div>
                        </div>
                        <div class="widget-content-left  ml-3 header-user-info">
                            <div class="widget-heading">
                                Alina Mclourd
                            </div>
                            <div class="widget-subheading">
                                VP People Manager
                            </div>
                        </div>
                        <div class="widget-content-right header-user-info ml-3">
                            <button type="button" class="btn-shadow p-1 btn btn-primary btn-sm show-toastr-example">
                                <i class="fa text-white fa-calendar pr-1 pl-1"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<form action="">

    <!--Account Modal -->
    <div class="modal fade" id="account" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Account</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body btn-info" id="modal">

                    <div class="position-relative form-group" id="formGroup">
                        <style>
                        #formGroup {
                            margin-left: 40%;
                        }

                        #formGroupItem {
                            margin-left: 25%;
                        }

                        #modal1 {}
                        </style>
                        <label for="exampleEmail11" class="">Profile Picture</label><br>
                        <img width="100" class="rounded-circle" src="assets/images/avatars/1.jpg" alt="">
                    </div>
                    <div class="position-relative form-group" id="formGroupItem">
                        <label for="exampleEmail11" class="">Name:</label>
                        <label for="exampleEmail11" class="">
                            <h5>Lynnux Links</h5>
                        </label>
                    </div>

                    <div class="position-relative form-group" id="formGroupItem">
                        <label for="exampleEmail11" class="">Username:</label>
                        <label for="exampleEmail11" class="">
                            <h5>admin</h5>
                        </label>
                    </div>

                    <div class="position-relative form-group" id="formGroupItem">
                        <label for="exampleEmail11" class="">Email:</label>
                        <label for="exampleEmail11" class="">
                            <h5>admin@ttu.com</h5>
                        </label>
                    </div>

                    <div class="position-relative form-group" id="formGroupItem">
                        <label for="exampleEmail11" class="">Pnone Number:</label>
                        <label for="exampleEmail11" class="">
                            <h5>123456789</h5>
                        </label>
                    </div>

                    <div class="position-relative form-group" id="formGroupItem">
                        <label for="exampleEmail11" class="">Category:</label>
                        <label for="exampleEmail11" class="">
                            <h5>Trainer</h5>
                        </label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>

</form>