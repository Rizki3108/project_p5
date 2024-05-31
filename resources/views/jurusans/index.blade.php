<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Startmin - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('../admin/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{ asset('../admin/css/metisMenu.min.css') }}" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="{{ asset('../admin/css/timeline.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('../admin/css/startmin.css') }}" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{ asset('../admin/css/morris.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ asset('../admin/css/font-awesome.min.css') }}   " rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body>

    <div id="wrapper">
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">

            {{-- NAVBAR --}}
            @include('layouts.navbar')
            {{-- /NAVBAR --}}

            {{-- SIDEBAR --}}
            @include('layouts.sidebar')

            {{-- /SIDEBAR --}}
        </nav>

        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Data Struktural</h1>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Tabel Data Struktural
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="table-responsive">
                            <a href="{{ route('jurusan.create') }}" class="btn btn-primary">+ Tambah Data</a>
                            @if (session('success'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('success') }}
                                </div>
                            @endif
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>

                                    <tr>
                                        <th>No</th>
                                        <th>Nama Kaprog</th>
                                        <th>Jurusan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $no = 1;
                                    @endphp
                                    @foreach ($jurusan as $data)
                                        <tr class="odd gradeX">
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $data->kaprog }}</td>
                                            <td>{{ $data->nama_jurusan }}</td>
                                            <form action="{{ route('jurusan.destroy', $data->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <td class="center">
                                                    <a href="{{ route('jurusan.edit', $data->id) }}"
                                                        class="btn btn-success">Edit</a>
                                                    <a href="{{ route('jurusan.show', $data->id) }}"
                                                        class="btn btn-warning">Show</a>
                                                    <button type="submit" class="btn btn-danger"
                                                        onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Hapus</button>
                                                </td>
                                            </form>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.panel-body -->
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="{{ asset('../admin/js/jquery.min.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('../admin/js/bootstrap.min.js') }}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{ asset('../admin/js/metisMenu.min.js') }}"></script>

    <!-- Morris Charts JavaScript -->
    <script src="{{ asset('../admin/js/raphael.min.js') }}"></script>
    <script src="{{ asset('../admin/js/morris.min.js') }}"></script>
    <script src="{{ asset('../admin/js/morris-data.js') }}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('../admin/js/startmin.js') }}"></script>

</body>

</html>
