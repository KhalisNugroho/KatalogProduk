@extends('layouts.frontend')

@section('title', 'Kontak CV Unggul Rejeki | Service & Jual Brankas Cilacap')

@section('meta_description', 'Hubungi CV Unggul Rejeki untuk layanan brankas di Cilacap. Tersedia jual beli, service, WhatsApp, email, serta lokasi perusahaan dan workshop yang mudah dijangkau.')

@section('content')
    <style>
        :root {
            --gold-primary: #C59435;
            --gold-soft: #E7C27A;
            --black-primary: #1A1A1A;
            --gray-text: #6f6f6f;
            --gray-soft: #f7f7f7;
            --border-soft: #ececec;
            --blue-primary: #1a5a96;
            --wa-primary: #25D366;
            --container-max: 1200px;
        }

        * {
            box-sizing: border-box;
        }

        .breadcrumb-area {
            background: linear-gradient(rgba(0, 0, 0, 0.68), rgba(0, 0, 0, 0.68)),
                url('images/media/cs.jpg');
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
            font-size: 34px;
        }

        .custom-breadcrumb {
            display: inline-flex;
            flex-wrap: wrap;
            justify-content: center;
            background: transparent;
            padding: 0;
            margin: 0;
            list-style: none;
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

        .contact-section {
            padding: 70px 0 30px 0;
            background:
                radial-gradient(circle at top right, rgba(197, 148, 53, 0.08), transparent 25%),
                #fff;
        }

        footer {
            margin-top: 0 !important;
        }

        .contact-wrapper {
            background: #fff;
            border-radius: 24px;
            overflow: hidden;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.08);
            border: 1px solid rgba(0, 0, 0, 0.04);
        }

        .contact-row {
            align-items: stretch;
        }

        .contact-info-panel {
            background: linear-gradient(180deg, #1a1a1a 0%, #232323 100%);
            color: #fff;
            padding: 40px 32px;
            min-height: 100%;
            position: relative;
        }

        .contact-info-panel::before {
            content: "";
            position: absolute;
            width: 180px;
            height: 180px;
            top: -60px;
            right: -60px;
            background: rgba(197, 148, 53, 0.12);
            border-radius: 50%;
        }

        .contact-info-panel::after {
            content: "";
            position: absolute;
            width: 120px;
            height: 120px;
            bottom: -40px;
            left: -40px;
            background: rgba(197, 148, 53, 0.10);
            border-radius: 50%;
        }

        .contact-panel-content {
            position: relative;
            z-index: 2;
        }

        .contact-badge {
            display: inline-block;
            padding: 8px 14px;
            border-radius: 999px;
            background: rgba(197, 148, 53, 0.16);
            color: var(--gold-soft);
            font-size: 13px;
            font-weight: 600;
            margin-bottom: 18px;
        }

        .contact-main-title {
            font-size: 34px;
            line-height: 1.2;
            font-weight: 800;
            margin-bottom: 14px;
        }

        .contact-main-desc {
            color: rgba(255, 255, 255, 0.72);
            line-height: 1.8;
            margin-bottom: 30px;
            max-width: 480px;
            font-size: 15px;
        }

        .info-list {
            display: grid;
            gap: 16px;
        }

        .info-item {
            display: flex;
            align-items: flex-start;
            gap: 16px;
            padding: 18px;
            border-radius: 18px;
            background: rgba(255, 255, 255, 0.04);
            border: 1px solid rgba(255, 255, 255, 0.06);
            backdrop-filter: blur(2px);
        }

        .info-icon {
            width: 46px;
            height: 46px;
            min-width: 46px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 14px;
            background: rgba(197, 148, 53, 0.14);
            color: var(--gold-primary);
            font-size: 18px;
            margin-right: 0;
            flex-shrink: 0;
        }

        .info-icon.whatsapp {
            background: rgba(37, 211, 102, 0.15);
            color: var(--wa-primary);
        }

        .info-label {
            font-weight: 700;
            color: #fff;
            margin-bottom: 6px;
            display: block;
            font-size: 15px;
        }

        .info-text {
            color: rgba(255, 255, 255, 0.74);
            margin: 0;
            line-height: 1.7;
            font-size: 14px;
            word-break: break-word;
        }

        .info-link {
            color: #fff;
            text-decoration: none;
            transition: 0.3s ease;
            word-break: break-word;
        }

        .info-link:hover {
            color: var(--gold-soft);
        }

        .map-panel {
            padding: 40px 32px;
            background: #fff;
            height: 100%;
        }

        .section-mini-title {
            display: inline-block;
            padding: 7px 14px;
            border-radius: 999px;
            background: #f8f1e5;
            color: var(--gold-primary);
            font-size: 13px;
            font-weight: 700;
            margin-bottom: 14px;
        }

        .map-title {
            color: var(--black-primary);
            font-size: 30px;
            line-height: 1.25;
            font-weight: 800;
            margin-bottom: 12px;
        }

        .map-desc {
            color: var(--gray-text);
            line-height: 1.8;
            margin-bottom: 26px;
            max-width: 560px;
            font-size: 15px;
        }

        .map-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 22px;
        }

        .map-card {
            border: 1px solid var(--border-soft);
            border-radius: 22px;
            overflow: hidden;
            background: #fff;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            transition: 0.3s ease;
        }

        .map-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 18px 36px rgba(0, 0, 0, 0.08);
        }

        .map-card-header {
            padding: 20px 22px 14px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
        }

        .map-card-title {
            margin: 0;
            font-size: 20px;
            font-weight: 700;
            color: var(--black-primary);
            line-height: 1.3;
        }

        .map-card-address {
            padding: 0 22px 18px;
            margin: 0;
            color: var(--gray-text);
            line-height: 1.7;
            font-size: 14px;
        }

        .map-frame {
            width: 100%;
            height: 320px;
            border: 0;
            display: block;
        }

        .map-card-footer {
            padding: 16px 22px 22px;
        }

        .btn-map {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            background: var(--blue-primary);
            color: #fff;
            text-decoration: none;
            padding: 12px 18px;
            border-radius: 12px;
            font-size: 14px;
            font-weight: 600;
            transition: 0.3s ease;
            text-align: center;
        }

        .btn-map:hover {
            background: #144675;
            color: #fff;
            text-decoration: none;
        }

        /* Desktop besar */
        @media (min-width: 1200px) {

            .contact-info-panel,
            .map-panel {
                padding: 44px 36px;
            }

            .map-frame {
                height: 340px;
            }
        }

        /* Tablet */
        @media (max-width: 991.98px) {
            .contact-section {
                padding: 55px 0 25px 0;
            }

            .contact-wrapper {
                border-radius: 20px;
            }

            .contact-row {
                flex-direction: column;
            }

            .contact-info-panel,
            .map-panel {
                padding: 30px 24px;
                height: auto;
            }

            .contact-main-title,
            .map-title {
                font-size: 28px;
            }

            .contact-main-desc,
            .map-desc {
                max-width: 100%;
            }

            .map-frame {
                height: 300px;
            }
        }

        /* Mobile */
        @media (max-width: 767.98px) {
            .breadcrumb-area {
                padding: 38px 0;
            }

            .breadcrumb-area h1 {
                font-size: 26px;
                letter-spacing: 1px;
            }

            .custom-breadcrumb .breadcrumb-item {
                font-size: 12px;
            }

            .custom-breadcrumb .breadcrumb-item+.breadcrumb-item::before {
                padding: 0 10px;
            }

            .contact-section {
                padding: 40px 0 20px 0;
            }

            .contact-wrapper {
                border-radius: 18px;
            }

            .contact-info-panel,
            .map-panel {
                padding: 24px 18px;
            }

            .contact-badge,
            .section-mini-title {
                font-size: 12px;
                padding: 6px 12px;
            }

            .contact-main-title,
            .map-title {
                font-size: 24px;
            }

            .contact-main-desc,
            .map-desc {
                font-size: 14px;
                line-height: 1.7;
                margin-bottom: 20px;
            }

            .info-list {
                gap: 12px;
            }

            .info-item {
                gap: 12px;
                padding: 14px;
                border-radius: 16px;
            }

            .info-icon {
                width: 42px;
                height: 42px;
                min-width: 42px;
                font-size: 16px;
                border-radius: 12px;
            }

            .info-label {
                font-size: 14px;
            }

            .info-text {
                font-size: 13px;
                line-height: 1.6;
            }

            .map-card {
                border-radius: 18px;
            }

            .map-card-header {
                padding: 16px 16px 10px;
            }

            .map-card-title {
                font-size: 18px;
            }

            .map-card-address {
                padding: 0 16px 14px;
                font-size: 13px;
            }

            .map-frame {
                height: 240px;
            }

            .map-card-footer {
                padding: 14px 16px 18px;
            }

            .btn-map {
                width: 100%;
                padding: 12px 14px;
                font-size: 13px;
            }
        }

        /* Mobile kecil */
        @media (max-width: 480px) {
            .breadcrumb-area h1 {
                font-size: 22px;
            }

            .contact-main-title,
            .map-title {
                font-size: 21px;
            }

            .map-frame {
                height: 220px;
            }

            .info-item {
                align-items: flex-start;
            }
        }

        @media (min-width: 992px) {
            .container {
                width: 100%;
                max-width: var(--container-max);
            }
        }
    </style>

    <div class="breadcrumb-area">
        <div class="container">
            <h1>Kontak Kami</h1>
            <nav aria-label="breadcrumb">
                <ol class="custom-breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Beranda</a></li>
                    <li class="breadcrumb-item active" aria-current="page" style="color:white;">Kontak</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="contact-section">
        <div class="container">
            <div class="contact-wrapper">
                <div class="row g-0 contact-row">
                    <div class="col-lg-5">
                        <div class="contact-info-panel">
                            <div class="contact-panel-content">
                                <h2 class="contact-main-title">Mari Terhubung Dengan Kami</h2>
                                <p class="contact-main-desc">
                                    Silakan hubungi kami untuk informasi produk, pemesanan, ataupun kebutuhan kerja sama.
                                    Tim kami siap membantu Anda.
                                </p>

                                <div class="info-list">
                                    <div class="info-item">
                                        <div class="info-icon">
                                            <i class="fab fa-whatsapp"></i>
                                        </div>
                                        <div>
                                            <span class="info-label">No. WhatsApp (Admin 1)</span>
                                            <p class="info-text">
                                                <a href="https://wa.me/6285600773008" class="info-link" target="_blank">
                                                    +62 856-0077-3008
                                                </a>
                                            </p>
                                        </div>
                                    </div>

                                    <div class="info-item">
                                        <div class="info-icon">
                                            <i class="fab fa-whatsapp"></i>
                                        </div>
                                        <div>
                                            <span class="info-label">No. WhatsApp (Admin 2)</span>
                                            <p class="info-text">
                                                <a href="https://wa.me/6281328013725" class="info-link" target="_blank">
                                                    +62 813-2801-3725
                                                </a>
                                            </p>
                                        </div>
                                    </div>

                                    <div class="info-item">
                                        <div class="info-icon">
                                            <i class="fas fa-envelope"></i>
                                        </div>
                                        <div>
                                            <span class="info-label">Email Address</span>
                                            <p class="info-text">
                                                <a href="https://mail.google.com/mail/?view=cm&to=csbrankasmantap1@gmail.com"
                                                    class="info-link" target="_blank">
                                                    csbrankasmantap1@gmail.com
                                                </a>
                                            </p>
                                        </div>
                                    </div>

                                    <div class="info-item">
                                        <div class="info-icon">
                                            <i class="fas fa-map-marker-alt"></i>
                                        </div>
                                        <div>
                                            <span class="info-label">Lokasi Perusahaan</span>
                                            <p class="info-text">
                                                Jl. Raya Sidanegara RT. 005/001 Sidanegara - Kedungreja, Cilacap
                                            </p>
                                        </div>
                                    </div>

                                    <div class="info-item">
                                        <div class="info-icon">
                                            <i class="fas fa-industry"></i>
                                        </div>
                                        <div>
                                            <span class="info-label">Lokasi Workshop</span>
                                            <p class="info-text">
                                                <a href="https://maps.app.goo.gl/C3Rk4y3pRa9kbA6E9?g_st=ic" target="_blank"
                                                    class="info-link">
                                                    Bega, Bandungrejo, Kec. Mranggen, Semarang, Jawa Tengah 59567
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7">
                        <div class="map-panel">
                            <h2 class="map-title">Temukan Lokasi Perusahaan & Workshop</h2>
                            <p class="map-desc">
                                Berikut lokasi perusahaan dan workshop kami dalam tampilan peta agar lebih mudah ditemukan.
                            </p>

                            <div class="map-grid">
                                <div class="map-card">
                                    <div class="map-card-header">
                                        <h3 class="map-card-title">Lokasi Perusahaan</h3>
                                    </div>
                                    <p class="map-card-address">
                                        Jl. Raya Sidanegara RT. 005/001 Sidanegara - Kedungreja, Cilacap
                                    </p>
                                    <iframe class="map-frame"
                                        src="https://www.google.com/maps?q=Jl.%20Raya%20Sidanegara%20RT.%20005%2F001%20Sidanegara%20Kedungreja%20Cilacap&output=embed"
                                        allowfullscreen="" loading="lazy"
                                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    <div class="map-card-footer">
                                        <a href="https://www.google.com/maps/search/?api=1&query=Jl.+Raya+Sidanegara+RT.+005/001+Sidanegara+Kedungreja+Cilacap"
                                            target="_blank" class="btn-map">
                                            <i class="fas fa-location-arrow"></i> Buka di Google Maps
                                        </a>
                                    </div>
                                </div>

                                <div class="map-card">
                                    <div class="map-card-header">
                                        <h3 class="map-card-title">Lokasi Workshop</h3>
                                    </div>
                                    <p class="map-card-address">
                                        Bega, Bandungrejo, Kec. Mranggen, Semarang, Jawa Tengah 59567
                                    </p>
                                    <iframe class="map-frame"
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.929349051033!2d110.50203069999999!3d-7.0175909!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708dbe86e313e3%3A0xfcf3d83e72ca949f!2sOmahe%20Brankas%20semarang!5e0!3m2!1sid!2sid!4v1775914011147!5m2!1sid!2sid"
                                        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                                    </iframe>
                                    <div class="map-card-footer">
                                        <a href="https://maps.app.goo.gl/C3Rk4y3pRa9kbA6E9?g_st=ic" target="_blank"
                                            class="btn-map">
                                            <i class="fas fa-location-arrow"></i> Buka Lokasi Workshop
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection