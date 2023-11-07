@include('dashboard.template.head')

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
                    <h1 class="h3 mb-4 text-gray-800">Dashboard</h1>

                    <div class="row">
                        @foreach ($profilDesas as $profilDesa)
                            <div class="col-xl-4 col-md-6 mb-4">
                                <div class="card border-left-primary shadow h-100">
                                    <!-- Card Header - Dropdown -->
                                    <div
                                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        <h6 class="m-0 font-weight-bold text-primary">Profil Desa</h6>
                                    </div>
                                    <!-- Card Body -->

                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <a class="h5 mb-0 font-weight-bold text-gray-800 text-decoration-none stretched-link"
                                                    href="{{ route('dashboard-profil-desa', $profilDesa->id) }}">{{ $profilDesa->kategori }}</a>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-university fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="row">
                        @foreach ($kabarDesas as $kabarDesa)
                        <div class="col-lg-6">

                            <!-- Dropdown Card Example -->
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Dropdown Card Example</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                                aria-labelledby="dropdownMenuLink">
                                                <div class="dropdown-header">Option:</div>
                                                <a class="dropdown-item"
                                                    href="{{ route('kabar-desa.edit', $kabarDesa->slug) }}"><i
                                                        class="far fa-edit"></i>
                                                    Edit</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#"><i class="far fa-trash-alt"></i>
                                                    Hapus</a>
                                            </div>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="text-center">
                                        <img class="img-fluid mt-3 mb-4" style="width: 50rem;"
                                            src="https://source.unsplash.com/1200x600/?news"
                                            alt="...">
                                    </div>
                                    <a href="{{ route('kabar-desa.show', $kabarDesa->slug) }}">
                                        <h3 class=" text-dark">{{ $kabarDesa->title }}</h3>
                                    </a>
                                    <h6>{{ $kabarDesa->kategori }}</h6>
                                    <p>{{  strip_tags(Str::length($kabarDesa->body) > 500 ? substr($kabarDesa->body, 0, 500) . '...' : $kabarDesa->body)  }}</p>
                                    <a href="{{ route('kabar-desa.show', $kabarDesa->slug) }}">Read More&rarr;</a>
                                </div>
                            </div>


                        </div>
                            {{-- <div class="col-lg-6">
                                <div class="card shadow mb-4">
                                    <div
                                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        <h6 class="m-0 font-weight-bold text-primary">Kabar Desa</h6>
                                        <div class="dropdown no-arrow">
                                            <a class="dropdown-toggle" href="#" role="button"
                                                id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                                aria-labelledby="dropdownMenuLink">
                                                <div class="dropdown-header">Option:</div>
                                                <a class="dropdown-item"
                                                    href="{{ route('dashboard-single-kabar-desa-edit', $kabarDesa->slug) }}"><i
                                                        class="far fa-edit"></i>
                                                    Edit</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#"><i class="far fa-trash-alt"></i>
                                                    Hapus</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-center">
                                            <img class="img-fluid mt-3 mb-4" style="width: 50rem;"
                                                src="{{ $kabarDesa->image == '' ? 'https://source.unsplash.com/1200x600/?news' : $kabarDesa->image }}"
                                                alt="...">
                                        </div>
                                        <a href="{{ route('dashboard-single-kabar-desa', $kabarDesa->slug) }}">
                                            <h3 class=" text-dark">{{ $kabarDesa->title }}</h3>
                                        </a>
                                        <h6>{{ $kabarDesa->kategori }}</h6>
                                        <p>{!! Str::length($kabarDesa->body) > 500 ? substr($kabarDesa->body, 0, 500) . '...' : $kabarDesa->body !!}</p>
                                        <a href="{{ route('dashboard-single-kabar-desa', $kabarDesa->slug) }}">Read More
                                            &rarr;</a>
                                    </div>
                                </div>
                            </div> --}}
                        @endforeach
                    </div>

                </div>
                <div class="d-flex justify-content-center">
                    {{ $kabarDesas->links() }}
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

</body>

</html>
