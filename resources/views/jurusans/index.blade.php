@extends('layouts.admin')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4"><span class="text-muted fw-light">Jurusan /</span> Daftar</h4>
        <div class="card">
            <h5 class="card-header">Jurusan
                <a href="{{ route('jurusan.create') }}" class="btn btn-info" style="float: right">Tambah</a>
            </h5>
            <table class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Kaprog</th>
                            <th scope="col">Jurusan</th>
                            <th scope="col">Sampul</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($jurusan as $data)
                            <tr>
                                <th scope="row">{{ $no++ }}</th>
                                <td>{{ $data->kaprog }}</td>
                                <td>{{ $data->nama_jurusan }}</td>
                                <td>
                                    <img src="{{ asset('/images/jurusan/' . $data->sampul) }}" width="100">
                                </td>
                                <form action="{{ route('jurusan.destroy', $data->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <td>
                                        <a href="{{ route('jurusan.edit', $data->id) }}" class="btn btn-success">Edit</a>
                                        <a href="{{ route('jurusan.show', $data->id) }}" class="btn btn-warning">Show</a>
                                        <button type="submit" class="btn btn-danger"
                                            onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">
                                            Hapus
                                        </button>
                                    </td>
                                </form>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </table>
        </div>
    </div>
@endsection
