<section>
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            {{-- <ul class="side-menu top" data-widget="treeview" role="menu" data-accordion="false"> --}}

            <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
            <li class="nav-item">
                <a href="{{ url('layout/home') }}" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Dashboard
                        <i class="right fas fa-angle-right"></i>
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('toko/daftarToko') }}" class="nav-link">
                    <i class="nav-icon fas fa-home"></i>
                    <p>
                        Daftar Toko
                        <i class="right fas fa-angle-right"></i>
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-copy"></i>
                    <p>
                        Daftar Barang
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ url('barangMasuk/daftarBarang') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Barang Masuk</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('barangKeluar/daftarBarang') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Barang Keluar</p>
                        </a>
                    </li>
                </ul>
            <li class="nav-item">
                <a href="{{ url('user/index') }}" class="nav-link">
                    <i class="nav-icon fas fa-edit"></i>
                    <p>
                        User Info
                        <i class="right fas fa-angle-right"></i>
                    </p>
                </a>
            </li>

    </nav>
</section>

{{-- <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
    <a class="dropdown-item" href="{{ route('logout') }}"
        onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
        {{ __('Logout') }}
    </a> --}}
