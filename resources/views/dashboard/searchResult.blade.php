{{-- {{ dd(request()->kategori) }} --}}
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
                    @if (session()->has('success'))
                    {{-- <div class="alert alert-primary border-dark alert-dismissible fade show my-3" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div> --}}
                    <div class="alert alert-primary alert-dismissible fade show" role="alert">
                        <strong>Succes!</strong> {{ session('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                @endif

                @if ($errors->any())
                    {!! implode(
                        '',
                        $errors->all(' <div class="alert alert-danger alert-dismissible fade show" role="alert">:message<button type="button" class="close" data-bs-dismiss="alert" aria-label="Close"></button> </div>'),
                    ) !!}
                @endif
                    <h1 class="h3 mb-4 text-gray-800">Hasil Pencarian</h1>

                    <div class="row">

                        @foreach ($kabarDesas as $kabarDesa)
                            <div class="col-xl-6 col-md-12">
                                <div class="card shadow mb-4">
                                    <div
                                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        <h6 class="m-0 font-weight-bold text-primary">
                                            {{ $kabarDesa->kategori == '1' ? 'Kabar Desa' : 'Pengumuman' }}</h6>
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
                                                    href="{{ route('kabar-desa.edit', $kabarDesa->slug) }}"><i
                                                        class="far fa-edit"></i>
                                                    Edit</a>
                                                <div class="dropdown-divider"></div>
                                                <form action="{{ route('kabar-desa.destroy', $kabarDesa) }}" method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button class="dropdown-item btn bg-link" id="hapus"><i
                                                            class="far fa-trash-alt"></i> Hapus</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-center">
                                            <a href="{{ route('kabar-desa.show', $kabarDesa->slug) }}">
                                                <img class="img-fluid mt-3 mb-4" style="width: 50rem; height: 25rem"
                                                    src="{{ Storage::url('kabar-image/' . $kabarDesa->image) }}" 
                                                    alt="{{ $kabarDesa->slug }}">
                                            </a>
                                        </div>
                                        <a href="{{ route('kabar-desa.show', $kabarDesa->slug) }}" class=  "text-dark">
                                            <h3>{{ $kabarDesa->title }}</h3>
                                        </a>

                                        <a class="text-decoration-none"
                                            href="/dashboard/kabar-desa?kategori={{ $kabarDesa->kategori }}">
                                            <h6>{{ $kabarDesa->kategori == '1' ? 'Kabar Desa' : 'Pengumuman' }}</h6>
                                        </a>
                                        <p>{{ strip_tags(substr($kabarDesa->body, 0, 500). '...') }}
                                        </p>
                                        <a href="{{ route('kabar-desa.show', $kabarDesa->slug) }}">Read More
                                            &rarr;</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <div class="d-flex justify-content-center">

                        {{ $kabarDesas->links() }}
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
