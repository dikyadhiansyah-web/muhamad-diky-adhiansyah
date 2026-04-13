<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Pengguna</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f5f7fa;
        }
        .card {
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.1);
        }
        .table th {
            background-color: #4e73df;
            color: white;
        }
    </style>
</head>

<body>

<div class="container mt-5">

    <div class="card p-4">
        
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h3>📋 Data Pengguna</h3>
            <div>
                <a href="/pengguna/create" class="btn btn-primary">+ Tambah</a>
                <a href="/logout" class="btn btn-danger">Logout</a>
            </div>
        </div>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="table-responsive">
            <table class="table table-bordered table-hover text-center align-middle">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Created</th>
                        <th>Updated</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($data as $item)
                    <tr>
                        <td>{{ $item->id_pengguna }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->password }}</td>
                        <td>{{ $item->created_at }}</td>
                        <td>{{ $item->updated_at }}</td>
                        <td>
                            <a href="/pengguna/edit/{{ $item->id_pengguna }}" class="btn btn-warning btn-sm">
                                Edit
                            </a>
                            <a href="/pengguna/delete/{{ $item->id_pengguna }}" 
                               class="btn btn-danger btn-sm"
                               onclick="return confirm('Yakin ingin menghapus?')">
                               Hapus
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>

    </div>

</div>

</body>
</html>