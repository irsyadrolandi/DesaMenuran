@extends('template')
@section('contents')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>


    <style>
        .close {
            font-size: 1.5rem;
        }

        .col-12 img {
            cursor: pointer;
            width: 100%;
        }

        .col-12 img:hover {
            opacity: 1;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }
    </style>

    <div class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="top-text header-text">
                        <h2>Galeri<br>
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
                    <div>
                        <div class="row">

                            <div class="card shadow mb-4 mt-3 w-100">

                                <!-- Card Body -->
                                <div class="card-body">


                                    <div class="row">
                                        <div class="container">
                                            @if ($images->count())
                                                <div class="row d-flex flex-wrap align-items-start">
                                                    @foreach ($images as $image)
                                                        <div class="col-12 col-md-6 col-lg-3 mt-3">
                                                            <div class="card shadow-lg align-self-start">
                                                                <div
                                                                    class="card-header bg-primary text-light d-flex justify-content-between">
                                                                    <div class=" align-self-start">
                                                                        {{ $image->title }}
                                                                    </div>

                                                                </div>
                                                                <div data-bs-toggle="modal" data-bs-target="#lightbox">
                                                                    <img class="gambar" src="/images/{{ $image->image }}"
                                                                        data-target="#indicators"
                                                                        data-gambar-name="{{ $image->title }}"
                                                                        data-slide-to="{{ $image->id }}"
                                                                        alt="a" />
                                                                </div>
                                                            </div>

                                                        </div>
                                                    @endforeach
                                                </div>
                                                @else
                                                <div class="d-flex justify-content-center">
                                                    <h2>GALERI KOSONG</h2>
                                                </div>
                                            @endif




                                            <!-- Modal -->
                                            <div class="modal fade" id="lightbox" tabindex="-1" aria-labelledby="lightbox"
                                                aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content bg-primary">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel"></h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <div >
                                                            <div>
                                                                @foreach ($images as $image)
                                                                    <div class="item visually-hidden" id="{{ $image->id }}">
                                                                        <img class="d-block w-100"
                                                                            src="/images/{{ $image->image }}"
                                                                            alt="{{ $image->id }}">
                                                                    </div>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div> <!-- row / end -->

                            </div> <!-- container / end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <script>
        $(document).ready(function() {
            $('.gambar').on('click', function() {
                $g = $(this);
                $gam = $('#' + $g.data('slide-to')).removeClass('visually-hidden');
                $('#exampleModalLabel').append($g.data('gambar-name'))

            });
            $('#lightbox').on('hide.bs.modal', function() {
                $('.item').addClass('visually-hidden');
                $('#exampleModalLabel').empty();
            })
        });
    </script>
@endsection
