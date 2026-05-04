<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk — Unggul Rejeki</title>
    <link rel="icon" type="image/png" href="{{ asset('images/logo-.png') }}">
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=DM+Sans:wght@300;400;500&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        *,
        *::before,
        *::after {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        :root {
            --gold: #C9921A;
            --gold-light: #E8B84B;
            --gold-border: #E8C97A;
            --dark: #1C1C1C;
            --dark-mid: #2d2d2d;
            --gray: #6B6B6B;
            --gray-light: #A0A0A0;
            --border: #E2D9C8;
            --bg: #F9F6F0;
            --white: #FFFFFF;
            --input-bg: #FDFAF5;
        }

        body {
            min-height: 100vh;
            background-color: var(--bg);
            font-family: 'DM Sans', sans-serif;
            display: flex;
            align-items: stretch;
        }

        /* ===== LEFT PANEL ===== */
        .left-panel {
            width: 44%;
            background: var(--dark);
            position: relative;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            padding: 48px 52px;
            overflow: hidden;
        }

        .left-panel::before {
            content: '';
            position: absolute;
            inset: 0;
            background-image:
                repeating-linear-gradient(45deg, rgba(201, 146, 26, 0.04) 0px, rgba(201, 146, 26, 0.04) 1px, transparent 1px, transparent 40px),
                repeating-linear-gradient(-45deg, rgba(201, 146, 26, 0.04) 0px, rgba(201, 146, 26, 0.04) 1px, transparent 1px, transparent 40px);
            pointer-events: none;
        }

        .left-panel::after {
            content: '';
            position: absolute;
            bottom: -100px;
            left: -100px;
            width: 450px;
            height: 450px;
            background: radial-gradient(circle, rgba(201, 146, 26, 0.1) 0%, transparent 70%);
            pointer-events: none;
        }

        .left-logo {
            position: relative;
            z-index: 2;
            display: flex;
            align-items: center;
            gap: 12px;
            text-decoration: none;
        }

        .logo-icon {
            width: 44px;
            height: 44px;
            background: var(--gold);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
        }

        .logo-name {
            display: block;
            font-family: 'Playfair Display', serif;
            font-size: 16px;
            font-weight: 700;
            color: #fff;
            letter-spacing: 0.05em;
            line-height: 1.1;
        }

        .logo-sub {
            display: block;
            font-size: 10px;
            letter-spacing: 0.2em;
            text-transform: uppercase;
            color: var(--gold-light);
            font-weight: 300;
            margin-top: 2px;
        }

        .left-center {
            position: relative;
            z-index: 2;
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 48px 0;
        }

        /* Vault animation */
        .vault-wrap {
            width: 130px;
            height: 130px;
            margin-bottom: 36px;
            position: relative;
        }

        .vault-ring {
            width: 130px;
            height: 130px;
            border-radius: 50%;
            border: 1.5px solid rgba(201, 146, 26, 0.35);
            position: absolute;
            animation: spin 30s linear infinite;
        }

        .vault-ring::before {
            content: '';
            position: absolute;
            inset: 12px;
            border-radius: 50%;
            border: 1px dashed rgba(201, 146, 26, 0.2);
        }

        @keyframes spin {
            to {
                transform: rotate(360deg);
            }
        }

        .vault-core {
            width: 68px;
            height: 68px;
            background: rgba(201, 146, 26, 0.1);
            border: 2px solid var(--gold);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 26px;
            box-shadow: 0 0 30px rgba(201, 146, 26, 0.2);
            animation: counterSpin 30s linear infinite;
        }

        @keyframes counterSpin {
            to {
                transform: translate(-50%, -50%) rotate(-360deg);
            }
        }

        .left-headline {
            font-family: 'Playfair Display', serif;
            font-size: 32px;
            font-weight: 700;
            color: #fff;
            line-height: 1.3;
            margin-bottom: 16px;
        }

        .left-headline em {
            font-style: normal;
            color: var(--gold-light);
        }

        .left-desc {
            font-size: 14px;
            color: rgba(255, 255, 255, 0.45);
            line-height: 1.75;
            font-weight: 300;
            max-width: 300px;
        }

        /* Stats */
        .left-stats {
            position: relative;
            z-index: 2;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            border-top: 1px solid rgba(255, 255, 255, 0.08);
            padding-top: 28px;
        }

        .stat-item {
            text-align: center;
            padding: 0 8px;
            border-right: 1px solid rgba(255, 255, 255, 0.08);
        }

        .stat-item:last-child {
            border-right: none;
        }

        .stat-num {
            display: block;
            font-family: 'Playfair Display', serif;
            font-size: 20px;
            font-weight: 700;
            color: var(--gold-light);
        }

        .stat-label {
            display: block;
            font-size: 8.5px;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            color: rgba(255, 255, 255, 0.3);
            margin-top: 4px;
        }

        /* ===== RIGHT PANEL ===== */
        .right-panel {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 60px 48px;
            background: var(--white);
            position: relative;
        }

        .right-panel::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: linear-gradient(to right, var(--gold), var(--gold-light), var(--gold));
        }

        .form-box {
            width: 100%;
            max-width: 380px;
            animation: slideIn 0.7s cubic-bezier(0.16, 1, 0.3, 1) both;
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateX(20px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            font-size: 10px;
            letter-spacing: 0.3em;
            text-transform: uppercase;
            color: var(--gold);
            font-weight: 500;
            margin-bottom: 12px;
        }

        .eyebrow::before {
            content: '';
            width: 22px;
            height: 1.5px;
            background: var(--gold);
        }

        .form-title {
            font-family: 'Playfair Display', serif;
            font-size: 34px;
            font-weight: 700;
            color: var(--dark);
            line-height: 1.2;
            margin-bottom: 8px;
        }

        .form-sub {
            font-size: 14px;
            color: var(--gray);
            font-weight: 300;
            margin-bottom: 36px;
        }

        /* Alert */
        .alert {
            background: #FEF2F2;
            border: 1px solid #FECACA;
            border-left: 3px solid #EF4444;
            color: #B91C1C;
            padding: 12px 16px;
            font-size: 13px;
            border-radius: 8px;
            margin-bottom: 24px;
        }

        /* Fields */
        .field {
            margin-bottom: 20px;
        }

        .field label {
            display: block;
            font-size: 11px;
            font-weight: 500;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            color: var(--dark-mid);
            margin-bottom: 8px;
        }

        .field-wrap {
            position: relative;
        }

        .field-icon {
            position: absolute;
            left: 14px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 15px;
            opacity: 0.3;
            pointer-events: none;
            transition: opacity 0.2s;
        }

        .field-wrap:focus-within .field-icon {
            opacity: 0.6;
        }

        input[type="email"],
        input[type="password"],
        input[type="text"] {
            width: 100%;
            background: var(--input-bg);
            border: 1.5px solid var(--border);
            border-radius: 8px;
            color: var(--dark);
            font-family: 'DM Sans', sans-serif;
            font-size: 14px;
            padding: 13px 16px 13px 44px;
            outline: none;
            transition: border-color 0.2s, box-shadow 0.2s, background 0.2s;
        }

        input:-webkit-autofill {
            -webkit-box-shadow: 0 0 0 30px var(--input-bg) inset !important;
            -webkit-text-fill-color: var(--dark) !important;
        }

        input::placeholder {
            color: var(--gray-light);
        }

        input:focus {
            border-color: var(--gold);
            background: #fff;
            box-shadow: 0 0 0 3px rgba(201, 146, 26, 0.1);
        }

        .field-meta {
            display: flex;
            justify-content: flex-end;
            margin-top: 7px;
        }

        .forgot {
            font-size: 12px;
            color: var(--gold);
            text-decoration: none;
            font-weight: 500;
            transition: color 0.2s;
        }

        .forgot:hover {
            color: var(--dark);
        }

        /* Button */
        .btn-masuk {
            width: 100%;
            padding: 15px;
            margin-top: 6px;
            background: var(--gold);
            border: none;
            border-radius: 8px;
            color: #fff;
            font-family: 'DM Sans', sans-serif;
            font-size: 14px;
            font-weight: 500;
            letter-spacing: 0.06em;
            cursor: pointer;
            transition: background 0.25s, box-shadow 0.25s, transform 0.15s;
            box-shadow: 0 4px 18px rgba(201, 146, 26, 0.3);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }

        .btn-masuk:hover {
            background: #b8841a;
            box-shadow: 0 6px 24px rgba(201, 146, 26, 0.4);
            transform: translateY(-1px);
        }

        .btn-masuk:active {
            transform: translateY(0);
        }

        /* Divider */
        .or-line {
            display: flex;
            align-items: center;
            gap: 14px;
            margin: 26px 0;
            color: var(--gray-light);
            font-size: 12px;
            letter-spacing: 0.1em;
        }

        .or-line::before,
        .or-line::after {
            content: '';
            flex: 1;
            height: 1px;
            background: var(--border);
        }

        .register-line {
            text-align: center;
            font-size: 13px;
            color: var(--gray);
        }

        .register-line a {
            color: var(--gold);
            font-weight: 500;
            text-decoration: none;
            transition: color 0.2s;
        }

        .register-line a:hover {
            color: var(--dark);
        }

        /* Stagger */
        .eyebrow {
            animation: fadeUp 0.55s 0.10s both;
        }

        .form-title {
            animation: fadeUp 0.55s 0.18s both;
        }

        .form-sub {
            animation: fadeUp 0.55s 0.24s both;
        }

        .field {
            animation: fadeUp 0.55s 0.30s both;
        }

        .field+.field {
            animation-delay: 0.37s;
        }

        .btn-masuk {
            animation: fadeUp 0.55s 0.44s both;
        }

        .or-line {
            animation: fadeUp 0.55s 0.50s both;
        }

        .register-line {
            animation: fadeUp 0.55s 0.55s both;
        }

        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(14px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @media (max-width: 768px) {
            body {
                flex-direction: column;
            }

            .left-panel {
                width: 100%;
                padding: 32px 28px;
            }

            .vault-wrap {
                display: none;
            }

            .left-headline {
                font-size: 24px;
            }

            .left-desc {
                display: none;
            }

            .right-panel {
                padding: 40px 24px;
            }
        }

        .toggle-pass {
            position: absolute;
            right: 14px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            font-size: 16px;
            color: var(--gray);
            opacity: 0.7;
            z-index: 3;
        }

        .toggle-pass:hover {
            opacity: 1;
        }
    </style>
</head>

<body>

    <!-- LEFT PANEL -->
    <div class="left-panel">
        <a href="{{ url('/') }}" class="left-logo">
            <div class="logo-icon">🔐</div>
            <div>
                <span class="logo-name">UNGGUL REJEKI</span>
                <span class="logo-sub">Brankas &amp; Keamanan</span>
            </div>
        </a>

        <div class="left-center">
            <div class="vault-wrap">
                <div class="vault-ring"></div>
                <div class="vault-core">🔒</div>
            </div>
            <h2 class="left-headline">
                Keamanan Aset<br>
                <em>Terpercaya</em><br>
                Sejak 12 Tahun Lalu
            </h2>
            <p class="left-desc">
                Masuk ke akun Anda untuk mengakses layanan pembelian, servis, dan pemantauan brankas Unggul Rejeki.
            </p>
        </div>

        <div class="left-stats">
            <div class="stat-item">
                <span class="stat-num">12+</span>
                <span class="stat-label">Tahun</span>
            </div>
            <div class="stat-item">
                <span class="stat-num">50+</span>
                <span class="stat-label">Model</span>
            </div>
            <div class="stat-item">
                <span class="stat-num">1.000+</span>
                <span class="stat-label">Klien</span>
            </div>
            <div class="stat-item">
                <span class="stat-num">24/7</span>
                <span class="stat-label">Support</span>
            </div>
        </div>
    </div>

    <!-- RIGHT PANEL -->
    <div class="right-panel">
        <div class="form-box">

            <div class="eyebrow">Selamat Datang Kembali</div>
            <h1 class="form-title">Masuk ke<br>Akun Anda</h1>
            <p class="form-sub">Silakan isi email dan password Anda di bawah ini</p>

            @if(session('error'))
                <div class="alert">{{ session('error') }}</div>
            @endif

            <form method="POST" action="{{ route('login.process') }}">
                @csrf

                <div class="field">
                    <label for="email">Alamat Email</label>
                    <div class="field-wrap">
                        <span class="field-icon">✉️</span>
                        <input type="email" id="email" name="email" placeholder="contoh@email.com"
                            value="{{ old('email') }}">
                    </div>
                </div>

                <div class="field">
                    <label for="password">Password</label>
                    <div class="field-wrap">
                        <span class="field-icon">🔑</span>
                        <input type="password" id="password" name="password" placeholder="Masukkan password Anda">

                        <span class="toggle-pass" onclick="togglePassword('password', this)">
                            <i class="bi bi-eye"></i>
                        </span>
                    </div>
                    <div class="field-meta">
                        <a href="{{ route('password.request') }}" class="forgot">Lupa password?</a>
                    </div>
                </div>

                <button type="submit" class="btn-masuk">
                    Masuk Sekarang &nbsp;→
                </button>
            </form>

            <div class="or-line">atau</div>

            <p class="register-line">
                Belum memiliki akun?
                <a href="{{ route('auth.registrasi') }}">Daftar di sini</a>
            </p>

        </div>
    </div>
    <script>
        function togglePassword(id, el) {
            const input = document.getElementById(id);

            if (input.type === "password") {
                input.type = "text";
                el.innerHTML = '<i class="bi bi-eye-slash"></i>';
            } else {
                input.type = "password";
                el.innerHTML = '<i class="bi bi-eye"></i>';
            }
        }
    </script>
</body>

</html>