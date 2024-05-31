@extends('layouts.admin')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4"><span class="text-muted fw-light">Artikel /</span> Daftar</h4>
        <div class="card">
            <h5 class="card-header">Artikel
                <a href="{{ route('artikel.create') }}" class="btn btn-sm btn-info" style="float: right">Tambah</a>
            </h5>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Judul</th>
                            <th scope="col">Isi</th>
                            <th scope="col">Sampul</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($artikel as $data)
                            <tr>
                                <th scope="row">{{ $no++ }}</th>
                                <td>{{ $data->judul }}</td>
                                <td>{{ $data->isi }}</td>
                                <td>
                                    <img src="{{ asset('/images/artikel/' . $data->sampul) }}" width="100">
                                </td>
                                <form action="{{ route('artikel.destroy', $data->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <td>
                                        <a href="{{ route('artikel.edit', $data->id) }}" class="btn btn-success">Edit</a>
                                        <a href="{{ route('artikel.show', $data->id) }}" class="btn btn-warning">Show</a>
                                        <button type="submit" class="btn btn-danger"
                                            onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')">
                                            Delete
                                        </button>
                                    </td>
                                </form>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
