@extends('layout.main')

@section('judul')
    Daftar Barang Keluar
@endsection

@section('isi')
    <br />
    @if (Session::has('success'))
        <p class="alert alert-success d-flex align-items-center" role="alert">{{ Session::get('success') }}</p><br />
    @endif

    @if (Session::has('danger'))
        <p class="alert alert-danger d-flex align-items-center" role="alert">{{ Session::get('danger') }}</p><br />
    @endif
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                <div class="col-lg mt-1">
                    <a href="{{ url('barangKeluar/tambahBarangkeluar') }}" class="btn btn-primary">Tambah Barang </a>
                </div>
            </h3>

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
            <div class="card">
                <form class="d-flex" role="search" method="GET" action="{{ url('/barangKeluar/daftarBarang') }}">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="keyword">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>

                <div class="card-body">

                    <div class="col-lg mt-2">
                        <table class="table table-bordered">
                            <tr class="text-center">

                                <th>Nama Barang</th>
                                <th>Kode Barang</th>
                                <th>Jumlah Barang</th>
                                <th>Toko</th>
                                <th>Tanggal Keluar</th>
                                <th colspan="2">Action</th>

                            </tr>
                            @foreach ($barangKeluar as $dataBarangKeluar)
                                <tr>

                                    <td>{{ $dataBarangKeluar->nama_barang }}</td>
                                    <td>{{ $dataBarangKeluar->kode_barang }}</td>
                                    <td>{{ $dataBarangKeluar->jumlah_barang }}</td>
                                    <td>{{ $dataBarangKeluar->toko->nama_toko }}</td>
                                    <td>{{ $dataBarangKeluar->tanggal_masuk }}</td>
                                    <td class="center">
                                        <a href="{{ url('barangKeluars/' . $dataBarangKeluar->id . '/edit') }}"
                                            class="btn btn-warning btn-sm">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        <form action="{{ url('barangKeluars/' . $dataBarangKeluar->id) }}" method="POST"
                                            class="d-inline">
                                            @method('delete')
                                            @csrf
                                            <button class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                        <div class="col-lg-8 mt-3">
                            {{ $barangKeluar->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
        <!-- /.card-footer-->
    </div>
@endsection
