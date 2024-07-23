@extends('template')
@section('contents')
<style>
    .btn-custom {
        background-color: #01796f;
        border-color: #01796f;
        color: white;
        padding: 10px 20px;
        font-size: 1.25rem; /* sesuai dengan btn-lg */
        border-radius: .3rem; /* sesuai dengan bentuk asli */
        display: block;
        width: 100%;
        margin-bottom: 1rem;
        text-align: center;
        text-decoration: none;
        transition: background-color 0.3s, border-color 0.3s;
    }

    .btn-custom:hover {
        background-color: #016a60;
        border-color: #016a60;
        text-decoration: none; /* Menghilangkan underline saat hover */
    }

    .btn-custom:focus, .btn-custom:active {
        background-color: #015f57;
        border-color: #015f57;
        outline: none;
        box-shadow: none;
    }
</style>
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
                            <a href="/kabar-desa/?kategori=1" class="btn btn-custom">Kabar Desa</a>
                            <a href="/kabar-desa/?kategori=2" class="btn btn-custom">Pengumuman</a>
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
