@extends('layouts.landing')

@section('title', 'Katalog Produk Brankas | CV Unggul Rejeki')

@section('content')
    <style>
        :root {
            --gold-primary: #C59435;
            --black-primary: #1A1A1A;
            --gray-bg: #f8f9fa;
            --gray-text: #666;
            --container-max: 1200px;
        }

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

        .custom-breadcrumb .breadcrumb-item a:hover {
            color: #fff;
        }

        .custom-breadcrumb .breadcrumb-item+.breadcrumb-item::before {
            content: "\f105";
            font-family: "Font Awesome 5 Free";
            font-weight: 900;
            color: var(--gold-primary);
            padding: 0 15px;
        }

        .product-section {
            padding: 60px 0;
            background-color: #fff;
        }

        .category-sidebar {
            background: var(--gray-bg);
            padding: 25px;
            border-radius: 8px;
            position: sticky;
            top: 100px;
        }

        .category-title {
            font-weight: 700;
            margin-bottom: 20px;
            border-bottom: 2px solid var(--gold-primary);
            padding-bottom: 10px;
        }

        .category-list {
            list-style: none;
            padding: 0;
        }

        .category-link {
            color: #555;
            text-decoration: none !important;
            transition: 0.3s;
            display: flex;
            justify-content: space-between;
            padding: 8px 0;
        }

        .category-link:hover,
        .category-link.active {
            color: var(--gold-primary);
            font-weight: 700;
        }

        @media (min-width: 992px) {
            .container {
                width: 100%;
                max-width: var(--container-max);
            }
        }

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

    @yield('extra-css')

    <div class="breadcrumb-area">
        <div class="container">
            <h1>@yield('category-name', 'Katalog Produk')</h1>
            <nav aria-label="breadcrumb">
                <ol class="custom-breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Beranda</a></li>

                    @if(Request::is('*jual-beli*'))
                        <li class="breadcrumb-item active" aria-current="page" style="color:white;">Jual Beli</li>
                    @elseif(Request::is('*service*'))
                        <li class="breadcrumb-item active" aria-current="page" style="color:white;">Service</li>
                    @else
                        <li class="breadcrumb-item active" aria-current="page" style="color:white;">Produk</li>
                    @endif
                </ol>
            </nav>
        </div>
    </div>

    <div class="product-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 mb-4">
                    <div class="category-sidebar">
                        <h5 class="category-title">Kategori</h5>
                        <ul class="category-list">
                            <li>
                                <a href="{{ route('landing.produk.jualbeli') }}"
                                    class="category-link {{ Request::is('*jual-beli*') ? 'active' : '' }}">
                                    Jual Beli <span><i class="fas fa-chevron-right small"></i></span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('landing.produk.service') }}"
                                    class="category-link {{ Request::is('*service*') ? 'active' : '' }}">
                                    Service <span><i class="fas fa-chevron-right small"></i></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="row">
                        @yield('product-grid')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection