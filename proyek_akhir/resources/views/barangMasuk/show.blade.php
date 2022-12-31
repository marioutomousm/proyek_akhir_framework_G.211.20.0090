@extends('layout.main')

@section('judul')
    Edit Tambah Barang barang Masuk
@endsection

@section('isi')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <div class="col-lg-8 mt-3">
                            <form action="{{ url('/barangMasuk/store') }}" method="POST">
                                {{-- @method('PUT') --}}
                                @csrf
                                <div class="form-group">
                                    <label>Nama Barang</label>
                                    <input type="text" name="nama_barang" class="form-control"
                                        value="{{ $barangMasuk->nama_barang}}">
                                    @foreach ($errors->get('nama_barang') as $msg)
                                        <p class="text-danger">{{ $msg }}</p>
                                    @endforeach

                                </div>
                                <div class="form-group">
                                    <label>Kode Barang</label>
                                    <input type="text" name="kode_barang" class="form-control"
                                        v value="{{ $barangMasuk->kode_barang }}"> >
                                    @foreach ($errors->get('kode_barang') as $msg)
                                        <p class="text-danger">{{ $msg }}</p>
                                    @endforeach

                                </div>
                                <div class="form-group">
                                    <label>Jumlah Barang</label>
                                    <input type="text" name="jumlah_barang" class="form-control"
                                    value="{{ $barangMasuk->jumlah_barang }}">></input>
                                    @foreach ($errors->get('jumlah_barang') as $msg)
                                        <p class="text-danger">{{ $msg }}</p>
                                    @endforeach

                                </div>
                                <div class="form-group">
                                    <label>Toko</label>
                                    <select name="toko" class="form-control"  value="{{ $barangMasuk->toko }}">>
                                        <option value="">--Pilih--</option>
                                        @foreach ($tokos as $item)
                                            <option value="{{ $item->nama_toko }}">
                                                {{ $item->nama_toko }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @foreach ($errors->get('toko') as $msg)
                                        <p class="text-danger">{{ $msg }}</p>
                                    @endforeach
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Masuk</label>
                                    <input type="date" name="tanggal_masuk" class="form-control"  value="{{ $barangMasuk->tanggal_masuk }}">>
                                </div>

                                <div class="form-groub mt-2">
                                    <a href="{{ url('/barangMasuk/daftarBarang') }}" class="btn btn-danger"> Kembali </a>
                                    <button type="submit" class="btn btn-info"> Simpan </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
