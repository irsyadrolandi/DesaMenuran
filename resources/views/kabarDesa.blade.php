@extends('template')
@section('contents')
    {{-- {{ dd($kabarDesas) }} --}}
    <div class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="top-text header-text">
                        @if (request('kategori'))
                            <?php $a = request('kategori'); ?>
                            @if ('2' == $a)
                                <h2>Pengumuman</h2>
                            @else
                                <h2>Kabar<br>
                            @endif
                        @endif
                        <h2>
                            Desa Menuran
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="listing-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-3">
                            <a href="/kabar-desa/?kategori=1" class="btn btn-primary w-100 btn-lg mb-3">Kabar Desa</a>
                            <a href="/kabar-desa/?kategori=2" class="btn btn-primary w-100 btn-lg mb-3">Pengumuman</a>
                        </div>
                        <div class="col-lg-9">
                            <div class="recent-listing">
                                <div class="owl-carousel owl-listing">
                                    <div class="item">
                                        <div class="row">
                                            @foreach ($kabardesas as $kabardesa)
                                                <div class="col-lg-12">
                                                    <div class="listing-item row">
                                                        <div class="col-lg-5 left-image">
                                                            <a href="{{ route('skabar-desa', $kabardesa->slug) }}"><img
                                                                    src="{{ Storage::url('kabar-image/' . $kabardesa->image) }}"  alt=""></a>
                                                        </div>
                                                        <div class="col-lg-7 right-content align-self-center">
                                                            <a href="{{ route('skabar-desa', $kabardesa->slug) }}">
                                                                <h4>{{ $kabardesa->title }}</h4>
                                                                <h4>Kategori: {{ $kabardesa->kategori }}</h4>
                                                            </a>

                                                            <h6>{{ $kabardesa->exerpt }}</h6>


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
            </div>
        </div>
    </div>
@endsection
