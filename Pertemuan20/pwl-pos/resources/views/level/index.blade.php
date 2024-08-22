@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Daftar Level Pengguna</h3>
            <div class="card-tools">
                <a href="{{ url('level/create') }}" class="btn btn-primary btn-sm">
                    <i class="fas fa-plus">Tambah</i></a>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-sm table-striped table-hover" 
            id="data-level">
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

{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DB Facade</title>
</head>

<body>
    <h1>data level pengguna</h1>
    <table border="1" cellpadding="2" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Kode Level</th>
            <th>Nama Level</th>
        </tr>
        @foreach ($data as $d)
            <tr>
                <td>{{ $d->level_id }}</td>
                <td>{{ $d->level_kode }}</td>
                <td>{{ $d->level_nama }}</td>
            </tr>
        @endforeach
    </table>
</body>

</html> --}}
