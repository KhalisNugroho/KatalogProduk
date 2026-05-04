@extends('layouts.landing')

@section('title', 'Mengenal Standar Tahan Api pada Brankas Modern | CV Unggul Rejeki')

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
                url('https://images.unsplash.com/photo-1554224155-1696413565d3?auto=format&fit=crop&w=1350&q=80');
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
            font-size: 32px;
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

        /* Article Detail Section */
        .article-detail-section {
            padding: 60px 0;
            background-color: #fff;
        }

        .article-meta {
            display: flex;
            align-items: center;
            gap: 20px;
            margin-bottom: 25px;
            padding-bottom: 20px;
            border-bottom: 1px solid #eee;
            flex-wrap: wrap;
        }

        .article-meta .meta-item {
            color: var(--gray-text);
            font-size: 13px;
            display: flex;
            align-items: center;
        }

        .article-meta .meta-item i {
            color: var(--gold-primary);
            margin-right: 8px;
        }

        .article-category-badge {
            background: var(--gold-primary);
            color: white;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 11px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .article-detail-title {
            font-size: 36px;
            font-weight: 800;
            color: var(--black-primary);
            line-height: 1.3;
            margin-bottom: 25px;
        }

        .article-featured-img {
            width: 100%;
            height: auto;
            max-height: 450px;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 35px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .article-content {
            font-size: 16px;
            line-height: 1.8;
            color: #444;
        }

        .article-content p {
            margin-bottom: 20px;
        }

        .article-content h2 {
            font-size: 26px;
            font-weight: 700;
            color: var(--black-primary);
            margin-top: 40px;
            margin-bottom: 20px;
            padding-left: 15px;
            border-left: 4px solid var(--gold-primary);
        }

        .article-content h3 {
            font-size: 20px;
            font-weight: 700;
            color: var(--gold-primary);
            margin-top: 30px;
            margin-bottom: 15px;
        }

        .article-content ul,
        .article-content ol {
            margin-bottom: 20px;
            padding-left: 20px;
        }

        .article-content ul li,
        .article-content ol li {
            margin-bottom: 10px;
        }

        .highlight-box {
            background: linear-gradient(135deg, #fff8ee 0%, #fff 100%);
            border-left: 5px solid var(--gold-primary);
            padding: 25px 30px;
            margin: 30px 0;
            border-radius: 8px;
        }

        .highlight-box .highlight-title {
            font-weight: 700;
            color: var(--black-primary);
            margin-bottom: 10px;
            font-size: 18px;
        }

        /* Standard Table */
        .standard-table {
            width: 100%;
            border-collapse: collapse;
            margin: 25px 0;
            background: white;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            border-radius: 8px;
            overflow: hidden;
        }

        .standard-table thead {
            background: var(--black-primary);
            color: white;
        }

        .standard-table th {
            padding: 15px;
            text-align: left;
            font-weight: 700;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .standard-table td {
            padding: 15px;
            border-bottom: 1px solid #eee;
            font-size: 14px;
        }

        .standard-table tbody tr:hover {
            background: #fff8ee;
        }

        .standard-table tbody tr:last-child td {
            border-bottom: none;
        }

        .badge-rating {
            display: inline-block;
            padding: 4px 12px;
            border-radius: 15px;
            font-size: 12px;
            font-weight: 700;
            color: white;
        }

        .badge-rating.high {
            background: #28a745;
        }

        .badge-rating.medium {
            background: var(--gold-primary);
        }

        .badge-rating.low {
            background: #dc3545;
        }

        /* Info Cards Grid */
        .info-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin: 30px 0;
        }

        .info-card {
            background: #fff;
            border: 1px solid #eee;
            border-radius: 8px;
            padding: 25px;
            text-align: center;
            transition: 0.3s;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.05);
        }

        .info-card:hover {
            box-shadow: 0 8px 25px rgba(197, 148, 53, 0.15);
            transform: translateY(-5px);
            border-color: var(--gold-primary);
        }

        .info-card-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, var(--gold-primary) 0%, #d4a542 100%);
            color: white;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            margin-bottom: 15px;
        }

        .info-card-title {
            font-weight: 700;
            color: var(--black-primary);
            margin-bottom: 10px;
            font-size: 18px;
        }

        .info-card-desc {
            font-size: 14px;
            color: var(--gray-text);
            margin: 0;
        }

        .cta-section {
            background: linear-gradient(135deg, var(--black-primary) 0%, #2c2c2c 100%);
            color: white;
            padding: 40px;
            border-radius: 8px;
            margin-top: 50px;
            text-align: center;
        }

        .cta-section h3 {
            color: var(--gold-primary) !important;
            font-size: 24px;
            margin-bottom: 15px;
            margin-top: 0 !important;
        }

        .cta-section p {
            margin-bottom: 25px;
            color: #ddd;
        }

        .btn-cta {
            display: inline-block;
            background: var(--gold-primary);
            color: white;
            padding: 12px 35px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: 0.3s;
        }

        .btn-cta:hover {
            background: #b07f28;
            color: white;
            transform: translateY(-2px);
        }

        .back-button {
            display: inline-flex;
            align-items: center;
            color: var(--gold-primary);
            font-weight: 600;
            text-decoration: none;
            margin-bottom: 30px;
            transition: 0.3s;
        }

        .back-button:hover {
            color: var(--black-primary);
            transform: translateX(-5px);
        }

        .back-button i {
            margin-right: 8px;
        }

        @media (min-width: 992px) {
            .container {
                width: 100%;
                max-width: var(--container-max);
            }
        }

        /* Tablet */
        @media (max-width: 991.98px) {
            .breadcrumb-area h1 {
                font-size: 28px;
            }

            .article-detail-title {
                font-size: 28px;
            }
        }

        /* Mobile */
        @media (max-width: 767.98px) {
            .breadcrumb-area {
                padding: 38px 0;
            }

            .breadcrumb-area h1 {
                font-size: 24px;
                letter-spacing: 1px;
            }

            .article-detail-title {
                font-size: 24px;
            }

            .article-content h2 {
                font-size: 22px;
            }

            .standard-table {
                display: block;
                overflow-x: auto;
            }

            .cta-section {
                padding: 30px 20px;
            }
        }
    </style>

    <div class="breadcrumb-area">
        <div class="container">
            <h1>Artikel Detail</h1>
            <nav aria-label="breadcrumb">
                <ol class="custom-breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('landing.artikel') }}">Artikel</a></li>
                    <li class="breadcrumb-item active" aria-current="page" style="color:white;">Standar Tahan Api</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="article-detail-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">

                    <a href="{{ route('landing.artikel') }}" class="back-button">
                        <i class="fas fa-arrow-left"></i> Kembali ke Artikel
                    </a>

                    <div class="article-meta">
                        <span class="article-category-badge">Informasi Produk</span>
                        <span class="meta-item"><i class="far fa-calendar-alt"></i> 22 Maret 2025</span>
                        <span class="meta-item"><i class="far fa-user"></i> Tim CV Unggul Rejeki</span>
                        <span class="meta-item"><i class="far fa-clock"></i> 8 menit baca</span>
                    </div>

                    <h1 class="article-detail-title">Mengenal Standar Tahan Api pada Brankas Modern</h1>

                    <img src="https://images.unsplash.com/photo-1554224155-1696413565d3?auto=format&fit=crop&w=1350&q=80"
                        class="article-featured-img" alt="Standar Tahan Api Brankas Modern">

                    <div class="article-content">
                        <p>
                            Saat berbicara tentang brankas, salah satu fitur paling penting yang sering menjadi
                            pertimbangan utama adalah <strong>ketahanan terhadap api</strong>. Bagaimanapun, ancaman
                            kebakaran adalah salah satu risiko terbesar yang dapat menghancurkan dokumen-dokumen vital
                            dalam hitungan menit. Namun, tahukah Anda bahwa tidak semua brankas memiliki tingkat
                            ketahanan api yang sama?
                        </p>

                        <p>
                            Di sinilah pentingnya memahami berbagai <strong>standar dan sertifikasi tahan api</strong>
                            yang ada di industri brankas. Sertifikasi ini bukan sekadar label pemasaran, tetapi hasil
                            pengujian ketat yang dilakukan oleh lembaga independen untuk memastikan brankas benar-benar
                            mampu melindungi isi di dalamnya saat terjadi kebakaran. Mari kita bahas lebih dalam.
                        </p>

                        <div class="highlight-box">
                            <div class="highlight-title">
                                <i class="fas fa-fire" style="color: var(--gold-primary); margin-right: 8px;"></i>
                                Fakta Penting
                            </div>
                            <p style="margin: 0;">
                                Kertas mulai hangus pada suhu sekitar <strong>177°C</strong>, sementara suhu rata-rata
                                kebakaran rumah atau gedung dapat mencapai <strong>700-1.000°C</strong>. Tanpa
                                perlindungan brankas yang tepat, dokumen Anda akan musnah dalam beberapa menit saja.
                            </p>
                        </div>

                        <h2>Mengapa Sertifikasi Tahan Api Penting?</h2>
                        <p>
                            Sertifikasi tahan api memberikan jaminan objektif bahwa brankas telah melalui pengujian
                            standar oleh lembaga independen. Tanpa sertifikasi, klaim "tahan api" dari produsen tidak
                            lebih dari pernyataan pemasaran yang sulit diverifikasi.
                        </p>

                        <div class="info-grid">
                            <div class="info-card">
                                <div class="info-card-icon">
                                    <i class="fas fa-shield-alt"></i>
                                </div>
                                <div class="info-card-title">Jaminan Kualitas</div>
                                <p class="info-card-desc">
                                    Sertifikasi membuktikan brankas telah lolos uji laboratorium independen.
                                </p>
                            </div>
                            <div class="info-card">
                                <div class="info-card-icon">
                                    <i class="fas fa-thermometer-half"></i>
                                </div>
                                <div class="info-card-title">Standar Suhu Jelas</div>
                                <p class="info-card-desc">
                                    Mendefinisikan suhu maksimum internal brankas selama paparan api.
                                </p>
                            </div>
                            <div class="info-card">
                                <div class="info-card-icon">
                                    <i class="fas fa-clock"></i>
                                </div>
                                <div class="info-card-title">Durasi Terukur</div>
                                <p class="info-card-desc">
                                    Memberikan informasi berapa lama brankas mampu bertahan dalam api.
                                </p>
                            </div>
                        </div>

                        <h2>UL Listed: Standar Emas Industri Brankas</h2>
                        <p>
                            <strong>Underwriters Laboratories (UL)</strong> adalah salah satu lembaga sertifikasi paling
                            terkenal dan dipercaya di seluruh dunia. Sertifikasi UL Listed pada brankas merupakan tanda
                            bahwa produk telah memenuhi standar keamanan ketat yang diakui secara internasional.
                        </p>

                        <h3>Kategori Sertifikasi UL untuk Brankas Tahan Api</h3>
                        <p>
                            Sertifikasi UL untuk brankas tahan api dibedakan berdasarkan suhu maksimum di dalam brankas
                            dan durasi paparan api. Berikut adalah klasifikasinya:
                        </p>

                        <table class="standard-table">
                            <thead>
                                <tr>
                                    <th>Kelas UL</th>
                                    <th>Suhu Internal Maks</th>
                                    <th>Cocok Untuk</th>
                                    <th>Tingkat</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>Class 350</strong></td>
                                    <td>≤ 177°C</td>
                                    <td>Dokumen kertas</td>
                                    <td><span class="badge-rating high">Standar</span></td>
                                </tr>
                                <tr>
                                    <td><strong>Class 150</strong></td>
                                    <td>≤ 66°C</td>
                                    <td>Media magnetik, film</td>
                                    <td><span class="badge-rating medium">Tinggi</span></td>
                                </tr>
                                <tr>
                                    <td><strong>Class 125</strong></td>
                                    <td>≤ 52°C</td>
                                    <td>Disket, hard disk, data digital</td>
                                    <td><span class="badge-rating high">Premium</span></td>
                                </tr>
                            </tbody>
                        </table>

                        <h3>Durasi Ketahanan</h3>
                        <p>
                            Selain kelas suhu, sertifikasi UL juga mencantumkan durasi ketahanan brankas terhadap api,
                            yang umumnya tersedia dalam beberapa pilihan:
                        </p>
                        <ul>
                            <li><strong>30 menit:</strong> Standar minimum untuk perlindungan dasar dokumen rumah
                                tangga.</li>
                            <li><strong>1 jam:</strong> Pilihan paling umum untuk kantor dan UMKM.</li>
                            <li><strong>2 jam:</strong> Direkomendasikan untuk dokumen penting bisnis dan instansi.
                            </li>
                            <li><strong>3-4 jam:</strong> Untuk perlindungan dokumen sangat kritis dan aset bernilai
                                tinggi.</li>
                        </ul>

                        <h2>Standar Tahan Api Lainnya</h2>

                        <h3>1. JIS (Japanese Industrial Standards)</h3>
                        <p>
                            JIS adalah standar industri Jepang yang juga banyak digunakan untuk sertifikasi brankas.
                            Sertifikasi JIS S 1037 menguji ketahanan brankas pada suhu hingga 1.010°C selama 2 jam,
                            dengan pengujian tambahan ketahanan terhadap benturan jatuh dari ketinggian.
                        </p>

                        <h3>2. EN 1047 (European Standard)</h3>
                        <p>
                            Standar Eropa EN 1047 fokus pada perlindungan media data dan dokumen. Standar ini
                            mengkategorikan brankas berdasarkan kemampuan menjaga suhu internal selama paparan api dan
                            ketahanan terhadap kelembaban setelah pemadaman api oleh pemadam kebakaran.
                        </p>

                        <h3>3. KS (Korean Standards)</h3>
                        <p>
                            Standar Korea Selatan yang mirip dengan JIS, menguji ketahanan brankas terhadap suhu tinggi
                            dan benturan. Banyak brankas asal Korea menggunakan standar ini sebagai acuan kualitas
                            produk mereka.
                        </p>

                        <h2>Cara Membaca Label Sertifikasi pada Brankas</h2>
                        <p>
                            Saat melihat label sertifikasi pada brankas, perhatikan beberapa informasi kunci berikut:
                        </p>

                        <ol>
                            <li>
                                <strong>Nama Lembaga Sertifikasi</strong> — Pastikan dari lembaga terpercaya seperti UL,
                                JIS, EN, atau ETL.
                            </li>
                            <li>
                                <strong>Kelas/Class</strong> — Menunjukkan suhu maksimum internal yang dapat dijaga.
                            </li>
                            <li>
                                <strong>Durasi</strong> — Berapa lama brankas teruji bertahan dalam paparan api.
                            </li>
                            <li>
                                <strong>Tahun Sertifikasi</strong> — Pastikan sertifikasi masih berlaku dan tidak
                                kedaluwarsa.
                            </li>
                            <li>
                                <strong>Nomor Sertifikat</strong> — Untuk verifikasi langsung ke lembaga sertifikasi.
                            </li>
                        </ol>

                        <div class="highlight-box">
                            <div class="highlight-title">
                                <i class="fas fa-exclamation-triangle"
                                    style="color: var(--gold-primary); margin-right: 8px;"></i>
                                Hati-hati dengan Klaim Palsu
                            </div>
                            <p style="margin: 0;">
                                Beberapa produk di pasaran mengklaim "tahan api" tanpa sertifikasi resmi. Selalu minta
                                bukti sertifikat dan verifikasi keasliannya. Brankas berkualitas pasti dapat menunjukkan
                                dokumentasi sertifikasinya.
                            </p>
                        </div>

                        <h2>Tips Memilih Brankas Tahan Api yang Tepat</h2>
                        <p>
                            Berdasarkan berbagai standar di atas, berikut beberapa rekomendasi pemilihan brankas tahan
                            api sesuai kebutuhan:
                        </p>
                        <ul>
                            <li>
                                <strong>Untuk Rumah Tangga:</strong> Brankas dengan UL Class 350 durasi 30 menit hingga
                                1 jam sudah cukup memadai untuk dokumen-dokumen pribadi.
                            </li>
                            <li>
                                <strong>Untuk Kantor & UMKM:</strong> Pilih UL Class 350 dengan durasi minimal 1-2 jam
                                untuk perlindungan dokumen bisnis.
                            </li>
                            <li>
                                <strong>Untuk Bisnis dengan Data Digital:</strong> Wajib UL Class 125 untuk melindungi
                                hard disk, server backup, dan media penyimpanan digital lainnya.
                            </li>
                            <li>
                                <strong>Untuk Instansi & Bank:</strong> Direkomendasikan UL Class 350 atau 125 dengan
                                durasi 2 jam atau lebih untuk perlindungan maksimal.
                            </li>
                        </ul>

                        <h2>Kesimpulan</h2>
                        <p>
                            Memahami standar tahan api pada brankas modern adalah kunci untuk memilih produk yang
                            benar-benar mampu melindungi aset Anda saat bencana kebakaran terjadi. Sertifikasi seperti
                            UL Listed bukan hanya label, melainkan jaminan ilmiah bahwa brankas telah melalui pengujian
                            ekstrem.
                        </p>
                        <p>
                            Investasi pada brankas dengan sertifikasi resmi mungkin terasa lebih mahal di awal, namun
                            nilai perlindungan yang diberikan jauh melebihi harga aset dan dokumen yang dipertaruhkan.
                            Jangan tergiur produk murah tanpa sertifikasi—dalam soal keamanan, kualitas adalah
                            segalanya.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection