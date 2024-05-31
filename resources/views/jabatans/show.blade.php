    @extends('layouts.admin')
    @section('content')
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="py-3 mb-4"><span class="text-muted fw-light">Jabatan  /</span> Detail</h4>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col">
                                <div class="card">
                                    <div class="card-body">
                                        <div action="{{ route('jabatan.store') }}" method="POST">
                                            @csrf
                                            <div class="mb-3">
                                                <label class="form-label">Jabatan</label>
                                                <input type="text" class="form-control" name="jabatan"
                                                    value="{{ $jabatan->jabatan }}" disabled>
                                            </div>
                                            <a href="{{ route('jabatan.index') }}" class="btn btn-danger">Kembali</a>
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
