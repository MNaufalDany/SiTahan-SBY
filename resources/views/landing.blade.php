
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#173c70">

    <title>SiTahan SBY — Ketahanan Ekonomi Surabaya</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    @vite([
        'resources/css/app.css',
        'resources/css/landing.css',
        'resources/js/landing.js'
    ])
</head>

<body class="bg-white antialiased">

    <!-- SVG ICONS -->
    <svg xmlns="http://www.w3.org/2000/svg"
         class="sr-only" aria-hidden="true">

        <symbol id="ic-home" viewBox="0 0 24 24">
            <path d="m3 10 9-7 9 7v10a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V10Z"/>
            <path d="M9 21v-7h6v7M3 10h18"/>
        </symbol>

        <symbol id="ic-arrow" viewBox="0 0 24 24">
            <path d="M4 12h16m-6-6 6 6-6 6"/>
        </symbol>

        <symbol id="ic-shield" viewBox="0 0 24 24">
            <path d="m12 2 8 4v6c0 5-3.5 8.5-8 10-4.5-1.5-8-5-8-10V6l8-4Z"/>
            <path d="m9 12 2 2 4-4"/>
        </symbol>

        <symbol id="ic-check" viewBox="0 0 24 24">
            <path d="m5 12 4 4L19 6"/>
        </symbol>

        <symbol id="ic-info" viewBox="0 0 24 24">
            <circle cx="12" cy="12" r="9"/>
            <path d="M12 11v5M12 8h.01"/>
        </symbol>

        <symbol id="ic-users" viewBox="0 0 24 24">
            <circle cx="8" cy="8" r="3"/>
            <path d="M2 20v-2a6 6 0 0 1 12 0v2M17 11a3 3 0 1 0-1-5.8M17 14a5 5 0 0 1 5 5v1"/>
        </symbol>

        <symbol id="ic-child" viewBox="0 0 24 24">
            <circle cx="12" cy="5" r="2.5"/>
            <path d="M8 11h8m-4 0v10m-4-7 4-3 4 3M10 21v-5m4 5v-5"/>
        </symbol>

        <symbol id="ic-wallet" viewBox="0 0 24 24">
            <rect x="3" y="6" width="18" height="14" rx="2"/>
            <path d="M3 10h18M6 6V4h12v2M16 15h2"/>
        </symbol>

        <symbol id="ic-file" viewBox="0 0 24 24">
            <path d="M6 2h8l5 5v15H6a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2Z"/>
            <path d="M14 2v6h5M8 12h8M8 16h8"/>
        </symbol>

        <symbol id="ic-menu" viewBox="0 0 24 24">
            <path d="M4 7h16M4 12h16M4 17h16"/>
        </symbol>

        <symbol id="ic-close" viewBox="0 0 24 24">
            <path d="m5 5 14 14M19 5 5 19"/>
        </symbol>
    </svg>


    <!-- ========================= -->
    <!-- NAVBAR -->
    <!-- ========================= -->

    <header class="site-header" id="beranda">

        <div class="page-container header-inner">

            <a href="#beranda" class="brand">

                <span class="brand-mark">
                    <svg class="icon">
                        <use href="#ic-home"/>
                    </svg>
                </span>

                <span class="brand-text">
                    <strong>SiTahan SBY</strong>
                    <small>KETAHANAN EKONOMI SURABAYA</small>
                </span>

            </a>

            <nav class="desktop-nav">
                <a href="#beranda">Beranda</a>
                <a href="#tentang">Tentang</a>
                <a href="#cara-kerja">Cara Kerja</a>
                <a href="#skenario">Simulasi</a>
            </nav>

            <div class="header-actions">

                <a href="{{ url('/masuk') }}" class="login-link">
                    Masuk
                </a>

                <a href="{{ url('/simulasi') }}"
                   class="btn btn-primary header-cta">

                    Mulai Simulasi

                    <svg class="icon">
                        <use href="#ic-arrow"/>
                    </svg>

                </a>

                <button
                    id="menuToggle"
                    class="menu-toggle"
                    type="button"
                    aria-label="Buka menu navigasi"
                    aria-controls="mobileNav"
                    aria-expanded="false">

                    <svg class="icon icon-menu">
                        <use href="#ic-menu"/>
                    </svg>

                    <svg class="icon icon-close">
                        <use href="#ic-close"/>
                    </svg>

                </button>

            </div>

        </div>

        <!-- MOBILE NAVIGATION -->

        <nav class="mobile-nav" id="mobileNav" hidden>

            <a href="#beranda">Beranda</a>
            <a href="#tentang">Tentang</a>
            <a href="#cara-kerja">Cara Kerja</a>
            <a href="#skenario">Simulasi</a>

            <a href="{{ url('/masuk') }}">Masuk</a>

            <a href="{{ url('/simulasi') }}"
               class="mobile-start">
                Mulai Simulasi →
            </a>

        </nav>

    </header>


    <main>

        <!-- ========================= -->
        <!-- HERO SECTION -->
        <!-- ========================= -->

        <section class="hero">

            <div class="page-container hero-grid">

                <!-- LEFT CONTENT -->

                <div class="hero-copy">

                    <p class="eyebrow">
                        <span class="eyebrow-dot"></span>
                        BERBASIS DATA ACUAN BPS KOTA SURABAYA
                    </p>

                    <h1>
                        Simulasikan kondisi ekonomimu
                        dengan lebih terukur.
                    </h1>

                    <p class="hero-description">
                        Pahami kondisi keuangan rumah tangga hari ini,
                        lalu coba skenario perubahan hidup sebelum
                        mengambil langkah berikutnya.
                    </p>

                    <div class="hero-actions">

                        <a href="{{ url('/simulasi') }}"
                           class="btn btn-primary">

                            Mulai Simulasi

                            <svg class="icon">
                                <use href="#ic-arrow"/>
                            </svg>

                        </a>

                        <a href="#cara-kerja"
                           class="btn btn-outline">

                            Pelajari Cara Kerja

                        </a>

                    </div>

                    <p class="privacy-note">

                        <svg class="icon">
                            <use href="#ic-shield"/>
                        </svg>

                        Data tidak disimpan tanpa persetujuan Anda.

                    </p>

                </div>


                <!-- RIGHT CONTENT / SIMULATION PREVIEW -->

                <div class="hero-visual">

                    <div class="simulation-window">

                        <div class="window-bar">

                            <span class="window-dots">
                                <i></i>
                                <i></i>
                                <i></i>
                            </span>

                            <span>Ringkasan Simulasi</span>

                        </div>

                        <div class="window-content">

                            <div class="simulation-status">

                                <div>

                                    <span class="muted-label">
                                        Kondisi setelah simulasi
                                    </span>

                                    <strong>Relatif Stabil</strong>

                                </div>

                                <span class="status-check">
                                    <svg class="icon">
                                        <use href="#ic-check"/>
                                    </svg>
                                </span>

                            </div>

                            <div class="progress-track">
                                <span></span>
                            </div>


                            <!-- COMPARISON -->

                            <div class="comparison">

                                <div class="comparison-card">

                                    <small>Sebelum</small>

                                    <strong>Rp1.700.000</strong>

                                    <span>Sisa arus kas</span>

                                </div>

                                <svg class="icon comparison-arrow">
                                    <use href="#ic-arrow"/>
                                </svg>

                                <div class="comparison-card after">

                                    <small>Sesudah</small>

                                    <strong>Rp2.300.000</strong>

                                    <span>Sisa arus kas</span>

                                </div>

                            </div>


                            <!-- INFORMATION -->

                            <div class="simulation-note">

                                <svg class="icon">
                                    <use href="#ic-info"/>
                                </svg>

                                <div>

                                    <strong>Catatan untuk Anda</strong>

                                    <p>
                                        Arus kas tetap positif setelah perubahan.
                                    </p>

                                </div>

                            </div>

                        </div>

                    </div>


                    <!-- FLOATING BADGE -->

                    <div class="privacy-badge">

                        <svg class="icon">
                            <use href="#ic-shield"/>
                        </svg>

                        <span>
                            <strong>Privat &amp; aman</strong>
                            <small>Data Anda terlindungi</small>
                        </span>

                    </div>

                </div>

            </div>

        </section>


        <!-- ========================= -->
        <!-- ABOUT SECTION -->
        <!-- ========================= -->

        <section class="about-section section-space" id="tentang">

            <div class="page-container about-grid">

                <div>

                    <p class="eyebrow">
                        MENGENAL SITAHAN SBY
                    </p>

                    <h2>
                        Alat bantu sederhana untuk keputusan
                        hidup yang lebih siap.
                    </h2>

                </div>

                <div class="about-description">

                    <p>
                        SiTahan SBY membantu warga Surabaya
                        memahami daya tahan ekonomi rumah tangga
                        melalui perhitungan yang transparan
                        dan mudah dibaca.
                    </p>

                    <div class="info-box">

                        <svg class="icon">
                            <use href="#ic-info"/>
                        </svg>

                        <p>
                            Hasilnya adalah gambaran informatif,
                            bukan penentu mutlak keputusan hidup
                            atau keputusan resmi instansi.
                        </p>

                    </div>

                </div>

            </div>

        </section>


        <!-- ========================= -->
        <!-- SCENARIOS SECTION -->
        <!-- ========================= -->

        <section class="scenarios-section" id="skenario">

            <div class="page-container">

                <div class="section-heading-row">

                    <div>

                        <p class="eyebrow">
                            YANG DAPAT DICOBA
                        </p>

                        <h2>
                            Skenario yang dekat dengan kehidupan.
                        </h2>

                    </div>

                    <p>
                        Ubah satu kondisi, lalu lihat dampaknya
                        pada ketahanan ekonomi rumah tangga.
                    </p>

                </div>


                @php

                    $scenarios = [

                        [
                            'number' => '01',
                            'icon' => 'ic-users',
                            'title' => 'Menikah',
                            'description' => 'Lihat dampak pendapatan dan biaya bersama pasangan.',
                            'slug' => 'menikah'
                        ],

                        [
                            'number' => '02',
                            'icon' => 'ic-child',
                            'title' => 'Tambah Anak',
                            'description' => 'Perkirakan kesiapan arus kas untuk anggota baru.',
                            'slug' => 'tambah-anak'
                        ],

                        [
                            'number' => '03',
                            'icon' => 'ic-users',
                            'title' => 'Tambah Anggota Rumah Tangga',
                            'description' => 'Hitung perubahan biaya hidup bersama keluarga.',
                            'slug' => 'tambah-anggota'
                        ],

                        [
                            'number' => '04',
                            'icon' => 'ic-wallet',
                            'title' => 'Perubahan Pendapatan',
                            'description' => 'Uji kondisi saat pendapatan naik atau turun.',
                            'slug' => 'pendapatan'
                        ]

                    ];

                @endphp


                <div class="scenario-grid">

                    @foreach ($scenarios as $scenario)

                        <article class="scenario-card">

                            <div class="scenario-card-top">

                                <span class="scenario-icon">

                                    <svg class="icon">
                                        <use href="#{{ $scenario['icon'] }}"/>
                                    </svg>

                                </span>

                                <span class="scenario-number">
                                    {{ $scenario['number'] }}
                                </span>

                            </div>

                            <h3>
                                {{ $scenario['title'] }}
                            </h3>

                            <p>
                                {{ $scenario['description'] }}
                            </p>

                            <a href="{{ url('/simulasi') }}?skenario={{ $scenario['slug'] }}">

                                Coba simulasi

                                <svg class="icon">
                                    <use href="#ic-arrow"/>
                                </svg>

                            </a>

                        </article>

                    @endforeach

                </div>

            </div>

        </section>


        <!-- ========================= -->
        <!-- HOW IT WORKS -->
        <!-- ========================= -->

        <section class="how-section" id="cara-kerja">

            <div class="page-container">

                <div class="how-panel">

                    <div class="how-copy">

                        <p class="eyebrow">
                            CARA KERJA
                        </p>

                        <h2>
                            Empat langkah, hasil yang mudah dipahami.
                        </h2>

                        <p>
                            Tidak perlu akun untuk menghitung.
                            Isi data secukupnya dan dapatkan
                            gambaran kondisi dalam beberapa menit.
                        </p>

                        <a href="{{ url('/simulasi') }}"
                           class="btn btn-white">

                            Mulai sekarang

                            <svg class="icon">
                                <use href="#ic-arrow"/>
                            </svg>

                        </a>

                    </div>


                    <ol class="steps-list">

                        <li>

                            <span class="step-number">1</span>

                            <div>

                                <h3>Isi kondisi awal</h3>

                                <p>
                                    Masukkan kondisi rumah tangga
                                    dan finansial bulanan.
                                </p>

                            </div>

                        </li>


                        <li>

                            <span class="step-number">2</span>

                            <div>

                                <h3>Lihat hasil awal</h3>

                                <p>
                                    Sistem menghitung indikator utama
                                    secara otomatis.
                                </p>

                            </div>

                        </li>


                        <li>

                            <span class="step-number">3</span>

                            <div>

                                <h3>Pilih skenario</h3>

                                <p>
                                    Coba satu perubahan hidup
                                    yang ingin dipertimbangkan.
                                </p>

                            </div>

                        </li>


                        <li>

                            <span class="step-number">4</span>

                            <div>

                                <h3>Pahami hasil</h3>

                                <p>
                                    Bandingkan kondisi, peringatan,
                                    dan saran praktis.
                                </p>

                            </div>

                        </li>

                    </ol>

                </div>

            </div>

        </section>


        <!-- ========================= -->
        <!-- VERIFICATION SECTION -->
        <!-- ========================= -->

        <section class="verification-section">

            <div class="page-container verification-grid">

                <!-- DOCUMENT ILLUSTRATION -->

                <div class="document-illustration">

                    <div class="document-icon">

                        <svg class="icon">
                            <use href="#ic-file"/>
                        </svg>

                    </div>

                    <span class="document-check">

                        <svg class="icon">
                            <use href="#ic-check"/>
                        </svg>

                    </span>

                </div>


                <!-- DESCRIPTION -->

                <div class="verification-copy">

                    <p class="eyebrow">
                        FITUR LANJUTAN
                    </p>

                    <h2>
                        Butuh hasil asesmen yang terverifikasi?
                    </h2>

                    <p>
                        Hasil simulasi dapat diajukan menjadi
                        surat keterangan kondisi ekonomi atau finansial.
                        Login hanya diperlukan saat Anda ingin
                        menyimpan hasil dan mengajukan verifikasi.
                    </p>

                    <ul>

                        <li>

                            <svg class="icon">
                                <use href="#ic-check"/>
                            </svg>

                            Diverifikasi petugas kelurahan

                        </li>

                        <li>

                            <svg class="icon">
                                <use href="#ic-check"/>
                            </svg>

                            Berlaku 65 hari setelah disetujui

                        </li>

                        <li>

                            <svg class="icon">
                                <use href="#ic-check"/>
                            </svg>

                            Status dapat dipantau dari akun Anda

                        </li>

                    </ul>

                    <p class="verification-disclaimer">

                        <svg class="icon">
                            <use href="#ic-info"/>
                        </svg>

                        Dokumen ini merupakan hasil asesmen,
                        bukan SKTM resmi.

                    </p>

                </div>

            </div>

        </section>


        <!-- ========================= -->
        <!-- FINAL CTA -->
        <!-- ========================= -->

        <section class="final-cta">

            <div class="page-container">

                <div class="cta-panel">

                    <div>

                        <p>
                            Siap memahami kondisi ekonomimu?
                        </p>

                        <h2>
                            Mulai dari kondisi hari ini.
                        </h2>

                    </div>

                    <a href="{{ url('/simulasi') }}"
                       class="btn btn-primary">

                        Mulai Simulasi Gratis

                        <svg class="icon">
                            <use href="#ic-arrow"/>
                        </svg>

                    </a>

                </div>

            </div>

        </section>

    </main>


    <!-- ========================= -->
    <!-- FOOTER -->
    <!-- ========================= -->

    <footer class="footer">

        <div class="page-container">

            <div class="footer-grid">

                <!-- BRAND -->

                <div class="footer-about">

                    <a href="#beranda" class="brand brand-footer">

                        <span class="brand-mark">

                            <svg class="icon">
                                <use href="#ic-home"/>
                            </svg>

                        </span>

                        <span class="brand-text">

                            <strong>SiTahan SBY</strong>

                            <small>
                                KETAHANAN EKONOMI SURABAYA
                            </small>

                        </span>

                    </a>

                    <p>
                        Alat bantu simulasi kondisi ekonomi
                        individu dan rumah tangga untuk
                        warga Surabaya.
                    </p>

                </div>


                <!-- NAVIGATION -->

                <div class="footer-links">

                    <h3>Navigasi</h3>

                    <a href="#beranda">Beranda</a>

                    <a href="{{ url('/simulasi') }}">
                        Mulai simulasi
                    </a>

                    <a href="{{ url('/riwayat-pengajuan') }}">
                        Riwayat pengajuan
                    </a>

                </div>


                <!-- INFORMATION -->

                <div class="footer-links">

                    <h3>Informasi</h3>

                    <a href="{{ url('/portal-petugas') }}">
                        Portal petugas kelurahan
                    </a>

                    <a href="https://surabayakota.bps.go.id"
                       target="_blank"
                       rel="noopener noreferrer">
                        Data acuan BPS Kota Surabaya
                    </a>

                    <a href="{{ url('/bantuan') }}">
                        Bantuan &amp; kebijakan privasi
                    </a>

                </div>

            </div>


            <div class="footer-bottom">

                <span>
                    © {{ date('Y') }} SiTahan SBY
                </span>

                <span>
                    Hasil simulasi bersifat informatif dan
                    bukan pengganti keputusan resmi instansi terkait.
                </span>

            </div>

        </div>

    </footer>

</body>
</html>
