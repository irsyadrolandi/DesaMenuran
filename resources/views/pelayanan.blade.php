@extends('template')
@section('contents')
    <div class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="top-text header-text">
                        <h2>Pelayanan</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="listing-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="naccs">
                        <div class="grid">
                            <div class="row">
                                {{-- <div class="col-lg-3">
                                    <div class="menu">
                                        <div class="first-thumb active">
                                            <div class="thumb">

                                                <span class="icon"><img src="assets/images/search-icon-01.png"
                                                        alt=""></span>
                                                <a>Kartu Identitas Anak</a>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="thumb">
                                                <span class="icon"><img src="assets/images/search-icon-02.png"
                                                        alt=""></span>
                                                Akta Kelahiran
                                            </div>
                                        </div>
                                        <div>
                                            <div class="thumb">
                                                <span class="icon"><img src="assets/images/search-icon-03.png"
                                                        alt=""></span>
                                                KTP
                                            </div>
                                        </div>
                                        <div>
                                            <div class="thumb">
                                                <span class="icon"><img src="assets/images/search-icon-04.png"
                                                        alt=""></span>
                                                Kartu Keluarga (KK)
                                            </div>
                                        </div>
                                        <div>
                                            <div class="thumb">
                                                <span class="icon"><img src="assets/images/search-icon-04.png"
                                                        alt=""></span>
                                                Surat Pindah Tempat
                                            </div>
                                        </div>
                                        <div>
                                            <div class="thumb">
                                                <span class="icon"><img src="assets/images/search-icon-04.png"
                                                        alt=""></span>
                                                SKCK
                                            </div>
                                        </div>
                                        <div class="last-thumb">
                                            <div class="thumb">
                                                <span class="icon"><img src="assets/images/search-icon-04.png"
                                                        alt=""></span>
                                                Surat Keterangan Usaha
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="col-lg-12">
                                    <ul class="nacc">
                                        <!-- first category listing of items -->
                                        <li class="active">
                                            <div>
                                                <div class="col-lg-12">
                                                    <div class="owl-carousel owl-listing">
                                                        <div class="item">
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <div class="listing-item row">
                                                                        <div class="col-lg-4 left-image">
                                                                            <a href="#"><img
                                                                                    src="assets/images/document-01.jpg"
                                                                                    alt=""></a>
                                                                            <div class="hover-content">
                                                                                <div class="main-white-button">
                                                                                    <a href="contact.html"><i
                                                                                            class="fa fa-arrow-right"></i>Daftar</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="col-lg-8 right-content align-self-center">
                                                                            <a href="#">
                                                                                <h4>Pengurusan Kartu Identitas Anak</h4>
                                                                            </a>
                                                                            <h6>Persyaratan</h6>
                                                                            <span class="info"> KARTU KELUARGA<br> KTP
                                                                                <br> AKTA KELAHIRAN</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12">
                                                                    <div class="listing-item row">
                                                                        <div class="col-lg-4 left-image">
                                                                            <a href="#"><img
                                                                                    src="assets/images/document-01.jpg"
                                                                                    alt=""></a>
                                                                            <div class="hover-content">
                                                                                <div class="main-white-button">
                                                                                    <a href="contact.html"><i
                                                                                            class="fa fa-arrow-right"></i>Daftar</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-8 right-content align-self-center">
                                                                            <a href="#">
                                                                                <h4>Pengurusan Akta Kelahiran</h4>
                                                                            </a>
                                                                            <h6>Persyaratan</h6>
                                                                            <span class="info"> KARTU KELUARGA<br>
                                                                                KTP</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12">
                                                                    <div class="listing-item row">
                                                                        <div class="col-lg-4 left-image">
                                                                            <a href="#"><img
                                                                                    src="assets/images/document-01.jpg"
                                                                                    alt=""></a>
                                                                            <div class="hover-content">
                                                                                <div class="main-white-button">
                                                                                    <a href="contact.html"><i
                                                                                            class="fa fa-arrow-right"></i>Daftar</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-8 right-content align-self-center">
                                                                            <a href="#">
                                                                                <h4>Pengurusan KTP</h4>
                                                                            </a>
                                                                            <h6>Persyaratan</h6>
                                                                            <span class="info"> KARTU KELUARGA<br>
                                                                                KTP</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12">
                                                                    <div class="listing-item row">
                                                                        <div class="col-lg-4 left-image">
                                                                            <a href="#"><img
                                                                                    src="assets/images/document-01.jpg"
                                                                                    alt=""></a>
                                                                            <div class="hover-content">
                                                                                <div class="main-white-button">
                                                                                    <a href="contact.html"><i
                                                                                            class="fa fa-arrow-right"></i>Daftar</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-8 right-content align-self-center">
                                                                            <a href="#">
                                                                                <h4>Pengurusan Kartu Keluarga (KK)</h4>
                                                                            </a>
                                                                            <h6>Persyaratan</h6>
                                                                            <span class="info"> KARTU KELUARGA<br>
                                                                                KTP</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12">
                                                                    <div class="listing-item row">
                                                                        <div class="col-lg-4 left-image">
                                                                            <a href="#"><img
                                                                                    src="assets/images/document-01.jpg"
                                                                                    alt=""></a>
                                                                            <div class="hover-content">
                                                                                <div class="main-white-button">
                                                                                    <a href="contact.html"><i
                                                                                            class="fa fa-arrow-right"></i>Daftar</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-8 right-content align-self-center">
                                                                            <a href="#">
                                                                                <h4>Pengurusan Surat Pindah Tempat</h4>
                                                                            </a>
                                                                            <h6>Persyaratan</h6>
                                                                            <span class="info"> KARTU KELUARGA<br>
                                                                                KTP</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12">
                                                                    <div class="listing-item row">
                                                                        <div class="col-lg-4 left-image">
                                                                            <a href="#"><img
                                                                                    src="assets/images/document-01.jpg"
                                                                                    alt=""></a>
                                                                            <div class="hover-content">
                                                                                <div class="main-white-button">
                                                                                    <a href="contact.html"><i
                                                                                            class="fa fa-arrow-right"></i>Daftar</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-8 right-content align-self-center">
                                                                            <a href="#">
                                                                                <h4>Persyaratan Surat Keterangan Catatan
                                                                                    Kepolisian (SKCK)</h4>
                                                                            </a>
                                                                            <h6>Persyaratan</h6>
                                                                            <span class="info"> KARTU KELUARGA<br>
                                                                                KTP</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12">
                                                                    <div class="listing-item row">
                                                                        <div class="col-lg-4 left-image">
                                                                            <a href="#"><img
                                                                                    src="assets/images/document-01.jpg"
                                                                                    alt=""></a>
                                                                            <div class="hover-content">
                                                                                <div class="main-white-button">
                                                                                    <a href="contact.html"><i
                                                                                            class="fa fa-arrow-right"></i>Daftar</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-8 right-content align-self-center">
                                                                            <a href="#">
                                                                                <h4>Pengurusan Surat Keterangan Usaha</h4>
                                                                            </a>
                                                                            <h6>Persyaratan</h6>
                                                                            <span class="info"> KARTU KELUARGA<br>
                                                                                KTP</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>




                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
