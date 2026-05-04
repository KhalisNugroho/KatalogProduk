<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Syarat & Ketentuan — Unggul Rejeki</title>
    <link rel="icon" type="image/png" href="{{ asset('images/logo-.png') }}">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        :root {
            --gold:       #C9921A;
            --gold-light: #E8B84B;
            --dark:       #1C1C1C;
            --dark-mid:   #2d2d2d;
            --gray:       #6B6B6B;
            --border:     #E2D9C8;
            --bg:         #F9F6F0;
            --white:      #FFFFFF;
        }

        body {
            font-family: 'DM Sans', sans-serif;
            background: var(--bg);
            color: var(--dark);
            min-height: 100vh;
        }

        /* ===== TOP BAR ===== */
        .topbar {
            background: var(--dark);
            padding: 0 48px;
            height: 64px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            position: sticky;
            top: 0;
            z-index: 100;
            border-bottom: 3px solid var(--gold);
        }

        .topbar-logo {
            display: flex;
            align-items: center;
            gap: 12px;
            text-decoration: none;
        }

        .logo-icon {
            width: 36px;
            height: 36px;
            background: var(--gold);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 16px;
        }

        .logo-name {
            display: block;
            font-family: 'Playfair Display', serif;
            font-size: 15px;
            font-weight: 700;
            color: #fff;
            letter-spacing: 0.05em;
            line-height: 1.1;
        }

        .logo-sub {
            display: block;
            font-size: 9px;
            letter-spacing: 0.18em;
            text-transform: uppercase;
            color: var(--gold-light);
            font-weight: 300;
        }

        .topbar-back {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 13px;
            color: rgba(255,255,255,0.55);
            text-decoration: none;
            font-weight: 300;
            transition: color 0.2s;
        }

        .topbar-back:hover { color: var(--gold-light); }

        /* ===== HERO ===== */
        .hero {
            background: var(--dark);
            padding: 56px 48px 64px;
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            inset: 0;
            background-image:
                repeating-linear-gradient(45deg,  rgba(201,146,26,0.04) 0px, rgba(201,146,26,0.04) 1px, transparent 1px, transparent 40px),
                repeating-linear-gradient(-45deg, rgba(201,146,26,0.04) 0px, rgba(201,146,26,0.04) 1px, transparent 1px, transparent 40px);
            pointer-events: none;
        }

        .hero::after {
            content: '';
            position: absolute;
            left: -80px;
            bottom: -80px;
            width: 400px;
            height: 400px;
            background: radial-gradient(circle, rgba(201,146,26,0.08) 0%, transparent 70%);
            pointer-events: none;
        }

        .hero-inner {
            max-width: 860px;
            margin: 0 auto;
            position: relative;
            z-index: 2;
        }

        .hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(201,146,26,0.12);
            border: 1px solid rgba(201,146,26,0.25);
            border-radius: 100px;
            padding: 6px 16px;
            font-size: 11px;
            letter-spacing: 0.2em;
            text-transform: uppercase;
            color: var(--gold-light);
            font-weight: 400;
            margin-bottom: 20px;
        }

        .hero-title {
            font-family: 'Playfair Display', serif;
            font-size: 44px;
            font-weight: 700;
            color: #fff;
            line-height: 1.2;
            margin-bottom: 16px;
        }

        .hero-title em {
            font-style: normal;
            color: var(--gold-light);
        }

        .hero-desc {
            font-size: 15px;
            color: rgba(255,255,255,0.45);
            font-weight: 300;
            line-height: 1.7;
            max-width: 540px;
        }

        .hero-meta {
            display: flex;
            gap: 28px;
            margin-top: 28px;
        }

        .meta-item {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 12px;
            color: rgba(255,255,255,0.35);
            letter-spacing: 0.05em;
        }

        .meta-dot {
            width: 5px;
            height: 5px;
            background: var(--gold);
            border-radius: 50%;
            flex-shrink: 0;
        }

        /* ===== LAYOUT ===== */
        .page-body {
            max-width: 860px;
            margin: 0 auto;
            padding: 56px 48px 80px;
            display: grid;
            grid-template-columns: 220px 1fr;
            gap: 60px;
            align-items: start;
        }

        /* ===== SIDEBAR ===== */
        .sidebar {
            position: sticky;
            top: 80px;
        }

        .sidebar-title {
            font-size: 10px;
            letter-spacing: 0.25em;
            text-transform: uppercase;
            color: var(--gray);
            font-weight: 500;
            margin-bottom: 16px;
        }

        .sidebar-nav {
            list-style: none;
            display: flex;
            flex-direction: column;
            gap: 2px;
        }

        .sidebar-nav a {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 9px 12px;
            font-size: 13px;
            color: var(--gray);
            text-decoration: none;
            border-radius: 6px;
            border-left: 2px solid transparent;
            transition: all 0.2s;
            font-weight: 300;
        }

        .sidebar-nav a:hover {
            background: rgba(201,146,26,0.06);
            color: var(--gold);
            border-left-color: var(--gold);
        }

        .sidebar-nav a.active {
            background: rgba(201,146,26,0.08);
            color: var(--gold);
            border-left-color: var(--gold);
            font-weight: 500;
        }

        .nav-num {
            font-size: 10px;
            color: var(--gold);
            font-weight: 500;
            min-width: 16px;
        }

        .sidebar-other {
            margin-top: 24px;
            padding-top: 20px;
            border-top: 1px solid var(--border);
        }

        .sidebar-other-label {
            font-size: 10px;
            letter-spacing: 0.2em;
            text-transform: uppercase;
            color: var(--gray);
            margin-bottom: 10px;
            display: block;
        }

        .sidebar-other a {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 13px;
            color: var(--gold);
            text-decoration: none;
            font-weight: 400;
            transition: color 0.2s;
        }

        .sidebar-other a:hover { color: var(--dark); }

        /* ===== CONTENT ===== */
        .content { min-width: 0; }

        .section {
            margin-bottom: 48px;
            animation: fadeUp 0.5s both;
        }

        @keyframes fadeUp {
            from { opacity: 0; transform: translateY(12px); }
            to   { opacity: 1; transform: translateY(0); }
        }

        .section-header {
            display: flex;
            align-items: center;
            gap: 14px;
            margin-bottom: 16px;
            padding-bottom: 14px;
            border-bottom: 1px solid var(--border);
        }

        .section-num {
            width: 32px;
            height: 32px;
            background: var(--gold);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 13px;
            font-weight: 700;
            color: #fff;
            flex-shrink: 0;
        }

        .section-title {
            font-family: 'Playfair Display', serif;
            font-size: 20px;
            font-weight: 600;
            color: var(--dark);
        }

        .section-body {
            font-size: 14.5px;
            color: var(--gray);
            line-height: 1.8;
            font-weight: 300;
        }

        .section-body p + p { margin-top: 12px; }

        /* Warning box */
        .warn-box {
            background: #FEF2F2;
            border: 1px solid #FECACA;
            border-left: 3px solid #EF4444;
            border-radius: 8px;
            padding: 14px 18px;
            font-size: 13.5px;
            color: #991B1B;
            line-height: 1.6;
            margin-top: 14px;
            display: flex;
            gap: 10px;
        }

        /* Info box */
        .info-box {
            background: #FFFBEB;
            border: 1px solid #FDE68A;
            border-left: 3px solid var(--gold);
            border-radius: 8px;
            padding: 14px 18px;
            font-size: 13.5px;
            color: #92400E;
            line-height: 1.6;
            margin-top: 14px;
            display: flex;
            gap: 10px;
        }

        /* Agreement banner */
        .agree-banner {
            background: var(--dark);
            border-radius: 12px;
            padding: 28px 28px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
            margin-bottom: 48px;
            position: relative;
            overflow: hidden;
        }

        .agree-banner::before {
            content: '';
            position: absolute;
            inset: 0;
            background-image: repeating-linear-gradient(45deg, rgba(201,146,26,0.04) 0px, rgba(201,146,26,0.04) 1px, transparent 1px, transparent 30px);
            pointer-events: none;
        }

        .agree-text {
            position: relative;
            z-index: 1;
        }

        .agree-text strong {
            display: block;
            font-family: 'Playfair Display', serif;
            font-size: 17px;
            font-weight: 600;
            color: #fff;
            margin-bottom: 5px;
        }

        .agree-text span {
            font-size: 13px;
            color: rgba(255,255,255,0.4);
            font-weight: 300;
        }

        .agree-badge {
            position: relative;
            z-index: 1;
            background: var(--gold);
            color: #fff;
            border-radius: 100px;
            padding: 8px 20px;
            font-size: 12px;
            font-weight: 500;
            letter-spacing: 0.06em;
            white-space: nowrap;
            flex-shrink: 0;
        }

        /* ===== FOOTER STRIP ===== */
        .footer-strip {
            background: var(--dark);
            padding: 28px 48px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 16px;
        }

        .footer-strip-left {
            font-size: 12px;
            color: rgba(255,255,255,0.3);
            letter-spacing: 0.05em;
        }

        .footer-strip-links {
            display: flex;
            gap: 20px;
        }

        .footer-strip-links a {
            font-size: 12px;
            color: rgba(255,255,255,0.4);
            text-decoration: none;
            transition: color 0.2s;
        }

        .footer-strip-links a:hover { color: var(--gold-light); }
        .footer-strip-links a.current { color: var(--gold-light); }

        @media (max-width: 768px) {
            .topbar { padding: 0 20px; }
            .hero { padding: 40px 20px 48px; }
            .hero-title { font-size: 30px; }
            .page-body { grid-template-columns: 1fr; padding: 36px 20px 60px; gap: 0; }
            .sidebar { position: static; margin-bottom: 36px; }
            .agree-banner { flex-direction: column; }
            .footer-strip { padding: 24px 20px; }
        }
    </style>
