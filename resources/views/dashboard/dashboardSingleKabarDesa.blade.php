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
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Kabar Desa</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                            aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">Option:</div>
                                            <a class="dropdown-item" href="#"><i class="far fa-edit"></i>
                                                Edit</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#"><i class="far fa-trash-alt"></i>
                                                Hapus</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    @if ($purpose == 'show')
                                        <div class="text-center">
                                            <img class="img-fluid mt-3 mb-4" style="width: 70rem;"
                                                src="{{ $kabarDesa->image == '' ? 'https://source.unsplash.com/1200x600/?news' : $kabarDesa->image }}"
                                                alt="...">
                                        </div>
                                        <h2 class="text-dark">{{ $kabarDesa->title }}</h2>
                                        <h6>{{ $kabarDesa->kategori }}</h6>
                                        <p class="text-dark">{!! $kabarDesa->body !!}</p>
                                    @elseif ($purpose == 'edit')
                                        <form id="form" method="post" action="#"
                                            enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <div class="mb-3">
                                                <label for="nama_barang" class="form-label">Judul</label>
                                                <input type="text" class="form-control" maxlength="255"
                                                    id="title" name="title" value="{{ $kabarDesa->title }}">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="kategori">Kategori</label>
                                                <select class="form-select" id="kategori" name="kategori">
                                                    <option value= "1"
                                                        {{ $kabarDesa->kategori === "1" ? 'selected' : '' }}>
                                                        {{ "Kabar Desa" }}</option>
                                                    <option value= "2"
                                                        {{ $kabarDesa->kategori === "2" ? 'selected' : '' }}>
                                                        {{ "Pengumuman" }}</option>

                                                </select>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label" for="inputGroupSelect02">Nama
                                                    Ruang
                                                    penyimpanan</label>
                                                <select class="form-select" id="inputGroupSelect02"
                                                    name="lokasi_penyimpanan_id">
                                                    @foreach ($lokasis as $ruang)
                                                        <option value={{ $ruang->id }}
                                                            {{ $barang->lokasi_penyimpanan_id === $ruang->id ? 'selected' : '' }}>
                                                            {{ $ruang->nama_lokasi }} </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="kode_barang" class="form-label">Kode
                                                    Barang</label>
                                                <input type="text" maxlength="25" class="form-control"
                                                    id="kode_barangE" name="kode_barang"
                                                    value="{{ $barang->kode_barang }}">
                                                <p class="fw-lighter">*Double Click untuk membuat kode barang otomatis
                                                </p>
                                                <p id="sadInE"></p>
                                            </div>
                                            <label class="form-label">Kondisi</label>

                                            <div class="input-group mb-3">
                                                <div class="form-check form-check-inline ms-2">
                                                    <input class="form-check-input" type="radio" name="kondisi"
                                                        id="exampleRadios1" value="Bagus"
                                                        {{ $barang->kondisi == 'Bagus' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="exampleRadios1">
                                                        Bagus
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="kondisi"
                                                        id="exampleRadios3" value="Rusak Ringan"
                                                        {{ $barang->kondisi == 'Rusak Ringan' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="exampleRadios3">
                                                        Rusak Ringan
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="kondisi"
                                                        id="exampleRadios2" value="Rusak"
                                                        {{ $barang->kondisi == 'Rusak' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="exampleRadios2">
                                                        Rusak
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <label for="gambar_barang" class="form-label fw-bold">Gambar
                                                    Barang</label>
                                                @if ($barang->gambar_barang)
                                                    <input type="hidden" id="old_image" name="old_image"
                                                        value="{{ $barang->gambar_barang }}">

                                                    <input type="hidden" id="hapus_gambar_input"
                                                        name="hapus_gambar_input" value="">
                                                    <br>
                                                    <div id="hapus-gambar">
                                                        <span class="badge bg-danger m-1"
                                                            style="cursor: pointer">hapus barang</span>
                                                        <img class="img_prevE img-fluid mb-3 img-fluid img-thumbnail border-dark col-sm-5 d-block"
                                                            src="{{ asset('storage/' . $barang->gambar_barang) }}">
                                                    </div>
                                                @else
                                                    <img class="img_prevE img-fluid mb-3 col-sm-5 d-block">
                                                @endif
                                                <input
                                                    class="form-control border-dark @error('gambar_barang') is-invalid @enderror"
                                                    type="file" id="gambar_barangE" accept="image/png, image/jpeg"
                                                    onchange="prevImgE()" name="gambar_barang">
                                                @error('gambar_barang')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label for="part" class="form-label fw-bold">Part</label>
                                                <input id="part" type="hidden" name="part"
                                                    value="{{ $barang->part }}">
                                                <trix-editor input="part">
                                                </trix-editor>
                                            </div>

                                            <div class="mb-3">
                                                <label for="deskripsi" class="form-label fw-bold">Deskripsi</label>
                                                <input id="deskripsi" type="hidden" name="deskripsi"
                                                    value="{{ $barang->deskripsi }}">
                                                <trix-editor input="deskripsi">
                                                </trix-editor>
                                            </div>



                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                        </form>

                                    @endif
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
