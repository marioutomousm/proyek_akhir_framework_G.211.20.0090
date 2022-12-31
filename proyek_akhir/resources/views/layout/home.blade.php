@extends('layout.main')

@section('judul')
    Dashboard
@endsection

@section('isi')
    <div class="card">
        <div class="card-header">

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <div class="card-body">

            <p>
                Selamat datang di website Sitem Informasi Toko-Ku.
                Pada Website Sitem Informasi Toko-Ku ini dibuat untuk mempermudah user dalam
                mengelola toko dan barang pada toko.


            </p>

        </div>
        {{-- <div class="card card-danger">
            <div class="card-header">
              <h3 class="card-title">Pie Chart</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <canvas id="pieChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
            </div>
          </div>
        </div> --}}


        {{-- <div class="card card-danger">
            <div class="card-header">
              <h3 class="card-title">Jumlah Barang Masuk dan Keluar</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <canvas id="pieChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
            </div>
          </div>
        </div> --}}

        <div class="card-body">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Jumlah Barang Masuk dan Keluar</div>
                    </div>
                    <div class="card-body">
                        <div class="chart-container">
                            <canvas id="doughnutChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="card-body">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title"> Barang Masuk dan Keluar Perbulan</div>
                    </div>
                    <div class="card-body">
                        <div class="chart-container">
                            <canvas id="barChart1"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    {{-- <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="../../plugins/chart.js/Chart.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script> --}}

    <script>
        const ctx = document.getElementById('doughnutChart');

        new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ['Barang Masuk', 'Barang Keluar'],
                datasets: [{
                    label: '# of Votes',
                    data: [{{ $barangMasuk }}, {{ $barangKeluar }}],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
    <script>
        const ctl1 = document.getElementById('barChart1');

        new barChart1(ctl1, {
            type: 'bar',
            data: {
                labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September',
                    'Oktober', 'November', 'Desember'
                ],
                datasets: [{
                        label: 'Barang Masuk',
                        data: [
                            {{ $barangMasuk_jan }},
                            {{ $barangMasuk_feb }},
                            {{ $barangMasuk_mar }},
                            {{ $barangMasuk_apr }},
                            {{ $barangMasuk_mei }},
                            {{ $barangMasuk_jun }},
                            {{ $barangMasuk_jul }},
                            {{ $barangMasuk_ags }},
                            {{ $barangMasuk_sep }},
                            {{ $barangMasuk_okt }},
                            {{ $barangMasuk_nov }},
                            {{ $barangMasuk_des }},
                        ],
                        borderWidth: 1
                    },
                    {
                        label: 'Barang Keluar',
                        data: [{{ $barangKeluar_jan }},
                            {{ $barangKeluar_feb }},
                            {{ $barangKeluar_mar }},
                            {{ $barangKeluar_apr }},
                            {{ $barangKeluar_mei }},
                            {{ $barangKeluar_jun }},
                            {{ $barangKeluar_jul }},
                            {{ $barangKeluar_ags }},
                            {{ $barangKeluar_sep }},
                            {{ $barangKeluar_okt }},
                            {{ $barangKeluar_nov }},
                            {{ $barangKeluar_des }},
                        ],
                        borderWidth: 1
                    },
                ]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>


    <script>
        // const char1 = document.getElementById('doughnutChart');

        // new char1(ctx, {
        // type: 'doughnut',
        // data: {
        // labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        // datasets: [{
        // label: '# of Votes',
        // data: [12, 19, 3, 5, 2, 3],
        // borderWidth: 1
        // }]
        // },
        // options: {
        // scales: {
        // y: {
        // beginAtZero: true
        // }
        // }
        // }
        // });



        // var donutChartCanvas = $('donutChart').get().getContext('2d')
        // var donutData = {
        // labels: [
        // 'Chrome',
        // 'IE',
        // 'FireFox',
        // 'Safari',
        // 'Opera',
        // 'Navigator',
        // ],
        // datasets: [{
        // data: [700, 500, 400, 600, 300, 100],
        // backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
        // }]
        // }
        // var donutOptions = {
        // maintainAspectRatio: false,
        // responsive: true,
        // }
        // //Create pie or douhnut chart
        // // You can switch between pie and douhnut using the method below.
        // new Chart(donutChartCanvas, {
        // type: 'doughnut',
        // data: donutData,
        // options: donutOptions
        // })
    </script>
@endsection
