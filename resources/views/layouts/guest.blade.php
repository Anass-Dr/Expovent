<!doctype html>
<html class="no-js" lang="zxx">

<!-- Mirrored from codeskdhaka.com/html/expovent-prev/expovent/landing-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 Mar 2024 17:30:56 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Expovent - Event Management Dashboard HTML5 Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png') }}">
    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('assets/app/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/app/css/meanmenu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/app/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/app/css/metisMenu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/app/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/app/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/app/css/backtotop.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/app/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/app/css/flaticon_expovent.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/app/css/fontawesome-pro.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/app/css/spacing.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/app/css/main.css') }}">
</head>

<body class="landing-body">
<!-- Offcanvas area start -->
<div class="fix">
    <div class="offcanvas__info">
        <div class="offcanvas__wrapper">
            <div class="offcanvas__content">
                <div class="offcanvas__top mb-40 d-flex justify-content-between align-items-center">
                    <div class="offcanvas__logo">
                        <a href="dashboard.html">
                            <img src="{{ asset('assets/img/logo/logo-black.svg') }}" alt="logo not found">
                        </a>
                    </div>
                    <div class="offcanvas__close">
                        <button>
                            <i class="fal fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="offcanvas__search mb-25">
                    <form action="#">
                        <input type="text" placeholder="What are you searching for?">
                        <button type="submit"><i class="far fa-search"></i></button>
                    </form>
                </div>
                <div class="mobile-menu fix mb-40"></div>
                <div class="offcanvas__contact mt-30 mb-20">
                    <h4>Contact Info</h4>
                    <ul>
                        <li class="d-flex align-items-center">
                            <div class="offcanvas__contact-icon mr-15">
                                <i class="fal fa-map-marker-alt"></i>
                            </div>
                            <div class="offcanvas__contact-text">
                                <a target="_blank"
                                   href="https://www.google.com/maps/place/Dhaka/@23.7806207,90.3492859,12z/data=!3m1!4b1!4m5!3m4!1s0x3755b8b087026b81:0x8fa563bbdd5904c2!8m2!3d23.8104753!4d90.4119873">12/A,
                                    Mirnada City Tower, NYC</a>
                            </div>
                        </li>
                        <li class="d-flex align-items-center">
                            <div class="offcanvas__contact-icon mr-15">
                                <i class="far fa-phone"></i>
                            </div>
                            <div class="offcanvas__contact-text">
                                <a href="tel:+088889797697">+088889797697</a>
                            </div>
                        </li>
                        <li class="d-flex align-items-center">
                            <div class="offcanvas__contact-icon mr-15">
                                <i class="fal fa-envelope"></i>
                            </div>
                            <div class="offcanvas__contact-text">
                                <a href="tel:+012-345-6789"><span class="mailto:support@mail.com">support@mail.com</span></a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="offcanvas__social">
                    <ul>
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="offcanvas__overlay"></div>
<div class="offcanvas__overlay-white"></div>
<!-- Offcanvas area start -->

<!--Speaker popup area start -->
<section class="speaker__popup-area">
    <div class="popup__wrapper">
        <div class="popup__title-wrapper">
            <h3 class="popup__title">Add Event Speaker</h3>
        </div>
        <div class="popup__input-wrapper">
            <form action="#">
                <div class="singel__input-field mb-15">
                    <label class="input__field-text">Speaker Name</label>
                    <input type="text">
                </div>
                <div class="singel__input-field mb-15">
                    <label class="input__field-text">Email</label>
                    <input type="text">
                </div>
                <div class="singel__input-field mb-15">
                    <label class="input__field-text">Phone Number</label>
                    <input type="text">
                </div>
                <div class="singel__input-field mb-15">
                    <label class="input__field-text">Organization Name</label>
                    <input type="text">
                </div>
                <div class="singel__input-field mb-15">
                    <label class="input__field-text">Designation</label>
                    <input type="text">
                </div>
                <div class="popup__update mb-15">
                    <label class="input__field-text">Upload Image ( 200x200px )</label>
                    <input type="file">
                </div>
                <button class="input__btn w-100" type="submit"><i class="fa-regular fa-plus"></i>Add Speaker</button>
            </form>
        </div>
    </div>
</section>
<!--Speaker popup area end -->


