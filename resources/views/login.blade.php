<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

<h2>Login</h2>

@if(session('error'))
    <p style="color:red;">{{ session('error') }}</p>
@endif

<form method="POST" action="/login">
         @csrf

        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" placeholder="Masukkan email">
        </div>

        <div class="mb-3">
            <label>Password</label>
            <input type="password" name="password" class="form-control" placeholder="Masukkan password">
        </div>

        <button class="btn btn-primary btn-login">Login</button>
    </form>

</body>
</html>