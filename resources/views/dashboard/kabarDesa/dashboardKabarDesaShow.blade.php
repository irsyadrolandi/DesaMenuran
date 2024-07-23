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

                    <div class="row d-flex justify-content-center">
                        <div class="col-10">
                            <div class="card shadow mb-4">
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-light">Kabar Desa</h6>
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
                                            <img class="img-fluid mt-3 mb-4" style="width: 70rem; max-height: 35rem"
                                                src="{{ Storage::url('kabar-image/' . $kabarDesa->image) }}" 
                                                alt="...">
                                        </div>
                                        <div class="row  d-flex justify-content-center">
                                            <div class=" col-10">
                                            <h2 class="text-dark">{{ $kabarDesa->title }}</h2>
                                            <h6>{{ $kabarDesa->kategori }}</h6>
                                                <p class="text-dark">{!! $kabarDesa->body !!}</p>
                                            </div>
                                        </div>

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


    <script>
        $('#hapus_gambar_input').val(null);
        $('#hapus-gambar').show();
        $('#hapus-gambar').click(function() {
            $(this).hide()
            $('#hapus_gambar_input').val(true);
        });

        function prevImgE() {
            const input = document.querySelector('#gambarE');
            const prev = document.querySelector('.img_prevE');
            prev.style.display = 'block';
            prev.style.border = 'thin solid #000000';
            const oFReader = new FileReader();
            oFReader.readAsDataURL(input.files[0]);
            oFReader.onload = function(ofREvent) {
                prev.src = ofREvent.target.result;
            }
        }




        var createKode = function() {
            var title = $('#title').val();
            $.get('/dashboard/kabar-desa/CreateSlug', {
                    title: title,
                })
                .done(function(data) {
                    if (data['success']) {
                        $('#slug').val(data.kode);
                    } else {
                        $('#sadIn').html(
                            'terjadi Error');
                    }
                });
        };
        $('#title').change(createKode);
    </script>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('dashboard-template/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('dashboard-template/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('dashboard-template/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('dashboard-template/js/sb-admin-2.min.js') }}"></script>

</body>

</html>
