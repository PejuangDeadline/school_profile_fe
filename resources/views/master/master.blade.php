<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="ImamHaris">
  <title>Sekolah Islam Kharisma</title>
  <link rel="shortcut icon" href="{{ asset('assets/img/logoicon.png') }}">

  <link rel="stylesheet" href="{{ asset('assets/css/plugins.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">

  {{-- FontAwesome  --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <div class="content-wrapper">
    <header class="wrapper bg-soft-primary">
      <nav class="navbar navbar-expand-lg center-nav transparent position-absolute navbar-light">
        <div class="container flex-lg-row flex-nowrap align-items-center">
          <div class="navbar-brand w-100">
            <a href="index.html">
              <img class="logo-dark" src="{{ asset('assets/img/logoicon.svg') }}" alt="">
              <img class="logo-light" src="{{ asset('assets/img/logoicon.svg') }}" alt="">
            </a>
          </div>
          <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
            <div class="offcanvas-header d-lg-none">
              <h3 class="text-white fs-30 mb-0">Sandbox</h3>
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
              <ul class="navbar-nav">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Sekolah</a>
                  <ul class="dropdown-menu">
                    <li class="dropdown dropdown-submenu dropend"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Utility</a>
                      <ul class="dropdown-menu">
                        <li class="nav-item"><a class="dropdown-item" href="404.html">404 Not Found</a></li>
                        <li class="nav-item"><a class="dropdown-item" href="page-loader.html">Page Loader</a></li>
                        <li class="nav-item"><a class="dropdown-item" href="signin.html">Sign In I</a></li>
                        <li class="nav-item"><a class="dropdown-item" href="signin2.html">Sign In II</a></li>
                        <li class="nav-item"><a class="dropdown-item" href="signup.html">Sign Up I</a></li>
                        <li class="nav-item"><a class="dropdown-item" href="signup2.html">Sign Up II</a></li>
                        <li class="nav-item"><a class="dropdown-item" href="terms.html">Terms</a></li>
                      </ul>
                    </li>
                    <li class="nav-item"><a class="dropdown-item" href="onepage.html">One Page</a></li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" data-bs-toggle="dropdown">Kegiatan</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" data-bs-toggle="dropdown">Kontak</a>
                </li>
              </ul>
              <div class="offcanvas-footer d-lg-none">
                <div>
                  <a href="cdn-cgi/l/email-protection.html#1c7a756e6f6832707d6f685c79717d7570327f7371" class="link-inverse"><span class="__cf_email__" data-cfemail="f69f989099b6939b979f9ad895999b">[email&#160;protected]</span></a>
                  <br> 00 (123) 456 78 90 <br>
                  <nav class="nav social social-white mt-4">
                    <a href="#"><i class="uil uil-twitter"></i></a>
                    <a href="#"><i class="uil uil-facebook-f"></i></a>
                    <a href="#"><i class="uil uil-dribbble"></i></a>
                    <a href="#"><i class="uil uil-instagram"></i></a>
                    <a href="#"><i class="uil uil-youtube"></i></a>
                  </nav>
                </div>
              </div>
            </div>
          </div>
          {{-- <div class="navbar-other w-100 d-flex ms-auto">
            <ul class="navbar-nav flex-row align-items-center ms-auto">
              
              <li class="nav-item srch-icon">
                <a class="nav-link" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-search"><i class="uil uil-search"></i></a>
              </li>
              
              <li class="nav-item srch-form">
                <form action="" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="search-box">
                      <input type="text" placeholder="Search.." name="query">
                      <span class="search-icon"></span>
                  </div>
                </form>
              </li>
              <li class="nav-item d-lg-none">
                <button class="hamburger offcanvas-nav-btn"><span></span></button>
              </li>
            </ul>
          </div> --}}
          <div class="navbar-other w-100 d-flex ms-auto">
            <ul class="navbar-nav flex-row align-items-center ms-auto">
              
              <li class="nav-item srch-icon">
                <a class="nav-link" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-search"><i class="uil uil-search"></i></a>
              </li>
              
              <li class="nav-item srch-form">
                <form action="" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="search-box">
                      <input type="text" placeholder="Search.." name="query">
                      <span class="search-icon"></span>
                  </div>
                </form>
              </li>
  
              <li class="nav-item d-lg-none">
                <button class="hamburger offcanvas-nav-btn mr-20"><span></span></button>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="offcanvas offcanvas-top bg-light" id="offcanvas-search" data-bs-scroll="true">
        <div class="container d-flex flex-row py-2">
          <form class="search-form w-100" action="" method="post" enctype="multipart/form-data">
            @csrf
            <input id="search-form" name="query" type="text" class="form-control" placeholder="Type keyword and hit enter">
          </form>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
      </div>
    </header>
    {{-- <header class="wrapper bg-soft-primary">
      <nav class="navbar navbar-expand-lg center-nav transparent position-absolute navbar-dark caret-none">
        <div class="container flex-lg-row flex-nowrap align-items-center">
          <div class="navbar-brand w-100">
            <a href="index.html">
              <img class="logo-dark" src="{{ asset('assets/img/logoicon.svg') }}" alt="">
              <img class="logo-light" src="{{ asset('assets/img/logoicon.svg') }}" alt="">
            </a>
          </div>
          <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
            <div class="offcanvas-header d-lg-none">
              <h3 class="text-white fs-30 mb-0">Sandbox</h3>
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
              <ul class="navbar-nav">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Sekolah</a>
                  <ul class="dropdown-menu">
                    <li class="dropdown dropdown-submenu dropend"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Services</a>
                      <ul class="dropdown-menu">
                        <li class="nav-item"><a class="dropdown-item" href="services.html">Services I</a></li>
                        <li class="nav-item"><a class="dropdown-item" href="services2.html">Services II</a></li>
                      </ul>
                    </li>
                    <li class="dropdown dropdown-submenu dropend"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">About</a>
                      <ul class="dropdown-menu">
                        <li class="nav-item"><a class="dropdown-item" href="about.html">About I</a></li>
                        <li class="nav-item"><a class="dropdown-item" href="about2.html">About II</a></li>
                      </ul>
                    </li>
                    <li class="dropdown dropdown-submenu dropend"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Shop</a>
                      <ul class="dropdown-menu">
                        <li class="nav-item"><a class="dropdown-item" href="shop.html">Shop I</a></li>
                        <li class="nav-item"><a class="dropdown-item" href="shop2.html">Shop II</a></li>
                        <li class="nav-item"><a class="dropdown-item" href="shop-product.html">Product Page</a></li>
                        <li class="nav-item"><a class="dropdown-item" href="shop-cart.html">Shopping Cart</a></li>
                        <li class="nav-item"><a class="dropdown-item" href="shop-checkout.html">Checkout</a></li>
                      </ul>
                    </li>
                    <li class="dropdown dropdown-submenu dropend"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Contact</a>
                      <ul class="dropdown-menu">
                        <li class="nav-item"><a class="dropdown-item" href="contact.html">Contact I</a></li>
                        <li class="nav-item"><a class="dropdown-item" href="contact2.html">Contact II</a></li>
                        <li class="nav-item"><a class="dropdown-item" href="contact3.html">Contact III</a></li>
                      </ul>
                    </li>
                    <li class="dropdown dropdown-submenu dropend"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Career</a>
                      <ul class="dropdown-menu">
                        <li class="nav-item"><a class="dropdown-item" href="career.html">Job Listing I</a></li>
                        <li class="nav-item"><a class="dropdown-item" href="career2.html">Job Listing II</a></li>
                        <li class="nav-item"><a class="dropdown-item" href="career-job.html">Job Description</a></li>
                      </ul>
                    </li>
                    <li class="dropdown dropdown-submenu dropend"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Utility</a>
                      <ul class="dropdown-menu">
                        <li class="nav-item"><a class="dropdown-item" href="404.html">404 Not Found</a></li>
                        <li class="nav-item"><a class="dropdown-item" href="page-loader.html">Page Loader</a></li>
                        <li class="nav-item"><a class="dropdown-item" href="signin.html">Sign In I</a></li>
                        <li class="nav-item"><a class="dropdown-item" href="signin2.html">Sign In II</a></li>
                        <li class="nav-item"><a class="dropdown-item" href="signup.html">Sign Up I</a></li>
                        <li class="nav-item"><a class="dropdown-item" href="signup2.html">Sign Up II</a></li>
                        <li class="nav-item"><a class="dropdown-item" href="terms.html">Terms</a></li>
                      </ul>
                    </li>
                    <li class="nav-item"><a class="dropdown-item" href="pricing.html">Pricing</a></li>
                    <li class="nav-item"><a class="dropdown-item" href="onepage.html">One Page</a></li>
                  </ul>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Kegiatan</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Kontak</a>
                </li>
              </ul>
              <!-- /.navbar-nav -->
              <div class="offcanvas-footer d-lg-none">
                <div>
                  <a href="cdn-cgi/l/email-protection.html#c5a3acb7b6b1eba9a4b6b185a0a8a4aca9eba6aaa8" class="link-inverse"><span class="__cf_email__" data-cfemail="fd94939b92bd98909c9491d39e9290">[email&#160;protected]</span></a>
                  <br> 00 (123) 456 78 90 <br>
                  <nav class="nav social social-white mt-4">
                    <a href="#"><i class="uil uil-twitter"></i></a>
                    <a href="#"><i class="uil uil-facebook-f"></i></a>
                    <a href="#"><i class="uil uil-dribbble"></i></a>
                    <a href="#"><i class="uil uil-instagram"></i></a>
                    <a href="#"><i class="uil uil-youtube"></i></a>
                  </nav>
                  <!-- /.social -->
                </div>
              </div>
              <!-- /.offcanvas-footer -->
            </div>
            <!-- /.offcanvas-body -->
          </div>
          <!-- /.navbar-collapse -->
          <div class="navbar-other w-100 d-flex ms-auto">
            <ul class="navbar-nav flex-row align-items-center ms-auto">
              <li class="nav-item"><a class="nav-link" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-info"><i class="uil uil-info-circle"></i></a></li>
              <li class="nav-item"><a class="nav-link" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-search"><i class="uil uil-search"></i></a></li>
              <li class="nav-item d-lg-none">
                <button class="hamburger offcanvas-nav-btn"><span></span></button>
              </li>
            </ul>
            <!-- /.navbar-nav -->
          </div>
          <!-- /.navbar-other -->
        </div>
        <!-- /.container -->
      </nav>
      <!-- /.navbar -->
      <div class="offcanvas offcanvas-end text-inverse" id="offcanvas-info" data-bs-scroll="true">
        <div class="offcanvas-header">
          <h3 class="text-white fs-30 mb-0">Sandbox</h3>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body pb-6">
          <div class="widget mb-8">
            <p>Sandbox is a multipurpose HTML5 template with various layouts which will be a great solution for your business.</p>
          </div>
          <!-- /.widget -->
          <div class="widget mb-8">
            <h4 class="widget-title text-white mb-3">Contact Info</h4>
            <address> Moonshine St. 14/05 <br> Light City, London </address>
            <a href="cdn-cgi/l/email-protection.html#54323d2627207a38352720143139353d387a373b39"><span class="__cf_email__" data-cfemail="d5bcbbb3ba95b0b8b4bcb9fbb6bab8">[email&#160;protected]</span></a><br> 00 (123) 456 78 90
          </div>
          <!-- /.widget -->
          <div class="widget mb-8">
            <h4 class="widget-title text-white mb-3">Learn More</h4>
            <ul class="list-unstyled">
              <li><a href="#">Our Story</a></li>
              <li><a href="#">Terms of Use</a></li>
              <li><a href="#">Privacy Policy</a></li>
              <li><a href="#">Contact Us</a></li>
            </ul>
          </div>
          <!-- /.widget -->
          <div class="widget">
            <h4 class="widget-title text-white mb-3">Follow Us</h4>
            <nav class="nav social social-white">
              <a href="#"><i class="uil uil-twitter"></i></a>
              <a href="#"><i class="uil uil-facebook-f"></i></a>
              <a href="#"><i class="uil uil-dribbble"></i></a>
              <a href="#"><i class="uil uil-instagram"></i></a>
              <a href="#"><i class="uil uil-youtube"></i></a>
            </nav>
            <!-- /.social -->
          </div>
          <!-- /.widget -->
        </div>
        <!-- /.offcanvas-body -->
      </div>
      <!-- /.offcanvas -->
      <div class="offcanvas offcanvas-top bg-light" id="offcanvas-search" data-bs-scroll="true">
        <div class="container d-flex flex-row py-6">
          <form class="search-form w-100">
            <input id="search-form" type="text" class="form-control" placeholder="Type keyword and hit enter">
          </form>
          <!-- /.search-form -->
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <!-- /.container -->
      </div>
      <!-- /.offcanvas -->
    </header> --}}

    @yield('content')

  </div>
  <!-- /.content-wrapper -->
  <footer class="bg-dark text-inverse">
    {{-- <div class="container py-13 py-md-15">
      <div class="row gy-6 gy-lg-0">
        <div class="col-lg-4">
          <div class="widget">
            <img class="mb-4" src="assets/img/logo-light.png" srcset="assets/img/logo-light%402x.png 2x" alt="">
            <p class="mb-4">© 2023 Sandbox. All rights reserved.</p>
            <nav class="nav social social-white">
              <a href="#"><i class="uil uil-twitter"></i></a>
              <a href="#"><i class="uil uil-facebook-f"></i></a>
              <a href="#"><i class="uil uil-dribbble"></i></a>
              <a href="#"><i class="uil uil-instagram"></i></a>
              <a href="#"><i class="uil uil-youtube"></i></a>
            </nav>
            <!-- /.social -->
          </div>
          <!-- /.widget -->
        </div>
        <!-- /column -->
        <div class="col-md-4 col-lg-2 offset-lg-2">
          <div class="widget">
            <h4 class="widget-title mb-3 text-white">Need Help?</h4>
            <ul class="list-unstyled mb-0">
              <li><a href="#">Support</a></li>
              <li><a href="#">Get Started</a></li>
              <li><a href="#">Terms of Use</a></li>
              <li><a href="#">Privacy Policy</a></li>
            </ul>
          </div>
          <!-- /.widget -->
        </div>
        <!-- /column -->
        <div class="col-md-4 col-lg-2">
          <div class="widget">
            <h4 class="widget-title mb-3 text-white">Learn More</h4>
            <ul class="list-unstyled mb-0">
              <li><a href="#">About Us</a></li>
              <li><a href="#">Our Story</a></li>
              <li><a href="#">Projects</a></li>
              <li><a href="#">Pricing</a></li>
              <li><a href="#">Features</a></li>
            </ul>
          </div>
          <!-- /.widget -->
        </div>
        <!-- /column -->
        <div class="col-md-4 col-lg-2">
          <div class="widget">
            <h4 class="widget-title mb-3 text-white">Get in Touch</h4>
            <address>Moonshine St. 14/05 Light City, London, United Kingdom</address>
            <a href="cdn-cgi/l/email-protection.html#c8aea1babbbce6a4a9bbbc88ada5a9a1a4e6aba7a5"><span class="__cf_email__" data-cfemail="e48d8a828ba48189858d88ca878b89">[email&#160;protected]</span></a><br> 00 (123) 456 78 90
          </div>
          <!-- /.widget -->
        </div>
        <!-- /column -->
      </div>
      <!--/.row -->
    </div> --}}
    <!-- /.container -->
  </footer>
  <div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewbox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
    </svg>
  </div>

  <script data-cfasync="false" src="{{ asset('assets/js/email-decode.min.js') }}"></script>
  <script src="{{ asset('assets/js/plugins.js') }}"></script>
  <script src="{{ asset('assets/js/theme.js') }}"></script>
</body>

</html>