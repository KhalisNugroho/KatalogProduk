<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex align-items-center justify-content-center" style="height:100vh; background:#f7f2e8;">

<div class="card p-4 shadow" style="width:350px; border-radius:15px;">
    <h4 class="text-center mb-3">Daftar</h4>
    <form>
        <div class="form-group">
            <label>Nama</label>
            <input type="text" class="form-control" placeholder="Nama lengkap">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" placeholder="Email">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" placeholder="Password">
        </div>
        <button class="btn btn-dark btn-block">Daftar</button>
    </form>

    <p class="text-center mt-3 mb-0">
        Sudah punya akun? <a href="{{ route('login') }}">Masuk</a>
    </p>
</div>

</body>
</html>