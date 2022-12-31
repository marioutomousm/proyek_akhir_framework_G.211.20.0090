@extends('layout.main')

@section('judul')
    Daftar Barang Masuk
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
                    <a href="{{ url('barangMasuk/tambahBarangMasuk') }}" class="btn btn-primary">Tambah Barang </a>
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
                <form class="d-flex" role="search" method="GET" action="{{ url('/barangMasuk/daftarBarang') }}">
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
                                <th>Tanggal Masuk</th>
                                <th colspan="2">Action</th>

                            </tr>
                            @foreach ($barangMasuk as $dataBarangMasuk)
                                <tr>

                                    <td>{{ $dataBarangMasuk->nama_barang }}</td>
                                    <td>{{ $dataBarangMasuk->kode_barang }}</td>
                                    <td>{{ $dataBarangMasuk->jumlah_barang }}</td>
                                    {{-- <td>{{ $dataBarangMasuk->toko_id }}</td> --}}
                                    <td>{{ $dataBarangMasuk->toko->nama_toko }}</td>
                                    <td>{{ $dataBarangMasuk->tanggal_masuk }}</td>
                                    <td class="center">
                                        <a href="{{ url('barangMasuks/' . $dataBarangMasuk->id . '/edit') }}"
                                            class="btn btn-warning btn-sm">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        {{-- <a href="{{ url('barangMasuk/' . $dataBarangMasuk->id) }}"
                                            class="btn btn-eye btn-warning">View</a> --}}
                                        {{-- <a href="{{ url('barangMasuks' . $dataBarangMasuk->id) }}"
                                            class="btn btn-danger">
                                            @method(delete)
                                            @csrf
                                            Delete
                                        </a> --}}

                                        <form action="{{ url('barangMasuks/'.$dataBarangMasuk->id) }}" method="POST" class="d-inline">
                                            @method('delete')
                                            @csrf
                                            <button class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash"></i>
                                            </button>

                                        </form>

                                    </td>
                                    {{-- <td>
                                        <a href="{{ url('/toko/destroy/' . $dataToko->id) }}" class="btn btn-danger">Delete</a>
                                    </td> --}}
                                </tr>
                            @endforeach
                        </table>
                        <div class="col-lg-8 mt-3">
                            {{ $barangMasuk->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
        <!-- /.card-footer-->
    </div>
@endsection
