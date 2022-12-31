@extends('layout.main')

@section('judul')
    Daftar Barang Masuk
@endsection

@section('isi')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                <div class="col-lg mt-1">
                    <a href="{{ url('toko/tambahbarangmsk') }}" class="btn btn-primary">Tambah Barang </a>
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
                <form class="d-flex" role="search" method="GET" action="{{ url('/dashboard') }}">
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
                            @foreach ($data as $dataToko)
                                <tr>

                                    <td>{{ $dataToko->nama_barang }}</td>
                                    <td>{{ $dataToko->kode_barang }}</td>
                                    <td>{{ $dataToko->jumlah_barang }}</td>
                                    <td>{{ $dataToko->toko }}</td>
                                    <td>{{ $dataToko->tanggal_masuk }}</td>
                                    <td class="center">
                                        <a href="{{ url('toko/show/' . $dataToko->id) }}" class="btn btn-warning">Edit</a>
                                        <a href="{{ url('/toko/destroy/' . $dataToko->id) }}" class="btn btn-danger">Delete</a>
                                    </td>
                                    {{-- <td>
                                        <a href="{{ url('/toko/destroy/' . $dataToko->id) }}" class="btn btn-danger">Delete</a>
                                    </td> --}}
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
        <!-- /.card-footer-->
    </div>
@endsection
