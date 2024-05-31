@extends('layouts.admin')
@section('content')
    {{-- CONTENT --}}
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-12">
                <h4 class="py-3 mb-4"><span class="text-muted fw-light">Artikel /</span> Ubah</h4>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <form action="{{ route('artikel.update', $artikel->id) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="mb-3">
                                            <label class="form-label">Judul</label>
                                            <input type="text" class="form-control" name="judul"
                                                value="{{ $artikel->judul }}">
                                        </div>
                                        <div class="mb-3">
                                            <div class="form">
                                                <label for="floatingTextarea">Isi</label>
                                                <textarea class="form-control" name="isi" id="floatingTextarea">{{ $artikel->isi }}</textarea>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Sampul</label><br>
                                            <img src="{{ asset('images/artikel/' . $artikel->sampul) }}" width="100">
                                            <input type="file" class="form-control" name="sampul">
                                        </div>
                                        <div class="mb-3">
                                            <button type="submit" class="btn btn-primary">Ubah</button>
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
