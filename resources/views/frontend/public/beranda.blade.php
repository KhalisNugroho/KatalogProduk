@extends('frontend.layouts.main')

@section('title', 'Pembuatan, jual beli, & layanan servis brankas - CV. Unggul Rejeki')

@section('content')
    <style>
        :root {
            --gold-primary: #c59435;
            --gold-dark: #a67c2d;
            --gold-light: #f5e7c8;
            --black-primary: #111111;
            --black-soft: #1c1c1c;
            --text-dark: #222222;
            --text-muted: #6b7280;
            --white-soft: #f8f8f8;
            --border-soft: rgba(255, 255, 255, 0.08);
            --shadow-soft: 0 20px 60px rgba(0, 0, 0, 0.18);
            --container-max: 1200px;
        }

        * {
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            color: var(--text-dark);
            background: #ffffff;
            overflow-x: hidden;
        }

        img {
            max-width: 100%;
            height: auto;
            display: block;
        }

        footer {
            margin-top: 0 !important;
        }

        .container {
            width: 100%;
            max-width: var(--container-max);
        }

        .section-padding {
            padding: 90px 0;
        }

        .section-title {
            font-size: clamp(1.75rem, 2.8vw, 2.3rem);
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 15px;
            text-transform: uppercase;
            word-break: break-word;
        }

        .section-title span {
            color: var(--gold-primary);
        }

        .section-subtitle {
            color: var(--text-muted);
            max-width: 720px;
            margin: 0 auto;
            font-size: 1rem;
            line-height: 1.8;
        }

        .hero-wrapper {
            position: relative;
            min-height: calc(100vh - 90px);
            padding: 40px 0 160px;
            display: flex;
            align-items: center;
            overflow: hidden;
            color: white;
            background: #000;
        }

        .hero-bg-img {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: 0;
            filter: brightness(0.28);
            transform: scale(1.03);
        }

        .hero-overlay {
            position: absolute;
            inset: 0;
            background:
                linear-gradient(90deg, rgba(0, 0, 0, 0.78) 0%, rgba(0, 0, 0, 0.55) 45%, rgba(0, 0, 0, 0.35) 100%),
                linear-gradient(180deg, rgba(0, 0, 0, 0.15) 0%, rgba(0, 0, 0, 0.55) 100%);
            z-index: 1;
        }

        .hero-wrapper .container {
            position: relative;
            z-index: 2;
        }

        .hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 10px 18px;
            margin-bottom: 24px;
            border: 1px solid rgba(255, 255, 255, 0.15);
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(6px);
            border-radius: 999px;
            font-size: 0.85rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: 700;
            max-width: 100%;
            flex-wrap: wrap;
        }

        .hero-content {
            max-width: 760px;
            margin-bottom: 30px;
        }

        .hero-content h1 {
            font-size: clamp(2.4rem, 6vw, 4.2rem);
            font-weight: 900;
            line-height: 1.08;
            text-transform: uppercase;
            margin-bottom: 22px;
            word-break: break-word;
        }

        .hero-content h1 span {
            color: var(--gold-primary);
        }

        .hero-content p {
            font-size: clamp(0.98rem, 1.4vw, 1.08rem);
            line-height: 1.9;
            color: rgba(255, 255, 255, 0.88);
            max-width: 650px;
            margin-bottom: 34px;
        }

        .hero-actions {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            margin-bottom: 45px;
        }

        .btn-gold,
        .btn-outline-light-custom {
            min-height: 52px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .btn-gold {
            background: var(--gold-primary);
            color: #fff;
            padding: 15px 34px;
            font-weight: 700;
            text-transform: uppercase;
            border-radius: 999px;
            border: none;
            transition: all 0.3s ease;
            box-shadow: 0 10px 25px rgba(197, 148, 53, 0.25);
        }

        .btn-gold:hover {
            background: var(--gold-dark);
            color: #fff;
            transform: translateY(-2px);
        }

        .btn-outline-light-custom {
            padding: 15px 34px;
            border-radius: 999px;
            text-transform: uppercase;
            font-weight: 700;
            color: #fff;
            border: 1px solid rgba(255, 255, 255, 0.35);
            background: transparent;
            transition: all 0.3s ease;
        }

        .btn-outline-light-custom:hover {
            background: rgba(255, 255, 255, 0.12);
            color: #fff;
            border-color: rgba(255, 255, 255, 0.6);
        }

        .hero-highlights {
            margin-top: 20px;
        }

        .hero-highlight-item {
            height: 100%;
            background: rgba(255, 255, 255, 0.07);
            border: 1px solid var(--border-soft);
            backdrop-filter: blur(6px);
            border-radius: 20px;
            padding: 22px 20px;
        }

        .hero-highlight-item i {
            color: var(--gold-primary);
            font-size: 1.4rem;
            margin-bottom: 12px;
        }

        .hero-highlight-item h5 {
            font-size: 1rem;
            font-weight: 700;
            margin-bottom: 6px;
        }

        .hero-highlight-item p {
            margin: 0;
            font-size: 0.92rem;
            line-height: 1.6;
            color: rgba(255, 255, 255, 0.78);
        }

        .stats-bar {
            position: relative;
            margin-top: -80px;
            z-index: 5;
        }

        .stats-inner {
            background: #fff;
            border-radius: 24px;
            box-shadow: var(--shadow-soft);
            padding: 28px 18px;
        }

        .stat-item {
            text-align: center;
            padding: 18px 10px;
            height: 100%;
        }

        .stat-number {
            display: block;
            font-size: clamp(1.8rem, 4vw, 2.5rem);
            font-weight: 900;
            color: var(--gold-primary);
            line-height: 1;
            margin-bottom: 8px;
        }

        .stat-label {
            text-transform: uppercase;
            font-size: 0.82rem;
            letter-spacing: 1.5px;
            color: var(--text-muted);
            font-weight: 700;
        }

        .about-section {
            background: linear-gradient(180deg, #fff 0%, #fafafa 100%);
        }

        .about-image-wrap {
            position: relative;
        }

        .about-image-wrap img {
            width: 100%;
            border-radius: 24px;
            box-shadow: var(--shadow-soft);
            object-fit: cover;
            min-height: 460px;
        }

        .about-experience {
            position: absolute;
            right: 20px;
            bottom: 20px;
            background: var(--black-primary);
            color: #fff;
            border-left: 4px solid var(--gold-primary);
            padding: 18px 22px;
            border-radius: 16px;
            box-shadow: var(--shadow-soft);
            max-width: min(280px, calc(100% - 40px));
        }

        .about-experience strong {
            display: block;
            font-size: 2rem;
            line-height: 1;
            color: var(--gold-primary);
        }

        .about-content .lead {
            color: var(--text-muted);
            line-height: 1.9;
            margin-bottom: 18px;
        }

        .check-list {
            list-style: none;
            padding: 0;
            margin: 28px 0 0;
        }

        .check-list li {
            display: flex;
            align-items: flex-start;
            gap: 12px;
            margin-bottom: 14px;
            color: var(--text-dark);
            font-weight: 500;
        }

        .check-list li i {
            color: var(--gold-primary);
            margin-top: 4px;
            flex-shrink: 0;
        }

        .feature-section {
            background: #fff;
        }

        .feature-card,
        .service-card {
            height: 100%;
            padding: 35px 28px;
            border-radius: 22px;
            background: #fff;
            border: 1px solid #efefef;
            transition: all 0.35s ease;
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.04);
        }

        .feature-card:hover,
        .service-card:hover {
            transform: translateY(-10px);
            background: var(--black-primary);
            color: #fff;
            box-shadow: 0 24px 50px rgba(0, 0, 0, 0.16);
        }

        .feature-icon {
            width: 72px;
            height: 72px;
            border-radius: 18px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: var(--gold-light);
            margin-bottom: 20px;
            flex-shrink: 0;
        }

        .feature-card:hover .feature-icon,
        .service-card:hover .feature-icon {
            background: rgba(197, 148, 53, 0.16);
        }

        .feature-icon i,
        .service-card i {
            font-size: 1.8rem;
            color: var(--gold-primary);
        }

        .feature-card h3 {
            font-size: 1.25rem;
            font-weight: 800;
            margin-bottom: 12px;
        }

        .feature-card p,
        .service-card p {
            margin: 0;
            line-height: 1.8;
            color: var(--text-muted);
        }

        .feature-card:hover p,
        .service-card:hover p {
            color: rgba(255, 255, 255, 0.78);
        }

        .service-section {
            position: relative;
            background: var(--black-primary);
            color: #fff;
        }

        .service-card h4 {
            font-size: 1.15rem;
            font-weight: 800;
            margin-bottom: 12px;
        }

        .cta-section {
            background: linear-gradient(135deg, #1a1a1a 0%, #0f0f0f 100%);
            color: #fff;
        }

        .cta-box {
            border-radius: 28px;
            padding: 50px 38px;
            background:
                linear-gradient(135deg, rgba(197, 148, 53, 0.14), rgba(255, 255, 255, 0.03));
            border: 1px solid rgba(255, 255, 255, 0.08);
            box-shadow: var(--shadow-soft);
        }

        .cta-box h2 {
            font-size: clamp(1.7rem, 2.8vw, 2.2rem);
            font-weight: 900;
            margin-bottom: 14px;
            text-transform: uppercase;
        }

        .cta-box p {
            margin: 0;
            color: rgba(255, 255, 255, 0.78);
            line-height: 1.9;
        }

        .cta-buttons {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            justify-content: flex-end;
        }

        @media (min-width: 1200px) {
            .hero-content {
                padding-right: 20px;
            }
        }

        @media (max-width: 1199.98px) {
            .hero-wrapper {
                min-height: auto;
                padding: 120px 0 120px;
            }
        }

        @media (max-width: 991.98px) {
            .section-padding {
                padding: 72px 0;
            }

            .hero-wrapper {
                padding: 110px 0 80px;
            }

            .hero-content {
                max-width: 100%;
            }

            .hero-content p {
                max-width: 100%;
            }

            .hero-highlights {
                margin-top: 10px;
            }

            .stats-bar {
                margin-top: 0;
                padding-top: 24px;
            }

            .stats-inner {
                padding: 22px 14px;
            }

            .about-image-wrap {
                margin-bottom: 35px;
            }

            .about-image-wrap img {
                min-height: 360px;
            }

            .cta-box {
                padding: 38px 28px;
            }

            .cta-buttons {
                justify-content: flex-start;
                margin-top: 25px;
            }
        }

        @media (max-width: 767.98px) {
            .section-padding {
                padding: 60px 0;
            }

            .hero-wrapper {
                padding: 96px 0 64px;
            }

            .hero-badge {
                font-size: 0.75rem;
                gap: 8px;
                padding: 10px 14px;
            }

            .hero-actions {
                gap: 12px;
                margin-bottom: 32px;
            }

            .btn-gold,
            .btn-outline-light-custom {
                width: 100%;
                padding: 14px 20px;
            }

            .hero-highlight-item,
            .feature-card,
            .service-card,
            .cta-box {
                padding: 24px 20px;
            }

            .stat-item {
                padding: 16px 6px;
            }

            .stat-label {
                font-size: 0.74rem;
                letter-spacing: 1px;
            }

            .about-image-wrap img {
                min-height: 280px;
            }

            .about-experience {
                right: 16px;
                bottom: 16px;
                padding: 14px 16px;
            }

            .about-experience strong {
                font-size: 1.5rem;
            }

            .check-list li {
                gap: 10px;
                font-size: 0.95rem;
            }
        }

        @media (max-width: 575.98px) {
            .feature-section .section-title {
                font-size: 1.85rem;
                line-height: 1.15;
                margin-bottom: 12px;
            }

            .feature-section .section-subtitle {
                font-size: 0.9rem;
                line-height: 1.75;
                max-width: 310px;
                margin: 0 auto;
            }

            .feature-card {
                padding: 20px 18px;
                border-radius: 22px;
                border: 1px solid #ece7dc;
                box-shadow: 0 10px 24px rgba(0, 0, 0, 0.05);
                background: linear-gradient(180deg, #ffffff 0%, #fbfbfb 100%);
            }

            .feature-card .feature-icon {
                width: 56px;
                height: 56px;
                border-radius: 16px;
                margin-bottom: 14px;
                background: linear-gradient(180deg, #f7ebd3 0%, #f1ddb4 100%);
            }

            .feature-card .feature-icon i {
                font-size: 1.3rem;
            }

            .feature-card h3 {
                font-size: 1rem;
                line-height: 1.35;
                margin-bottom: 8px;
            }

            .feature-card p {
                font-size: 0.85rem;
                line-height: 1.75;
                color: #5f6672;
            }

            .feature-section .row.g-4 {
                row-gap: 14px;
            }

            .feature-section.section-padding {
                padding-top: 48px;
                padding-bottom: 48px;
            }

            .feature-section .text-center.mb-5 {
                margin-bottom: 24px !important;
            }

            .feature-section .section-title {
                text-align: center;
                font-size: 1.9rem;
                margin-bottom: 10px;
            }

            .feature-section .section-subtitle {
                font-size: 0.88rem;
                line-height: 1.65;
                max-width: 320px;
                margin: 0 auto;
            }

            .service-card {
                position: relative;
                padding: 22px 18px 20px;
                border-radius: 20px;
                background: linear-gradient(180deg, #ffffff 0%, #fbfbfb 100%);
                border: 1px solid #ece7dc;
                box-shadow: 0 10px 24px rgba(0, 0, 0, 0.06);
            }

            .service-card .feature-icon {
                width: 58px;
                height: 58px;
                border-radius: 16px;
                margin-bottom: 16px;
                background: linear-gradient(180deg, #f7ebd3 0%, #f1ddb4 100%);
            }

            .service-card .feature-icon i {
                font-size: 1.35rem;
            }

            .service-card h4 {
                font-size: 1rem;
                line-height: 1.35;
                margin-bottom: 8px;
            }

            .service-card p {
                font-size: 0.84rem;
                line-height: 1.65;
                color: #5f6672;
            }

            .feature-section .row.g-4 {
                row-gap: 14px;
            }

            .hero-wrapper {
                padding: 60px 0 50px;
            }

            .hero-content {
                text-align: center;
                margin-top: 0px;
            }

            .hero-content h1 {
                font-size: 2.1rem;
                line-height: 1.15;
                margin-bottom: 14px;
            }

            .hero-content p {
                font-size: 0.9rem;
                line-height: 1.7;
                margin-bottom: 22px;
                max-width: 100%;
                color: rgba(255, 255, 255, 0.85);
            }

            .hero-actions {
                justify-content: center;
                margin-bottom: 24px;
            }

            .hero-actions .btn-gold {
                width: auto;
                min-width: 210px;
                padding: 12px 24px;
                font-size: 0.85rem;
                border-radius: 20px;
            }

            .hero-highlight-item h5 {
                font-size: 0.95rem;
                margin-bottom: 6px;
            }

            .hero-highlight-item p {
                font-size: 0.82rem;
                line-height: 1.6;
            }

            .hero-highlight-item i {
                font-size: 1.2rem;
                margin-bottom: 8px;
            }

            .check-list {
                margin-top: 20px;
            }

            .check-list li {
                font-size: 0.9rem;
                line-height: 1.6;
                margin-bottom: 12px;
                gap: 10px;
                color: #444;
            }

            .check-list li i {
                font-size: 0.9rem;
                margin-top: 6px;
            }

            .about-content {
                max-width: 420px;
                margin: 0 auto;
            }

            .about-content .section-title {
                text-align: center;
            }

            .about-content .lead {
                font-size: 0.9rem;
                line-height: 1.7;
                margin-bottom: 14px;
            }

            .stats-bar {
                margin-top: 0;
                padding-top: 14px;
            }

            .stats-inner {
                padding: 14px 10px;
                border-radius: 18px;
            }

            .stat-item {
                padding: 12px 6px;
            }

            .stat-number {
                font-size: 1.7rem;
                margin-bottom: 6px;
            }

            .stat-label {
                font-size: 0.62rem;
                letter-spacing: 0.8px;
                line-height: 1.45;
            }

            .hero-badge {
                display: none;
            }

            .hero-content {
                margin-top: 10px;
            }

            .hero-highlights {
                margin-top: 18px;
                row-gap: 14px;
            }

            .hero-highlights>div {
                margin-bottom: 2px;
            }

            .hero-highlight-item {
                padding: 20px 18px;
                border-radius: 18px;
            }

            .hero-highlight-item h5 {
                margin-bottom: 10px;
            }

            .hero-highlight-item p {
                line-height: 1.75;
            }

            .hero-content h1 {
                font-size: 2.3rem;
            }

            .section-title,
            .cta-box h2 {
                font-size: 1.7rem;
            }

            .btn-gold,
            .btn-outline-light-custom {
                width: 100%;
                text-align: center;
            }

            .about-image-wrap {
                position: relative;
            }

            .about-image-wrap img {
                min-height: auto;
                border-radius: 20px;
            }

            .about-experience {
                position: absolute;
                right: 12px;
                bottom: 12px;
                left: auto;
                margin-top: 0;
                padding: 12px 14px;
                width: auto;
                max-width: 210px;
                min-width: 150px;
                border-radius: 14px;
                line-height: 1.4;
            }

            .about-experience strong {
                font-size: 1.2rem;
                margin-bottom: 4px;
            }

            .about-experience {
                font-size: 1rem;
            }
        }
    </style>

    {{-- HERO --}}
    <section class="hero-wrapper">
        <img src="https://images.unsplash.com/photo-1582139329536-e7284fece509?auto=format&fit=crop&w=1600&q=80"
            alt="Brankas premium" class="hero-bg-img" fetchpriority="high">
        <div class="hero-overlay"></div>

        <div class="container">
            <div class="hero-content">
                <div class="hero-badge">
                    <i class="fas fa-shield-alt"></i>
                    Solusi Brankas, Safety Box & Servis Profesional
                </div>

                <h1>Brankas <span>Mantap</span></h1>

                <p>
                    CV. Unggul Rejeki hadir sebagai mitra terpercaya untuk pembuatan, penjualan, dan layanan servis
                    brankas. Kami menghadirkan produk berkualitas tinggi dengan sistem keamanan modern, material kokoh,
                    dan dukungan teknisi berpengalaman.
                </p>

                <div class="hero-actions">
                    <a href="/produk" class="btn btn-gold">Lihat Katalog</a>
                </div>
            </div>

            <div class="row g-4 hero-highlights">
                <div class="col-md-4">
                    <div class="hero-highlight-item">
                        <i class="fas fa-lock"></i>
                        <h5>Sistem Keamanan Andal</h5>
                        <p>Perlindungan maksimal untuk dokumen, uang tunai, dan aset berharga Anda.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="hero-highlight-item">
                        <i class="fas fa-fire-extinguisher"></i>
                        <h5>Tahan Risiko</h5>
                        <p>Dirancang untuk membantu melindungi isi brankas dari panas dan pembobolan.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="hero-highlight-item">
                        <i class="fas fa-user-cog"></i>
                        <h5>Didukung Teknisi</h5>
                        <p>Layanan pemasangan, perawatan, perbaikan, hingga bantuan buka kunci darurat.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- STATS --}}
    <section class="stats-bar">
        <div class="container">
            <div class="stats-inner">
                <div class="row g-0">
                    <div class="col-md-3 col-6">
                        <div class="stat-item">
                            <span class="stat-number counter" data-target="{{ now()->year - 2014 }}">0</span>
                            <span class="stat-label">Tahun Pengalaman</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="stat-item">
                            <span class="stat-number counter" data-target="50">0</span>
                            <span class="stat-label">Model Brankas</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="stat-item">
                            <span class="stat-number counter" data-target="1000">0</span>
                            <span class="stat-label">Klien Terlayani</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="stat-item">
                            <span class="stat-number">24/7</span>
                            <span class="stat-label">Layanan Dukungan</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ABOUT --}}
    <section class="about-section section-padding">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <div class="about-image-wrap">
                        <img src="images/service/pindahan.png" alt="Tentang CV. Unggul Rejeki">
                        <div class="about-experience">
                            <strong>12+</strong>
                            Tahun berpengalaman di bidang brankas
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="about-content">
                        <h2 class="section-title">Mitra Keamanan <span>Terpercaya</span></h2>
                        <p class="lead">
                            Kami melayani kebutuhan brankas untuk rumah tangga, kantor, toko, hotel, hingga sektor
                            industri. Dengan fokus pada kualitas, keamanan, dan pelayanan, kami membantu pelanggan
                            mendapatkan solusi yang tepat sesuai kebutuhan dan anggaran.
                        </p>
                        <p class="lead">
                            Tidak hanya menjual produk, kami juga menyediakan layanan teknis lengkap agar investasi
                            keamanan Anda tetap terjaga dalam jangka panjang.
                        </p>

                        <ul class="check-list">
                            <li><i class="fas fa-check-circle"></i> Konsultasi kebutuhan brankas sesuai fungsi dan kapasitas
                            </li>
                            <li><i class="fas fa-check-circle"></i> Produk kokoh dengan pilihan sistem kunci manual &
                                digital</li>
                            <li><i class="fas fa-check-circle"></i> Servis, maintenance, dan perbaikan oleh teknisi
                                berpengalaman</li>
                            <li><i class="fas fa-check-circle"></i> Dukungan cepat untuk kendala operasional dan darurat
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- WHY US --}}
    <section class="feature-section section-padding">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">Mengapa Memilih <span>Kami?</span></h2>
                <p class="section-subtitle">
                    Kami menggabungkan kualitas produk, pengalaman teknis, dan layanan responsif untuk menghadirkan
                    solusi keamanan yang benar-benar bisa diandalkan.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h3>Keamanan Maksimum</h3>
                        <p>
                            Brankas dirancang dengan struktur kokoh dan perlindungan optimal untuk menjaga aset penting
                            dari risiko kehilangan maupun pembobolan.
                        </p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-award"></i>
                        </div>
                        <h3>Kualitas Terjamin</h3>
                        <p>
                            Menggunakan material pilihan dan komponen berkualitas agar performa produk tetap stabil,
                            kuat, dan tahan lama untuk penggunaan jangka panjang.
                        </p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-tools"></i>
                        </div>
                        <h3>Layanan Purna Jual</h3>
                        <p>
                            Kami menyediakan bantuan instalasi, perawatan berkala, perbaikan, dan penanganan masalah
                            teknis secara profesional dan cepat.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- SERVICES --}}
    <section class="feature-section section-padding">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">Layanan <span>Kami</span></h2>
                <p class="section-subtitle">
                    Solusi lengkap mulai dari pengadaan produk hingga perawatan teknis untuk kebutuhan keamanan Anda.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="service-card">
                        <div class="feature-icon">
                            <i class="fas fa-box-open"></i>
                        </div>
                        <h4>Penjualan Brankas</h4>
                        <p>
                            Berbagai pilihan model dan ukuran brankas untuk kebutuhan rumah, perkantoran, retail, dan
                            industri.
                        </p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="service-card">
                        <div class="feature-icon">
                            <i class="fas fa-cogs"></i>
                        </div>
                        <h4>Pembuatan Custom</h4>
                        <p>
                            Pembuatan brankas sesuai spesifikasi kebutuhan pelanggan, termasuk dimensi, sistem kunci, dan
                            fungsi khusus.
                        </p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="service-card">
                        <div class="feature-icon">
                            <i class="fas fa-wrench"></i>
                        </div>
                        <h4>Servis & Maintenance</h4>
                        <p>
                            Layanan teknisi untuk perbaikan, penggantian komponen, perawatan rutin, dan penanganan kendala
                            operasional.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const counters = document.querySelectorAll('.counter');
            let counterStarted = false;

            const animateCounter = (counter) => {
                const target = +counter.getAttribute('data-target');
                const duration = 1500;
                const stepTime = 16;
                const totalSteps = Math.round(duration / stepTime);
                const increment = target / totalSteps;
                let current = 0;

                const updateCount = () => {
                    current += increment;

                    if (current < target) {
                        counter.innerText = Math.ceil(current);
                        requestAnimationFrame(updateCount);
                    } else {
                        counter.innerText = target >= 1000 ? target.toLocaleString('id-ID') + '+' : target + '+';
                    }
                };

                updateCount();
            };

            const statsSection = document.querySelector('.stats-bar');

            if (statsSection) {
                const observer = new IntersectionObserver((entries, observer) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting && !counterStarted) {
                            counterStarted = true;
                            counters.forEach(counter => animateCounter(counter));
                            observer.unobserve(entry.target);
                        }
                    });
                }, {
                    threshold: 0.35
                });

                observer.observe(statsSection);
            }
        });
    </script>
@endsection