@extends('frontend.produk')

@section('title', 'Jual Brankas Bekas & Baru di Cilacap | CV Unggul Rejeki')
@section('meta_description', 'Jual brankas bekas dan baru di Cilacap. Tersedia berbagai ukuran, kualitas terjamin, dan layanan service brankas terpercaya.')
@section('extra-css')
    <style>
        :root {
            --gold-primary: #C59435;
            --black-primary: #1A1A1A;
            --soft-gray: #fcfcfc;
        }

        .no-copy {
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        .product-card {
            background: #fff;
            border: 1px solid #e5e5e5;
            border-radius: 10px;
            overflow: hidden;
            height: 100%;
            display: flex;
            flex-direction: column;
            transition: all 0.3s ease;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.08);
            border-color: var(--gold-primary);
        }

        .img-container {
            width: 100%;
            height: 180px;
            background-color: #f4f4f4;
            border-bottom: 1px solid #eee;
            overflow: hidden;
            cursor: pointer;
        }

        .product-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            -webkit-user-drag: none;
        }

        .content-wrapper {
            padding: 15px;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }

        .title-box {
            margin-bottom: 12px;
            min-height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .product-title {
            font-weight: 700;
            color: var(--black-primary);
            font-size: 0.95rem;
            text-transform: uppercase;
            margin: 0;
        }

        .specs-container {
            background: var(--soft-gray);
            border: 1px solid #f0f0f0;
            border-radius: 8px;
            padding: 10px;
            margin-bottom: 15px;
        }

        .spec-row {
            display: flex;
            justify-content: space-between;
            padding: 4px 0;
            border-bottom: 1px dotted #ddd;
        }

        .spec-row:last-child {
            border-bottom: none;
        }

        .spec-label {
            font-size: 0.7rem;
            font-weight: 600;
            color: #888;
        }

        .spec-value {
            font-size: 0.75rem;
            font-weight: 700;
            color: var(--black-primary);
        }

        .btn-action {
            display: flex;
            align-items: center;
            justify-content: center;
            background: var(--black-primary);
            color: #fff;
            padding: 8px;
            border-radius: 6px;
            font-weight: 700;
            text-transform: uppercase;
            font-size: 10px;
            transition: 0.3s;
            text-decoration: none !important;
            margin-top: auto;
        }

        .btn-action:hover {
            background: var(--gold-primary);
            color: #fff;
        }

        /* POPUP MINIMALIS FIX */
        .img-modal {
            display: none;
            position: fixed;
            z-index: 10000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.9);
            align-items: center;
            justify-content: center;
        }

        .modal-content-wrapper {
            position: relative;
            display: inline-block;
            /* Mengikuti ukuran gambar */
            max-width: 90%;
            max-height: 90%;
        }

        #imgPopup {
            display: block;
            max-width: 100%;
            max-height: 85vh;
            object-fit: contain;
            border: 2px solid #fff;
            border-radius: 4px;
        }

        /* Tanda Silang Nempel Gambar */
        .close-modal {
            position: absolute;
            top: -15px;
            right: -15px;
            background: var(--gold-primary);
            color: #fff;
            width: 35px;
            height: 35px;
            line-height: 32px;
            text-align: center;
            border-radius: 50%;
            font-size: 24px;
            font-weight: bold;
            cursor: pointer;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
            z-index: 10001;
            transition: 0.2s;
        }

        .close-modal:hover {
            transform: scale(1.1);
            background: #fff;
            color: var(--black-primary);
        }

        body.modal-open {
            overflow: hidden;
        }
    </style>
@endsection

@section('product-grid')
    @php
        $products = [
            [
                'nama' => 'CHUBB SECOND',
                'class' => 'no-drag',
                'alt' => 'Jual CHUBB SECOND di Cilacap - CV Unggul Rejeki',
                'img' => 'images/jualbeli/photo_2022-08-09_08-58-39.jpg',
                'specs' => [
                    'Panjang' => '77 CM',
                    'Lebar' => '90 CM',
                    'Tinggi' => '180 CM',
                    'Berat' => '1550 KG'
                ]
            ],
            [
                'nama' => 'CHUBB SECOND BRANKAS BPKB',
                'class' => 'no-drag',
                'alt' => 'Jual CHUBB SECOND BRANKAS BPKB di Cilacap - CV Unggul Rejeki',
                'img' => 'images/jualbeli/IMG-20220717-WA0084.jpg',
                'specs' => [
                    'Panjang' => '80 CM',
                    'Lebar' => '54 CM',
                    'Tinggi' => '158 CM',
                    'Berat' => '-'
                ]
            ],
            [
                'nama' => 'CHUBB SECOND',
                'class' => 'no-drag',
                'alt' => 'Jual CHUBB SECOND di Cilacap - CV Unggul Rejeki',
                'img' => 'images/jualbeli/IMG-20220717-WA0079.jpg',
                'specs' => [
                    'Panjang' => '82 CM',
                    'Lebar' => '74 CM',
                    'Tinggi' => '121 CM',
                    'Berat' => '-'
                ]
            ]
        ];
    @endphp

    @foreach($products as $p)
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="product-card no-copy" oncontextmenu="return false;">
                <div class="img-container" onclick="openModal('{{ asset($p['img']) }}')">
                    <img src="{{ asset($p['img']) }}" class="product-img"
                        alt="Jual {{ $p['nama'] }} di Cilacap - CV Unggul Rejeki" ondragstart="return false;">
                </div>

                <div class="content-wrapper">
                    <div class="title-box">
                        <h5 class="product-title">{{ $p['nama'] }}</h5>
                    </div>

                    <div class="specs-container">
                        @foreach($p['specs'] as $label => $value)
                            <div class="spec-row">
                                <span class="spec-label">{{ $label }}</span>
                                <span class="spec-value">{{ $value }}</span>
                            </div>
                        @endforeach
                    </div>

                    <a href="https://wa.me/6285600773008" class="btn-action" target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-whatsapp mr-2"></i> Hubungi Admin
                    </a>
                </div>
            </div>
        </div>
    @endforeach

    <div id="imageModal" class="img-modal">
        <div class="modal-content-wrapper no-copy">
            <span class="close-modal" onclick="closeModal()">&times;</span>
            <img id="imgPopup" oncontextmenu="return false;" ondragstart="return false;">
        </div>
    </div>

    <script>
        function openModal(imgSrc) {
            const modal = document.getElementById("imageModal");
            const img = document.getElementById("imgPopup");
            img.src = imgSrc;
            modal.style.display = "flex";
            document.body.classList.add("modal-open");
        }

        function closeModal() {
            const modal = document.getElementById("imageModal");
            modal.style.display = "none";
            document.body.classList.remove("modal-open");
        }

        document.getElementById("imageModal").onclick = function (e) {
            if (e.target === this) closeModal();
        };
    </script>
@endsection