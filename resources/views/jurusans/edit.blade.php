@extends('layouts.admin')
@section('content')
    {{-- CONTENT --}}
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-12">
                <h4 class="py-3 mb-4"><span class="text-muted fw-light">Jurusan /</span> Ubah</h4>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <form action="{{ route('jurusan.update', $jurusan->id) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="mb-3">
                                            <label>Nama Kaprog</label>
                                            <input type="text" class="form-control" name="kaprog"
                                                value="{{ $jurusan->kaprog }}">
                                        </div>
                                        <div class="mb-3">
                                            <label>Nama Jurusan</label>
                                            <input type="text" class="form-control" name="nama_jurusan"
                                                value="{{ $jurusan->nama_jurusan }}">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                        <a href="{{ route('jurusan.index') }}" class="btn btn-danger">Kembali</a>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
        </div>
    </div>
@endsection