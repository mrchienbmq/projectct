<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{asset("frontend/img/favicon.png")}}" type="image/png">
    <title>EduSmart Education</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset("frontend/css/bootstrap.css")}}">
    <link rel="stylesheet" href="{{asset("frontend/vendors/linericon/style.css")}}">
    <link rel="stylesheet" href="{{asset("frontend/css/font-awesome.min.css")}}">
    <link rel="stylesheet" href="{{asset("frontend/vendors/owl-carousel/owl.carousel.min.css")}}">
    <link rel="stylesheet" href="{{asset("frontend/vendors/lightbox/simpleLightbox.css")}}">
    <link rel="stylesheet" href="{{asset("frontend/vendors/nice-select/css/nice-select.css")}}">
    <link rel="stylesheet" href="{{asset("frontend/vendors/animate-css/animate.css")}}">
    <!-- main css -->
    <link rel="stylesheet" href="{{asset("frontend/css/style.css")}}">
    <title>@yield("title")</title>
</head>

<body>

<!--================ Start Header Menu Area =================-->
<header class="header_area">
    <div class="header-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-sm-6 col-4 header-top-left">
                    <a href="tel:+9530123654896">
                        <span class="lnr lnr-phone"></span>
                        <span class="text">
								<span class="text">+849 436 419 18</span>
							</span>
                    </a>
                    <a href="mailto:support@colorlib.com">
                        <span class="lnr lnr-envelope"></span>
                        <span class="text">
								<span class="text">support@gmail.com</span>
							</span>
                    </a>
                </div>
                <div class="col-lg-6 col-sm-6 col-8 header-top-right">
                    <a href="#" class="text-uppercase">Login</a>
                </div>
            </div>
        </div>
    </div>

    <div class="main_menu">
        <div class="search_input" id="search_input_box">
            <div class="container">
                <form class="d-flex justify-content-between" method="" action="">
                    <input type="text" class="form-control" id="search_input" placeholder="Search Here">
                    <button type="submit" class="btn"></button>
                    <span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
                </form>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="{{route("home")}}"><img src="{{asset("frontend/img/logo.png")}}" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto">
                        <li class="nav-item active"><a class="nav-link" href="{{route("home")}}">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route("about-us")}}">About</a></li>
                        <li class="nav-item submenu dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                               aria-expanded="false">Pages</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="{{route("courses")}}">Courses</a></li>
                                <li class="nav-item"><a class="nav-link" href="course-details.html">Course Details</a></li>
                                <li class="nav-item"><a class="nav-link" href="elements.html">Elements</a></li>
                            </ul>
                        </li>
                        <li class="nav-item submenu dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                               aria-expanded="false">Blog</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="{{route("blog")}}">Blog</a></li>
                                <li class="nav-item"><a class="nav-link" href="single-blog.html">Blog Details</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="{{route("contact")}}">Contact</a></li>
                        <li class="nav-item">
                            <a href="#" class="nav-link search" id="search">
                                <i class="lnr lnr-magnifier"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
<!--================ End Header Menu Area =================-->

<!--================ Start Home Banner Area =================-->
<section class="home_banner_area">
    <div class="banner_inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="banner_content">
                        <h2>
                            We Rank the Best <br>
                            Courses on the Web
                        </h2>
                        <p>
                            In the history of modern astronomy, there is probably no one greater leap forward than the building and launch
                            of
                            the space telescope known as the Hubble.
                        </p>
                        <div class="search_course_wrap">
                            <form action="" class="form_box d-flex justify-content-between w-100">
                                <input type="text" placeholder="Search Courses" class="form-control" name="username" onfocus="this.placeholder = ''"
                                       onblur="this.placeholder = 'Search Courses'">
                                <button type="submit" class="btn search_course_btn">Search</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ End Home Banner Area =================-->
@yield("content")


<!--================ Start footer Area  =================-->
<footer class="footer-area section_gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-6 single-footer-widget">
                <h4>Top Products</h4>
                <ul>
                    <li><a href="#">Managed Website</a></li>
                    <li><a href="#">Manage Reputation</a></li>
                    <li><a href="#">Power Tools</a></li>
                    <li><a href="#">Marketing Service</a></li>
                </ul>
            </div>
            <div class="col-lg-2 col-md-6 single-footer-widget">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="#">Jobs</a></li>
                    <li><a href="#">Brand Assets</a></li>
                    <li><a href="#">Investor Relations</a></li>
                    <li><a href="#">Terms of Service</a></li>
                </ul>
            </div>
            <div class="col-lg-2 col-md-6 single-footer-widget">
                <h4>Features</h4>
                <ul>
                    <li><a href="#">Jobs</a></li>
                    <li><a href="#">Brand Assets</a></li>
                    <li><a href="#">Investor Relations</a></li>
                    <li><a href="#">Terms of Service</a></li>
                </ul>
            </div>
            <div class="col-lg-2 col-md-6 single-footer-widget">
                <h4>Resources</h4>
                <ul>
                    <li><a href="#">Guides</a></li>
                    <li><a href="#">Research</a></li>
                    <li><a href="#">Experts</a></li>
                    <li><a href="#">Agencies</a></li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-6 single-footer-widget">
                <h4>Newsletter</h4>
                <p>You can trust us. we only send promo offers,</p>
                <div class="form-wrap" id="mc_embed_signup">
                    <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                          method="get" class="form-inline">
                        <input class="form-control" name="EMAIL" placeholder="Your Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address'"
                               required="" type="email">
                        <button class="click-btn btn btn-default">
                            <span>subscribe</span>
                        </button>
                        <div style="position: absolute; left: -5000px;">
                            <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                        </div>

                        <div class="info"></div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row footer-bottom d-flex justify-content-between">
            <p class="col-lg-8 col-sm-12 footer-text m-0 text-white">Copyright © 2018 All rights reserved | This template is
                made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#">Colorlib</a></p>
            <div class="col-lg-4 col-sm-12 footer-social">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-dribbble"></i></a>
                <a href="#"><i class="fa fa-behance"></i></a>
            </div>
        </div>
    </div>
</footer>
<!--================ End footer Area  =================-->

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{asset("frontend/js/jquery-3.2.1.min.js")}}"></script>
<script src="{{asset("frontend/js/popper.js")}}"></script>
<script src="{{asset("frontend/js/bootstrap.min.js")}}"></script>
<script src="{{asset("frontend/js/stellar.js")}}"></script>
<script src="{{asset("frontend/js/countdown.js")}}"></script>
<script src="{{asset("frontend/vendors/nice-select/js/jquery.nice-select.min.js")}}"></script>
<script src="{{asset("frontend/vendors/owl-carousel/owl.carousel.min.js")}}"></script>
<script src="{{asset("frontend/js/owl-carousel-thumb.min.js")}}"></script>
<script src="{{asset("frontend/js/jquery.ajaxchimp.min.js")}}"></script>
<script src="{{asset("frontend/vendors/counter-up/jquery.counterup.js")}}"></script>
<script src="{{asset("frontend/js/mail-script.js")}}"></script>
<!--gmaps Js-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
<script src="{{asset("frontend/js/gmaps.min.js")}}"></script>
<script src="{{asset("frontend/js/theme.js")}}"></script>
@yield("scripts")
</body>

</html>