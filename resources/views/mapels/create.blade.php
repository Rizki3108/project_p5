    @extends('layouts.admin')
    @section('content')
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="py-3 mb-4"><span class="text-muted fw-light">Mata Pelajaran /</span> Tambah</h4>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col">
                                <div class="card">
                                    <div class="card-body">
                                        <form action="{{ route('mapel.store') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="mb-3">
                                                <label class="form-label">Mata Pelajaran</label>
                                                <input type="text" class="form-control" name="mapel"
                                                    placeholder="Mata Pelajaran">
                                            </div>
                                            <button type="submit" class="btn btn-primary">Tambah</button>
                                            <a href="{{ route('mapel.index') }}" class="btn btn-danger">Kembali</a>
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