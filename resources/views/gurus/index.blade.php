@extends('layouts.admin')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4"><span class="text-muted fw-light">Guru /</span> Daftar</h4>
        <div class="card">
            <h5 class="card-header">Guru
                <a href="{{ route('guru.create') }}" class="btn btn-info" style="float: right">Tambah</a>
            </h5>
            <table class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Guru</th>
                            <th scope="col">No Telepon</th>
                            <th scope="col">Email</th>
                            <th scope="col">Nama Mapel</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($guru as $data)
                            <tr>
                                <th scope="row">{{ $no++ }}</th>
                                <td>{{ $data->nama_guru }}</td>
                                <td>{{ $data->telepon }}</td>
                                <td>{{ $data->email }}</td>
                                <td>{{ $data->mapel->mapel }}</td>
                                <form action="{{ route('guru.destroy', $data->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <td>
                                        <a href="{{ route('guru.edit', $data->id) }}" class="btn btn-success">Edit</a>
                                        <a href="{{ route('guru.show', $data->id) }}" class="btn btn-warning">Show</a>
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
