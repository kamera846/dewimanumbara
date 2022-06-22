
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <!-- title -->
        <title>Desa Wisata Manubhara</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
        <meta name="author" content="ThemeZaa">
        <!-- description -->
        <meta name="description" content="POFO is a highly creative, modern, visually stunning and Bootstrap responsive multipurpose agency and portfolio HTML5 template with 25 ready home page demos.">
        <!-- keywords -->
        <meta name="keywords" content="creative, modern, clean, bootstrap responsive, html5, css3, portfolio, blog, agency, templates, multipurpose, one page, corporate, start-up, studio, branding, designer, freelancer, carousel, parallax, photography, personal, masonry, grid, coming soon, faq">
        <!-- favicon -->
        {{-- <link rel="shortcut icon" href="images/favicon.png">
        <link rel="apple-touch-icon" href="images/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png"> --}}
        <!-- style sheets and font icons  -->
        <link rel="stylesheet" type="text/css" href="css/bootsnav.css">
        <link rel="stylesheet" type="text/css" href="css/font-icons.min.css">
        <link rel="stylesheet" type="text/css" href="css/theme-vendors.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/responsive.css" />
    </head>
    <body>
        <!-- start navigation -->
        <nav class="navbar no-margin-bottom bootsnav alt-font bg-light-gray sidebar-nav sidebar-nav-style-1 navbar-expand-lg">
            <!-- start logo -->
            <div class="col-12 sidenav-header">
                <div class="logo-holder">
                    <a href="/" class="d-inline-block logo"><img alt="Pofo" src="images/logo.png" data-at2x="images/logo@2x.png" /></a>
                </div>
                <!-- end logo -->
                <button class="navbar-toggler mobile-toggle" type="button" id="mobileToggleSidenav">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
            <div class="col-12 px-0">
                <div id="navbar-menu" class="collapse navbar-collapse no-padding">
                    <ul class="nav navbar-nav navbar-left-sidebar font-weight-500">
                        <li class="nav-item"><a href="/" class="nav-link active">Beranda</a></li>
                        <li class="nav-item"><a href="/about" class="nav-link">Tentang</a></li>
                        <li class="nav-item"><a href="/blog" class="nav-link">Artikel</a></li>
                        <li class="nav-item"><a href="/gallery" class="nav-link">Galeri</a></li>
                        <li class="nav-item"><a href="/contact" class="nav-link">Kontak</a></li>
                        <li>
                            <div class="side-left-menu-close close-side"></div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-12 position-absolute top-auto bottom-0 left-0 w-100 padding-20px-bottom sm-padding-15px-bottom">
                <div class="footer-holder">
                    <div class="icon-social-medium margin-eleven-bottom padding-eight-top sm-padding-15px-top sm-margin-15px-bottom">
                        <a href="https://www.facebook.com/" target="_blank" class="text-link-extra-dark-gray"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                        <a href="https://twitter.com/" target="_blank" class="text-link-extra-dark-gray"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                        <a href="https://instagram.com/" target="_blank" class="text-link-extra-dark-gray"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </nav>
        <!-- end navigation --> 
        <div class="sidebar-wrapper">


            @yield('page-content')


        <!-- start footer --> 
            <footer class="footer-center-logo bg-light-gray padding-five-tb sm-padding-30px-tb">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <!-- start copyright -->
                        <div class="col-lg-4 col-md-5 text-small text-center alt-font sm-margin-15px-bottom">
                            &COPY; {{ date('Y') }} Manubhara - Powered by <a href="https://jongkreatif.id" target="_blank" title="JongKreatif">JongKreatif</a>.
                        </div>
                        <!-- end copyright -->
                    </div>
                </div>
            </footer>
            <!-- end footer -->
        </div>

        <!-- start scroll to top -->
        <a class="scroll-top-arrow" href="#"><i class="ti-arrow-up"></i></a>
        <!-- end scroll to top  -->

        <!-- javascript -->
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/bootsnav.js"></script>
        <script type="text/javascript" src="js/jquery.nav.js"></script>
        <script type="text/javascript" src="js/hamburger-menu.js"></script>
        <script type="text/javascript" src="js/theme-vendors.min.js"></script>
        <!-- setting -->
        <script type="text/javascript" src="js/main.js"></script>
    </body>
</html>