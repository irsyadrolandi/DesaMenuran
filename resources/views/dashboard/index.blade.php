@include('dashboard.template.head')
<style>
    .btn-submit {
        display: inline-flex;
            align-items: center;
            background-color: #01796f;
            border-color: #01796f;
            color: white;
            padding: 5px 20px;
            border-radius: 5px;
            font-size: 16px;
            text-decoration: none;
            transition: background-color 0.3s, border-color 0.3s;
        }

        .btn-submit .icon {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 25px;
            height: 25px;
            background-color: rgba(255, 255, 255, 0.15);
            border-radius: 5px 0 0 5px;
            margin-right: 10px;
        }

        .btn-submit .separator {
            width: 1px;
            height: 25px;
            background-color: rgba(255, 255, 255, 0.5);
            margin: 0 10px;
        }

        .btn-submit .icon i {
            color: white;
        }

        .btn-submit .text {
            margin-left: 5px;
        }

        .btn-submit:hover {
            background-color: #016a60;
            border-color: #016a60;
            text-decoration: none;
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
                    {{-- <h1 class="h3 mb-4 text-gray-800">Dashboard</h1> --}}

                    <!--
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Profil Desa</h1>
                    </div> -->
                    {{-- <h1 class="h3 mb-4 text-gray-800">Profil Desa</h1> --}}
                    
                    <!--
                    <div class="row">
                        {{-- @foreach ($profilDesas as $profilDesa) --}}
                            <div class="col-xl-4 col-md-6 mb-4">
                                <div class="card border-left-primary shadow h-100">
                                    <!-- Card Header - Dropdown -->
                                    {{-- <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        <h6 class="m-0 font-weight-bold text-primary">Profil Desa</h6>
                                    </div> --}}
                                    <!-- Card Body -->
                                    <!--
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <a class="h5 mb-0 font-weight-bold text-gray-800 text-decoration-none stretched-link"
                                                    {{-- href="{{ route('profil-desa.show', $profilDesa->id) }}">{{ $profilDesa->kategori }}</a> --}}
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-university fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        {{-- @endforeach --}}
                    </div>
                    <br> -->
                    
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <!-- <h1 class="h3 mb-4 text-gray-800">Kabar Desa</h1> -->

                        <a href="{{ route('kabar-desa.create') }}" class="btn-submit btn-icon-split">
                            <span class="icon text-white-50">
                                <i class="fas fa-plus"></i>
                            </span>
                            <span class="separator"></span>
                            <span class="text">Tambah Kabar Desa</span>
                        </a>
                    </div>

                    {{-- <div class="row">
                        @foreach ($kabarDesas as $kabarDesa)
                            <div class="col-lg-6">
                                <!-- Dropdown Card Example -->
                                <div class="card shadow mb-4">
                                    <!-- Card Header - Dropdown -->
                                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        <h6 class="m-0 font-weight-bold text-primary">
                                            {{ $kabarDesa->kategori == '1' ? 'Kabar Desa' : 'Pengumuman' }}</h6>
                                        <div class="dropdown no-arrow">
                                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                                <div class="dropdown-header">Option:</div>
                                                <a class="dropdown-item" href="{{ route('kabar-desa.edit', $kabarDesa->slug) }}"><i class="far fa-edit"></i> Edit</a>
                                                <div class="dropdown-divider"></div>
                                                <form action="{{ route('kabar-desa.destroy', $kabarDesa->slug) }}" method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button class="dropdown-item btn bg-link" id="hapus"><i class="far fa-trash-alt"></i> Hapus</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card Body -->
                                    <div class="card-body">
                                        <div class="text-center">
                                            <img class="img-fluid mt-3 mb-4" style="width: 50rem; height: 25rem" src="{{ Storage::url('kabar-image/' . $kabarDesa->image) }}" alt="...">
                                        </div>
                                        <a href="{{ route('kabar-desa.show', $kabarDesa->slug) }}">
                                            <h3 class="text-dark">{{ $kabarDesa->title }}</h3>
                                        </a>
                                        <h6>{{ $kabarDesa->kategori }}</h6>
                                        <p>{{ strip_tags(Str::length($kabarDesa->body) > 500 ? substr($kabarDesa->body, 0, 500) . '...' : $kabarDesa->body) }}</p>
                                        <a href="{{ route('kabar-desa.show', $kabarDesa->slug) }}">Read More&rarr;</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div> --}}

                </div>
                {{-- <div class="d-flex justify-content-center">
                    {{ $kabarDesas->links() }}
                </div> --}}
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
