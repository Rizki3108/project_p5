    @extends('layouts.admin')
    @section('content')
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="py-3 mb-4"><span class="text-muted fw-light">Artikel /</span> Tambah</h4>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col">
                                <div class="card">
                                    <div class="card-body">
                                        <form action="{{ route('artikel.store') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="mb-3">
                                                <label class="form-label">Judul</label>
                                                <input type="text" class="form-control" name="judul">
                                            </div>
                                            <div class="mb-3">
                                                <label for="floatingTextarea">Isi</label>
                                                <textarea class="form-control" name="isi" id="floatingTextarea"></textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Sampul</label>
                                                <input type="file" class="form-control" name="sampul">
                                            </div>

                                            <div class="mb-3">
                                                <button type="submit" class="btn btn-primary">Tambah</button>
                                                <a href="{{ url('admin/artikel') }}" class="btn btn-danger">Kembali</a>
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
