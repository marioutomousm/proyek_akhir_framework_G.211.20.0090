<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LaravelForm</title>

    @stack('before-style')
    @include('includes.style')
    @stack('after-style')

</head>

<body>
    @stack('before-content')
    </section>
                <div class="container-fluid">
                    <div class="row">

                        <section>
                            <section id="sidebar">
                                <br />
                                <a href="#" class="brand">
                                    <img src="" class="a">
                                    <span class="text">Sistem Informasi Beasiswa</span>
                                </a>
                                <ul class="side-menu top">
                                    <li class="active">
                                        <a href="index.php">
                                            <i class='bx bxs-dashboard'></i>
                                            <span class="text">Dashboard</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="databeasiswa.php">
                                            <i class='bx bxs-file'></i>
                                            <span class="text">Data Beasiswa Mahasiswa</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="Pengumuman.php">
                                            <i class='bx bxs-bell'></i>
                                            <span class="text">Pengumuman</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="Informasi.php">
                                            <i class='bx bxs-info-circle'></i>
                                            <span class="text">Informasi</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a onclick="logout()" class="logout">
                                            <i class='bx bxs-log-out'></i>
                                            <span class="text">Logout</span>
                                        </a>
                                    </li>
                                </ul>
                            </section>
                            <!-- SIDEBAR -->



                            <!-- CONTENT -->
                            <section id="content">
                                <!-- NAVBAR -->
                                <nav>
                                    {{-- <i class='bx bx-menu'></i> --}}
                                    <form action="#">
                                        <div class="form-input">
                                            <input type="search" placeholder="Search...">
                                            <button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
                                        </div>
                                    </form>
                                    <input type="checkbox" id="switch-mode" hidden>
                                    <label for="switch-mode" class="switch-mode"></label>

                                    <a href="#" class="profile">

                                    </a>
                                </nav>
                                <!-- NAVBAR -->

                                <!-- MAIN -->
                                <main>
                                    <div class="head-title">
                                        <div class="left">
                                            <h1>Dashboard</h1>
                                        </div>

                                    </div>

                                </main>
                                <!-- MAIN -->
                            </section>
                            <!-- CONTENT -->
                            @yield('content')

                            <script src="script.js"></script>
                            </body>

                        @stack('after-content')
                    </div>
                </div>

                @stack('before-script')
                @include('includes.script')
                @stack('after-script')

</body>

</html>