<!-- Header area start -->
<header>
    <div id="header-sticky" class="header__area header-1 header__transparent">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="mega__menu-wrapper p-relative">
                        <div class="header__navigation d-flex align-items-center justify-content-between">
                            <div class="header__logo">
                                <a href="dashboard.html">
                                    <img class="logo__white" src="{{ asset('assets/img/logo/logo.svg') }}" alt="logo not found">
                                    <img class="logo__dark" src="{{ asset('assets/img/logo/logo-dark.svg') }}" alt="logo not found">
                                </a>
                            </div>
                            <div class="header__right">
                                <div class="main-menu smooth d-none d-none d-lg-block">
                                    <nav id="mobile-menu">
                                        <ul>
                                            <li class="has-dropdown has-mega-menu">
                                                <a href="#homeindex">Home</a>
                                                <ul class="mega-menu">
                                                    <li>
                                                        <a href="landing-page.html" data-background="assets/img/index/landing.jpg"></a>
                                                    </li>
                                                    <li>
                                                        <a href="dashboard.html" data-background="assets/img/index/dashboard.jpg"></a>
                                                    </li>
                                                    <li>
                                                        <a href="event-list.html" data-background="assets/img/index/event.jpg"></a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#homeabout">About</a>
                                            </li>
                                            <li>
                                                <a href="#homespeakers">Speakers</a>
                                            </li>

                                            <li>
                                                <a href="#homeschedule">Schedule</a>
                                            </li>
                                            <li class="has-dropdown">
                                                <a href="#homeblog">Blog</a>
                                            </li>
                                            <li>
                                                <form action="{{ route('logout') }}" method="post">
                                                    @csrf
                                                    <input type="submit" value="logout" />
                                                </form>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="header__action-inner">
                                    <div class="header__btn d-none d-xl-block">
                                        <a href="dashboard.html" class="fill__btn">Buy Ticket<i class="fa-regular fa-angle-right"></i></a>
                                    </div>
                                    <div class="header__hamburger">
                                        <div class="sidebar__toggle">
                                            <a class="bar-icon" href="#">
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                            </a>
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
</header>
<!-- Header area end -->

<!-- Body main wrapper start -->
<main>
    {{ $slot }}
</main>
<!-- Body main wrapper end -->

<!-- Footer area start -->
<footer>
    <section class="footer__area footer-bg fix p-relative pt-145">
        <div class="footer__shape">
            <img class="footer__shape-1" src="{{ asset('assets/img/shape/footer/footer-1.png') }}" alt="image not found">
            <img class="footer__shape-2" src="{{ asset('assets/img/shape/footer/footer-2.png') }}" alt="image not found">
            <img class="footer__shape-3" src="{{ asset('assets/img/shape/footer/footer-3.png') }}" alt="image not found">
            <img class="footer__shape-4" src="{{ asset('assets/img/shape/footer/footer-4.png') }}" alt="image not found">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6">
                    <div class="footer__widget-1 mb-70">
                        <div class="footer__logo mb-30">
                            <img src="{{ asset('assets/img/logo/logo.svg') }}" alt="image bnot found">
                        </div>
                        <div class="footer__content">
                            <p>Velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh. aliquam purus sit amet magna elemen facilisis. Enim praesent elementum facilisis.</p>
                            <div class="footer__social">
                                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                                <a href="#"><i class="fa-brands fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6">
                    <div class="footer__widget-2 mb-70">
                        <div class="footer__widget-title">
                            <h4>Useful Links</h4>
                        </div>
                        <div class="footer__link">
                            <ul>
                                <li><a href="#">Speakers</a></li>
                                <li><a href="#">Venue Info</a></li>
                                <li><a href="#">Our Partners</a></li>
                                <li><a href="#">Contact Support</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6">
                    <div class="footer__widget-3 mb-70">
                        <div class="footer__widget-title">
                            <h4>Useful Links</h4>
                        </div>
                        <div class="footer__link">
                            <ul>
                                <li><a href="#">Business Conference</a></li>
                                <li><a href="#">Design Conference</a></li>
                                <li><a href="#">Web Design Seminar</a></li>
                                <li><a href="#">Global Conference</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6">
                    <div class="footer__widget-4 mb-70">
                        <div class="footer__widget-title">
                            <h4>Useful Links</h4>
                        </div>
                        <div class="footer__contact">
                            <p>Subscribe Our Newsletter To Get Latest
                                Update And News</p>
                            <div class="footer__input">
                                <form action="#">
                                    <span><i class="fa-solid fa-envelope-open"></i></span>
                                    <input type="text" placeholder="Enter mail">
                                    <button class="input__btn w-100" type="submit">Subscribe Now</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="footer__copyright text-center" data-background="">
                        <p>Copyright & design by <a target="_blank" href="https://themeforest.net/user/bdevs">@Bdevs </a> - 2023</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</footer>
<!-- Footer area end -->

<!-- Back to top start -->
<div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>
<!-- Back to top end -->

<!-- JS here -->
<script src="{{ asset('assets/app/js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('assets/app/js/waypoints.min.js') }}"></script>
<script src="{{ asset('assets/app/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/app/js/apexcharts.min.js') }}"></script>
<script src="{{ asset('assets/app/js/metisMenu.min.js') }}"></script>
<script src="{{ asset('assets/app/js/meanmenu.min.js') }}"></script>
<script src="{{ asset('assets/app/js/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/app/js/slick.min.js') }}"></script>
<script src="{{ asset('assets/app/js/magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/app/js/backtotop.js') }}"></script>
<script src="{{ asset('assets/app/js/counterup.js') }}"></script>
<script src="{{ asset('assets/app/js/wow.min.js') }}"></script>
<script src="{{ asset('assets/app/js/countdown.js') }}"></script>
<script src="{{ asset('assets/app/js/smooth-scrollbar.js') }}"></script>
<script src="{{ asset('assets/app/js/ajax-form.js') }}"></script>
<script src="{{ asset('assets/app/js/custom.js') }}"></script>
<script src="{{ asset('assets/app/js/main.js') }}"></script>
</body>

<!-- Mirrored from codeskdhaka.com/html/expovent-prev/expovent/landing-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 Mar 2024 17:31:13 GMT -->
</html>

