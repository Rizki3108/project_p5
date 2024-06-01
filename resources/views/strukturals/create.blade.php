@extends('layouts.admin')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-12">
                <h4 class="py-3 mb-4"><span class="text-muted fw-light">Struktural /</span> Add</h4>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <form action="{{ route('struktural.store') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="mb-3">
                                            <label class="form-label">Nama guru</label>
                                            <select name="id_guru" class="form-control">
                                                <option value=""></option>
                                                @foreach ($guru as $data)
                                                    <option value="{{ $data->id }}">
                                                        {{ $data->nama_guru }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Jabatan</label>
                                            <select name="id_jabatan" class="form-control">
                                                <option value=""></option>
                                                @foreach ($jabatan as $data)
                                                    <option value="{{ $data->id }}">
                                                        {{ $data->jabatan }}</option>
                                                @endforeach
                                            </select>

                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Sampul</label>
                                            <input type="file" class="form-control" name="sampul">
                                        </div>
                                        <div class="mb-3">
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                            <a href="{{ url('admin/struktural') }}" class="btn btn-danger">Kembali</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
