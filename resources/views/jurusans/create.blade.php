    @extends('layouts.admin')
    @section('content')
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="py-3 mb-4"><span class="text-muted fw-light">Jurusan /</span> Tambah</h4>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col">
                                <div class="card">
                                    <div class="card-body">
                                        <form action="{{ route('jurusan.store') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="mb-3">
                                                <label>Nama Kaprog</label>
                                                <input type="text" class="form-control" name="kaprog"
                                                    placeholder="Nama Kaprog">
                                            </div>
                                            <div class="mb-3">
                                                <label>Nama Jurusan</label>
                                                <input type="text" class="form-control" name="jurusan"
                                                    placeholder="Nama Jurusan">
                                            </div>
                                            <div class="mb-3">
                                                <button type="submit" class="btn btn-primary">Tambah</button>
                                                <a href="{{ url('admin/jurusan') }}" class="btn btn-danger">Kembali</a>
                                            </div>
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
