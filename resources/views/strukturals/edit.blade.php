@extends('layouts.admin')
@section('content')
    {{-- CONTENT --}}
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-12">
                <h4 class="py-3 mb-4"><span class="text-muted fw-light">Struktural /</span> Ubah</h4>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <form action="{{ route('struktural.update', $struktural->id) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="mb-3">
                                            <label>Nama Guru</label>
                                            <select name="id_guru" class="form-control">
                                                @foreach ($guru as $data)
                                                    <option value="{{ $data->id }}"
                                                        {{ $data->id == $struktural->id_guru ? 'selected' : '' }}>
                                                        {{ $data->nama_guru }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label>Jabatan</label>
                                            <select name="id_jabatan" class="form-control">
                                                @foreach ($jabatan as $data)
                                                    <option value="{{ $data->id }}"
                                                        {{ $data->id == $struktural->id_jabatan ? 'selected' : '' }}>
                                                        {{ $data->jabatan }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                        <a href="{{ url('admin/struktural') }}" class="btn btn-danger">Kembali</a>
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
