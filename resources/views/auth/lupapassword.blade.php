<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lupa Password — Unggul Rejeki</title>
    <link rel="icon" type="image/png" href="{{ asset('images/logo-.png') }}">
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=DM+Sans:wght@300;400;500&display=swap"
        rel="stylesheet">
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

        /* Logo */
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

        /* Center content */
        .left-center {
            position: relative;
            z-index: 2;
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 48px 0;
        }

        /* Key illustration */
        .key-illustration {
            width: 120px;
            height: 120px;
            margin-bottom: 36px;
            position: relative;
        }

        .key-ring-outer {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            border: 1.5px solid rgba(201, 146, 26, 0.3);
            position: absolute;
            animation: spinSlow 20s linear infinite;
        }

        .key-ring-outer::before {
            content: '';
            position: absolute;
            inset: 14px;
            border-radius: 50%;
            border: 1px dashed rgba(201, 146, 26, 0.18);
        }

        @keyframes spinSlow {
            to {
                transform: rotate(360deg);
            }
        }

        .key-core {
            width: 60px;
            height: 60px;
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
            font-size: 24px;
            box-shadow: 0 0 28px rgba(201, 146, 26, 0.2);
            animation: breathe 3s ease-in-out infinite;
        }

        @keyframes breathe {

            0%,
            100% {
                box-shadow: 0 0 20px rgba(201, 146, 26, 0.2);
            }

            50% {
                box-shadow: 0 0 36px rgba(201, 146, 26, 0.35);
            }
        }

        .left-headline {
            font-family: 'Playfair Display', serif;
            font-size: 30px;
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
            color: rgba(255, 255, 255, 0.43);
            line-height: 1.75;
            font-weight: 300;
            max-width: 300px;
        }

        /* Steps */
        .steps {
            display: flex;
            flex-direction: column;
            gap: 16px;
            margin-top: 36px;
        }

        .step {
            display: flex;
            gap: 14px;
            align-items: flex-start;
        }

        .step-num {
            width: 28px;
            height: 28px;
            border-radius: 50%;
            border: 1.5px solid rgba(201, 146, 26, 0.4);
            color: var(--gold-light);
            font-size: 12px;
            font-weight: 500;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            margin-top: 1px;
        }

        .step-text {
            font-size: 13px;
            color: rgba(255, 255, 255, 0.45);
            font-weight: 300;
            line-height: 1.5;
        }

        .step-text strong {
            display: block;
            color: rgba(255, 255, 255, 0.75);
            font-weight: 500;
            font-size: 13px;
            margin-bottom: 2px;
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

        /* ===== STEP INDICATOR ===== */
        .step-indicator {
            display: flex;
            align-items: center;
            gap: 0;
            margin-bottom: 36px;
        }

        .step-dot {
            width: 28px;
            height: 28px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 11px;
            font-weight: 500;
            flex-shrink: 0;
            transition: all 0.3s;
        }

        .step-dot.active {
            background: var(--gold);
            color: #fff;
        }

        .step-dot.done {
            background: #22C55E;
            color: #fff;
        }

        .step-dot.inactive {
            background: var(--border);
            color: var(--gray-light);
        }

        .step-line {
            flex: 1;
            height: 2px;
            background: var(--border);
            transition: background 0.3s;
        }

        .step-line.done {
            background: #22C55E;
        }

        .step-line.active {
            background: var(--gold-border);
        }

        .step-labels {
            display: flex;
            justify-content: space-between;
            margin-top: 8px;
            margin-bottom: 32px;
        }

        .step-lbl {
            font-size: 10px;
            color: var(--gray-light);
            letter-spacing: 0.05em;
            text-align: center;
            width: 28px;
        }

        .step-lbl.active {
            color: var(--gold);
            font-weight: 500;
        }

        /* Eyebrow */
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
            line-height: 1.6;
            margin-bottom: 32px;
        }

        /* Alerts */
        .alert {
            padding: 12px 16px;
            font-size: 13px;
            border-radius: 8px;
            margin-bottom: 20px;
            display: flex;
            align-items: flex-start;
            gap: 10px;
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

        .alert-info {
            background: #FFFBEB;
            border: 1px solid #FDE68A;
            border-left: 3px solid var(--gold);
            color: #92400E;
        }

        .alert-icon {
            font-size: 16px;
            flex-shrink: 0;
            margin-top: 1px;
        }

        .alert-body {
            flex: 1;
            line-height: 1.5;
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
        input[type="password"] {
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

        /* Password requirements */
        .req-list {
            margin-top: 10px;
            display: flex;
            flex-direction: column;
            gap: 5px;
        }

        .req {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 12px;
            color: var(--gray-light);
            transition: color 0.2s;
        }

        .req.met {
            color: #22C55E;
        }

        .req-dot {
            width: 6px;
            height: 6px;
            border-radius: 50%;
            background: var(--border);
            flex-shrink: 0;
            transition: background 0.2s;
        }

        .req.met .req-dot {
            background: #22C55E;
        }

        /* Error text */
        .err {
            font-size: 12px;
            color: #EF4444;
            margin-top: 5px;
            display: block;
        }

        /* Button */
        .btn-reset {
            width: 100%;
            padding: 15px;
            margin-top: 4px;
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

        .btn-reset:hover {
            background: #b8841a;
            box-shadow: 0 6px 24px rgba(201, 146, 26, 0.4);
            transform: translateY(-1px);
        }

        .btn-reset:active {
            transform: translateY(0);
        }

        /* Back link */
        .back-link {
            display: inline-flex;
            align-items: center;
            gap: 7px;
            font-size: 13px;
            color: var(--gray);
            text-decoration: none;
            margin-top: 24px;
            transition: color 0.2s;
            width: 100%;
            justify-content: center;
        }

        .back-link:hover {
            color: var(--gold);
        }

        .back-arrow {
            font-size: 15px;
            transition: transform 0.2s;
        }

        .back-link:hover .back-arrow {
            transform: translateX(-3px);
        }

        /* SUCCESS STATE */
        .success-state {
            display: none;
            text-align: center;
            padding: 20px 0;
        }

        .success-icon-wrap {
            width: 80px;
            height: 80px;
            background: #F0FDF4;
            border: 2px solid #BBF7D0;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 36px;
            margin: 0 auto 24px;
            animation: popIn 0.5s cubic-bezier(0.34, 1.56, 0.64, 1) both;
        }

        @keyframes popIn {
            from {
                transform: scale(0.5);
                opacity: 0;
            }

            to {
                transform: scale(1);
                opacity: 1;
            }
        }

        .success-title {
            font-family: 'Playfair Display', serif;
            font-size: 26px;
            font-weight: 700;
            color: var(--dark);
            margin-bottom: 12px;
        }

        .success-desc {
            font-size: 14px;
            color: var(--gray);
            line-height: 1.7;
            font-weight: 300;
            margin-bottom: 28px;
        }

        .success-desc strong {
            color: var(--dark);
            font-weight: 500;
        }

        /* Tab panels */
        .tab-panel {
            display: none;
        }

        .tab-panel.active {
            display: block;
        }

        /* Stagger animation */
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

        .field+.field {
            animation-delay: 0.36s;
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

            .key-illustration {
                display: none;
            }

            .left-headline {
                font-size: 22px;
            }

            .steps,
            .left-desc {
                display: none;
            }

            .right-panel {
                padding: 40px 24px;
            }
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
            <div class="key-illustration">
                <div class="key-ring-outer"></div>
                <div class="key-core">🗝️</div>
            </div>

            <h2 class="left-headline">
                Lupa Password?<br>
                <em>Tidak Masalah.</em>
            </h2>
            <p class="left-desc">
                Ikuti langkah sederhana untuk memulihkan akses ke akun Unggul Rejeki Anda dengan aman.
            </p>

            <div class="steps">
                <div class="step">
                    <div class="step-num">1</div>
                    <div class="step-text">
                        <strong>Masukkan Email</strong>
                        Kami kirimkan kode OTP ke alamat email terdaftar.
                    </div>
                </div>
                <div class="step">
                    <div class="step-num">2</div>
                    <div class="step-text">
                        <strong>Buat Password Baru</strong>
                        Tentukan password baru yang kuat dan mudah diingat.
                    </div>
                </div>
                <div class="step">
                    <div class="step-num">3</div>
                    <div class="step-text">
                        <strong>Masuk Kembali</strong>
                        Gunakan password baru Anda untuk masuk ke akun.
                    </div>
                </div>
            </div>
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

            <!-- Step indicator -->
            <div class="step-indicator">
                <div class="step-dot active" id="dot1">1</div>
                <div class="step-line" id="line1"></div>
                <div class="step-dot inactive" id="dot2">2</div>
                <div class="step-line" id="line2"></div>
                <div class="step-dot inactive" id="dot3">✓</div>
            </div>
            <div class="step-labels">
                <span class="step-lbl active" id="lbl1">Email</span>
                <span class="step-lbl" id="lbl2">Password</span>
                <span class="step-lbl" id="lbl3">Selesai</span>
            </div>

            {{-- SESSION ALERTS (from Laravel) --}}
            @if(session('error'))
                <div class="alert alert-danger">
                    <span class="alert-icon">⚠️</span>
                    <span class="alert-body">{{ session('error') }}</span>
                </div>
            @endif

            @if(session('success'))
                <div class="alert alert-success">
                    <span class="alert-icon">✅</span>
                    <span class="alert-body">{{ session('success') }}</span>
                </div>
            @endif

            <!-- ===== STEP 1: Email ===== -->
            <div class="tab-panel {{ ($step ?? 1) == 1 ? 'active' : '' }}" id="panel-email">
                <div class="eyebrow">Pemulihan Akun</div>
                <h1 class="form-title">Lupa<br>Password?</h1>
                <p class="form-sub">
                    Masukkan alamat email yang terdaftar. Kami akan mengirimkan instruksi untuk mereset password Anda.
                </p>

                <form method="POST" action="{{ route('password.email') }}" id="form-step1">
                    @csrf

                    <div class="field">
                        <label for="email">Alamat Email Terdaftar</label>
                        <div class="field-wrap">
                            <span class="field-icon">✉️</span>
                            <input type="email" id="email" name="email" placeholder="contoh@email.com"
                                value="{{ old('email') }}" required>
                        </div>
                        @error('email')
                            <span class="err">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="alert alert-info">
                        <span class="alert-icon">💡</span>
                        <span class="alert-body">Pastikan email yang Anda masukkan sama dengan yang digunakan saat
                            mendaftar.</span>
                    </div>

                    <button type="submit" class="btn-reset">
                        Kirim Instruksi Reset &nbsp;→
                    </button>
                </form>

                <a href="{{ route('login') }}" class="back-link">
                    <span class="back-arrow">←</span> Kembali ke halaman masuk
                </a>
            </div>

            <!-- ===== STEP 2: New Password ===== -->
            <div class="tab-panel {{ ($step ?? 1) == 2 ? 'active' : '' }}" id="panel-password">
                <div class="eyebrow">Buat Password Baru</div>
                <h1 class="form-title">Reset<br>Password</h1>
                <p class="form-sub">
                    Buat password baru yang kuat untuk melindungi akun Anda.
                </p>

                <form method="POST" action="{{ route('password.update') }}" id="form-step2">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token ?? '' }}">
                    <input type="hidden" name="email" id="hidden-email" value="{{ old('email') }}">

                    <div class="field">
                        <label for="new-password">Password Baru</label>
                        <div class="field-wrap">
                            <span class="field-icon">🔒</span>
                            <input type="password" id="new-password" name="password" placeholder="Minimal 8 karakter"
                                oninput="checkReqs(this.value)" required>
                        </div>
                        <div class="req-list">
                            <div class="req" id="req-len">
                                <div class="req-dot"></div>
                                Minimal 8 karakter
                            </div>
                            <div class="req" id="req-upper">
                                <div class="req-dot"></div>
                                Mengandung huruf kapital
                            </div>
                            <div class="req" id="req-num">
                                <div class="req-dot"></div>
                                Mengandung angka
                            </div>
                        </div>
                        @error('password')
                            <span class="err">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="field">
                        <label for="confirm-password">Konfirmasi Password Baru</label>
                        <div class="field-wrap">
                            <span class="field-icon">🔑</span>
                            <input type="password" id="confirm-password" name="password_confirmation"
                                placeholder="Ulangi password baru" required>
                        </div>
                        @error('password_confirmation')
                            <span class="err">{{ $message }}</span>
                        @enderror
                    </div>

                    <button type="button" class="btn-reset" onclick="goToStep3()">
                        Simpan Password Baru &nbsp;→
                    </button>
                </form>

                <a href="#" class="back-link" onclick="backToStep1(); return false;">
                    <span class="back-arrow">←</span> Kembali ke langkah sebelumnya
                </a>
            </div>

            <!-- ===== STEP 3: Success ===== -->
            <div class="tab-panel" id="panel-success">
                <div class="success-state" style="display:block;">
                    <div class="success-icon-wrap">✅</div>
                    <h2 class="success-title">Password Berhasil<br>Direset!</h2>
                    <p class="success-desc">
                        Password akun <strong id="success-email"></strong> telah berhasil diperbarui. Silakan masuk
                        dengan password baru Anda.
                    </p>
                    <a href="{{ route('login') }}" class="btn-reset"
                        style="display:block; text-align:center; text-decoration:none; padding:15px;">
                        Masuk Sekarang &nbsp;→
                    </a>
                </div>
            </div>

        </div>
    </div>

    <script>
        // Step navigation (UI preview — actual form submission handled by Laravel routes)
        function setStep(step) {
            const dots = [null, 'dot1', 'dot2', 'dot3'];
            const lines = [null, 'line1', 'line2'];
            const lbls = [null, 'lbl1', 'lbl2', 'lbl3'];
            const panels = [null, 'panel-email', 'panel-password', 'panel-success'];

            // Dots
            for (let i = 1; i <= 3; i++) {
                const d = document.getElementById(dots[i]);
                d.className = 'step-dot ' + (i < step ? 'done' : i === step ? 'active' : 'inactive');
                if (i < step) d.textContent = '✓';
                else d.textContent = i;
            }

            // Lines
            for (let i = 1; i <= 2; i++) {
                const l = document.getElementById(lines[i]);
                l.className = 'step-line ' + (i < step ? 'done' : i === step ? 'active' : '');
            }

            // Labels
            for (let i = 1; i <= 3; i++) {
                const lbl = document.getElementById(lbls[i]);
                lbl.className = 'step-lbl ' + (i === step ? 'active' : '');
            }

            // Panels
            for (let i = 1; i <= 3; i++) {
                const p = document.getElementById(panels[i]);
                p.className = 'tab-panel ' + (i === step ? 'active' : '');
            }

            // Scroll to top on mobile
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }

        function goToStep2() {
            const email = document.getElementById('email').value.trim();
            if (!email || !email.includes('@')) {
                document.getElementById('email').focus();
                return;
            }
            document.getElementById('hidden-email').value = email;
            setStep(2);
        }

        function goToStep3() {
            const pw = document.getElementById('new-password').value;
            const cpw = document.getElementById('confirm-password').value;
            if (pw.length < 8 || pw !== cpw) {
                if (pw !== cpw) document.getElementById('confirm-password').focus();
                return;
            }
            const email = document.getElementById('hidden-email').value;
            document.getElementById('success-email').textContent = email;
            setStep(3);
        }

        function backToStep1() { setStep(1); }

        // Password requirement checks
        function checkReqs(val) {
            toggle('req-len', val.length >= 8);
            toggle('req-upper', /[A-Z]/.test(val));
            toggle('req-num', /[0-9]/.test(val));
        }

        function toggle(id, met) {
            const el = document.getElementById(id);
            el.classList.toggle('met', met);
        }
    </script>

</body>

</html>