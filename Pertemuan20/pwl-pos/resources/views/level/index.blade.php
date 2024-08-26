@extends('layouts.template')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">{{ $page->title }}</h3>
            <div class="card-tools">
                <a href="{{ url('level/create') }}" class="btn btn-primary btn-sm">
                    <i class="fas fa-plus">Tambah</i></a>
            </div>
        </div>
        <div class="card-body">
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif
            <table class="table table-bordered table-sm table-striped table-hover" id="data-level">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Kode Level</th>
                        <th>Nama Level</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
@endsection

@push('css')
@endpush

@push('js')
    <script>
        $(document).ready(function() {
            var dataUser = $('#table_level').DataTable({
                // serverSide: true, jika ingin menggunakan server side processing
                serverSide: true,
                ajax: {
                    "url": "{{ url('level/list') }}",
                    "dataType": "json",
                    "type": "POST",
                },
                columns: [{
                    // nomor urut dari laravel datatable addIndexColumn()
                    data: "DT_RowIndex",
                    className: "text-center",
                    orderable: false,
                    searchable: false
                }, {
                    data: "level_kode",
                    className: "",
                    // orderable: true, jika ingin kolom ini bisa diurutkan
                    orderable: true,
                    // searchable: true, jika ingin kolom ini bisa dicari
                    searchable: true
                }, {
                    // mengambil data level hasil dari ORM berelasi
                    data: "level_nama",
                    className: "",
                    orderable: false,
                    searchable: false
                }, {
                    data: "aksi",
                    className: "",
                    orderable: false,
                    searchable: false
                }]
            });
            // $('#level_id').on('change', function() {
            //     dataUser.ajax.reload();
            // });
        });
    </script>
@endpush
{{-- <!DOCTYPE html>
// <html lang="en">

// <head>
//     <meta charset="UTF-8">
//     <meta name="viewport" content="width=device-width, initial-scale=1.0">
//     <meta http-equiv="X-UA-Compatible" content="ie=edge">
//     <title>DB Facade</title>
// </head>

// <body>
//     <h1>data level pengguna</h1>
//     <table border="1" cellpadding="2" cellspacing="0">
//         <tr>
//             <th>ID</th>
//             <th>Kode Level</th>
//             <th>Nama Level</th>
//         </tr>
//         @foreach ($data as $d)
//             <tr>
//                 <td>{{ $d->level_id }}</td>
//                 <td>{{ $d->level_kode }}</td>
//                 <td>{{ $d->level_nama }}</td>
//             </tr>
//         @endforeach
//     </table>
// </body>

// </html> --}}
