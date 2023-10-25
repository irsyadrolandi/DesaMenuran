
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
                    <h1 class="h3 mb-4 text-gray-800">{{ $title }}</h1>

                    <div class="row">
                            <div class="col-12">
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">Kabar Desa</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-center">
                                            <img class="img-fluid mt-3 mb-4" style="width: 70rem;"
                                                src="{{ $kabarDesa->image == "" ? 'https://source.unsplash.com/1200x600/?news' : $kabarDesa->image }}" alt="...">
                                        </div>
                                        <h2 class="text-dark">{{ $kabarDesa->title }}</h2>
                                        <h6>{{ $kabarDesa->kategori }}</h6>
                                        <p class="text-dark">{!! ($kabarDesa->body) !!}</p>
                                    </div>
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

</body>

</html>
