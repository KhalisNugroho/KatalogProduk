@extends('frontend.layouts.main')

@section('title', 'Artikel & Tips Keamanan | CV Unggul Rejeki')

@section('content')
    <style>
        :root {
            --gold-primary: #C59435;
            --black-primary: #1A1A1A;
            --gray-text: #666;
            --container-max: 1200px;
        }

        /* Breadcrumb Area */
        .breadcrumb-area {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
                url('https://images.unsplash.com/photo-1507842217343-583bb7270b66?auto=format&fit=crop&w=1350&q=80');
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

        /* Artikel Section */
        .artikel-section {
            padding: 60px 0 20px 0;
            /* Rapat ke footer */
            background-color: #fff;
        }

        .article-card {
            border: none;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            transition: 0.3s;
            border-radius: 8px;
            overflow: hidden;
            height: 100%;
            margin-bottom: 30px;
        }

        .article-card:hover {
            transform: translateY(-10px);
        }

        .article-img {
            height: 200px;
            object-fit: cover;
            width: 100%;
        }

        .article-body {
            padding: 20px;
        }

        .article-category {
            color: var(--gold-primary);
            font-size: 12px;
            font-weight: 700;
            text-transform: uppercase;
            margin-bottom: 10px;
            display: block;
        }

        .article-title {
            font-size: 18px;
            font-weight: 700;
            color: var(--black-primary);
            margin-bottom: 15px;
            line-height: 1.4;
        }

        .article-excerpt {
            color: var(--gray-text);
            font-size: 14px;
            margin-bottom: 20px;
        }

        .btn-read-more {
            color: var(--gold-primary);
            font-weight: 700;
            text-transform: uppercase;
            font-size: 13px;
            text-decoration: none;
            transition: 0.3s;
        }

        .btn-read-more:hover {
            color: var(--black-primary);
            letter-spacing: 1px;
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

        /* Samakan dengan halaman kontak */

        /* Tablet */
        @media (max-width: 991.98px) {
            .breadcrumb-area {
                padding: 45px 0;
            }

            .breadcrumb-area h1 {
                font-size: 28px;
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
        }

        /* Mobile kecil */
        @media (max-width: 480px) {
            .breadcrumb-area h1 {
                font-size: 22px;
            }
        }
    </style>

    <div class="breadcrumb-area">
        <div class="container">
            <h1>Artikel & Tips</h1>
            <nav aria-label="breadcrumb">
                <ol class="custom-breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Beranda</a></li>
                    <li class="breadcrumb-item active" aria-current="page" style="color:white;">Artikel</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="artikel-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="article-card">
                        <img src="https://images.unsplash.com/photo-1582139329536-e7284fece509?auto=format&fit=crop&w=800&q=80"
                            class="article-img" alt="Tips Memilih Brankas">
                        <div class="article-body">
                            <span class="article-category">Panduan Keamanan</span>
                            <h3 class="article-title">5 Tips Memilih Brankas untuk Kebutuhan Kantor</h3>
                            <p class="article-excerpt">Pastikan aset berharga perusahaan aman dengan memilih spesifikasi
                                brankas yang tepat sesuai risiko...</p>
                            <a href="#" class="btn-read-more">Selengkapnya <i class="fas fa-arrow-right ml-1"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="article-card">
                        <img src="https://images.unsplash.com/photo-1554224155-1696413565d3?auto=format&fit=crop&w=800&q=80"
                            class="article-img" alt="Standar Tahan Api">
                        <div class="article-body">
                            <span class="article-category">Informasi Produk</span>
                            <h3 class="article-title">Mengenal Standar Tahan Api pada Brankas Modern</h3>
                            <p class="article-excerpt">Mengapa sertifikasi UL Listed sangat penting untuk melindungi dokumen
                                kertas dari suhu panas ekstrim...</p>
                            <a href="#" class="btn-read-more">Selengkapnya <i class="fas fa-arrow-right ml-1"></i></a>
                        </div>
                    </div>
                </div>

                <!-- <div class="col-lg-4 col-md-6">
                        <div class="article-card">
                            <img src="https://images.unsplash.com/photo-1510511459019-5dee99214ff0?auto=format&fit=crop&w=800&q=80" class="article-img" alt="Pemeliharaan Brankas">
                            <div class="article-body">
                                <span class="article-category">Tips</span>
                                <h3 class="article-title">Cara Merawat Kunci Digital Brankas Agar Awet</h3>
                                <p class="article-excerpt">Tips sederhana dalam mengganti baterai dan menjaga panel kode tetap responsif untuk penggunaan jangka panjang...</p>
                                <a href="#" class="btn-read-more">Selengkapnya <i class="fas fa-arrow-right ml-1"></i></a>
                            </div>
                        </div>
                    </div> -->
            </div>
        </div>
    </div>
@endsection