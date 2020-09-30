<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="{{url('frontend/css/font-face.css') }}" rel="stylesheet" media="all">
    <link href="{{url('frontend/vendor/font-awesome-4.7/css/font-awesome.min.css') }}" rel="stylesheet" media="all">
    <link href="{{url('frontend/vendor/font-awesome-5/css/fontawesome-all.min.css') }}" rel="stylesheet" media="all">
    <link href="{{url('frontend/vendor/mdi-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{url('frontend/vendor/bootstrap-4.1/bootstrap.min.css') }}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{url('frontend/vendor/animsition/animsition.min.css') }}" rel="stylesheet" media="all">
    <link href="{{url('frontend/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet" media="all">
    <link href="{{url('frontend/vendor/wow/animate.cs') }}s" rel="stylesheet" media="all">
    <link href="{{url('frontend/vendor/css-hamburgers/hamburgers.min.css') }}" rel="stylesheet" media="all">
    <link href="{{url('frontend/vendor/slick/slick.css') }}" rel="stylesheet" media="all">
    <link href="{{url('frontend/vendor/select2/select2.min.css') }}" rel="stylesheet" media="all">
    <link href="{{url('frontend/vendor/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{url('frontend/css/theme.css') }} " rel="stylesheet" media="all">

</head>
<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <h4>Bersatu Melawan Covid</h4>
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="#"><a class="nav-link" href="{{ ('medcare') }}/index.html">
                            <i class="fa fa-home" aria-hidden="true"></i>Home</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                               
                            </ul>
                        </li>
                        <li>
                            <a href="/input"><a class="nav-link" href="/input">
                                <i class="fa fa-arrow-circle-down" aria-hidden="true"></i>Input</a>
                        </li>
                        <li>
                            <a href="/edit"><a class="nav-link" href="/edit">
                            <i class="fas fa-edit"></i>Edit</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="login.html">Login</a>
                                </li>
                                <li>
                                    <a href="register.html">Register</a>
                                </li>
                                <li>
                                    <a href="forget-pass.html">Forget Password</a>
                                </li>
                            </ul>
                        </li>
                        
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
            <a href="#">
                <h4>Bersatu Melawan Covid</h4>
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="#"><a class="nav-link" href="{{ ('medcare') }}/index.html">
                            <i class="fa fa-home" aria-hidden="true"></i>Home</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                           </ul>
                        </li>
                        <li>
                            <a href="/input">
                                <i class="fa fa-arrow-circle-down" aria-hidden="true"></i>Input</a>
                        </li>
                        <li>
                         <a class="nav-link" href="/edit">
                            <i class="fas fa-edit"></i>Edit</a>
                        </li>
                            </ul>
                        </li>
                            </ul>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <h2 class="title-1">ADMINISTATOR</h2>
                            <div class="header-button">
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                        <div class="mess-dropdown js-dropdown">
                                            <div class="mess__title">
                                                <p>You have 2 news message</p>
                                            </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-email"></i>
                                        <span class="quantity">1</span>
                                        <div class="email-dropdown js-dropdown">
                                            <div class="email__title">
                                                <p>You have 3 New Emails</p>
                                            </div>
                                            <div class="email__item">
                                                <div class="{{ url('frontend') }}/image img-cir img-40">
                                                    <img src="{{ url('frontend') }}/images/icon/avatar-06.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, 3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="{{ url('frontend') }}/image img-cir img-40">
                                                    <img src="{{ url('frontend') }}/images/icon/avatar-05.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="{{ url('frontend') }}/image img-cir img-40">
                                                    <img src="{{ url('frontend') }}/images/icon/avatar-04.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, April 12,,2018</span>
                                                </div>
                                            </div>
                                            <div class="email__footer">
                                                <a href="#">See all emails</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-notifications"></i>
                                        <span class="quantity">3</span>
                                        <div class="notifi-dropdown js-dropdown">
                                            <div class="notifi__title">
                                                <p>You have 3 Notifications</p>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c1 img-cir img-40">
                                                    <i class="zmdi zmdi-email-open"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a email notification</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c2 img-cir img-40">
                                                    <i class="zmdi zmdi-account-box"></i>
                                                </div>
                                                <div class="content">
                                                    <p>Your account has been blocked</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c3 img-cir img-40">
                                                    <i class="zmdi zmdi-file-text"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a new file</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__footer">
                                                <a href="#">All notifications</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="{{url('frontend/images/icon/jisoo.jpg') }}" alt="Dian Amelia Rahman" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">Dian Amelia Rahman</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="{{ url('frontend/images/icon/jisoo.jpg') }}" alt="Dian Amelia Rahman" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">Dian Amelia Rahman</a>
                                                    </h5>
                                                    <span class="email">dianamelia842@gmail.com</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a class="nav-link" href="{{ ('Login_v18') }}/index.html">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Input Data</h2>
                                    <button class="au-btn au-btn-icon au-btn--blue">
                                </div>
                            </div>
                        </div>
                        <div class="content">
