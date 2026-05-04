<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kebijakan Privasi — Unggul Rejeki</title>
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
            font-family: 'Playfair Display', serif;
            font-size: 15px;
            font-weight: 700;
            color: #fff;
            letter-spacing: 0.05em;
            line-height: 1.1;
            display: block;
        }

        .logo-sub {
            font-size: 9px;
            letter-spacing: 0.18em;
            text-transform: uppercase;
            color: var(--gold-light);
            font-weight: 300;
            display: block;
        }

        .topbar-back {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 13px;
            color: rgba(255,255,255,0.55);
            text-decoration: none;
            font-weight: 300;
            letter-spacing: 0.03em;
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
            right: -80px;
            top: -80px;
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

        /* ===== SIDEBAR NAV ===== */
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

        .sidebar-nav .nav-num {
            font-size: 10px;
            color: var(--gold);
            font-weight: 500;
            min-width: 16px;
        }

        /* Sibling page link */
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
            <div class="hero-badge">🛡️ &nbsp; Dokumen Legal</div>
            <h1 class="hero-title">Kebijakan <em>Privasi</em></h1>
            <p class="hero-desc">
                Kami berkomitmen untuk melindungi dan menghormati privasi Anda. Halaman ini menjelaskan bagaimana kami mengumpulkan, menggunakan, dan menjaga data pribadi Anda.
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
                <li><a href="#s1" class="active"><span class="nav-num">01</span> Informasi Dikumpulkan</a></li>
                <li><a href="#s2"><span class="nav-num">02</span> Penggunaan Data</a></li>
                <li><a href="#s3"><span class="nav-num">03</span> Keamanan Data</a></li>
                <li><a href="#s4"><span class="nav-num">04</span> Pembagian Data</a></li>
                <li><a href="#s5"><span class="nav-num">05</span> Hak Pengguna</a></li>
                <li><a href="#s6"><span class="nav-num">06</span> Kontak Kami</a></li>
            </ul>

            <div class="sidebar-other">
                <span class="sidebar-other-label">Dokumen Terkait</span>
                <a href="{{ url('/syarat-ketentuan') }}">📄 &nbsp; Syarat &amp; Ketentuan</a>
            </div>
        </aside>

        <!-- CONTENT -->
        <main class="content">

            <div class="section" id="s1" style="animation-delay:0.05s">
                <div class="section-header">
                    <div class="section-num">1</div>
                    <h2 class="section-title">Informasi yang Dikumpulkan</h2>
                </div>
                <div class="section-body">
                    <p>Kami mengumpulkan informasi yang Anda berikan secara langsung saat mendaftar atau menggunakan layanan kami, termasuk namun tidak terbatas pada:</p>
                    <p><strong>Data Identitas:</strong> Nama lengkap, alamat email, dan nomor telepon yang digunakan untuk membuat dan mengelola akun Anda.</p>
                    <p><strong>Data Transaksi:</strong> Riwayat pembelian, preferensi produk, dan informasi terkait layanan yang Anda gunakan.</p>
                    <p><strong>Data Teknis:</strong> Alamat IP, jenis browser, dan informasi perangkat yang digunakan untuk mengakses platform kami.</p>
                </div>
            </div>

            <div class="section" id="s2" style="animation-delay:0.10s">
                <div class="section-header">
                    <div class="section-num">2</div>
                    <h2 class="section-title">Penggunaan Data</h2>
                </div>
                <div class="section-body">
                    <p>Data yang kami kumpulkan digunakan untuk keperluan berikut:</p>
                    <p>Memproses transaksi dan memberikan layanan yang Anda minta, mengirimkan konfirmasi pesanan, pembaruan layanan, dan informasi teknis yang relevan.</p>
                    <p>Meningkatkan kualitas platform dan layanan kami berdasarkan perilaku penggunaan, serta memastikan keamanan dan integritas sistem kami.</p>
                    <div class="info-box">
                        💡 &nbsp; Kami tidak akan menggunakan data Anda untuk keperluan pemasaran pihak ketiga tanpa persetujuan eksplisit dari Anda.
                    </div>
                </div>
            </div>

            <div class="section" id="s3" style="animation-delay:0.15s">
                <div class="section-header">
                    <div class="section-num">3</div>
                    <h2 class="section-title">Keamanan Data</h2>
                </div>
                <div class="section-body">
                    <p>Keamanan data Anda adalah prioritas utama kami. Kami menerapkan langkah-langkah keamanan teknis dan organisasional yang sesuai untuk melindungi data pribadi Anda dari akses, pengungkapan, perubahan, atau penghancuran yang tidak sah.</p>
                    <p>Sistem kami menggunakan enkripsi SSL/TLS untuk seluruh transmisi data, dan akses ke data pengguna dibatasi hanya bagi karyawan yang memiliki kebutuhan sah untuk memprosesnya.</p>
                </div>
            </div>

            <div class="section" id="s4" style="animation-delay:0.20s">
                <div class="section-header">
                    <div class="section-num">4</div>
                    <h2 class="section-title">Pembagian Data</h2>
                </div>
                <div class="section-body">
                    <p>Kami tidak menjual, memperdagangkan, atau memindahkan data pribadi Anda kepada pihak luar tanpa persetujuan Anda. Pengecualian berlaku hanya dalam kondisi berikut:</p>
                    <p>Mitra terpercaya yang membantu kami menjalankan platform, selama mereka sepakat menjaga kerahasiaan data. Kewajiban hukum jika diminta oleh otoritas yang berwenang sesuai peraturan perundang-undangan yang berlaku.</p>
                </div>
            </div>

            <div class="section" id="s5" style="animation-delay:0.25s">
                <div class="section-header">
                    <div class="section-num">5</div>
                    <h2 class="section-title">Hak Pengguna</h2>
                </div>
                <div class="section-body">
                    <p>Sebagai pengguna, Anda memiliki hak penuh untuk mengakses data pribadi yang kami simpan, meminta koreksi atas data yang tidak akurat, dan mengajukan penghapusan data dalam kondisi tertentu.</p>
                    <p>Untuk menggunakan hak-hak tersebut, silakan hubungi tim kami melalui saluran yang tersedia di halaman Kontak.</p>
                </div>
            </div>

            <div class="section" id="s6" style="animation-delay:0.30s">
                <div class="section-header">
                    <div class="section-num">6</div>
                    <h2 class="section-title">Kontak Kami</h2>
                </div>
                <div class="section-body">
                    <p>Jika Anda memiliki pertanyaan mengenai kebijakan privasi ini atau ingin menggunakan hak Anda sebagai pengguna, jangan ragu untuk menghubungi kami.</p>
                    <div class="info-box">
                        📬 &nbsp; Kunjungi halaman <a href="{{ url('/kontak') }}" style="color:var(--gold); font-weight:500;">Kontak Kami</a> untuk mengirimkan pertanyaan atau permintaan Anda. Tim kami siap membantu 24/7.
                    </div>
                </div>
            </div>

        </main>
    </div>

    <!-- FOOTER STRIP -->
    <footer class="footer-strip">
        <span class="footer-strip-left">© {{ date('Y') }} Unggul Rejeki. Seluruh hak dilindungi.</span>
        <div class="footer-strip-links">
            <a href="{{ route('landing.syarat') }}">Syarat &amp; Ketentuan</a>
            <a href="{{ route('landing.kebijakan') }}" class="current">Kebijakan Privasi</a>
        </div>
    </footer>

    <script>
        // Highlight active sidebar link on scroll
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