@extends('layouts.app')

@section('pageTitle')
    Beranda
@endsection

@section('content')
    <div class="content-wrapper">
        <!-- /.content-header -->
        <div class="content-header">
            <!-- /. container-fluid -->
            <div class="container-fluid">
                <div class="row row__align-items-center">
                    <div class="col-sm-12">
                        <h1 class="m-0 text-dark">Data Table</h1>
                    </div>

                    <div class="col-12 mt-2 d-none d-lg-block">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#" target="_blank">Breadcrumb 1</a></li>
                            <li class="breadcrumb-item"><a href="#">Breadcrumb 2</a></li>
                            <li class="breadcrumb-item active">Breadcrumb Active</li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- /. container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- /.content -->
        <section class="content">
            <div class="container-fluid">

                <div class="card card-info">
                    <!-- /. card-header -->
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <h3 class="card-title">Table Jasa</h3>
                        </div>
                    </div>
                    <!-- /. card-header -->

                    <!-- /. card-body -->
                    <div class="card-body table-responsive">
                        <table class="table table-head-fixed table-striped" id="tableJasa">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kategori Jasa</th>
                                    <th>Nama</th>
                                    <th>Deskripsi</th>
                                    <th>File Gambar</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($jasa as $item)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td>{{ $item->kategori_jasa }}</td>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->deskripsi }}</td>
                                        <td>{{ $item->file_gambar }}</td>
                                        <td></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /. card-body -->
                </div>

            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection

@push('addon-scripts')
    <script>
        var datatable = $('#tableJasa').DataTable({
            processing: true,
            serverSide: true,
            ordering: true,
            ajax: "{{ url('') }}",
            columnDefs: [ {
                "searchable": false,
                "orderable": false,
                "targets": 0
            } ],
            order: [[ 1, 'asc' ]],
            columns: [
                {
                    data: 'id', name: 'id',
                    className: 'dt-center',
                },
                {
                    data: 'kategori_jasa', name: 'kategori_jasa',
                    className: 'dt-center',
                },
                {
                    data: 'nama', name: 'nama',
                },
                {
                    data: 'deskripsi', name: 'deskripsi',
                },
                {
                    data: 'file_gambar', name: 'file_gambar',
                },
                {
                    data: 'aksi', name: 'aksi',
                    orderable: false,
                    searcable: false,
                    className: 'dt-center'
                },
            ]
        });

        datatable.on( 'draw.dt', function () {
            var PageInfo = $('#tableJasa').DataTable().page.info();
                datatable.column(0, { page: 'current' }).nodes().each( function (cell, i) {
                    cell.innerHTML = i + 1 + PageInfo.start;
                } );
            });
    </script>
@endpush
