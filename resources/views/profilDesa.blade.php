
@extends('template')
@section('contents')
    <div class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="top-text header-text">
                        <h2>Profil<br>
                            Desa Sungai Cina
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="category-post">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="naccs">
                        <div class="grid">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="menu row">
                                        <div class="first-thumb active col-lg-2">
                                            <div class="thumb">
                                                <span class="icon"><img src="assets/images/search-icon-01.png"
                                                        alt="">
                                                    <h4>Gambaran Umum</h4>
                                                </span>
                                            </div>
                                        </div>
                                        <div class=" col-lg-2">
                                            <div class="thumb">
                                                <span class="icon"><img src="assets/images/search-icon-02.png"
                                                        alt="">
                                                    <h4>Sejarah</h4>
                                                </span>
                                            </div>
                                        </div>
                                        <div class=" col-lg-2">
                                            <div class="thumb">
                                                <span class="icon"><img src="assets/images/search-icon-03.png"
                                                        alt="">
                                                    <h4>Demografi</h4>
                                                </span>
                                            </div>
                                        </div>
                                        <div class=" col-lg-2">
                                            <div class="thumb">
                                                <span class="icon"><img src="assets/images/search-icon-04.png"
                                                        alt="">
                                                    <h4>Visi &amp; Misi</h4>
                                                </span>
                                            </div>
                                        </div>
                                        <div class=" col-lg-2">
                                            <div class="thumb">
                                                <span class="icon"><img src="assets/images/search-icon-05.png"
                                                        alt="">
                                                    <h4>Perangkat Desa</h4>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="last-thumb  col-lg-2">
                                            <div class="thumb">
                                                <span class="icon"><img src="assets/images/search-icon-05.png"
                                                        alt="">
                                                    <h4>Lembaga</h4>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <ul class="nacc">
                                        <li class="active">
                                            <div>
                                                <div class="thumb">
                                                    <div class="row">
                                                        <div class="col-lg-12 mt-5">
                                                            <div class="description">
                                                                <div class="row">
                                                                    <div class="col-lg-12">
                                                                        <h4>Gambaran Umum</h4>
                                                                        <p>{!! $gambaranUmum->body !!}</p>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <div class="thumb">
                                                    <div class="row">
                                                        <div class="col-lg-12 mt-5">
                                                            <div class="description">
                                                                <div class="row">
                                                                    <div class="col-lg-12">
                                                                        <h4>Sejarah</h4>
                                                                        <p>{!! $sejarah->body !!}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <div class="thumb">
                                                    <div class="row">
                                                        <div class="col-lg-12 mt-5">
                                                            <div class="description">
                                                                <div class="row">
                                                                    <div class="col-lg-12">
                                                                        <h4>Demografi</h4>
                                                                        <p>{!! $demografi->body !!}</p>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <div class="thumb">
                                                    <div class="row">

                                                        <div class="col-lg-12">
                                                            <div class="description">
                                                                <div class="row">
                                                                    <div class="col-lg-12 mt-5">
                                                                        <h4>Visi &amp; Misi</h4>
                                                                        <p>{!! $visiMisi->body !!}</p>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <div class="thumb">
                                                    <div class="row">

                                                        <div class="col-lg-12">
                                                            <div class="description">
                                                                <div class="row">
                                                                    <div class="col-lg-12 mt-5">
                                                                        <h4>Perangkat Desa</h4>
                                                                        <p>{!! $perangkatDesa->body !!}</p>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <div class="thumb">
                                                    <div class="row">

                                                        <div class="col-lg-12">
                                                            <div class="description">
                                                                <div class="row">
                                                                    <div class="col-lg-12 mt-5">
                                                                        <h4>Lembaga</h4>
                                                                        <p>{!! $lembaga->body !!}</p>
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
