@include('dashboard.template.head')

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
    .btn-submit {
        background-color: #01796f;
        border-color: #01796f;
        color: white;
        padding: 7px 15px;
        border-radius: 5px;
        font-size: 16px;
        border: none;
        cursor: pointer;
    }

    .btn-submit:hover {
        background-color: #016a60;
    }
    .color-bg {
        background-color: #01796f;
    }
</style>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('dashboard.template.sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('dashboard.template.navbar')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Galeri</h1>

                    <div class="row">

                        <div class="card shadow mb-4 w-100">
                            <!-- Card Header - Dropdown -->
                            <div>
                                <form action="{{ route('upload-galeri') }}" class="form-image-upload" method="POST"
                                    enctype="multipart/form-data">


                                    {!! csrf_field() !!}
                                    @if (count($errors) > 0)
                                        <div class="alert alert-danger">
                                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif

                                    @if ($message = Session::get('success'))
                                        <div class="alert alert-success alert-block">
                                            <button type="button" class="close" data-dismiss="alert">×</button>
                                            <strong>{{ $message }}</strong>
                                        </div>
                                    @endif

                                    <div class="row">
                                        <div class="col-md-5">
                                            <strong>Title:</strong>
                                            <input type="text" name="title" class="form-control"
                                                placeholder="Title">
                                        </div>
                                        <div class="col-md-5">
                                            <strong>Image:</strong>
                                            <input type="file" name="image" accept="image/png, image/jpeg"
                                                class="form-control">
                                        </div>
                                        <div class="col-md-2">
                                            <br />
                                            <button type="submit" class="btn-submit">Upload</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
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
                                                                class="card-header color-bg text-light d-flex justify-content-between">
                                                                <div>
                                                                {{ $image->title }}
                                                                </div>
                                                                <form action="{{ url('image-gallery', $image->id) }}"
                                                                    method="POST">

                                                                    <input type="hidden" name="_method" value="delete">

                                                                    {!! csrf_field() !!}

                                                                    <button type="submit"
                                                                        class=" btn btn-danger btn-sm"><i
                                                                            class="far fa-times-circle fa-sm"></i></button>

                                                                </form>
                                                            </div>
                                                            <div data-toggle="modal" data-target="#lightbox">
                                                                <img class="gambar" src="{{ asset('galeri/' . $image->image) }}"
                                                                    data-target="#indicators"
                                                                    height="250px"
                                                                    data-slide-to="{{ $image->id }}"
                                                                    alt="a" />
                                                            </div>
                                                        </div>

                                                    </div>
                                                @endforeach
                                            </div>
                                        @endif


                                        <!-- Modal -->
                                        <div class="modal fade" id="lightbox" role="dialog" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content color-bg">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="mt-1 ml-3 text-light">
                                                            <h4 id="nama"></h4>
                                                        </div>

                                                        <button type="button" class="close text-right p-2"
                                                            data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div id="indicators" class="carousel slide" data-interval="false">
                                                        <ol class="carousel-indicators">
                                                            @foreach ($images as $image)
                                                                <li data-target="#indicators"
                                                                    data-slide-to="{{ $image->id }}">
                                                                </li>
                                                            @endforeach
                                                        </ol>
                                                        <div class="carousel-inner">
                                                            @foreach ($images as $image)
                                                                <div class="carousel-item" id="{{ $image->id }}"
                                                                    data-nama="{{ $image->title }}">
                                                                    <img class="d-block w-100"
                                                                        src="{{ asset('galeri/' . $image->image) }}"
                                                                        alt="{{ $image->id }}">
                                                                </div>
                                                            @endforeach


                                                        </div>
                                                        <a class="carousel-control-prev" href="#indicators"
                                                            role="button" data-slide="prev">
                                                            <span class="carousel-control-prev-icon"
                                                                aria-hidden="true"></span>
                                                            <span class="sr-only">Previous</span>
                                                        </a>
                                                        <a class="carousel-control-next" href="#indicators"
                                                            role="button" data-slide="next">
                                                            <span class="carousel-control-next-icon"
                                                                aria-hidden="true"></span>
                                                            <span class="sr-only">Next</span>
                                                        </a>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div> <!-- list-group / end -->

                            </div> <!-- row / end -->

                        </div> <!-- container / end -->
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->



    </div>
    <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>



    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('dashboard-template/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('dashboard-template/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('dashboard-template/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('dashboard-template/js/sb-admin-2.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('.gambar').on('click', function() {
                $g = $(this);
                $gam = $('#' + $g.data('slide-to')).addClass("active");


            });

            $('#lightbox').on('shown.bs.modal', function(event) {
                $nama = $('.carousel-item.active');
                $('#nama').empty();
                $('#nama').append($nama.data('nama'))
            })


            $('#indicators').on('slid.bs.carousel', function() {
                $nama = $('.carousel-item.active');
                $('#nama').empty();
                $('#nama').append($nama.data('nama'))
            })


            $('#lightbox').on('hide.bs.modal', function() {
                $('.carousel-item').removeClass('active');
            })
        });
    </script>

</body>

</html>
