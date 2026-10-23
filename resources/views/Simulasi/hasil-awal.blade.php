<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Awal - SiTahan SBY</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/hasil-awal.css') }}">
</head>
<body class="bg-slate-50 font-['Plus_Jakarta_Sans'] text-gray-800">

    <!-- Navbar -->
    <nav class="w-full bg-white/95 border-b border-slate-200/80 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-7 h-20 flex justify-between items-center">
            <!-- Logo -->
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 bg-sky-900 rounded-xl flex justify-center items-center">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                    </svg>
                </div>
                <div class="flex flex-col">
                    <span class="text-sky-900 text-base font-bold leading-tight">SiTahan SBY</span>
                    <span class="text-gray-500 text-[9px] font-semibold uppercase tracking-tight">Ketahanan Ekonomi Surabaya</span>
                </div>
            </div>

            <!-- Menus -->
            <div class="hidden md:flex gap-8">
                <a href="#" class="text-slate-600 text-xs font-semibold hover:text-sky-900">Beranda</a>
                <a href="#" class="text-slate-600 text-xs font-semibold hover:text-sky-900">Tentang</a>
                <a href="#" class="text-slate-600 text-xs font-semibold hover:text-sky-900">Cara Kerja</a>
                <a href="#" class="text-sky-900 text-xs font-bold">Simulasi</a>
            </div>

            <!-- Auth Buttons -->
            <div class="flex items-center gap-2">
                <button class="px-4 py-2.5 text-sky-900 text-xs font-bold rounded-lg hover:bg-sky-50 transition">Masuk</button>
                <button class="px-4 py-2.5 bg-sky-900 text-white text-xs font-bold rounded-lg shadow-lg hover:bg-sky-800 flex items-center gap-2 transition">
                    Mulai Simulasi
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </button>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="max-w-5xl mx-auto px-7 pt-12 pb-24 flex flex-col items-center">
        
        <!-- Stepper -->
        <div class="w-full max-w-2xl flex justify-between items-center relative mb-12">
            <!-- Garis Penghubung -->
            <div class="absolute left-0 top-4 w-full h-0.5 bg-slate-200 -z-10"></div>
            <!-- Garis Progress -->
            <div class="absolute left-0 top-4 w-1/3 h-0.5 bg-sky-900 -z-10"></div>

            <div class="flex flex-col items-center gap-2 bg-slate-50 px-2">
                <!-- Step 1: Checked -->
                <div class="w-8 h-8 bg-sky-900 text-white rounded-full flex justify-center items-center ring-4 ring-slate-50">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                </div>
                <span class="text-sky-900 text-[10px] font-semibold">Kondisi Awal</span>
            </div>
            <div class="flex flex-col items-center gap-2 bg-slate-50 px-2">
                <!-- Step 2: Active -->
                <div class="w-8 h-8 bg-sky-900 text-white text-[10px] font-bold rounded-full flex justify-center items-center ring-4 ring-slate-50">2</div>
                <span class="text-sky-900 text-[10px] font-semibold">Hasil Awal</span>
            </div>
            <div class="flex flex-col items-center gap-2 bg-slate-50 px-2">
                <!-- Step 3: Inactive -->
                <div class="w-8 h-8 bg-slate-200 text-slate-500 text-[10px] font-bold rounded-full flex justify-center items-center ring-4 ring-slate-50">3</div>
                <span class="text-gray-400 text-[10px] font-semibold">Simulasi</span>
            </div>
            <div class="flex flex-col items-center gap-2 bg-slate-50 px-2">
                <!-- Step 4: Inactive -->
                <div class="w-8 h-8 bg-slate-200 text-slate-500 text-[10px] font-bold rounded-full flex justify-center items-center ring-4 ring-slate-50">4</div>
                <span class="text-gray-400 text-[10px] font-semibold">Hasil Akhir</span>
            </div>
        </div>

        <!-- Header Title -->
        <div class="text-center mb-8">
            <h1 class="text-sky-950 text-3xl font-normal leading-10 mb-2">Kondisi awal Anda relatif stabil</h1>
            <p class="text-gray-500 text-sm font-normal">Pendapatan masih mampu menutup kebutuhan utama dengan ruang arus kas yang positif.</p>
        </div>

        <!-- Content Area -->
        <div class="w-full max-w-4xl flex flex-col gap-6">
            
            <!-- Banner Status -->
            <div class="w-full px-8 py-6 bg-[#163a6b] rounded-xl flex flex-col md:flex-row justify-between md:items-center gap-4">
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 bg-white/10 rounded-full flex justify-center items-center">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                    </div>
                    <div class="flex flex-col">
                        <span class="text-slate-300 text-xs">Status kondisi awal</span>
                        <span class="text-white text-xl font-bold">Relatif Stabil</span>
                    </div>
                </div>
                <div class="flex flex-wrap items-center gap-2.5 text-slate-300 text-xs">
                    <span>Menikah</span>
                    <div class="w-1 h-1 bg-slate-400 rounded-full"></div>
                    <span>1 anak</span>
                    <div class="w-1 h-1 bg-slate-400 rounded-full"></div>
                    <span>3 anggota rumah tangga</span>
                    <div class="w-1 h-1 bg-slate-400 rounded-full"></div>
                    <span>Rp8.500.000 / bulan</span>
                </div>
            </div>

            <!-- List Matriks -->
            <div class="w-full bg-white rounded-xl border border-slate-200 overflow-hidden">
                
                <!-- Item 1 -->
                <div class="px-8 py-6 flex flex-col md:flex-row gap-4 md:gap-0 justify-between items-start md:items-center">
                    <div class="flex gap-4">
                        <span class="text-gray-400 text-xs font-bold w-6">01</span>
                        <div class="flex flex-col">
                            <span class="text-gray-800 text-sm font-bold">Baseline rumah tangga</span>
                            <span class="text-gray-500 text-xs mt-1">Acuan kebutuhan wajar rumah tangga berdasarkan profil dan data acuan.</span>
                        </div>
                    </div>
                    <span class="text-sky-900 text-lg font-bold">Rp6.800.000</span>
                </div>

                <!-- Item 2 -->
                <div class="px-8 py-6 border-t border-slate-200 flex flex-col md:flex-row gap-4 md:gap-0 justify-between items-start md:items-center">
                    <div class="flex gap-4">
                        <span class="text-gray-400 text-xs font-bold w-6">02</span>
                        <div class="flex flex-col">
                            <span class="text-gray-800 text-sm font-bold">Coverage Ratio</span>
                            <span class="text-gray-500 text-xs mt-1">Kemampuan pendapatan Anda dalam menutup baseline rumah tangga.</span>
                        </div>
                    </div>
                    <span class="text-sky-900 text-lg font-bold">125%</span>
                </div>

                <!-- Item 3 -->
                <div class="px-8 py-6 border-t border-slate-200 flex flex-col md:flex-row gap-4 md:gap-0 justify-between items-start md:items-center">
                    <div class="flex gap-4">
                        <span class="text-gray-400 text-xs font-bold w-6">03</span>
                        <div class="flex flex-col">
                            <span class="text-gray-800 text-sm font-bold">Sisa arus kas</span>
                            <span class="text-gray-500 text-xs mt-1">Dana tersisa setelah biaya hidup, cicilan, dan dukungan keluarga.</span>
                        </div>
                    </div>
                    <span class="text-sky-900 text-lg font-bold">Rp1.700.000</span>
                </div>

                <!-- Item 4 -->
                <div class="px-8 py-6 border-t border-slate-200 flex flex-col md:flex-row gap-4 md:gap-0 justify-between items-start md:items-center">
                    <div class="flex gap-4">
                        <span class="text-gray-400 text-xs font-bold w-6">04</span>
                        <div class="flex flex-col">
                            <span class="text-gray-800 text-sm font-bold">Debt Ratio</span>
                            <span class="text-gray-500 text-xs mt-1">Porsi cicilan rutin dibandingkan dengan total pendapatan bersih.</span>
                        </div>
                    </div>
                    <span class="text-sky-900 text-lg font-bold">14,1%</span>
                </div>

                <!-- Item 5 -->
                <div class="px-8 py-6 border-t border-slate-200 flex flex-col md:flex-row gap-4 md:gap-0 justify-between items-start md:items-center">
                    <div class="flex gap-4">
                        <span class="text-gray-400 text-xs font-bold w-6">05</span>
                        <div class="flex flex-col">
                            <span class="text-gray-800 text-sm font-bold">Sisa per anggota</span>
                            <span class="text-gray-500 text-xs mt-1">Sisa arus kas yang dibagi rata untuk setiap anggota rumah tangga.</span>
                        </div>
                    </div>
                    <span class="text-sky-900 text-lg font-bold">Rp566.667</span>
                </div>
            </div>

            <!-- Alert Info -->
            <div class="w-full px-6 py-4 bg-indigo-50/70 border border-slate-200 rounded-xl flex items-start gap-4">
                <div class="w-6 h-6 rounded-full border-[1.5px] border-sky-900 flex justify-center items-center flex-shrink-0 mt-0.5">
                    <span class="text-sky-900 text-xs font-bold">i</span>
                </div>
                <div class="flex flex-col">
                    <span class="text-sky-950 text-xs font-bold mb-1">Apa artinya?</span>
                    <span class="text-sky-900/80 text-xs leading-relaxed">Kondisi Anda cukup baik untuk melanjutkan ke simulasi. Tetap perhatikan pengeluaran tidak rutin dan dana darurat yang belum termasuk dalam hitungan.</span>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="w-full flex justify-between items-center mt-6">
                <!-- ID ditambahkan untuk JS trigger -->
                <button id="btnBack" class="px-6 py-3 bg-white border border-slate-300 text-sky-900 text-sm font-bold rounded-lg hover:bg-slate-50 transition">Hitung Ulang</button>
                <button class="px-6 py-3 bg-[#163a6b] text-white text-sm font-bold rounded-lg shadow-lg hover:bg-sky-900 flex items-center gap-2 transition">
                    Lanjut ke Simulasi
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"></path></svg>
                </button>
            </div>

        </div>
    </main>

    <!-- Custom JS -->
    <script src="{{ asset('js/hasil-awal.js') }}"></script>
</body>
</html>