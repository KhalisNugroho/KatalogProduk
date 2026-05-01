@extends('frontend.public.produk')

@section('title', 'Service Brankas Cilacap | CV Unggul Rejeki')
@section('meta_description', 'Layanan service brankas di Cilacap meliputi relokasi, perbaikan, pemasangan, dan service ATM oleh tenaga profesional CV Unggul Rejeki.')

@section('extra-css')
    <style>
        :root {
            --gold-primary: #C59435;
            --black-primary: #1A1A1A;
            --soft-gray: #fcfcfc;
        }

        /* Proteksi Copy */
        .no-copy {
            -webkit-user-select: none;
            user-select: none;
        }

        .service-card {
            background: #fff;
            border: 1px solid #eee;
            border-radius: 15px;
            overflow: hidden;
            height: 100%;
            display: flex;
            flex-direction: column;
            transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
            position: relative;
        }

        .service-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            border-color: var(--gold-primary);
        }

        /* Area Gambar - Proporsional & Rapi */
        .service-img-container {
            width: 100%;
            height: 220px;
            background-color: #f8f8f8;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .service-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            /* Untuk service, cover biasanya lebih dramatis dan bagus */
            transition: transform 0.5s ease;
            -webkit-user-drag: none;
        }

        .service-card:hover .service-img {
            transform: scale(1.1);
        }

        .service-content {
            padding: 25px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            text-align: center;
        }

        .service-title {
            font-weight: 800;
            font-size: 1.1rem;
            color: var(--black-primary);
            text-transform: uppercase;
            margin-bottom: 12px;
            letter-spacing: 0.5px;
            min-height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .service-description {
            font-size: 0.9rem;
            color: #666;
            line-height: 1.6;
            margin-bottom: 20px;
            flex-grow: 1;
        }

        .service-divider {
            width: 50px;
            height: 3px;
            background: var(--gold-primary);
            margin: 0 auto 20px auto;
            border-radius: 2px;
        }

        .btn-contact {
            background: var(--black-primary);
            color: #fff !important;
            padding: 12px;
            border-radius: 8px;
            font-size: 11px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            text-decoration: none !important;
            transition: 0.3s;
            border: 2px solid var(--black-primary);
        }

        .btn-contact:hover {
            background: transparent;
            color: var(--black-primary) !important;
        }

        /* Badge Layanan Profesional */
        .service-badge {
            position: absolute;
            top: 15px;
            left: 15px;
            background: rgba(197, 148, 53, 0.9);
            color: white;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 10px;
            font-weight: 700;
            z-index: 2;
            text-transform: uppercase;
        }
    </style>
@endsection

@section('product-grid')
    @php
        $services = [
            [
                'nama' => 'Relokasi Brankas',
                'alt' => 'Layanan relokasi brankas di Cilacap oleh CV Unggul Rejeki',
                'deskripsi' => 'Solusi pemindahan brankas antar lantai atau antar lokasi dengan peralatan khusus dan tenaga ahli profesional.',
                'img' => 'images/service/photo_2022-08-01_20-42-58.jpg'
            ],
            [
                'nama' => 'Servis Pintu Khasanah',
                'alt' => 'Servis pintu khasanah brankas di Cilacap oleh CV Unggul Rejeki',
                'deskripsi' => 'Layanan perawatan dan perbaikan pintu ruang besi (Strong Room) untuk memastikan keamanan operasional perbankan Anda.',
                'img' => 'images/service/photo_2022-08-09_08-40-57.jpg'
            ],
            [
                'nama' => 'Servis & Relokasi ATM',
                'alt' => 'Servis dan relokasi ATM brankas di Cilacap oleh CV Unggul Rejeki',
                'deskripsi' => 'Layanan teknis mesin ATM mulai dari pemindahan lokasi hingga penanganan masalah sistem penguncian yang macet atau lupa PIN.',
                'img' => 'images/service/photo_2022-08-09_08-40-22.jpg'
            ],
            [
                'nama' => 'Pemasangan Khasanah',
                'alt' => 'Pemasangan khasanah brankas di Cilacap oleh CV Unggul Rejeki',
                'deskripsi' => 'Instalasi pintu pengaman standar tinggi dengan presisi maksimal untuk proteksi aset berharga di gedung maupun kantor.',
                'img' => 'images/service/photo_2022-08-09_08-50-22.jpg'
            ]
        ];
    @endphp

    @foreach($services as $s)
        <div class="col-md-6 mb-4">
            <div class="service-card no-copy" oncontextmenu="return false;">
                <div class="service-badge">Layanan Unggul</div>

                <div class="service-img-container">
                    <img src="{{ asset($s['img']) }}" class="service-img" alt="{{ $s['nama'] }}" ondragstart="return false;">
                </div>

                <div class="service-content">
                    <h5 class="service-title">{{ $s['nama'] }}</h5>
                    <div class="service-divider"></div>
                    <p class="service-description">
                        {{ $s['deskripsi'] }}
                    </p>

                    <a href="https://wa.me/6285600773008" class="btn-contact" target="_blank">
                        <i class="fab fa-whatsapp mr-2"></i> Hubungi Spesialis
                    </a>
                </div>
            </div>
        </div>
    @endforeach
@endsection