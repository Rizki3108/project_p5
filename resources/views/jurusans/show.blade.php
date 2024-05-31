    @extends('layouts.admin')
    @section('content')
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="py-3 mb-4"><span class="text-muted fw-light">Artikel /</span> Detail</h4>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col">
                                <div class="card">
                                    <div class="card-body">
                                        <div action="{{ route('jurusan.store') }}" method="POST">
                                            @csrf
                                            <div class="mb-3">
                                                <label class="form-label">Nama Kaprog</label>
                                                <input type="text" class="form-control" name="kaprog"
                                                    value="{{ $jurusan->kaprog }}" disabled>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Nama Jurusan</label>
                                                <input type="text" class="form-control" name="jurusan"
                                                    value="{{ $jurusan->nama_jurusan }}" disabled>
                                            </div><br>
                                            <a href="{{ route('jurusan.index') }}" class="btn btn-danger">Kembali</a>
                                        </div>
                                        <!-- /.panel-body -->
                                    </div>
                                    <!-- /.panel -->
                                </div>
                                <!-- /.col-lg-12 -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