</head>
<body>

    <!-- TOP BAR -->
    <header class="topbar">
        <a href="{{ url('/') }}" class="topbar-logo">
            <div class="logo-icon">🔐</div>
            <div>
                <span class="logo-name">UNGGUL REJEKI</span>
                <span class="logo-sub">Brankas &amp; Keamanan</span>
            </div>
        </a>
    </header>

    <!-- HERO -->
    <section class="hero">
        <div class="hero-inner">
            <div class="hero-badge">📄 &nbsp; Dokumen Legal</div>
            <h1 class="hero-title">Syarat &amp; <em>Ketentuan</em></h1>
            <p class="hero-desc">
                Dengan menggunakan layanan Unggul Rejeki, Anda menyetujui syarat dan ketentuan berikut. Harap baca dengan saksama sebelum menggunakan platform kami.
            </p>
            <div class="hero-meta">
                <div class="meta-item">
                    <div class="meta-dot"></div>
                    Terakhir diperbarui: 1 Januari 2025
                </div>
                <div class="meta-item">
                    <div class="meta-dot"></div>
                    Berlaku untuk seluruh pengguna
                </div>
            </div>
        </div>
    </section>

    <!-- BODY -->
    <div class="page-body">

        <!-- SIDEBAR -->
        <aside class="sidebar">
            <p class="sidebar-title">Daftar Isi</p>
            <ul class="sidebar-nav">
                <li><a href="#s1" class="active"><span class="nav-num">01</span> Penggunaan Layanan</a></li>
                <li><a href="#s2"><span class="nav-num">02</span> Keamanan Akun</a></li>
                <li><a href="#s3"><span class="nav-num">03</span> Transaksi</a></li>
                <li><a href="#s4"><span class="nav-num">04</span> Perubahan Layanan</a></li>
                <li><a href="#s5"><span class="nav-num">05</span> Pembatasan Tanggung Jawab</a></li>
                <li><a href="#s6"><span class="nav-num">06</span> Kontak</a></li>
            </ul>

            <div class="sidebar-other">
                <span class="sidebar-other-label">Dokumen Terkait</span>
                <a href="{{ url('/kebijakan-privasi') }}">🛡️ &nbsp; Kebijakan Privasi</a>
            </div>
        </aside>

        <!-- CONTENT -->
        <main class="content">

            <!-- Agreement banner -->
            <div class="agree-banner">
                <div class="agree-text">
                    <strong>Persetujuan Pengguna</strong>
                    <span>Dengan mendaftar atau menggunakan layanan kami, Anda dianggap telah membaca dan menyetujui seluruh ketentuan di bawah ini.</span>
                </div>
                <div class="agree-badge">✓ &nbsp; Disetujui saat mendaftar</div>
            </div>

            <div class="section" id="s1" style="animation-delay:0.05s">
                <div class="section-header">
                    <div class="section-num">1</div>
                    <h2 class="section-title">Penggunaan Layanan</h2>
                </div>
                <div class="section-body">
                    <p>Pengguna wajib menggunakan layanan Unggul Rejeki secara sah dan tidak melanggar hukum yang berlaku di Republik Indonesia maupun peraturan internasional yang relevan.</p>
                    <p>Pengguna dilarang menggunakan platform ini untuk tujuan yang bersifat ilegal, merugikan pihak lain, atau bertentangan dengan nilai-nilai etika bisnis yang berlaku umum.</p>
                    <div class="warn-box">
                        ⚠️ &nbsp; Pelanggaran terhadap ketentuan penggunaan dapat mengakibatkan penangguhan atau penghapusan akun tanpa pemberitahuan sebelumnya.
                    </div>
                </div>
            </div>

            <div class="section" id="s2" style="animation-delay:0.10s">
                <div class="section-header">
                    <div class="section-num">2</div>
                    <h2 class="section-title">Keamanan Akun</h2>
                </div>
                <div class="section-body">
                    <p>Pengguna sepenuhnya bertanggung jawab atas kerahasiaan kredensial akun, termasuk email dan password. Kami sangat menganjurkan penggunaan password yang kuat dan unik yang tidak digunakan di platform lain.</p>
                    <p>Segala aktivitas yang terjadi di bawah akun Anda dianggap sebagai tindakan Anda sendiri. Jika Anda mencurigai adanya akses tidak sah, segera hubungi tim kami dan ubah password Anda.</p>
                    <div class="info-box">
                        💡 &nbsp; Kami tidak akan pernah meminta password Anda melalui email, telepon, atau saluran komunikasi lainnya.
                    </div>
                </div>
            </div>

            <div class="section" id="s3" style="animation-delay:0.15s">
                <div class="section-header">
                    <div class="section-num">3</div>
                    <h2 class="section-title">Transaksi</h2>
                </div>
                <div class="section-body">
                    <p>Semua transaksi yang dilakukan melalui platform Unggul Rejeki bersifat sah dan mengikat secara hukum. Pengguna bertanggung jawab untuk memastikan keakuratan informasi yang diberikan sebelum menyelesaikan setiap transaksi.</p>
                    <p>Pembatalan transaksi tunduk pada kebijakan pembatalan yang berlaku dan harus dilakukan dalam batas waktu yang ditentukan. Kami berhak menolak atau membatalkan transaksi yang dicurigai mengandung unsur penipuan.</p>
                </div>
            </div>

            <div class="section" id="s4" style="animation-delay:0.20s">
                <div class="section-header">
                    <div class="section-num">4</div>
                    <h2 class="section-title">Perubahan Layanan</h2>
                </div>
                <div class="section-body">
                    <p>Unggul Rejeki berhak mengubah, menangguhkan, atau menghentikan layanan kapan saja, dengan atau tanpa pemberitahuan terlebih dahulu. Perubahan signifikan akan diupayakan untuk dikomunikasikan melalui email atau notifikasi di platform.</p>
                    <p>Penggunaan layanan yang berkelanjutan setelah perubahan dilakukan dianggap sebagai penerimaan Anda terhadap perubahan syarat dan ketentuan tersebut.</p>
                </div>
            </div>

            <div class="section" id="s5" style="animation-delay:0.25s">
                <div class="section-header">
                    <div class="section-num">5</div>
                    <h2 class="section-title">Pembatasan Tanggung Jawab</h2>
                </div>
                <div class="section-body">
                    <p>Unggul Rejeki tidak bertanggung jawab atas kerugian tidak langsung, insidental, atau konsekuensial yang timbul dari penggunaan atau ketidakmampuan menggunakan layanan kami.</p>
                    <p>Kami berupaya memastikan ketersediaan layanan setiap saat, namun tidak dapat menjamin bahwa layanan akan bebas dari gangguan, kesalahan, atau keamanan sempurna.</p>
                </div>
            </div>

            <div class="section" id="s6" style="animation-delay:0.30s">
                <div class="section-header">
                    <div class="section-num">6</div>
                    <h2 class="section-title">Kontak</h2>
                </div>
                <div class="section-body">
                    <p>Jika Anda memiliki pertanyaan, keberatan, atau membutuhkan klarifikasi mengenai syarat dan ketentuan ini, tim kami siap membantu Anda.</p>
                    <div class="info-box">
                        📬 &nbsp; Kunjungi halaman <a href="{{ url('/kontak') }}" style="color:var(--gold); font-weight:500;">Kontak Kami</a> atau hubungi kami langsung. Kami berkomitmen merespons setiap pertanyaan dalam waktu 1×24 jam kerja.
                    </div>
                </div>
            </div>

        </main>
    </div>

    <!-- FOOTER STRIP -->
    <footer class="footer-strip">
        <span class="footer-strip-left">© {{ date('Y') }} Unggul Rejeki. Seluruh hak dilindungi.</span>
        <div class="footer-strip-links">
            <a href="{{ route('landing.syarat') }}" class="current">Syarat &amp; Ketentuan</a>
            <a href="{{ route('landing.kebijakan') }}">Kebijakan Privasi</a>
        </div>
    </footer>

    <script>
        const sections = document.querySelectorAll('.section');
        const navLinks = document.querySelectorAll('.sidebar-nav a');

        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    navLinks.forEach(a => a.classList.remove('active'));
                    const active = document.querySelector(`.sidebar-nav a[href="#${entry.target.id}"]`);
                    if (active) active.classList.add('active');
                }
            });
        }, { rootMargin: '-20% 0px -70% 0px' });

        sections.forEach(s => observer.observe(s));
    </script>

</body>
</html>