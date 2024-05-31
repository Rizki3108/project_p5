    @extends('layouts.admin')
    @section('content')
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="py-3 mb-4"><span class="text-muted fw-light">Guru /</span> Tambah</h4>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col">
                                <div class="card">
                                    <div class="card-body">
                                        <form action="{{ route('guru.store') }}" method="POST">
                                            @csrf
                                            <div class="form-group">
                                                <div class="mb-3">
                                                    <label>Nama Guru</label>
                                                    <input type="text" class="form-control" name="nama_guru" placeholder="Nama Guru">
                                                </div>
                                                <div class="mb-3">
                                                    <label>No Telepon</label>
                                                    <input type="text" class="form-control" name="telepon" placeholder="No Telepon">
                                                </div>
                                                <div class="mb-3">
                                                    <label>Email Guru</label>
                                                    <input type="text" class="form-control" name="email" placeholder="Alamat Email">
                                                </div>
                                                <div class="mb-3">
                                                    <label>Guru Mapel</label>
                                                    <select name="id_mapel" class="form-control">
                                                        <option value="">Pilih Mapel</option>
                                                        @foreach ($mapel as $data)
                                                            <option value="{{ $data->id }}">
                                                                {{ $data->mapel }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Tambah</button>
                                            <a href="{{ url('admin/guru') }}" class="btn btn-danger">Kembali</a>
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