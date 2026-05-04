<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Akun — Unggul Rejeki</title>
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

        /* ===== RIGHT FORM PANEL (first this time) ===== */
        .form-panel {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 60px 48px;
            background: var(--white);
            position: relative;
            order: 1;
        }

        .form-panel::before {
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
            max-width: 400px;
            animation: slideInLeft 0.7s cubic-bezier(0.16, 1, 0.3, 1) both;
        }

        @keyframes slideInLeft {
            from {
                opacity: 0;
                transform: translateX(-20px);
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
            font-size: 32px;
            font-weight: 700;
            color: var(--dark);
            line-height: 1.2;
            margin-bottom: 8px;
        }

        .form-sub {
            font-size: 14px;
            color: var(--gray);
            font-weight: 300;
            margin-bottom: 32px;
        }

        /* Alerts */
        .alert {
            padding: 12px 16px;
            font-size: 13px;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .alert-danger {
            background: #FEF2F2;
            border: 1px solid #FECACA;
            border-left: 3px solid #EF4444;
            color: #B91C1C;
        }

        .alert-success {
            background: #F0FDF4;
            border: 1px solid #BBF7D0;
            border-left: 3px solid #22C55E;
            color: #166534;
        }

        /* Fields */
        .field {
            margin-bottom: 18px;
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

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            background: var(--input-bg);
            border: 1.5px solid var(--border);
            border-radius: 8px;
            color: var(--dark);
            font-family: 'DM Sans', sans-serif;
            font-size: 14px;
            padding: 13px 48px 13px 44px;
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

        /* Error text */
        .err {
            font-size: 12px;
            color: #EF4444;
            margin-top: 5px;
            display: block;
        }

        /* Password strength */
        .strength-wrap {
            margin-top: 8px;
        }

        .strength-bar {
            display: flex;
            gap: 4px;
            margin-bottom: 5px;
        }

        .seg {
            flex: 1;
            height: 3px;
            background: var(--border);
            border-radius: 2px;
            transition: background 0.3s;
        }

        .strength-hint {
            font-size: 11px;
            color: var(--gray-light);
            letter-spacing: 0.03em;
        }

        /* Terms note */
        .terms-note {
            font-size: 12px;
            color: var(--gray);
            margin-top: 14px;
            line-height: 1.5;
        }

        .terms-note a {
            color: var(--gold);
            text-decoration: none;
            font-weight: 500;
        }

        /* Button */
        .btn-daftar {
            width: 100%;
            padding: 15px;
            margin-top: 16px;
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
        }

        .btn-daftar:hover {
            background: #b8841a;
            box-shadow: 0 6px 24px rgba(201, 146, 26, 0.4);
            transform: translateY(-1px);
        }

        .btn-daftar:active {
            transform: translateY(0);
        }

        /* Login link */
        .or-line {
            display: flex;
            align-items: center;
            gap: 14px;
            margin: 24px 0;
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

        .login-line {
            text-align: center;
            font-size: 13px;
            color: var(--gray);
        }

        .login-line a {
            color: var(--gold);
            font-weight: 500;
            text-decoration: none;
            transition: color 0.2s;
        }

        .login-line a:hover {
            color: var(--dark);
        }

        /* ===== RIGHT BRANDING PANEL ===== */
        .brand-panel {
            width: 44%;
            background: var(--dark);
            position: relative;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            padding: 48px 52px;
            overflow: hidden;
            order: 2;
        }

        .brand-panel::before {
            content: '';
            position: absolute;
            inset: 0;
            background-image:
                repeating-linear-gradient(45deg, rgba(201, 146, 26, 0.04) 0px, rgba(201, 146, 26, 0.04) 1px, transparent 1px, transparent 40px),
                repeating-linear-gradient(-45deg, rgba(201, 146, 26, 0.04) 0px, rgba(201, 146, 26, 0.04) 1px, transparent 1px, transparent 40px);
            pointer-events: none;
        }

        .brand-panel::after {
            content: '';
            position: absolute;
            top: -100px;
            right: -100px;
            width: 450px;
            height: 450px;
            background: radial-gradient(circle, rgba(201, 146, 26, 0.1) 0%, transparent 70%);
            pointer-events: none;
        }

        .brand-logo {
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

        .brand-center {
            position: relative;
            z-index: 2;
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 48px 0;
        }

        /* Feature list */
        .features {
            display: flex;
            flex-direction: column;
            gap: 20px;
            margin-bottom: 40px;
        }

        .feat {
            display: flex;
            gap: 16px;
            align-items: flex-start;
        }

        .feat-icon {
            width: 40px;
            height: 40px;
            background: rgba(201, 146, 26, 0.12);
            border: 1px solid rgba(201, 146, 26, 0.25);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
            flex-shrink: 0;
        }

        .feat-text {
            flex: 1;
        }

        .feat-title {
            display: block;
            font-size: 14px;
            font-weight: 500;
            color: #fff;
            margin-bottom: 3px;
        }

        .feat-desc {
            font-size: 12px;
            color: rgba(255, 255, 255, 0.4);
            line-height: 1.5;
            font-weight: 300;
        }

        .brand-headline {
            font-family: 'Playfair Display', serif;
            font-size: 28px;
            font-weight: 700;
            color: #fff;
            line-height: 1.3;
            margin-bottom: 24px;
        }

        .brand-headline em {
            font-style: normal;
            color: var(--gold-light);
        }

        /* Stats */
        .brand-stats {
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

        /* Stagger */
        .eyebrow {
            animation: fadeUp 0.55s 0.10s both;
        }

        .form-title {
            animation: fadeUp 0.55s 0.17s both;
        }

        .form-sub {
            animation: fadeUp 0.55s 0.23s both;
        }

        .field {
            animation: fadeUp 0.55s 0.30s both;
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

        @media (max-width: 900px) {
            body {
                flex-direction: column;
            }

            .brand-panel {
                width: 100%;
                order: 1;
                padding: 32px 28px;
            }

            .features {
                display: none;
            }

            .brand-headline {
                font-size: 22px;
            }

            .form-panel {
                order: 2;
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

        input[type="password"]::-ms-reveal,
        input[type="password"]::-ms-clear {
            display: none;
        }

        input[type="password"]::-webkit-credentials-auto-fill-button {
            display: none !important;
        }

        .strength-rule {
            display: block;
            margin-top: 4px;
            font-size: 11px;
            color: var(--gray-light);
            line-height: 1.4;
        }

        .password-rules {
            margin-top: 6px;
            padding-left: 16px;
            font-size: 11px;
            color: var(--gray-light);
        }

        .password-rules li {
            margin-bottom: 2px;
            transition: color 0.2s;
        }

        .password-rules li.valid {
            color: #22C55E;
            /* hijau */
        }

        .password-rules li.invalid {
            color: #EF4444;
            /* merah */
        }

        .username-wrap {
            position: relative;
        }

        .char-counter {
            position: absolute;
            right: 12px;
            bottom: -16px;
            font-size: 11px;
            color: var(--gray-light);
        }
    </style>
</head>

<body>

    <!-- FORM PANEL (left) -->
    <div class="form-panel">
        <div class="form-box">

            <div class="eyebrow">Bergabung Bersama Kami</div>
            <h1 class="form-title">Buat Akun<br>Baru Anda</h1>
            <p class="form-sub">Daftarkan diri untuk mengakses layanan brankas terbaik</p>

            @if(session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <form method="POST" action="{{ route('register.process') }}">
                @csrf

                <div class="field">
                    <label for="username">Username</label>

                    <div class="field-wrap username-wrap">
                        <span class="field-icon">👤</span>

                        <input type="text" id="username" name="username" placeholder="Masukkan username"
                            value="{{ old('username') }}" maxlength="24"
                            oninput="updateUsernameCounter(this.value); checkUsernameFormat(this.value)">

                        <span class="char-counter" id="usernameCounter">0/24</span>
                    </div>

                    <span class="err" id="usernameFormatError" style="display:none;"></span>

                    @error('username')
                        <span class="err">{{ $message }}</span>
                    @enderror
                </div>

                <div class="field">
                    <label for="email">Alamat Email</label>
                    <div class="field-wrap">
                        <span class="field-icon">✉️</span>
                        <input type="email" id="email" name="email" placeholder="contoh@email.com"
                            value="{{ old('email') }}">
                    </div>
                    @error('email')
                        <span class="err">{{ $message }}</span>
                    @enderror
                </div>

                <div class="field">
                    <label for="password">Password</label>
                    <div class="field-wrap">
                        <span class="field-icon">🔑</span>
                        <input type="password" id="password" name="password" placeholder="Minimal 8 karakter"
                            oninput="checkStrength(this.value); checkConfirmPassword();">

                        <span class="toggle-pass" onclick="togglePassword('password', this)">
                            <i class="bi bi-eye"></i>
                        </span>
                    </div>
                    <div class="strength-wrap">
                        <div class="strength-bar">
                            <div class="seg" id="s1"></div>
                            <div class="seg" id="s2"></div>
                            <div class="seg" id="s3"></div>
                            <div class="seg" id="s4"></div>
                        </div>
                        <span class="strength-hint" id="strengthHint">Masukkan password untuk melihat kekuatan</span>
                        <span class="strength-rule">
                            Password harus mengandung huruf kapital, huruf kecil, angka, dan karakter khusus.
                        </span>
                        <ul class="password-rules">
                            <li id="rule-uppercase">✔ Huruf kapital</li>
                            <li id="rule-lowercase">✔ Huruf kecil</li>
                            <li id="rule-number">✔ Angka</li>
                            <li id="rule-symbol">✔ Karakter khusus</li>
                        </ul>
                    </div>
                    @error('password')
                        <span class="err">{{ $message }}</span>
                    @enderror
                </div>

                <div class="field">
                    <label for="password_confirmation">Konfirmasi Password</label>
                    <div class="field-wrap">
                        <span class="field-icon">🔒</span>
                        <input type="password" id="password_confirmation" name="password_confirmation"
                            placeholder="Ulangi password" oninput="checkConfirmPassword()">

                        <span class="toggle-pass" onclick="togglePassword('password_confirmation', this)">
                            <i class="bi bi-eye"></i>
                        </span>
                    </div>

                    <span class="err" id="confirmError" style="display:none;">
                        Konfirmasi password tidak sama
                    </span>

                    @error('password_confirmation')
                        <span class="err">{{ $message }}</span>
                    @enderror
                </div>

                <p class="terms-note">
                    Dengan mendaftar, Anda menyetujui
                    <a href="{{ route('landing.syarat') }}" target="_blank">Syarat &amp; Ketentuan</a> serta
                    <a href="{{ route('landing.kebijakan') }}" target="_blank">Kebijakan Privasi</a> kami.
                </p>
                <div class="cf-turnstile" data-sitekey="{{ env('TURNSTILE_SITE_KEY') }}"></div>
                <button id="btnSubmit" type="submit" class="btn-daftar">Buat Akun Sekarang &nbsp;→</button>
            </form>

            <div class="or-line">atau</div>

            <p class="login-line">
                Sudah memiliki akun?
                <a href="{{ route('login') }}">Masuk di sini</a>
            </p>

        </div>
    </div>

    <!-- BRAND PANEL (right) -->
    <div class="brand-panel">
        <a href="{{ url('/') }}" class="brand-logo">
            <div class="logo-icon">🔐</div>
            <div>
                <span class="logo-name">UNGGUL REJEKI</span>
                <span class="logo-sub">Brankas &amp; Keamanan</span>
            </div>
        </a>

        <div class="brand-center">
            <h2 class="brand-headline">
                Kenapa Memilih<br>
                <em>Unggul Rejeki?</em>
            </h2>

            <div class="features">
                <div class="feat">
                    <div class="feat-icon">🛡️</div>
                    <div class="feat-text">
                        <span class="feat-title">Keamanan Maksimum</span>
                        <span class="feat-desc">Brankas dirancang dengan struktur kokoh dan perlindungan optimal untuk
                            menjaga aset Anda.</span>
                    </div>
                </div>
                <div class="feat">
                    <div class="feat-icon">⭐</div>
                    <div class="feat-text">
                        <span class="feat-title">Kualitas Terjamin</span>
                        <span class="feat-desc">Material pilihan dan komponen berkualitas untuk performa stabil dan
                            tahan lama.</span>
                    </div>
                </div>
                <div class="feat">
                    <div class="feat-icon">🔧</div>
                    <div class="feat-text">
                        <span class="feat-title">Layanan Purna Jual</span>
                        <span class="feat-desc">Bantuan instalasi, perawatan berkala, dan penanganan masalah teknis
                            secara profesional.</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="brand-stats">
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
    <script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer></script>
    <script>
        function checkStrength(val) {
            const segs = ['s1', 's2', 's3', 's4'].map(id => document.getElementById(id));
            const hint = document.getElementById('strengthHint');
            const labels = ['Sangat lemah', 'Lemah', 'Cukup kuat', 'Kuat sekali'];
            const colors = ['#EF4444', '#F97316', '#EAB308', '#22C55E'];

            let score = 0;
            if (val.length >= 6) score++;
            if (val.length >= 10) score++;
            if (/[A-Z]/.test(val) && /[0-9]/.test(val)) score++;
            if (/[^A-Za-z0-9]/.test(val)) score++;

            segs.forEach((s, i) => {
                s.style.background = i < score ? colors[Math.min(score - 1, 3)] : 'var(--border)';
            });

            hint.textContent = val.length === 0
                ? 'Masukkan password untuk melihat kekuatan'
                : labels[Math.min(score - 1, 3)] || 'Sangat lemah';
            hint.style.color = val.length === 0 ? 'var(--gray-light)' : colors[Math.min(score - 1, 3)];
        }
    </script>
    <script>
        function checkConfirmPassword() {
            const password = document.getElementById('password').value;
            const confirm = document.getElementById('password_confirmation').value;
            const error = document.getElementById('confirmError');
            const btn = document.getElementById('btnSubmit');

            if (confirm.length === 0) {
                error.style.display = 'none';
                btn.disabled = true;
                return;
            }

            if (password !== confirm) {
                error.style.display = 'block';
                error.style.color = '#EF4444';
                error.textContent = 'Konfirmasi password tidak sama';
                btn.disabled = true;
            } else {
                error.style.display = 'block';
                error.style.color = '#22C55E';
                error.textContent = 'Password cocok ✔';
                btn.disabled = false;
            }
        }
    </script>
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
    <script>
        function checkStrength(val) {
            const segs = ['s1', 's2', 's3', 's4'].map(id => document.getElementById(id));
            const hint = document.getElementById('strengthHint');

            const ruleUpper = document.getElementById('rule-uppercase');
            const ruleLower = document.getElementById('rule-lowercase');
            const ruleNumber = document.getElementById('rule-number');
            const ruleSymbol = document.getElementById('rule-symbol');

            const labels = ['Sangat lemah', 'Lemah', 'Cukup kuat', 'Kuat sekali'];
            const colors = ['#EF4444', '#F97316', '#EAB308', '#22C55E'];

            let score = 0;

            // RULE CHECK
            if (/[A-Z]/.test(val)) {
                ruleUpper.classList.add('valid');
                ruleUpper.classList.remove('invalid');
                score++;
            } else {
                ruleUpper.classList.add('invalid');
                ruleUpper.classList.remove('valid');
            }

            if (/[a-z]/.test(val)) {
                ruleLower.classList.add('valid');
                ruleLower.classList.remove('invalid');
                score++;
            } else {
                ruleLower.classList.add('invalid');
                ruleLower.classList.remove('valid');
            }

            if (/[0-9]/.test(val)) {
                ruleNumber.classList.add('valid');
                ruleNumber.classList.remove('invalid');
                score++;
            } else {
                ruleNumber.classList.add('invalid');
                ruleNumber.classList.remove('valid');
            }

            if (/[^A-Za-z0-9]/.test(val)) {
                ruleSymbol.classList.add('valid');
                ruleSymbol.classList.remove('invalid');
                score++;
            } else {
                ruleSymbol.classList.add('invalid');
                ruleSymbol.classList.remove('valid');
            }

            // panjang
            if (val.length >= 8) score++;

            // bar strength
            segs.forEach((s, i) => {
                s.style.background = i < score ? colors[Math.min(score - 1, 3)] : 'var(--border)';
            });

            hint.textContent = val.length === 0
                ? 'Masukkan password untuk melihat kekuatan'
                : labels[Math.min(score - 1, 3)] || 'Sangat lemah';

            hint.style.color = val.length === 0
                ? 'var(--gray-light)'
                : colors[Math.min(score - 1, 3)];
        }
    </script>
    <script>
        function updateUsernameCounter(val) {
            const counter = document.getElementById('usernameCounter');
            counter.textContent = val.length + '/24';

            // optional: warna kalau hampir penuh
            if (val.length >= 20) {
                counter.style.color = '#F97316'; // orange
            } else {
                counter.style.color = 'var(--gray-light)';
            }
        }
    </script>
</body>

</html>