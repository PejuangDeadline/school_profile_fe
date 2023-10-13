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
  <link rel="stylesheet" href="{{ asset('assets/css/font.css') }}">

  {{-- FontAwesome  --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<style>
  :root {
      --bg-homepage-1-url: url("{{ asset('assets/img/homepage/bg1.png') }}");
      --bg-homepage-2-url: url("{{ asset('assets/img/homepage/bg2.png') }}");
      --bg-homepage-3-url: url("{{ asset('assets/img/homepage/bg3.png') }}");
  }
</style>

<?php
use Illuminate\Support\Str;
?>

<body>
  <div class="content-wrapper">
    <header class="wrapper bg-soft-primary">
      <nav class="navbar navbar-expand-lg center-nav transparent position-absolute navbar-light">
        <div class="container flex-lg-row flex-nowrap align-items-center">
          <div class="navbar-brand w-100">
            <a href="{{ route('homepage') }}">
              @if(empty($logobranchchange))
                <img class="logo-dark" src="{{ asset('assets/img/logoicon.svg') }}" alt="">
                <img class="logo-light" src="{{ asset('assets/img/logoicon.svg') }}" alt="">
              @else
                <img class="logo-dark" src="{{ $urladmin.$branch->logo }}" alt="">
                <img class="logo-light" src="{{ $urladmin.$branch->logo }}" alt="">
              @endif
            </a>
          </div>
          <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
            <div class="offcanvas-header d-lg-none">
              <h3 class="text-white fs-30 mb-0">
                @if(empty($logobranchchange))
                  <img src="{{ asset('assets/img/logoicon.svg') }}" alt="">
                @else
                  <img src="{{ $urladmin.$branch->logo }}" alt="">
                @endif
                
              </h3>
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
              <ul class="navbar-nav">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle w600" href="#" data-bs-toggle="dropdown">Sekolah</a>
                  <ul class="dropdown-menu">
                    @foreach($mstbranches as $branch)
                      <li class="dropdown dropdown-submenu dropend">
                        <a class="dropdown-item w600" href="{{ route('branch', strtolower($branch->grade . '_' . str_replace(' ', '_', $branch->city))) }}">{{ $branch->grade." - ".$branch->city }}</a>
                      </li>
                    @endforeach
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link w600" href="{{ route('kegiatan') }}">Kegiatan</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link w600" href="{{ route('koleksifoto') }}">Koleksi Foto</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link w600" href="{{ route('contact') }}">Kontak</a>
                </li>
              </ul>
                {{-- <div class="offcanvas-footer d-lg-none">
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
                </div> --}}
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
                <form action="{{ route('search') }}" method="get" enctype="multipart/form-data">
                  @csrf
                  <div class="search-box">
                      <input type="text" placeholder="Cari.." name="query">
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
  <footer class="bg-footer text-dark">
    <div class="container py-5 mb-4">
      <div class="row">
        <div class="col-lg-12">
          <div class="widget">
            <img class="mb-4" src="{{ asset('assets/img/logoicon.svg') }}" alt="">
          </div>
        </div>
      </div>
      <div class="row gy-6 gy-lg-0">
        <div class="col-lg-4">
          <div class="widget">
            <h4 class="widget-title mb-0">Sekolah Islam Kharisma</h4>
            <a>Cerdas, Kreatif, Unggul</a></li>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="widget">
            <h4 class="widget-title mb-3">Sekolah</h4>
            <ul class="list-unstyled mb-0">
              @foreach($mstbranches as $branch)
                <li>
                  <a href="{{ route('branch', strtolower($branch->grade . '_' . str_replace(' ', '_', $branch->city))) }}">{{ $branch->grade." - ".$branch->city }}</a>
                </li>
              @endforeach
            </ul>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="widget">
            <h4 class="widget-title mb-3">Tentang Kami</h4>
            <ul class="list-unstyled mb-0">
              <li><a href="{{ route('contact') }}">Kontak</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>

  {{-- <div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewbox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
    </svg>
  </div> --}}

  <!-- Social Media Popup -->
  <div class="social-popup" style="display: none">
    <a href="" data-bs-toggle="modal" data-bs-target="#modal-instagram">
        <i class="fab fa-instagram"></i>
    </a>
    <a href="" data-bs-toggle="modal" data-bs-target="#modal-facebook">
        <i class="fab fa-facebook-f"></i>
    </a>
    <a href="" data-bs-toggle="modal" data-bs-target="#modal-email">
        <i class="fas fa-envelope"></i>
    </a>
  </div>
  <!-- Trigger for the Social Media Popup -->
  <a class="social-trigger" onclick="toggleSocialPopup(event)">
    <i class="fas fa-ellipsis-h"></i>
  </a>
  <!-- WhatsApp Button -->
  <a href="https://wa.me/{{ $institutions->whatsapp }}" class="whatsapp-icon" target="_blank" data-bs-toggle="tooltip" data-bs-placement="top" title="Hubungi Kami">
    <i class="fab fa-whatsapp"></i>
  </a>

  {{-- Modal IG --}}
  <div class="modal fade" id="modal-instagram" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header px-4 py-4" style="background-color: #1BAB82">
          <h5 class="modal-title text-white font-weight-bold mr-4" id="exampleModalLabel">Instagram</h5>
          <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" style="max-height: 65vh; overflow-y: auto;">

          {{-- IG Institutions --}}
          @if($institutions->instagram != null)
            <div class="d-flex flex-row">
              <div><i class="uil uil-instagram"></i>&nbsp;&nbsp;</div>
              <?php 
                $find = 'https://www.instagram.com/';
                $replaceWith = '@';

                $usernameig = str_replace($find, $replaceWith, $institutions->instagram);
              ?>
              <div>
                <p class="mb-0"><a href="{{ $institutions->instagram }}">{{ $usernameig }}</a></p>
              </div>
            </div>
            <hr class="mb-3 mt-3">
          @endif

          {{-- IG Branch --}}
          @foreach($mstbranches as $branch)
            @if($branch->instagram != null)
            <b>{{ $branch->grade." ".$branch->city }}</b>
            <div class="d-flex flex-row">
              <?php 
                $find = 'https://www.instagram.com/';
                $replaceWith = '@';

                $usernameig = str_replace($find, $replaceWith, $branch->instagram);
              ?>
              <div><i class="uil uil-instagram"></i>&nbsp;&nbsp;</div>
              <div>
                <p class="mb-2"><a href="{{ $branch->instagram }}">{{ $usernameig }}</a></p>
              </div>
            </div>
            @endif
          @endforeach
        </div>
      </div>
    </div>
  </div>

  {{-- Modal FB --}}
  <div class="modal fade" id="modal-facebook" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header px-4 py-4" style="background-color: #1BAB82">
          <h5 class="modal-title text-white font-weight-bold mr-4" id="exampleModalLabel">Facebook</h5>
          <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" style="max-height: 65vh; overflow-y: auto;">

          {{-- FB Institutions --}}
          @if($institutions->facebook != null)
            <div class="d-flex flex-row">
              <div><i class="uil uil-facebook-f"></i>&nbsp;&nbsp;</div>
              <?php 
                $find = 'https://www.facebook.com/';
                $replaceWith = '';

                $usernamefb = str_replace($find, $replaceWith, $institutions->facebook);
              ?>
              <div>
                <p class="mb-0"><a href="{{ $institutions->facebook }}">{{ $usernamefb }}</a></p>
              </div>
            </div>
            <hr class="mb-3 mt-3">
          @endif

          {{-- FB Branch --}}
          @foreach($mstbranches as $branch)
            @if($branch->facebook != null)
            <b>{{ $branch->grade." ".$branch->city }}</b>
            <div class="d-flex flex-row">
              <?php 
                $find = 'https://www.facebook.com/';
                $replaceWith = '';

                $usernamefb = str_replace($find, $replaceWith, $branch->facebook);
              ?>
              <div><i class="uil uil-facebook-f"></i>&nbsp;&nbsp;</div>
              <div>
                <p class="mb-2"><a href="{{ $branch->facebook }}">{{ $usernamefb }}</a></p>
              </div>
            </div>
            @endif
          @endforeach
        </div>
      </div>
    </div>
  </div>

  {{-- Modal Email --}}
  <div class="modal fade" id="modal-email" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header px-4 py-4" style="background-color: #1BAB82">
          <h5 class="modal-title text-white font-weight-bold mr-4" id="exampleModalLabel">E-Mail</h5>
          <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" style="max-height: 65vh; overflow-y: auto;">

          {{-- Email Institutions --}}
          @if($institutions->email != null)
            <div class="d-flex flex-row">
              <div><i class="uil uil-envelope"></i>&nbsp;&nbsp;</div>
              <div>
                <p class="mb-0"><a href="mailto:{{ $institutions->email }}">{{ $institutions->email }}</a></p>
              </div>
            </div>
            <hr class="mb-3 mt-3">
          @endif

          {{-- Email Branch --}}
          @foreach($mstbranches as $branch)
            @if($branch->email != null)
            <b>{{ $branch->grade." ".$branch->city }}</b>
              <div class="d-flex flex-row">
                <div><i class="uil uil-envelope"></i>&nbsp;&nbsp;</div>
                <div>
                  <p class="mb-2"><a href="mailto:{{ $branch->email }}">{{ $branch->email }}</a></p>
                </div>
              </div>
            @endif
          @endforeach
        </div>
      </div>
    </div>
  </div>

  <script data-cfasync="false" src="{{ asset('assets/js/email-decode.min.js') }}"></script>
  <script src="{{ asset('assets/js/custom.js') }}"></script>
  <script src="{{ asset('assets/js/plugins.js') }}"></script>
  <script src="{{ asset('assets/js/theme.js') }}"></script>

  <script>
    $(document).ready(function() {
        
        // Function to toggle the social popup
        $('.social-trigger').on('click', function(event) {
            event.stopPropagation(); // Prevent this click from being propagated to document
            
            const displayStyle = $('.social-popup').css('display');
            
            if (displayStyle === 'none') {
                $('.social-popup').css('display', 'block');
            } else {
                $('.social-popup').css('display', 'none');
            }
        });

        $(document).on('click', function(event) {
            // Check if the click is outside the .social-popup and .social-trigger
            if (!$(event.target).closest('.social-popup').length && !$(event.target).closest('.social-trigger').length) {
                $('.social-popup').css('display', 'none');
            }
        });

        // Prevent the social-popup itself from propagating the click to document
        $('.social-popup').on('click', function(event) {
            event.stopPropagation();
        });
    });
</script>

</body>

</html>