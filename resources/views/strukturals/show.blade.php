    @extends('layouts.admin')
    @section('content')
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="py-3 mb-4"><span class="text-muted fw-light">Struktural /</span> Detail</h4>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col">
                                <div class="card">
                                    <div class="card-body">
                                        <form action="{{ route('struktural.store') }}" method="POST">
                                            @csrf
                                            <div class="mb-3">
                                                <label class="form-label">ID Guru</label>
                                                <input type="text" class="form-control" name="id_guru"
                                                    value="{{ $struktural->id_guru }}" disabled>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">ID Jabatan</label>
                                                <input type="text" class="form-control" name="id_jabatan"
                                                    value="{{ $struktural->id_jabatan }}" disabled>
                                            </div>
                                            <a href="{{ route('struktural.index') }}" class="btn btn-danger">Kembali</a>
                                        </form>
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
    @endsection