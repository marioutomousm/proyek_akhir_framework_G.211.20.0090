@extends('layout.main')

@section('judul')
    Edit Daftar Toko
@endsection

@section('isi')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <div class="col-lg-8 mt-3">
                            {{-- <form action="{{ url('daftarTokos/'.$toko->id) }}" method="POST"> --}}
                            <form action="{{ url('tokos/'.$toko->id) }}" method="POST">
                            @method('PUT')
                                @csrf
                                <div class="form-group">
                                    <label>Nama Toko</label>
                                    <input type="text" name="nama_toko" class="form-control"
                                        value="{{old('nama_toko', $toko->nama_toko) }}" autofocus>
                                    @foreach ($errors->get('nama_toko') as $msg)
                                        <p class="text-danger">{{ $msg }}</p>
                                    @endforeach
                                </div>
                                <div class="form-group">
                                    <label>Kepala Toko</label>
                                    <input type="text" name="kepala_toko" class="form-control"
                                        value="{{ old('kepala_toko', $toko->kepala_toko) }}">
                                    @foreach ($errors->get('kepala_toko') as $msg)
                                        <p class="text-danger">{{ $msg }}</p>
                                    @endforeach

                                </div>
                                <div class="form-group">
                                    <label>Jumlah Pekerja</label>
                                    <input type="text" name="jumlah_pekerja" class="form-control"
                                        value="{{ old('jumlah_pekerja', $toko->jumlah_pekerja) }}"></input>
                                    @foreach ($errors->get('jumlah_pekerja') as $msg)
                                        <p class="text-danger">{{ $msg }}</p>
                                    @endforeach

                                </div>
                                <div class="form-group">
                                    <label>alamat</label>
                                    <textarea type="text" name="alamat" class="form-control">{{ old('alamat', $toko->alamat) }}</textarea>
                                    @foreach ($errors->get('alamat') as $msg)
                                        <p class="text-danger">{{ $msg }}</p>
                                    @endforeach
                                </div>
                                <div class="form-group">
                                    <label>Kota</label>
                                    <input type="text" name="kota" class="form-control"
                                        value="{{ old('kota', $toko->kota) }}">
                                    @foreach ($errors->get('kota') as $msg)
                                        <p class="text-danger">{{ $msg }}</p>
                                    @endforeach
                                </div>

                                <div class="form-groub mt-2">
                                    <a href="{{ url('/toko/daftarToko') }}" class="btn btn-danger"> Kembali </a>
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
