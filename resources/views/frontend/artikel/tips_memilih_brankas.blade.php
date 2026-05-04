@extends('layouts.frontend')

@section('title', '5 Tips Memilih Brankas untuk Kebutuhan Kantor | CV Unggul Rejeki')

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
                url('https://images.unsplash.com/photo-1582139329536-e7284fece509?auto=format&fit=crop&w=1350&q=80');
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

        .tip-card {
            background: #fff;
            border: 1px solid #eee;
            border-radius: 8px;
            padding: 25px;
            margin-bottom: 20px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.05);
            transition: 0.3s;
        }

        .tip-card:hover {
            box-shadow: 0 8px 25px rgba(197, 148, 53, 0.15);
            transform: translateY(-3px);
        }

        .tip-number {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 45px;
            height: 45px;
            background: var(--gold-primary);
            color: white;
            border-radius: 50%;
            font-weight: 800;
            font-size: 20px;
            margin-bottom: 15px;
        }

        .tip-card h3 {
            margin-top: 0 !important;
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
                    <li class="breadcrumb-item active" aria-current="page" style="color:white;">Tips Memilih Brankas</li>
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
                        <span class="article-category-badge">Panduan Keamanan</span>
                        <span class="meta-item"><i class="far fa-calendar-alt"></i> 15 Maret 2025</span>
                        <span class="meta-item"><i class="far fa-user"></i> Tim CV Unggul Rejeki</span>
                        <span class="meta-item"><i class="far fa-clock"></i> 7 menit baca</span>
                    </div>

                    <h1 class="article-detail-title">5 Tips Memilih Brankas untuk Kebutuhan Kantor</h1>

                    <img src="https://images.unsplash.com/photo-1582139329536-e7284fece509?auto=format&fit=crop&w=1350&q=80"
                        class="article-featured-img" alt="Tips Memilih Brankas Kantor">

                    <div class="article-content">
                        <p>
                            Keamanan aset berharga merupakan salah satu prioritas utama dalam pengelolaan sebuah kantor
                            atau perusahaan. Mulai dari uang tunai, dokumen penting, sertifikat, hingga data sensitif,
                            semuanya membutuhkan perlindungan maksimal dari berbagai risiko seperti pencurian, kebakaran,
                            maupun bencana alam. Di sinilah peran <strong>brankas</strong> menjadi sangat krusial sebagai
                            benteng pertahanan terakhir aset perusahaan Anda.
                        </p>

                        <p>
                            Namun, dengan banyaknya pilihan brankas di pasaran dengan berbagai spesifikasi dan harga,
                            memilih brankas yang tepat bukanlah perkara mudah. Salah pilih brankas bisa berakibat fatal
                            terhadap keamanan aset Anda. Berikut ini <strong>5 tips penting</strong> yang perlu Anda
                            perhatikan sebelum membeli brankas untuk kebutuhan kantor.
                        </p>

                        <div class="highlight-box">
                            <div class="highlight-title">
                                <i class="fas fa-info-circle" style="color: var(--gold-primary); margin-right: 8px;"></i>
                                Catatan Penting
                            </div>
                            <p style="margin: 0;">
                                Investasi pada brankas berkualitas adalah investasi jangka panjang. Jangan tergiur harga
                                murah tanpa memperhatikan kualitas dan sertifikasi yang dimiliki produk tersebut.
                            </p>
                        </div>

                        <div class="tip-card">
                            <div class="tip-number">1</div>
                            <h3>Identifikasi Kebutuhan dan Jenis Aset yang Disimpan</h3>
                            <p>
                                Langkah pertama sebelum membeli brankas adalah memahami dengan jelas apa saja yang akan
                                Anda simpan di dalamnya. Apakah berupa uang tunai, dokumen kertas penting, perhiasan,
                                hard disk, atau kombinasi dari semuanya? Setiap jenis aset memiliki kebutuhan
                                perlindungan yang berbeda.
                            </p>
                            <p>
                                Misalnya, dokumen kertas membutuhkan brankas dengan ketahanan api yang tinggi karena
                                kertas akan terbakar pada suhu sekitar 177°C. Sementara untuk media digital seperti
                                hard disk, dibutuhkan brankas khusus media yang mampu menjaga suhu internal di bawah
                                52°C agar data tidak rusak.
                            </p>
                        </div>

                        <div class="tip-card">
                            <div class="tip-number">2</div>
                            <h3>Perhatikan Ukuran dan Kapasitas Brankas</h3>
                            <p>
                                Pilih ukuran brankas yang sesuai dengan volume aset yang akan disimpan. Sebaiknya pilih
                                kapasitas yang sedikit lebih besar dari kebutuhan saat ini untuk mengantisipasi
                                pertumbuhan aset di masa mendatang.
                            </p>
                            <p>
                                Pertimbangkan juga ruang penempatan brankas. Pastikan dimensi brankas sesuai dengan
                                lokasi yang direncanakan dan akses pintu serta lift yang akan dilalui saat instalasi.
                                Beberapa hal yang perlu dicek:
                            </p>
                            <ul>
                                <li>Dimensi luar dan dalam brankas</li>
                                <li>Berat brankas (untuk pertimbangan struktur lantai)</li>
                                <li>Ruang yang dibutuhkan untuk membuka pintu brankas</li>
                                <li>Konfigurasi rak dan laci di dalam brankas</li>
                            </ul>
                        </div>

                        <div class="tip-card">
                            <div class="tip-number">3</div>
                            <h3>Pilih Tipe Kunci yang Tepat</h3>
                            <p>
                                Sistem kunci adalah jantung dari sebuah brankas. Saat ini terdapat beberapa jenis kunci
                                brankas yang umum digunakan, masing-masing dengan kelebihan dan kekurangannya:
                            </p>
                            <ul>
                                <li><strong>Kunci Mekanik (Combination Lock):</strong> Tradisional, tahan lama, tidak
                                    memerlukan baterai, namun proses buka-tutup lebih lambat.</li>
                                <li><strong>Kunci Digital (Electronic Lock):</strong> Praktis dengan PIN, mudah diganti
                                    kodenya, namun memerlukan baterai sebagai sumber daya.</li>
                                <li><strong>Kunci Biometrik (Fingerprint):</strong> Tingkat keamanan tinggi karena unik
                                    untuk setiap pengguna, akses cepat, ideal untuk multi-user.</li>
                                <li><strong>Kunci Kombinasi (Dual Lock):</strong> Kombinasi dua sistem kunci untuk
                                    keamanan ganda, biasanya digunakan untuk brankas dengan nilai aset sangat tinggi.
                                </li>
                            </ul>
                            <p>
                                Untuk kantor dengan multi-user, kunci digital atau biometrik biasanya lebih praktis
                                karena memungkinkan beberapa orang memiliki akses tanpa harus menyalin kunci fisik.
                            </p>
                        </div>

                        <div class="tip-card">
                            <div class="tip-number">4</div>
                            <h3>Cek Sertifikasi dan Standar Keamanan</h3>
                            <p>
                                Brankas berkualitas selalu memiliki sertifikasi resmi yang membuktikan kemampuan
                                proteksinya telah diuji secara independen. Beberapa sertifikasi yang perlu diperhatikan:
                            </p>
                            <ul>
                                <li><strong>UL Listed (Underwriters Laboratories):</strong> Sertifikasi standar Amerika
                                    untuk ketahanan api dan keamanan.</li>
                                <li><strong>JIS (Japanese Industrial Standards):</strong> Standar industri Jepang yang
                                    juga mengukur ketahanan terhadap api dan benturan.</li>
                                <li><strong>EN 1143-1:</strong> Standar Eropa untuk ketahanan terhadap pencurian.</li>
                                <li><strong>SNI (Standar Nasional Indonesia):</strong> Standar lokal yang juga penting
                                    untuk dimiliki produk yang dipasarkan di Indonesia.</li>
                            </ul>
                            <p>
                                Pastikan brankas pilihan Anda memiliki minimal salah satu sertifikasi di atas, terutama
                                untuk aset bernilai tinggi.
                            </p>
                        </div>

                        <div class="tip-card">
                            <div class="tip-number">5</div>
                            <h3>Pertimbangkan Layanan Purna Jual dan Garansi</h3>
                            <p>
                                Tip terakhir yang sering diabaikan adalah memperhatikan aspek layanan purna jual.
                                Brankas adalah produk dengan masa pakai puluhan tahun, sehingga dukungan dari penjual
                                sangat penting untuk perawatan dan perbaikan jika sewaktu-waktu dibutuhkan.
                            </p>
                            <p>
                                Hal-hal yang perlu dipastikan dari penyedia brankas:
                            </p>
                            <ul>
                                <li>Garansi produk minimal 1-2 tahun</li>
                                <li>Ketersediaan suku cadang untuk jangka panjang</li>
                                <li>Layanan service teknisi yang responsif</li>
                                <li>Layanan reset kombinasi atau kode jika lupa</li>
                                <li>Layanan pemindahan brankas (relocation)</li>
                                <li>Reputasi penyedia yang baik dan berpengalaman</li>
                            </ul>
                        </div>

                        <h2>Kesimpulan</h2>
                        <p>
                            Memilih brankas untuk kebutuhan kantor bukanlah keputusan yang bisa diambil tergesa-gesa.
                            Lakukan analisis kebutuhan secara menyeluruh, bandingkan beberapa produk, dan pastikan Anda
                            membeli dari penyedia terpercaya. Ingat, brankas adalah investasi keamanan jangka panjang
                            untuk aset bisnis Anda.
                        </p>
                        <p>
                            Dengan menerapkan 5 tips di atas, Anda akan mendapatkan brankas yang tidak hanya melindungi
                            aset secara optimal, tetapi juga memberikan ketenangan pikiran dalam menjalankan operasional
                            kantor sehari-hari.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection