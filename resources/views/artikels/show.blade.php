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
                                        <form action="{{ route('artikel.store') }}" method="POST">
                                            @csrf
                                            <div class="mb-3">
                                                <label class="form-label">Judul</label>
                                                <input type="text" class="form-control" name="id_guru"
                                                    value="{{ $artikel->judul }}" disabled>
                                            </div>
                                            <div class="mb-3">
                                                <label for="floatingTextarea2">Isi</label>
                                                <textarea class="form-control" name="isi" id="floatingTextarea2" disabled>{{ $artikel->isi }}</textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Sampul</label><br>
                                                <img src="{{ asset('/images/artikel/' . $artikel->sampul) }}"
                                                    width="100">
                                                </div>
                                                <a href="{{ url('admin/artikel') }}" class="btn btn-danger">Kembali</a>
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
