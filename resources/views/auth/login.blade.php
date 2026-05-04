<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex align-items-center justify-content-center" style="height:100vh; background:#f7f2e8;">

<div class="card p-4 shadow" style="width:350px; border-radius:15px;">
    <h4 class="text-center mb-3">Login</h4>
    <form>
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" placeholder="Masukkan email">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" placeholder="Masukkan password">
        </div>
        <button class="btn btn-dark btn-block">Masuk</button>
    </form>

    <p class="text-center mt-3 mb-0">
        Belum punya akun? <a href="{{ route('register') }}">Daftar</a>
    </p>
</div>

</body>
</html>