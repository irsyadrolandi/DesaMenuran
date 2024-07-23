<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <title>Desa Menuran</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/templatemo-plot-listing.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animated.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.css') }}">
    <!--

TemplateMo 564 Plot Listing

https://templatemo.com/tm-564-plot-listing

-->
</head>

<body>


    {{-- <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** --> --}}

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="{{ route('home') }}" class="logo">
                            <h2 class="logo">Desa Menuran</h2>
                        </a>
                        <a></a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="{{ route('home') }}"
                                    class="{{ Request::is('/*') ? 'active' : '' }}">Beranda</a></li>
                            <li><a href="{{ route('profil-desa') }}"
                                    class="{{ Request::is('profil-desa') ? 'active' : '' }}">Profil Desa</a></li>
                            <li><a href="http://pengaduanmenuran.my.id" class="{{ Request::is('pelayanan*') ? 'active' : '' }}">Pengaduan</a></li>
                            <li><a href="{{ route('galeri-desa') }}" class="{{ Request::is('galeri-desa*') ? 'active' : '' }}">Galeri</a></li>
                            <li><a href="{{ route('kabar-desa') }}"
                                    class="{{ Request::is('kabar-desa*') ? 'active' : '' }}">Event Desa</a></li>
                            @auth
                            <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            @else
                                <li><a href="/login" class="{{ Request::is('login*') ? 'active' : '' }}">login</a></li>
                            @endauth
                            {{-- <li><div class="main-white-button"><a href="#"><i class="fa fa-plus"></i> Add Your Listing</a></div></li> --}}
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->
    @yield('contents')

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="about">
                        <p><a rel="nofollow" href=""
                                target="_parent"></a><a
                                rel="nofollow" href="" target="_blank"></a>
                                Jl. Citro Widoyo No.01, Dusun 2, Menuran, Kec. Baki, Kabupaten Sukoharjo, Jawa Tengah 57556</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="helpful-links">
                        <h4>Jadwal Pelayanan</h4>
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
                                <ul>
                                    <li><a href="#">Senin s/d Kamis : 07.30 - 15.00 WIB</a></li>
                                    <li><a href="#">Jum'at : 07.30 - 11.00 WIB </a></li>
                                    <li><a href="#">Sabtu : Libur</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="sub-footer">
                            <br>
                            Design: <a rel="nofollow" href="https://www.instagram.com/kkn.desamenuran/" title="CSS Templates">@ 2024 Desa Menuran</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!-- Scripts -->
    <script src="{{ asset('vendor/jquery/jquery.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl-carousel.js') }}"></script>
    <script src="{{ asset('assets/js/animation.js') }}"></script>
    <script src="{{ asset('assets/js/imagesloaded.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
</body>

</html>
