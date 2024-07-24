
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

    <title>Website Desa Menuran</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('/assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/templatemo-plot-listing.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/animated.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/owl.css') }}">
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
                                    class="{{ Request::is('profil-desa*') ? 'active' : '' }}">Profil Desa</a></li>
                            <li><a href="http://pengaduanmenuran.my.id" class="{{ Request::is('pelayanan*') ? 'active' : '' }}">Pengaduan</a></li>
                            <li><a href="#">Galeri</a></li>
                            <li><a href="{{ route('kabar-desa') }}"
                                    class="{{ Request::is('kabar-desa*') ? 'active' : '' }}">Event Desa</a></li>
                            <li><a href="contact.html">Contact Us</a></li>
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
    {{-- {{ dd($kabar) }} --}}
    {{-- <div class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="top-text header-text">
                        <h2>Kabar<br>
                            Desa Sungai Cina
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}




    <div class="listing-page ">


        <div class="container">
            <div class="row d-flex justify-content-center">


                <div class="col-lg-10 ">
                    <div class="card mb-3">
                        <img src="{{ Storage::url('kabar-image/' . $kabar->image) }}"  class="card-img-top" alt="...">
                        <div class="card-header text-center">
                            <h3 class="m-2 card-title">{{ $kabar->title }}</h3>
                        </div>
                        <div class="card-body">

                            <p class="card-text">{!! $kabar->body !!}</p>
                            <p class="card-text"><small class="text-muted">{{ $kabar->created_at->diffForhumans() }}</small></p>
                        </div>
                    </div>
                    <a href="{{ url()->previous() }}" type="button" class="btn btn-primary mb-5 btn">Kembali</a>

                </div>



            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="about">
                        <div class="logo">
                            <img src="asset" alt="Plot Listing">
                        </div>
                        <p>If  <a rel="nofollow" href=""
                                target="_parent">Plot</a> is <a
                                rel="nofollow" href="" target="_blank">supp</a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="helpful-links">
                        <h4>Helpful Links</h4>
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
                                <ul>
                                    <li><a href="#">Categories</a></li>
                                    <li><a href="#">Reviews</a></li>
                                    <li><a href="#">Listing</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul>
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Awards</a></li>
                                    <li><a href="#">Useful Sites</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-us">
                        <h4>Contact Us</h4>
                        <p>27th Street of New Town, Digital Villa</p>
                        <div class="row">
                            <div class="col-lg-6">
                                <a href="#">010-020-0340</a>
                            </div>
                            <div class="col-lg-6">
                                <a href="#">090-080-0760</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="sub-footer">
                        <p>
                            <br>
                            Design: <a rel="nofollow" href="https://www.instagram.com/kkn.desamenuran/" title="CSS Templates">@ 2024 Desa Menuran</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!-- Scripts -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl-carousel.js') }}"></script>
    <script src="{{ asset('assets/js/animation.js') }}"></script>
    <script src="{{ asset('assets/js/imagesloaded.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>

</body>

</html>
