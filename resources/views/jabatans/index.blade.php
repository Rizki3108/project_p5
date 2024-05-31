@extends('layouts.admin')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4"><span class="text-muted fw-light">Jabatan /</span> Daftar</h4>
        <div class="card">
            <h5 class="card-header">Artikel
                <a href="{{ route('jabatan.create') }}" class="btn btn-info" style="float: right">Tambah</a>
            </h5>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Jabatan</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($jabatan as $data)
                            <tr>
                                <th scope="row">{{ $no++ }}</th>
                                <td>{{ $data->jabatan }}</td>
                                <form action="{{ route('jabatan.destroy', $data->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <td class="center">
                                        <a href="{{ route('jabatan.edit', $data->id) }}" class="btn btn-success">Edit</a>
                                        <a href="{{ route('jabatan.show', $data->id) }}" class="btn btn-warning">Show</a>
                                        <button type="submit" class="btn btn-danger"
                                            onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Hapus</button>
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

<!-- jQuery -->
<script src="{{ asset('../admin/js/jquery.min.js') }}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{ asset('../admin/js/bootstrap.min.js') }}"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="{{ asset('../admin/js/metisMenu.min.js') }}"></script>

<!-- Morris Charts JavaScript -->
<script src="{{ asset('../admin/js/raphael.min.js') }}"></script>
<script src="{{ asset('../admin/js/morris.min.js') }}"></script>
<script src="{{ asset('../admin/js/morris-data.js') }}"></script>

<!-- Custom Theme JavaScript -->
<script src="{{ asset('../admin/js/startmin.js') }}"></script>

</body>

</html>
