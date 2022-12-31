@extends('layout.main')

@section('judul')
    User Info
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
            {{-- <h3 class="card-title">
                <div class="col-lg mt-1">
                    @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="btn btn-warning">Register </a>
                    @endif
                </div>
            </h3> --}}

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
                <div class="card-body">

                    <div class="col-lg mt-2">
                        <table class="table table-bordered">
                            <tr class="text-center">

                                <th>Nama User</th>
                                <th>Email</th>
                                {{-- <th >Action</th> --}}

                            </tr>
                            @foreach ($users as $dataUser)
                                <tr>

                                    <td>{{ $dataUser->name }}</td>
                                    <td>{{ $dataUser->email }}</td>
                                    {{-- <td class="center">
                                        <form action="{{ url('#') }}" method="POST"
                                            class="d-inline">
                                            @method('delete')
                                            @csrf
                                            <button class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
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
