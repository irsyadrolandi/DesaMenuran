@extends('template')
@section('contents')
    <div class="main-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="top-text header-text">
                        <h6>Selamat Datang</h6>
                        <h2>Website Resmi Pemerintah Desa Menuran Kecamatan Baki Kabupaten Sukoharjo</h2>
                    </div>
                </div>
                <div class="col-lg-12">
                    <form id="search-form" action="/">
                        <div class="row">
                            <div class="col-lg-9 align-self-center">
                                <fieldset>
                                    <input type="text" name="search" class="searchText" placeholder="Cari"
                                        value="{{ request('search') }}" required>
                                </fieldset>
                            </div>

                            <div class="col-lg-3">
                                <fieldset>
                                    <button type="submit" class="main-button"><i class="fa fa-search"></i> Search
                                        Now</button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-10 offset-lg-1">
                    <ul class="categories">
                        <li><a href="#"><span class="icon"><img
                                        src="assets/images/search-icon-01.png" alt="Profil-desa"></span> Profil Desa</a>
                        </li>
                        <li><a href="http://pengaduanmenuran.my.id"><span class="icon"><img
                                        src="assets/images/search-icon-02.png" alt="Food"></span> Pengaduan</a></li>
                        <li><a href="{{ route('galeri-desa') }}"><span class="icon"><img src="assets/images/search-icon-04.png"
                                        alt="Shopping"></span> Galeri</a></li>
                        <li><a href="{{ route('kabar-desa') }}"><span class="icon"><img
                                        src="assets/images/search-icon-05.png" alt="Travel"></span> Event Desa</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>



    <div class="recent-listing">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Kabar Desa Terkini</h2>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="owl-carousel owl-listing">
                        <div class="item">
                            <div class="row">
                                @foreach ($kabardesas as $kabardesa)
                                    <div class="col-lg-12">
                                        <div class="listing-item row">
                                            <div class="col-lg-5 left-image">
                                                <a href="{{ route('skabar-desa', $kabardesa->slug) }}"><img
                                                        src="{{ Storage::url('kabar-image/' . $kabardesa->image) }}" alt=""></a>
                                            </div>
                                            <div class="col-lg-7 right-content align-self-center">
                                                <a href="{{ route('skabar-desa', $kabardesa->slug) }}">
                                                    <h4>{{ $kabardesa->title }}</h4>
                                                </a>
                                                <h6>{!! Str::length($kabardesa->body) > 500 ? substr($kabardesa->body, 0, 500) . '...' : $kabardesa->body !!}</h6>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="d-flex justify-content-center">

                                {{ $kabardesas->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
