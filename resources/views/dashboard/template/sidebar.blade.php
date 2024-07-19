<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('home') }}">
        <div class="sidebar-brand-text mx-3">Desa Menuran</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('profil-desa.perangkat-desa') }}">
            <i class="fas fa-university"></i>
            <span>Perangkat Desa</span>
        </a>
    </li>


    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            </i><i class="fas fa-newspaper"></i>
            <span>Kabar Desa</span>
        </a>
        <div id="collapseUtilities" class="collapse {{ Request::is('dashboard/kabar-*') ? 'show' : '' }}"
            aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item {{ Request::is('dashboard/kabar-desa') ? 'active' : '' }}" href="{{ route('kabar-desa.index') }}">Semua Kabar Desa</a>
                <a class="collapse-item {{ Request::is('/dashboard/kabar-desa?kategori=1') ? 'active' : '' }}"
                    href="/dashboard/kabar-desa?kategori=1">Kabar Desa</a>
                <a class="collapse-item {{ Request::is('/dashboard/kabar-desa?kategori=2') ? 'active' : '' }}"
                    href="/dashboard/kabar-desa?kategori=2">Pengumuman</a>
            </div>
        </div>
    </li>
    <li class="nav-item {{ Request::is('dashboard/galeri*') ? 'active' : '' }}">
        <a class="active nav-link" href="{{ route('dashboard-galeri') }}">
            <i class="fas fa-images"></i>
            <span>Galeri</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
