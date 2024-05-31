    @extends('layouts.admin')
    @section('content')
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="py-3 mb-4"><span class="text-muted fw-light">Ekstrakulikuler /</span> Tambah</h4>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col">
                                <div class="card">
                                    <div class="card-body">
                                        <form action="{{ route('eskul.store') }}" method="POST">
                                            @csrf
                                            <div class="mb-3">
                                                <label class="form-label">Nama Eskul</label>
                                                <input type="text" class="form-control" name="nama_eskul">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Deskripsi</label>
                                                <input type="text" class="form-control" name="isi">
                                            </div>
                                            <button type="submit" class="btn btn-primary">Tambah</button>
                                            <a href="{{ url('admin/eskul') }}" class="btn btn-danger">Kembali</a>
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
