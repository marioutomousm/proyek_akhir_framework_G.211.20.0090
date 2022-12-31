@extends('layout.main')

@section('judul')
    Edit Toko
@endsection

@section('isi')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <div class="col-lg-8 mt-3">
                            <form action="{{ url('/toko/update/' . $data->id) }}" method="POST">
                                @method('PUT')
                                @csrf
                                <div class="form-group">
                                    <label >Nama Toko</label>
                                    <input type="text" name="nama_toko" class="form-control" value="{{ $data->nama_toko }}">

                                </div>
                                <div class="form-group">
                                    <label >Kepala Toko</label>
                                    <input type="text" name="kepala_toko" class="form-control" value="{{ $data->kepala_toko }}">

                                </div>
                                <div class="form-group">
                                    <label >Jumlah Pekerja</label>
                                    <input type="text" name="jumlah_pekerja" class="form-control" value="{{ $data->jumlah_pekerja }}"></input>

                                </div>
                                <div class="form-group">
                                    <label >alamat</label>
                                    <textarea type="text" name="alamat" class="form-control">
                                       {{ $data->alamat }}
                                    </textarea>
                                </div>
                                <div class="form-group">
                                    <label >Kota</label>
                                    <input type="text" name="kota" class="form-control" value="{{ $data->kota }}">
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
