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
                                                <span class="icon"><img src="assets/images/icon-gambaran-umum.png"
                                                        alt="">
                                                    <h4>Gambaran Umum</h4>
                                                </span>
                                            </div>
                                        </div>
                                        <div class=" col-lg-2">
                                            <div class="thumb">
                                                <span class="icon"><img src="assets/images/icon-sejarah.png"
                                                        alt="">
                                                    <h4>Sejarah</h4>
                                                </span>
                                            </div>
                                        </div>
                                        <div class=" col-lg-2">
                                            <div class="thumb">
                                                <span class="icon"><img src="assets/images/icon-demografi.png"
                                                        alt="">
                                                    <h4>Demografi</h4>
                                                </span>
                                            </div>
                                        </div>
                                        <div class=" col-lg-2">
                                            <div class="thumb">
                                                <span class="icon"><img src="assets/images/icon-visi-misi.png"
                                                        alt="">
                                                    <h4>Visi &amp; Misi</h4>
                                                </span>
                                            </div>
                                        </div>
                                        <div class=" col-lg-2">
                                            <div class="thumb">
                                                <span class="icon"><img src="assets/images/icon-perangkat-desa.png"
                                                        alt="">
                                                    <h4>Perangkat Desa</h4>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="last-thumb  col-lg-2">
                                            <div class="thumb">
                                                <span class="icon"><img src="assets/images/icon-lembaga.png"
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
                                                                        @if ($images->count())
                                                                            <div
                                                                                class="row d-flex flex-wrap align-items-start">
                                                                                <div class="row">
                                                                                    <div class="container">
                                                                                        @if ($images->count())
                                                                                            <div class="row d-flex flex-wrap align-items-start">
                                                                                                @foreach ($images as $image)
                                                                                                    <div class="col-12 col-md-6 col-lg-3 mt-4">
                                                                                                        <div class="card shadow-lg align-self-start">
                                                                                                            <div class="card-header bg-primary text-light d-flex justify-content-center">
                                                                                                                <div>
                                                                                                                    <h5 class="text-break">{{ $image->jabatan }}</h5>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div>
                                                                                                                @if ($image->image == null)
                                                                                                                    <img src="{{ asset('assets/images/default.jpg') }}" style="height: 300px" alt="{{ $image->jabatan }}">
                                                                                                                @else
                                                                                                                <img style="height: 300px" src="/images/{{ $image->image }}"
                                                                                                                    data-target="#indicators"
                                                                                                                    data-slide-to="{{ $image->id }}"
                                                                                                                    alt="{{ $image->jabatan }}" />
                                                                                                                @endif
                                                                                                            </div>
                                                                                                            <div class="card-footer text-dark d-flex justify-content-center">
                                                                                                                <h4 class="text-break">
                                                                                                                    {{ $image->nama }}
                                                                                                                </h4>
                                                                                                              </div>

                                                                                                        </div>

                                                                                                    </div>
                                                                                                @endforeach
                                                                                            </div>
                                                                                        @endif
                                                                                    </div>

                                                                                </div> <!-- list-group / end -->
                                                                            </div>
                                                                        @else
                                                                            <div class="d-flex justify-content-center">
                                                                                <h2>GALERI KOSONG</h2>
                                                                            </div>
                                                                        @endif
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
