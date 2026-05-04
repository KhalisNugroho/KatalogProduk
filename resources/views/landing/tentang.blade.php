@extends('layouts.landing')

@section('title', 'Tentang Kami | CV Unggul Rejeki')

@section('content')
    <style>
        :root {
            --gold-primary: #C59435;
            --gold-dark: #a67c2d;
            --gold-soft: #f6ecda;
            --black-primary: #1A1A1A;
            --black-soft: #222222;
            --gray-text: #666;
            --gray-soft: #8b8b8b;
            --bg-soft: #fafafa;
            --white: #ffffff;
            --container-max: 1200px;
            --shadow-soft: 0 20px 45px rgba(0, 0, 0, 0.08);
            --shadow-card: 0 14px 30px rgba(0, 0, 0, 0.06);
            --radius-lg: 28px;
            --radius-md: 20px;
        }

        .breadcrumb-area {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
                url('https://images.unsplash.com/photo-1497366754035-f200968a6e72?auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            padding: 50px 0;
            text-align: center;
            border-bottom: 3px solid var(--gold-primary);
        }

        .breadcrumb-area h1 {
            color: white;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 10px;
        }

        .custom-breadcrumb {
            display: inline-flex;
            background: transparent;
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .custom-breadcrumb .breadcrumb-item {
            color: #ddd;
            font-weight: 500;
            font-size: 14px;
            text-transform: uppercase;
        }

        .custom-breadcrumb .breadcrumb-item a {
            color: var(--gold-primary);
            text-decoration: none;
        }

        .custom-breadcrumb .breadcrumb-item+.breadcrumb-item::before {
            content: "\f105";
            font-family: "Font Awesome 5 Free";
            font-weight: 900;
            color: var(--gold-primary);
            padding: 0 15px;
        }

        .about-page {
            background:
                radial-gradient(circle at top left, rgba(197, 148, 53, 0.08), transparent 28%),
                linear-gradient(180deg, #ffffff 0%, #fafafa 100%);
            overflow: hidden;
        }

        .section-space {
            padding: 90px 0;
        }

        .eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 10px 16px;
            border-radius: 999px;
            background: var(--gold-soft);
            color: var(--gold-dark);
            font-size: 13px;
            font-weight: 700;
            letter-spacing: 1px;
            text-transform: uppercase;
            margin-bottom: 18px;
        }

        .section-title {
            font-size: clamp(2rem, 4vw, 2.9rem);
            font-weight: 800;
            color: var(--black-primary);
            line-height: 1.15;
            margin-bottom: 20px;
        }

        .section-title span {
            color: var(--gold-primary);
        }

        .lead-text {
            color: var(--gray-text);
            line-height: 1.9;
            font-size: 1rem;
            margin-bottom: 18px;
        }

        .hero-about {
            position: relative;
        }

        .hero-image-wrap {
            position: relative;
        }

        .about-img {
            width: 100%;
            min-height: 520px;
            object-fit: cover;
            border-radius: var(--radius-lg);
            box-shadow: var(--shadow-soft);
        }

        .floating-badge {
            position: absolute;
            left: 24px;
            bottom: 24px;
            background: rgba(26, 26, 26, 0.92);
            color: white;
            padding: 18px 22px;
            border-radius: 18px;
            box-shadow: 0 18px 36px rgba(0, 0, 0, 0.2);
            border-left: 4px solid var(--gold-primary);
            max-width: 240px;
        }

        .floating-badge strong {
            display: block;
            font-size: 2rem;
            line-height: 1;
            color: var(--gold-primary);
            margin-bottom: 8px;
        }

        .feature-points {
            list-style: none;
            padding: 0;
            margin: 28px 0 0;
        }

        .feature-points li {
            display: flex;
            align-items: flex-start;
            gap: 12px;
            margin-bottom: 14px;
            color: var(--black-soft);
            line-height: 1.7;
            font-weight: 500;
        }

        .feature-points i {
            color: var(--gold-primary);
            margin-top: 4px;
            flex-shrink: 0;
        }

        .stats-strip {
            margin-top: 12px;
        }

        .stats-card {
            height: 100%;
            background: var(--white);
            border: 1px solid rgba(0, 0, 0, 0.05);
            border-radius: 22px;
            padding: 28px 22px;
            box-shadow: var(--shadow-card);
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .stats-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 20px 35px rgba(0, 0, 0, 0.08);
        }

        .stats-card h3 {
            font-size: 2rem;
            font-weight: 800;
            color: var(--gold-primary);
            margin-bottom: 8px;
        }

        .stats-card p {
            margin: 0;
            color: var(--gray-text);
            text-transform: uppercase;
            letter-spacing: 1px;
            font-size: 13px;
            font-weight: 700;
        }

        .vision-mission-section {
            padding-bottom: 90px;
        }

        .info-card {
            height: 100%;
            background: linear-gradient(180deg, #ffffff 0%, #fcfcfc 100%);
            border-radius: 24px;
            padding: 34px 28px;
            border: 1px solid rgba(0, 0, 0, 0.05);
            box-shadow: var(--shadow-card);
            position: relative;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            text-align: left;
        }

        .info-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 22px 40px rgba(0, 0, 0, 0.09);
        }

        .info-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(90deg, var(--gold-primary), #e4c17c);
        }

        .info-icon {
            width: 68px;
            height: 68px;
            border-radius: 18px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: var(--gold-soft);
            color: var(--gold-primary);
            font-size: 1.5rem;
            margin-bottom: 20px;
        }

        .info-card h4 {
            font-size: 1.4rem;
            font-weight: 800;
            color: var(--black-primary);
            margin-bottom: 14px;
        }

        .info-card p {
            color: var(--gray-text);
            line-height: 1.85;
            margin: 0;
        }

        .closing-section {
            padding-bottom: 90px;
        }

        .closing-box {
            border-radius: 28px;
            padding: 48px 36px;
            background: linear-gradient(135deg, #1b1b1b 0%, #111111 100%);
            color: white;
            position: relative;
            overflow: hidden;
            box-shadow: var(--shadow-soft);
        }

        .closing-box::before {
            content: '';
            position: absolute;
            inset: auto -80px -80px auto;
            width: 220px;
            height: 220px;
            background: radial-gradient(circle, rgba(197, 148, 53, 0.35), transparent 70%);
            pointer-events: none;
        }

        .closing-box h3 {
            font-size: clamp(1.7rem, 3vw, 2.3rem);
            font-weight: 800;
            margin-bottom: 16px;
            text-transform: uppercase;
        }

        .closing-box h3 span {
            color: var(--gold-primary);
        }

        .closing-box p {
            color: rgba(255, 255, 255, 0.8);
            line-height: 1.9;
            margin: 0;
        }

        footer {
            margin-top: 0 !important;
        }

        @media (min-width: 992px) {
            .container {
                width: 100%;
                max-width: var(--container-max);
            }
        }

        @media (max-width: 991.98px) {

            .section-space,
            .vision-mission-section,
            .closing-section {
                padding-top: 72px;
                padding-bottom: 72px;
            }

            .about-img {
                min-height: 420px;
            }

            .hero-image-wrap {
                margin-bottom: 36px;
            }

            .floating-badge {
                left: 18px;
                bottom: 18px;
                padding: 16px 18px;
            }

            .closing-box {
                padding: 38px 26px;
            }
        }

        @media (max-width: 767.98px) {
            .hero-image-wrap {
                position: relative;
            }

            .floating-badge {
                position: absolute;
                bottom: 16px;
                left: 16px;
                right: 16px;

                padding: 14px 16px;
                border-radius: 16px;

                background: rgba(26, 26, 26, 0.85);
                backdrop-filter: blur(6px);

                border-left: 3px solid var(--gold-primary);

                box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
            }

            .floating-badge strong {
                font-size: 22px;
            }

            .floating-badge {
                font-size: 13px;
                line-height: 1.6;
            }

            .breadcrumb-area {
                padding: 30px 0;
                /* dari 50px → lebih kecil */
            }

            .breadcrumb-area h1 {
                font-size: 24px;
                letter-spacing: 1px;
                margin-bottom: 6px;
            }

            .custom-breadcrumb .breadcrumb-item {
                font-size: 12px;
            }

            .custom-breadcrumb .breadcrumb-item+.breadcrumb-item::before {
                padding: 0 8px;
                font-size: 10px;
            }

            .section-space,
            .vision-mission-section,
            .closing-section {
                padding-top: 56px;
                padding-bottom: 56px;
            }

            .about-img {
                min-height: 300px;
                border-radius: 22px;
            }

            .section-title {
                font-size: 2rem;
            }

            .lead-text,
            .info-card p {
                font-size: 0.95rem;
            }

            .stats-card {
                padding: 22px 18px;
            }

            .info-card {
                padding: 28px 22px;
            }

            .closing-box {
                padding: 30px 22px;
                border-radius: 22px;
            }
        }
    </style>

    <div class="breadcrumb-area">
        <div class="container">
            <h1>Tentang Kami</h1>
            <nav aria-label="breadcrumb">
                <ol class="custom-breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Beranda</a></li>
                    <li class="breadcrumb-item active" aria-current="page" style="color:white;">Tentang Kami</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="about-page">
        <section class="section-space hero-about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="hero-image-wrap">
                            <img src="https://images.unsplash.com/photo-1554224155-1696413565d3?auto=format&fit=crop&w=1000&q=80"
                                alt="Profil Perusahaan" class="about-img">
                            <div class="floating-badge">
                                <strong>2014</strong>
                                Berdiri dan berkembang sebagai mitra keamanan aset terpercaya.
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <h2 class="section-title">Solusi Keamanan <span>Terpercaya</span></h2>
                        <p class="lead-text">
                            Berdiri sejak tahun 2014, <strong>CV Unggul Rejeki</strong> hadir sebagai perusahaan yang
                            bergerak di bidang <em>general trading</em> dan kontraktor. Kami memfokuskan keahlian pada
                            penyediaan solusi keamanan aset melalui jual beli brankas, baik unit baru maupun rekondisi
                            berkualitas tinggi.
                        </p>
                        <p class="lead-text">
                            Tidak hanya sebagai penyedia produk, kami juga spesialis dalam layanan servis profesional dan
                            relokasi mesin ATM. Dengan dukungan showroom dan workshop yang berpusat di Semarang, kami
                            berkomitmen memberikan aksesibilitas serta pelayanan terbaik bagi setiap klien.
                        </p>
                        <p class="lead-text mb-0">
                            Berbekal pengalaman bertahun-tahun, kami menyediakan berbagai varian brankas untuk kebutuhan
                            rumah tangga hingga standar ketat perbankan, lengkap dengan spesifikasi tahan api dan
                            perlindungan optimal terhadap upaya pembongkaran.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="vision-mission-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="info-card">
                            <div class="info-icon">
                                <i class="fas fa-eye"></i>
                            </div>
                            <h4>Visi Kami</h4>
                            <p>
                                Menjadi mitra terdepan dalam penyediaan sarana keamanan aset yang handal dan inovatif bagi
                                seluruh masyarakat serta pelaku usaha di Indonesia.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="info-card">
                            <div class="info-icon">
                                <i class="fas fa-bullseye"></i>
                            </div>
                            <h4>Misi Kami</h4>
                            <p>
                                Menyediakan produk brankas berkualitas tinggi dengan layanan purna jual yang profesional,
                                serta selalu mengutamakan kepuasan pelanggan dalam setiap transaksi dan layanan.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="closing-section">
            <div class="container">
                <div class="closing-box">
                    <h3>Mengutamakan <span>Kepercayaan</span> dan Kualitas</h3>
                    <p>
                        Bagi kami, keamanan bukan hanya soal produk, tetapi juga soal kepercayaan. Karena itu, CV Unggul
                        Rejeki terus menjaga kualitas layanan, ketepatan solusi, dan profesionalisme agar setiap pelanggan
                        mendapatkan perlindungan aset yang benar-benar dapat diandalkan.
                    </p>
                </div>
            </div>
        </section>
    </div>
@endsection