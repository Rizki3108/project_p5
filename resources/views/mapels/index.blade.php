@extends('layouts.admin')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4"><span class="text-muted fw-light">Mata Pelajaran /</span> Daftar</h4>
        <div class="card">
            <h5 class="card-header">Mapel
                <a href="{{ route('mapel.create') }}" class="btn btn-info" style="float: right">Tambah</a>
            </h5>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Mapel</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($mapel as $data)
                            <tr>
                                <th scope="row">{{ $no++ }}</th>
                                <td>{{ $data->mapel }}</td>
                                <form action="{{ route('mapel.destroy', $data->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <td>
                                        <a href="{{ route('mapel.edit', $data->id) }}" class="btn btn-success">Edit</a>
                                        <a href="{{ route('mapel.show', $data->id) }}" class="btn btn-warning">Show</a>
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
            </div>
        </div>
    </div>
@endsection