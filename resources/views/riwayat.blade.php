<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Pengajuan - SiTahan SBY</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Fonts: Plus Jakarta Sans -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/riwayat.css') }}">
</head>
<body class="bg-white text-gray-800 antialiased font-['Plus_Jakarta_Sans']">
    <div class="min-h-screen flex flex-col justify-start items-start bg-white">
        
        <!-- Header Navbar -->
        <header class="self-stretch h-20 px-16 bg-white border-b border-slate-100 flex justify-between items-center">
            <div class="flex items-center gap-2.5">
                <div class="w-10 h-10 bg-sky-900 rounded-xl flex justify-center items-center">
                    <div class="w-8 relative overflow-hidden flex justify-center items-center">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                        </svg>
                    </div>
                </div>
                <div class="flex flex-col justify-start items-start">
                    <span class="text-sky-900 text-base font-bold leading-6">SiTahan SBY</span>
                    <span class="text-gray-500 text-[9px] font-semibold uppercase tracking-tight leading-3">Ketahanan Ekonomi Surabaya</span>
                </div>
            </div>

            <div class="flex items-center gap-4">
                <a href="{{ route('riwayat') }}" class="min-h-[44px] px-4 rounded-lg bg-slate-50 border border-slate-200 flex justify-center items-center">
                    <span class="text-sky-900 text-xs font-bold leading-5">Riwayat Pengajuan</span>
                </a>
                <div class="flex items-center gap-3">
                    <div class="w-8 h-8 bg-indigo-50 rounded-2xl flex justify-center items-center">
                        <span class="text-sky-900 text-[10px] font-extrabold leading-4">AR</span>
                    </div>
                    <div class="flex flex-col justify-start items-start">
                        <span class="text-gray-800 text-[10px] font-bold leading-4">Andi Rahman</span>
                        <span class="text-gray-500 text-[8px] font-normal leading-3">Akun warga</span>
                    </div>
                </div>
            </div>
        </header>

        <!-- Main Content Body -->
        <main class="self-stretch min-h-[485px] px-7 pt-12 pb-24 bg-slate-100 flex flex-col justify-start items-center">
            <div class="w-[1080px] max-w-full flex flex-col justify-start items-start">
                
                <!-- Page Header & Button -->
                <div class="self-stretch flex justify-between items-center mb-7">
                    <div class="flex flex-col justify-start items-start">
                        <h1 class="text-sky-950 text-3xl font-normal leading-10">Riwayat pengajuan</h1>
                        <p class="text-gray-500 text-xs font-normal leading-5 pt-2">Pantau status verifikasi dan masa berlaku surat Anda.</p>
                    </div>
                    <a href="#" id="btn-simulasi-baru" class="min-h-[44px] px-4 bg-sky-900 hover:bg-sky-800 transition-colors rounded-lg shadow-[0px_5px_14px_0px_rgba(22,58,107,0.15)] flex justify-center items-center text-white text-xs font-bold leading-5">
                        Buat Simulasi Baru
                    </a>
                </div>

                <!-- Table Container -->
                <div class="self-stretch bg-white rounded-xl border border-slate-200 overflow-hidden flex flex-col">
                    
                    <!-- Table Header -->
                    <div class="px-5 py-3.5 bg-slate-50 grid grid-cols-12 gap-4 border-b border-slate-200">
                        <div class="col-span-5 text-[8px] font-bold uppercase text-gray-500 tracking-wider">Jenis surat</div>
                        <div class="col-span-3 text-[8px] font-bold uppercase text-gray-500 tracking-wider">Tanggal pengajuan</div>
                        <div class="col-span-4 text-[8px] font-bold uppercase text-gray-500 tracking-wider">Status</div>
                    </div>

                    <!-- Row 1: Menunggu Verifikasi -->
                    <div class="px-5 py-3.5 bg-white grid grid-cols-12 gap-4 items-center border-b border-slate-200">
                        <div class="col-span-5 flex items-center gap-3">
                            <div class="w-8 h-8 bg-indigo-50 rounded-md flex justify-center items-center shrink-0">
                                <svg class="w-5 h-5 text-sky-900" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                            </div>
                            <div class="flex flex-col gap-0.5">
                                <span class="text-gray-800 text-[10px] font-bold leading-4">Surat Keterangan Kondisi Ekonomi</span>
                                <span class="text-gray-500 text-[8px] font-normal leading-3">STH-2025-0514-028</span>
                            </div>
                        </div>
                        <div class="col-span-3 text-gray-500 text-[9px] leading-3">
                            14 Mei 2025
                        </div>
                        <div class="col-span-4 flex justify-between items-center">
                            <span class="px-2 py-1.5 bg-yellow-50 rounded-full text-yellow-600 text-[8px] font-extrabold leading-3 inline-block">
                                Menunggu Verifikasi
                            </span>
                            <a href="#" class="flex items-center gap-1 text-sky-900 text-[9px] font-bold hover:underline detail-trigger">
                                <span>Lihat detail</span>
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- Row 2: Aktif -->
                    <div class="px-5 py-3.5 bg-white grid grid-cols-12 gap-4 items-center border-b border-slate-200">
                        <div class="col-span-5 flex items-center gap-3">
                            <div class="w-8 h-8 bg-indigo-50 rounded-md flex justify-center items-center shrink-0">
                                <svg class="w-5 h-5 text-sky-900" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                            </div>
                            <div class="flex flex-col gap-0.5">
                                <span class="text-gray-800 text-[10px] font-bold leading-4">Surat Keterangan Finansial</span>
                                <span class="text-gray-500 text-[8px] font-normal leading-3">STH-2025-0302-114</span>
                            </div>
                        </div>
                        <div class="col-span-3 text-gray-500 text-[9px] leading-3">
                            02 Maret 2025
                        </div>
                        <div class="col-span-4 flex justify-between items-center">
                            <div class="flex flex-col gap-0.5">
                                <span class="px-2 py-1.5 bg-emerald-50 rounded-full text-green-600 text-[8px] font-extrabold leading-3 inline-block w-fit">
                                    Aktif
                                </span>
                                <span class="text-gray-500 text-[7.20px] leading-3">Berlaku hingga 06 Mei 2025</span>
                            </div>
                            <a href="#" class="flex items-center gap-1 text-sky-900 text-[9px] font-bold hover:underline detail-trigger">
                                <span>Lihat surat</span>
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- Row 3: Kedaluwarsa -->
                    <div class="px-5 py-3.5 bg-white grid grid-cols-12 gap-4 items-center">
                        <div class="col-span-5 flex items-center gap-3">
                            <div class="w-8 h-8 bg-indigo-50 rounded-md flex justify-center items-center shrink-0">
                                <svg class="w-5 h-5 text-sky-900" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                            </div>
                            <div class="flex flex-col gap-0.5">
                                <span class="text-gray-800 text-[10px] font-bold leading-4">Surat Keterangan Kondisi Ekonomi</span>
                                <span class="text-gray-500 text-[8px] font-normal leading-3">STH-2024-1208-087</span>
                            </div>
                        </div>
                        <div class="col-span-3 text-gray-500 text-[9px] leading-3">
                            08 Desember 2024
                        </div>
                        <div class="col-span-4 flex justify-between items-center">
                            <span class="px-2 py-1.5 bg-red-50 rounded-full text-red-500 text-[8px] font-extrabold leading-3 inline-block">
                                Kedaluwarsa
                            </span>
                            <a href="#" class="flex items-center gap-1 text-sky-900 text-[9px] font-bold hover:underline detail-trigger">
                                <span>Lihat detail</span>
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>

                </div>

                <!-- Footer Info Box -->
                <div class="self-stretch pt-4">
                    <div class="px-4 py-3.5 bg-indigo-50 rounded-lg flex items-start gap-2.5">
                        <svg class="w-5 h-5 text-sky-900 shrink-0 mt-0.5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <div class="flex flex-col gap-1">
                            <span class="text-sky-900 text-[9px] font-bold leading-3">Tentang masa berlaku</span>
                            <p class="text-sky-900 text-[9px] font-normal leading-3">Surat yang disetujui berlaku 65 hari sejak tanggal terbit. Tombol unduh otomatis dinonaktifkan setelah masa berlaku berakhir.</p>
                        </div>
                    </div>
                </div>

            </div>
        </main>
    </div>

    <!-- JavaScript -->
    <script src="{{ asset('js/riwayat.js') }}"></script>
</body>
</html>