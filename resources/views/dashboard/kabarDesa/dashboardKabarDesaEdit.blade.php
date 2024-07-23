@include('dashboard.template.head')
<style>
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
                    <h1 class="h3 mb-4 text-gray-800">{{ $title }}</h1>

                    <div class="row">
                        <div class="col-12">
                            <div class="card shadow mb-4">
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-light">Kabar Desa</h6>
                                </div>
                                <div class="card-body">

                                        <form id="form" method="post"
                                            action="{{ route('kabar-desa.update', $kabarDesa->slug) }}"
                                            enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <div class="mb-3">
                                                <label for="title" class="form-label">Judul</label>
                                                <input type="text" class="form-control" maxlength="200"
                                                    id="title" name="title" value="{{ $kabarDesa->title }}"
                                                    required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="slug" class="form-label">Kode
                                                    Barang</label>
                                                <input type="text" class="form-control" id="slug" name="slug"
                                                    value="{{ $kabarDesa->slug }}" required readonly>
                                                <p id="sadInE"></p>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="kategori">Kategori</label><br>
                                                <select class="form-select custom-select" id="kategori" name="kategori" aria-label="Default select example">
                                                    <option value= "1"
                                                        {{ $kabarDesa->kategori === '1' ? 'selected' : '' }}>
                                                        {{ 'Kabar Desa' }}</option>
                                                    <option value= "2"
                                                        {{ $kabarDesa->kategori === '2' ? 'selected' : '' }}>
                                                        {{ 'Pengumuman' }}</option>
                                                </select>
                                            </div>


                                            <div class="mb-3">
                                                <label for="gambar" class="form-label fw-bold">Gambar</label>
                                                @if ($kabarDesa->image)
                                                    <input type="hidden" id="old_image" name="old_image"
                                                        value="{{ $kabarDesa->image }}">

                                                    <input type="hidden" id="hapus_gambar_input"
                                                        name="hapus_gambar_input" value="">
                                                    <br>
                                                    <div id="hapus-gambar">
                                                        <span class="badge bg-danger m-1 text-light"
                                                            style="cursor: pointer">hapus
                                                            gambar</span>
                                                        <img class="img_prevE img-fluid mb-3 img-fluid img-thumbnail border-dark col-sm-5 d-block"
                                                            src="{{ Storage::url('kabar-image/' . $kabarDesa->image) }}" >
                                                    </div>
                                                @else
                                                    <img class="img_prevE img-fluid mb-3 col-sm-5 d-block">
                                                @endif
                                                <input
                                                    class="form-control border-dark @error('image') is-invalid @enderror"
                                                    type="file" id="gambarE" accept="image/png, image/jpeg"
                                                    onchange="prevImgE()" name="image">
                                                @error('image')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label for="part" class="form-label fw-bold">Isi</label>
                                                <input id="body" type="hidden" name="body"
                                                    value="{{ $kabarDesa->body }}">
                                                <trix-editor input="body">
                                                </trix-editor>
                                            </div>
                                            <button type="submit" class="btn-submit">Simpan</button>
                                        </form>

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
