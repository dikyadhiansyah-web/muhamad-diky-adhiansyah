<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Pengguna</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #43cea2, #185a9d);
            height: 100vh;
        }
        .card {
            width: 400px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
        }
    </style>
</head>
<body class="d-flex justify-content-center align-items-center">

<div class="card p-4">

    <h3 class="text-center mb-4">➕ Tambah Pengguna</h3>

    <form action="/pengguna/store" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input 
                type="text" 
                name="email" 
                class="form-control" 
                placeholder="Masukkan email">
        </div>

        <div class="mb-3">
            <label class="form-label">Password</label>
            <input 
                type="text" 
                name="password" 
                class="form-control" 
                placeholder="Masukkan password">
        </div>

        <button type="submit" class="btn btn-primary w-100">
            Simpan
        </button>

    </form>

</div>

</body>
</html>