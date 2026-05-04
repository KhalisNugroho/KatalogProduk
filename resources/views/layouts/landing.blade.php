<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="@yield('meta_description', 'CV Unggul Rejeki menyediakan brankas tahan api, layanan service, dan jual beli brankas di Cilacap. Solusi keamanan terpercaya untuk rumah dan bisnis Anda.')">
    <link rel="icon" type="image/png" href="{{ asset('images/logo-.png') }}">
    <title>@yield('title', 'CV Unggul Rejeki')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <style>
        :root {
            --gold-primary: #C59435;
            --gold-soft: #efe7d7;
            --gold-soft-2: #f7f2e8;
            --black-primary: #1A1A1A;
            --black-light: #252525;
            --gray-text: #a0a0a0;
            --white-soft: #f8f8f8;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
            color: var(--black-primary);
        }

        .navbar {
            background-color: rgba(255, 255, 255, 0.96) !important;
            padding: 12px 0;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.06);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            transition: all 0.3s ease;
        }

        .navbar .container {
            display: flex;
            align-items: center;
        }

        .navbar-brand {
            margin-right: 1rem;
            padding: 0;
        }

        .navbar-brand img {
            height: 54px;
            width: auto;
            transition: height 0.3s ease;
        }

        .navbar-toggler {
            border: 0;
            padding: 0;
            width: 56px;
            height: 56px;
            border-radius: 18px;
            background: linear-gradient(180deg, #fbf7ef 0%, #f2e8d6 100%);
            box-shadow: 0 8px 20px rgba(197, 148, 53, 0.16), inset 0 0 0 1px rgba(197, 148, 53, 0.16);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .navbar-toggler:focus {
            outline: none;
            box-shadow: 0 0 0 0.2rem rgba(197, 148, 53, 0.2);
        }

        .navbar-toggler-icon {
            background-image: none !important;
            width: 24px;
            height: 18px;
            position: relative;
            display: inline-block;
        }

        .navbar-toggler-icon::before,
        .navbar-toggler-icon::after,
        .navbar-toggler-icon span {
            content: '';
            position: absolute;
            left: 0;
            width: 100%;
            height: 2.5px;
            border-radius: 999px;
            background-color: #7a746b;
            transition: all 0.25s ease;
        }

        .navbar-toggler-icon::before {
            top: 0;
        }

        .navbar-toggler-icon span {
            top: 7.5px;
        }

        .navbar-toggler-icon::after {
            bottom: 0;
        }

        .navbar-collapse {
            transition: all 0.3s ease;
        }

        .navbar-nav {
            align-items: center;
        }

        .nav-item {
            position: relative;
        }

        .nav-link {
            color: var(--black-primary) !important;
            font-weight: 600;
            margin: 0 10px;
            padding: 10px 4px !important;
            text-transform: uppercase;
            font-size: 13px;
            letter-spacing: 1px;
            position: relative;
            transition: color 0.3s ease;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 4px;
            left: 50%;
            background-color: var(--gold-primary);
            transition: all 0.3s ease;
            transform: translateX(-50%);
        }

        .nav-link:hover {
            color: var(--gold-primary) !important;
        }

        .nav-link:hover::after {
            width: 80%;
        }

        main {
            overflow-x: hidden;
        }

        footer {
            background: linear-gradient(180deg, #1d1d1d 0%, #121212 100%);
            color: white;
            padding: 70px 0 0;
            margin-top: 0;
        }

        .footer-brand img {
            height: 52px;
            margin-bottom: 20px;
            filter: brightness(0) invert(1);
        }

        .footer-desc {
            color: var(--gray-text);
            line-height: 1.8;
            font-size: 15px;
            margin-bottom: 0;
        }

        .footer-title {
            color: white;
            font-weight: 700;
            font-size: 18px;
            margin-bottom: 24px;
            position: relative;
            padding-bottom: 10px;
        }

        .footer-title::after {
            content: '';
            position: absolute;
            width: 42px;
            height: 2px;
            background-color: var(--gold-primary);
            bottom: 0;
            left: 0;
        }

        .footer-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .footer-list li {
            margin-bottom: 14px;
        }

        .footer-link {
            color: var(--gray-text);
            text-decoration: none;
            transition: all 0.3s;
            display: inline-block;
        }

        .footer-link:hover {
            color: var(--gold-primary);
            transform: translateX(5px);
            text-decoration: none;
        }

        .contact-item {
            display: flex;
            margin-bottom: 18px;
            align-items: flex-start;
            padding: 14px 16px;
            border-radius: 14px;
            background-color: rgba(255, 255, 255, 0.03);
        }

        .contact-icon {
            color: var(--gold-primary);
            margin-right: 15px;
            margin-top: 3px;
            font-size: 18px;
            min-width: 18px;
        }

        .social-links {
            margin-top: 24px;
            display: flex;
            flex-wrap: wrap;
        }

        .social-icon {
            width: 42px;
            height: 42px;
            background: var(--black-light);
            display: inline-flex;
            align-items: center;
            justify-content: center;
            color: white;
            border-radius: 50%;
            margin-right: 10px;
            margin-bottom: 10px;
            transition: all 0.3s;
        }

        .social-icon:hover {
            background: var(--gold-primary);
            color: white;
            transform: translateY(-3px);
        }

        .footer-bottom {
            background-color: #101010;
            padding: 22px 0;
            margin-top: 48px;
            border-top: 1px solid rgba(255, 255, 255, 0.07);
        }

        .copyright {
            color: #8a8a8a;
            font-size: 14px;
            margin: 0;
        }

        .nav-link.active::after {
            width: 80% !important;
        }

        .nav-link.active {
            color: var(--black-primary) !important;
        }

        .footer-link.active {
            color: white;
        }

        .social-links-mobile {
            display: none;
        }

        .wa-widget {
            position: fixed;
            left: 24px;
            bottom: 24px;
            z-index: 99999;
            font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
        }

        .wa-toggle {
            width: 64px;
            height: 64px;
            border: none;
            border-radius: 50%;
            background: #25d366;
            color: #fff;
            font-size: 30px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.25);
            cursor: pointer;
            transition: all 0.25s ease;
        }

        .wa-toggle:hover {
            transform: translateY(-2px);
            box-shadow: 0 14px 30px rgba(0, 0, 0, 0.3);
        }

        .wa-toggle:focus {
            outline: none;
        }

        .wa-panel {
            position: absolute;
            left: 0;
            bottom: 84px;
            width: 350px;
            max-width: calc(100vw - 32px);
            background: #fff;
            border-radius: 18px;
            overflow: hidden;
            box-shadow: 0 18px 45px rgba(0, 0, 0, 0.18);
            opacity: 0;
            visibility: hidden;
            transform: translateY(12px);
            transition: all 0.25s ease;
        }

        .wa-widget.active .wa-panel {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        .wa-header {
            background: #25d366;
            color: #fff;
            padding: 20px 22px 16px;
        }

        .wa-header-top {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 10px;
        }

        .wa-header-icon {
            width: 42px;
            height: 42px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.14);
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 22px;
            flex-shrink: 0;
        }

        .wa-header h5 {
            margin: 0;
            font-size: 28px;
            font-weight: 800;
            line-height: 1.1;
        }

        .wa-header p {
            margin: 0;
            font-size: 14px;
            line-height: 1.65;
            color: rgba(255, 255, 255, 0.92);
        }

        .wa-body {
            padding: 16px;
            background: #f7f7f7;
        }

        .wa-hours {
            font-size: 13px;
            color: #6b7280;
            margin-bottom: 12px;
            font-weight: 600;
        }

        .wa-list {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .wa-item {
            display: flex;
            align-items: center;
            gap: 14px;
            background: #fff;
            border-radius: 14px;
            padding: 14px;
            text-decoration: none;
            color: #1f2937;
            border-left: 4px solid #25d366;
            box-shadow: 0 8px 18px rgba(0, 0, 0, 0.05);
            transition: all 0.25s ease;
        }

        .wa-item:hover {
            text-decoration: none;
            color: #111827;
            transform: translateY(-2px);
            box-shadow: 0 12px 22px rgba(0, 0, 0, 0.08);
        }

        .wa-avatar {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            background: #e8f8ee;
            color: #25d366;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            flex-shrink: 0;
        }

        .wa-item-text strong {
            display: block;
            font-size: 17px;
            line-height: 1.2;
            margin-bottom: 3px;
        }

        .wa-item-text span {
            display: block;
            font-size: 13px;
            color: #6b7280;
            line-height: 1.5;
        }

        .wa-item-arrow {
            margin-left: auto;
            color: #25d366;
            font-size: 20px;
            flex-shrink: 0;
        }

        .wa-toggle {
            width: 64px;
            height: 64px;
        }

        @media (max-width: 1199.98px) {
            .nav-link {
                margin: 0 6px;
                font-size: 12px;
                letter-spacing: 0.8px;
            }

            footer {
                padding-top: 60px;
            }
        }

        @media (max-width: 991.98px) {
            footer .row>div:nth-child(4) .footer-title::after {
                display: none;
            }

            main {
                position: relative;
                z-index: 1;
                padding-top: 8px;
            }

            .navbar {
                position: sticky;
                top: 0;
                z-index: 1030;
            }

            .navbar .container {
                display: flex;
                flex-wrap: wrap;
                align-items: center;
                padding-left: 32px;
                padding-right: 32px;
            }

            .navbar-collapse {
                flex-basis: 100%;
                width: 100%;
                margin-top: 16px;
            }

            .navbar-collapse.show,
            .navbar-collapse.collapsing {
                display: block;
            }


            .navbar-brand {
                margin-left: 4px;
            }

            .navbar-toggler {
                margin-right: 4px;
            }

            .social-links-mobile {
                display: flex;
                justify-content: center;
                margin-bottom: 12px;
            }

            /* sembunyikan icon atas */
            footer .footer-brand+.footer-desc+.social-links {
                display: none;
            }

            footer {
                text-align: left;
            }

            footer .row {
                display: flex;
                flex-wrap: wrap;
            }

            /* Kolom 1: Logo & deskripsi (full) */
            footer .row>div:nth-child(1) {
                flex: 0 0 100%;
                max-width: 100%;
                margin-bottom: 30px;
            }

            /* Kolom 2 & 3: Tautan & Kategori (2 kolom) */
            footer .row>div:nth-child(2),
            footer .row>div:nth-child(3) {
                flex: 0 0 50%;
                max-width: 50%;
                margin-bottom: 25px;
            }

            footer .row>div:nth-child(2) {
                display: none;
                /* Tautan */
            }

            footer .row>div:nth-child(3) {
                display: none;
                /* Produk */
            }

            /* Kolom 4: Jam operasional (full bawah) */
            footer .row>div:nth-child(4) {
                flex: 0 0 100%;
                max-width: 100%;
                margin-top: 10px;
            }

            /* Garis bawah title */
            footer .row>div:nth-child(2) .footer-title::after {
                left: 0;
                transform: none;
            }

            footer .row>div:nth-child(3) .footer-title::after {
                right: 0;
                left: auto;
                transform: none;
            }

            footer .row>div:nth-child(1) .footer-title::after,
            footer .row>div:nth-child(4) .footer-title::after {
                left: 0;
                transform: none;
            }

            /* Sosial tetap kiri */
            .social-links {
                justify-content: flex-start;
            }

            /* Contact tetap kiri */
            .contact-item {
                text-align: left;
            }

            .navbar {
                padding: 12px 0;
            }

            .navbar .container {
                align-items: center;
            }

            .navbar-brand img {
                height: 46px;
            }

            .navbar-collapse {
                margin-top: 16px;
                background: linear-gradient(180deg, #ffffff 0%, #fcfaf6 100%);
                border-radius: 22px;
                padding: 14px;
                box-shadow: 0 18px 35px rgba(0, 0, 0, 0.08);
                border: 1px solid rgba(197, 148, 53, 0.12);
            }

            .navbar-nav {
                align-items: stretch;
                gap: 6px;
            }

            .nav-item {
                width: 100%;
            }

            .nav-link {
                margin: 0;
                padding: 14px 16px !important;
                border-radius: 14px;
                font-size: 13px;
                letter-spacing: 0.7px;
                background-color: transparent;
                box-shadow: none;
            }

            .nav-link::after {
                content: none !important;
            }

            .nav-link:hover::after,
            .nav-link.active::after {
                width: 0 !important;
            }

            .nav-link:hover,
            .nav-link.active {
                background: var(--gold-soft-2);
                color: #2a2a2a !important;
            }

            .nav-link:hover::after,
            .nav-link.active::after {
                width: 42px !important;
            }

            footer {
                text-align: center;
            }

            .footer-title::after {
                left: 50%;
                transform: translateX(-50%);
            }

            .contact-item {
                text-align: left;
            }

            .social-links {
                justify-content: center;
            }
        }

        @media (max-width: 767.98px) {
            .wa-widget {
                left: 16px;
                bottom: 16px;
            }

            .wa-panel {
                width: min(330px, calc(100vw - 24px));
                left: 0;
                bottom: 76px;
                border-radius: 16px;
            }

            .wa-toggle {
                width: 58px;
                height: 58px;
                font-size: 27px;
            }

            .wa-header {
                padding: 18px 18px 14px;
            }

            .wa-header h5 {
                font-size: 24px;
            }

            .wa-header p {
                font-size: 13px;
            }

            .wa-body {
                padding: 14px;
            }

            .wa-item {
                padding: 12px;
                gap: 12px;
            }

            .wa-avatar {
                width: 44px;
                height: 44px;
                font-size: 22px;
            }

            .wa-item-text strong {
                font-size: 15px;
            }

            .wa-item-text span {
                font-size: 12px;
            }

            .social-links-mobile {
                display: flex;
                justify-content: center;
                margin-bottom: 12px;
            }

            /* icon atas disembunyikan di mobile */
            .footer .footer-brand+.footer-desc+.social-links {
                display: none;
            }

            .footer-brand+.footer-desc+.social-links {
                display: none;
            }

            /* Ambil social icon dari atas */
            .social-links {
                order: 99;
                width: 100%;
                justify-content: center;
                margin-top: 30px;
            }

            /* Jadikan container footer flex column */
            footer .container {
                display: flex;
                flex-direction: column;
            }

            footer .row {
                order: 1;
            }

            /* Pindahkan social ke bawah */
            footer .social-links {
                order: 2;
            }

            /* Copyright tetap paling bawah */
            .footer-bottom {
                order: 3;
            }

            /* 1. Logo ke tengah */

            .footer-brand img {
                margin-left: auto;
                margin-right: auto;
                display: block;
            }

            /* 3. Social icon ke bawah & center */
            .social-links {
                justify-content: center;
                margin-top: 20px;
            }

            /* 2. Hapus garis kuning "Jam Operasional" */
            footer .row>div:nth-child(4) .footer-title::after {
                display: none;
            }

            /* Hide Tautan */
            footer .row>div:nth-child(2) {
                display: none;
            }

            /* Hide Produk */
            footer .row>div:nth-child(3) {
                display: none;
            }

            .navbar {
                padding: 14px 0 10px;
            }

            .navbar .container {
                padding-left: 16px;
                padding-right: 16px;
            }

            .navbar-brand img {
                height: 40px;
            }

            .navbar-toggler {
                width: 54px;
                height: 54px;
                border-radius: 18px;
            }

            .navbar-collapse {
                margin-top: 14px;
                padding: 12px;
                border-radius: 20px;
            }

            .nav-link {
                font-size: 12px;
                padding: 13px 14px !important;
            }

            footer {
                padding-top: 50px;
            }

            .footer-brand img {
                height: 46px;
            }

            .footer-title {
                font-size: 17px;
                margin-bottom: 18px;
            }

            .footer-desc,
            .footer-link,
            .copyright {
                font-size: 14px;
            }

            .contact-item {
                padding: 12px 14px;
            }

            .footer-bottom {
                margin-top: 34px;
                padding: 18px 0;
            }
        }

        @media (max-width: 575.98px) {
            .navbar {
                padding: 14px 0 8px;
            }

            .navbar-brand img {
                height: 38px;
            }

            .navbar-toggler {
                width: 52px;
                height: 52px;
                border-radius: 17px;
            }

            .navbar-collapse {
                margin-top: 12px;
                padding: 12px;
            }

            .navbar-nav {
                gap: 8px;
            }

            .nav-link {
                padding: 14px 14px !important;
                border-radius: 14px;
                letter-spacing: 0.9px;
            }

            .nav-link:hover::after,
            .nav-link.active::after {
                width: 36px !important;
            }

            .contact-item {
                border-radius: 12px;
            }
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light sticky-top">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('images/logo1-rbg.png')}}" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"><span></span></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ (isset($key) && $key == 'beranda') ? 'active' : '' }}"
                            href="{{ route('landing.beranda') }}">
                            Beranda
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ (isset($key) && $key == 'tentang') ? 'active' : '' }}"
                            href="{{ route('landing.tentang') }}">
                            Tentang Kami
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ (Request::is('produk*')) ? 'active' : '' }}"
                            href="{{ route('landing.produk.jualbeli') }}">
                            Produk
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ (isset($key) && $key == 'artikel') ? 'active' : '' }}"
                            href="{{ route('landing.artikel') }}">
                            Artikel
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ (isset($key) && $key == 'kontak') ? 'active' : '' }}"
                            href="{{ route('landing.kontak') }}">
                            Kontak
                        </a>
                    </li>
                </ul>
                {{-- <ul class="navbar-nav">
                    <li class="nav-item ml-2">
                        <a href="{{ route('login') }}" class="btn btn-sm px-4"
                            style="background-color: var(--gold-primary); color: white; border-radius: 20px; font-weight: 600;">
                            Masuk
                        </a>
                    </li>
                </ul> --}}
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
                    <div class="footer-brand">
                        <img src="{{ asset('images/logo1-rbg.png')}}" alt="CV Unggul Rejeki">
                    </div>
                    <p class="footer-desc">Berkomitmen memberikan solusi keamanan terbaik melalui produk brankas dan
                        safety box berkualitas internasional untuk perlindungan aset berharga Anda.</p>
                    <div class="social-links">
                        {{-- <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a> --}}
                        <a href="https://www.instagram.com/omahebrankassemarang?igsh=MWF6aDhhaWJnZjhjbQ=="
                            class="social-icon"><i class="fab fa-instagram"></i></a>
                        <a href="https://wa.me/6285600773008" target="_blank" class="social-icon"><i
                                class="fab fa-whatsapp"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 mb-5 mb-lg-0">
                    <h5 class="footer-title">Tautan</h5>
                    <ul class="footer-list">
                        <li class="nav-item">
                            <a class="footer-link {{ (isset($key) && $key == 'beranda') ? 'active' : '' }}"
                                href="{{ route('landing.beranda') }}">
                                Beranda
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="footer-link {{ (isset($key) && $key == 'tentang') ? 'active' : '' }}"
                                href="{{ route('landing.tentang') }}">
                                Tentang Kami
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="footer-link {{ (isset($key) && $key == 'produk') ? 'active' : '' }}"
                                href="{{ route('landing.produk.jualbeli') }}">
                                Produk
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="footer-link {{ (isset($key) && $key == 'artikel') ? 'active' : '' }}"
                                href="{{ route('landing.artikel') }}">
                                Artikel
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="footer-link {{ (isset($key) && $key == 'kontak') ? 'active' : '' }}"
                                href="{{ route('landing.kontak') }}">
                                Kontak
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-6 mb-5 mb-lg-0">
                    <h5 class="footer-title">Produk</h5>
                    <ul class="footer-list">
                        <li>
                            <a href="{{ route('landing.produk.jualbeli') }}" class="footer-link">Jual Beli</a>
                        </li>
                        <li>
                            <a href="{{ route('landing.produk.service') }}" class="footer-link">Servis</a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6">
                    <h5 class="footer-title">Jam Operasional</h5>
                    <div class="contact-item">
                        <i class="fas fa-clock contact-icon"></i>
                        <span class="footer-desc">
                            <strong>Senin - Jumat:</strong><br>
                            08:30 – 17:00 WIB
                        </span>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-calendar-alt contact-icon"></i>
                        <span class="footer-desc">
                            <strong>Sabtu:</strong><br>
                            08:30 – 14:00 WIB
                        </span>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-info-circle contact-icon"></i>
                        <span class="footer-desc">Minggu & Hari Besar Tutup</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="social-links social-links-mobile justify-content-center mb-3">
            <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.instagram.com/omahebrankassemarang?igsh=MWF6aDhhaWJnZjhjbQ==" target="_blank"
                class="social-icon"><i class="fab fa-instagram"></i></a>
            <a href="https://wa.me/6285600773008" target="_blank" class="social-icon"><i
                    class="fab fa-whatsapp"></i></a>
        </div>
        <div class="footer-bottom text-center">
            <div class="container">
                <p class="copyright">&copy; 2026 Brankas Mantap. All Rights Reserved.</p>
            </div>
        </div>
    </footer>
    <div class="wa-widget" id="waWidget">
        <div class="wa-panel">
            <div class="wa-header">
                <div class="wa-header-top">
                    <div class="wa-header-icon">
                        <i class="fab fa-whatsapp"></i>
                    </div>
                    <div>
                        <h5>Chat Aja Dulu :)</h5>
                    </div>
                </div>
                <p>Konsultasikan kebutuhan brankas, pembelian, servis, atau pertanyaan lain bersama tim kami.</p>
            </div>

            <div class="wa-body">
                <div class="wa-hours">Online setiap hari • 08.30 - 17.00 WIB</div>

                <div class="wa-list">
                    <a href="https://wa.me/6285600773008?text=Halo%20CV%20Unggul%20Rejeki,%20saya%20ingin%20bertanya%20tentang%20produk%20brankas."
                        target="_blank" class="wa-item">
                        <div class="wa-avatar">
                            <i class="fab fa-whatsapp"></i>
                        </div>
                        <div class="wa-item-text">
                            <strong>Admin Penjualan</strong>
                            <span>Konsultasi produk, stok, dan pemesanan</span>
                        </div>
                        <div class="wa-item-arrow">
                            <i class="fas fa-chevron-right"></i>
                        </div>
                    </a>

                    <a href="https://wa.me/6281328013725?text=Halo%20CV%20Unggul%20Rejeki,%20saya%20ingin%20bertanya%20tentang%20layanan%20servis%20brankas."
                        target="_blank" class="wa-item">
                        <div class="wa-avatar">
                            <i class="fab fa-whatsapp"></i>
                        </div>
                        <div class="wa-item-text">
                            <strong>Admin Servis</strong>
                            <span>Bantuan servis, perawatan, dan kendala teknis</span>
                        </div>
                        <div class="wa-item-arrow">
                            <i class="fas fa-chevron-right"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <button type="button" class="wa-toggle" id="waToggle" aria-label="Buka chat WhatsApp">
            <i class="fab fa-whatsapp" id="waIcon"></i>
        </button>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"></script>
    <script>
        (function () {
            var waWidget = document.getElementById('waWidget');
            var waToggle = document.getElementById('waToggle');
            var waIcon = document.getElementById('waIcon');

            if (waWidget && waToggle && waIcon) {
                waToggle.addEventListener('click', function () {
                    waWidget.classList.toggle('active');

                    if (waWidget.classList.contains('active')) {
                        waIcon.classList.remove('fab', 'fa-whatsapp');
                        waIcon.classList.add('fas', 'fa-times');
                    } else {
                        waIcon.classList.remove('fas', 'fa-times');
                        waIcon.classList.add('fab', 'fa-whatsapp');
                    }
                });

                document.addEventListener('click', function (event) {
                    if (!waWidget.contains(event.target)) {
                        waWidget.classList.remove('active');
                        waIcon.classList.remove('fas', 'fa-times');
                        waIcon.classList.add('fab', 'fa-whatsapp');
                    }
                });
            }
        })();
    </script>
    <script>
        document.addEventListener('keydown', function (e) {
            if ((e.ctrlKey || e.metaKey) && e.key.toLowerCase() === 's') {
                e.preventDefault();
            }
        });
    </script>
    <script>
        document.querySelectorAll('.no-drag').forEach(function (el) {
            el.addEventListener('dragstart', function (e) {
                e.preventDefault();
            });
        });
    </script>
</body>

</html>