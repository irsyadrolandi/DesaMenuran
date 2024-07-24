@include('dashboard.template.head')

<style>
    .close {
        font-size: 1.5rem;
    }

    .col-12 img {
        width: 100%;
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
    .color-footer {
    background-color: #FFFFFF !important;
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
                    <h1 class="h3 mb-4 text-gray-800">Profil Desa</h1>

                    <div class="row">

                        <div class="card shadow mb-4 w-100">
                            <!-- Card Header - Dropdown -->
                            <div>

                                <form action="{{ route('upload-perangkat') }}" class="form-image-upload rounded" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
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
                                        <div class="col-md-3">
                                            <strong>Nama:</strong>
                                            <input type="text" name="nama" class="form-control"
                                                placeholder="Nama" required>
                                        </div>
                                        <div class="col-md-3">
                                            <strong>Jabatan:</strong>
                                            <input type="text" name="jabatan" class="form-control"
                                                placeholder="Jabatan" required>
                                        </div>
                                        <div class="col-md-5">
                                            <strong>Image:</strong>
                                            <input type="file" name="image" accept="image/png, image/jpeg"
                                                class="form-control">
                                        </div>
                                        <div class="col-md-1">
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
                                                    <div class="col-12 col-md-6 col-lg-4 mt-4">
                                                        <div class="card shadow-lg align-self-start">
                                                            <div
                                                                class="card-header color-bg text-light d-flex justify-content-between">
                                                                <div>
                                                                    <h5 class="text-break">{{ $image->jabatan }}</h5>
                                                                </div>
                                                                <form
                                                                    action="{{ route('destroy-perangkat', $image->id) }}"
                                                                    method="POST">

                                                                    <input type="hidden" name="_method" value="delete">
                                                                    @csrf
                                                                    <button type="submit"
                                                                        class=" btn btn-danger btn-sm"><i
                                                                            class="far fa-times-circle fa-sm"></i></button>

                                                                </form>
                                                            </div>
                                                            <div>
                                                                @if ($image->image == null)
                                                                    <img src="{{ asset('assets/images/default.jpg') }}"
                                                                        style="height: 300px"
                                                                        alt="{{ $image->jabatan }}">
                                                                @else
                                                                    <img style="height: 300px"
                                                                        src="{{ Storage::url('perangkat-image/' . $image->image) }}"
                                                                        data-target="#indicators"
                                                                        data-slide-to="{{ $image->id }}"
                                                                        alt="{{ $image->jabatan }}" />
                                                                @endif
                                                            </div>
                                                            <div
                                                                class="card-footer color-footer text-dark d-flex justify-content-center">
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

                            </div> <!-- row / end -->

                        </div> <!-- container / end -->
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid skjhh k-->

    </div>
    <!-- End of Main Content -->

    <!-- End of Content Wrapper -->

    <!--  -->

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


</body>

</html>
