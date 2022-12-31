@extends('layout.main')

@section('judul')
    Edit barang Keluar
@endsection

@section('isi')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <div class="col-lg-8 mt-3">
                            <form action="{{ url('barangKeluars/' . $barangKeluar->id) }}" method="POST">
                                @method('PUT')
                                @csrf
                                <div class="form-group">
                                    <label>Nama Barang</label>
                                    <input type="text" name="nama_barang" class="form-control"
                                        value="{{ old('nama_barang', $barangKeluar->nama_barang) }}" autofocus>
                                    @foreach ($errors->get('nama_barang') as $msg)
                                        <p class="text-danger">{{ $msg }}</p>
                                    @endforeach

                                </div>
                                <div class="form-group">
                                    <label>Kode Barang</label>
                                    <input type="text" name="kode_barang" class="form-control"
                                        value="{{ old('kode_barang', $barangKeluar->kode_barang) }}">
                                    @foreach ($errors->get('kode_barang') as $msg)
                                        <p class="text-danger">{{ $msg }}</p>
                                    @endforeach

                                </div>
                                <div class="form-group">
                                    <label>Jumlah Barang</label>
                                    <input type="text" name="jumlah_barang" class="form-control"
                                        value="{{ old('jumlah_barang', $barangKeluar->jumlah_barang) }}">
                                    @foreach ($errors->get('jumlah_barang') as $msg)
                                        <p class="text-danger">{{ $msg }}</p>
                                    @endforeach

                                </div>
                                <div class="form-group">
                                    <label>Toko</label>
                                    <select name="toko_id" class="form-control">
                                        <option value="">--Pilih--</option>
                                        @foreach ($tokos as $item)
                                            <option value="{{ $item->id }}"
                                                {{ old('toko_id', $barangKeluar->toko_id) == $item->id ? 'selected' : null }}>
                                                {{ $item->nama_toko }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @foreach ($errors->get('toko_id') as $msg)
                                        <p class="text-danger">{{ $msg }}</p>
                                    @endforeach
                                </div>
                                {{-- <div class="form-group">
                                    <label>Toko</label>
                                    <select name="toko_id" class="form-control">
                                        <option value="">--Pilih--</option>
                                        @foreach ($tokos as $item)
                                            <option value="{{ $item->nama_toko }}"
                                                {{ old('toko_id',$barangMasuk->toko_id) == $item->nama_toko ? 'selected' : null }}>
                                                {{ $item->nama_toko }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @foreach ($errors->get('toko_id') as $msg)
                                        <p class="text-danger">{{ $msg }}</p>
                                    @endforeach
                                </div> --}}
                                <div class="form-group">
                                    <label>Tanggal Masuk</label>
                                    <input type="date" name="tanggal_keluar" class="form-control"
                                        value="{{ old('tanggal_masuk', $barangKeluar->tanggal_keluar) }}">
                                </div>

                                <div class="form-groub mt-2">
                                    <a href="{{ url('/barangKeluar/daftarBarang') }}" class="btn btn-danger"> Kembali </a>
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