<section class="header5 cid-r7o72Bhmed mbr-fullscreen" id="header5-3">
    <div class="mbr-overlay" style="opacity: 0.4; background-color: rgb(130, 130, 130);">
    </div>
    <div class="form-row">
             <div class="col-md-6 form-group">
              <div class="heading">
                Nama Fasilitas Kesehatan*
              </div>
              <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
             </div>
             <div class="col-md-6 form-group">
              <div class="heading">
               Harga
              </div>
              <input type="tel" class="form-control" name="phone" id="phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
             </div>
             <div class="col-md-6 form-group">
              <div class="heading">
                Jenis Fasilitas Kesehatan*
              </div>
              <select name="department" id="department" class="form-control">
                <option value="Rumah Sakit">Rumah Sakit</option>
                <option value="Klinik">Klinik</option>
                <option value="Puskesmas">Puskesmas</option>
                <option value="Lab">Lab</option>
              </select>
              <div class="validate"></div>
             </div>
             <div class="col-md-6 form-group">
              <div class="heading">
               Nomor Telepon
              </div>
              <input type="tel" class="form-control" name="phone" id="phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
             </div>
             <div class="col-md-6 form-group">
              <div class="heading">
                Jenis Tes Yang Tersedia*
              </div>
              <select name="doctor" id="doctor" class="form-control">
                <option value="Rapid">Rapid</option>
                <option value="PCR/Swab">PCR/Swab</option>
              </select>
              <div class="validate"></div>
             </div>
             <div class="col-md-6 form-group">
              <div class="heading">
                Alamat
              </div>
              <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
             </div>
            </div>
            <br>
            <div class="container-contact100-form-btn">
            <button class="contact100-form-btn">
            <iframe src="https://www.google.com/maps/dir/?api=1&destination=-6.99691050,109.14082930" frameborder="0" style="border:0; width: 230%; height: 290px;" allowfullscreen></iframe>
        </div>
            <span>
            <div class="content">
                    <button class="au-btn au-btn-icon au-btn--blue">
                        <i class="zmdi zmdi"></i>SUBMIT</button>   
                            </div>
            <i class="fa fa-long-arrow-right m-1-7" aria-hidden="true"></i>
            </span>
            <br>
            </button>
            </section> 
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>
</div>
    <!-- Jquery JS-->
    <script src="{{ url('frontend/vendor/jquery-3.2.1.min.js') }}"></script>
    <!-- Bootstrap JS-->
    <script src="{{ url('frontend/vendor/bootstrap-4.1/popper.min.js') }}"></script>
    <script src="{{ url('frontend/vendor/bootstrap-4.1/bootstrap.min.j') }}s"></script>
    <!-- Vendor JS       -->
    <script src="{{ url('frontend/vendor/slick/slick.min.js') }}">
    </script>
    <script src="{{ url('frontend/vendor/wow/wow.min.js') }}"></script>
    <script src="{{ url('frontend/vendor/animsition/animsition.min.js') }}"></script>
    <script src="{{ url('frontend/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js') }}">
    </script>
    <script src="{{ url('frontend/vendor/counter-up/jquery.waypoints.min.js') }}"></script>
    <script src="{{ url('frontend/vendor/counter-up/jquery.counterup.min.js') }}">
    </script>
    <script src="{{ url('frontend/vendor/circle-progress/circle-progress.min.js') }}"></script>
    <script src="{{ url('frontend/vendor/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ url('frontend/vendor/chartjs/Chart.bundle.min.j') }}s"></script>
    <script src="{{ url('frontend/vendor/select2/select2.min.js') }}">
    </script>

    <!-- Main JS-->
    <script src="{{ url('frontend/js/main.js') }}"></script>

</body>

</html>
<!-- end document-->
