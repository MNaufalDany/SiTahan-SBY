<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kondisi Awal - SiTahan SBY</title>
    <!-- Tailwind CSS (Gunakan CDN untuk cek cepat, disarankan pakai Vite untuk production) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/simulasi.css') }}">
</head>
<body class="bg-slate-100 font-['Plus_Jakarta_Sans'] text-gray-800">

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
    <main class="max-w-4xl mx-auto px-7 pt-12 pb-24 flex flex-col items-center">
        
        <!-- Stepper -->
        <div class="w-full max-w-2xl flex justify-between items-center relative mb-12">
            <!-- Garis Penghubung -->
            <div class="absolute left-0 top-4 w-full h-0.5 bg-slate-200 -z-10"></div>
            <div class="absolute left-0 top-4 w-1/3 h-0.5 bg-slate-400 -z-10"></div>

            <div class="flex flex-col items-center gap-2 bg-slate-100 px-2">
                <div class="w-8 h-8 bg-sky-900 text-white text-[10px] font-bold rounded-full flex justify-center items-center ring-4 ring-slate-100">1</div>
                <span class="text-sky-900 text-[10px] font-semibold">Kondisi Awal</span>
            </div>
            <div class="flex flex-col items-center gap-2 bg-slate-100 px-2">
                <div class="w-8 h-8 bg-slate-200 text-slate-500 text-[10px] font-bold rounded-full flex justify-center items-center ring-4 ring-slate-100">2</div>
                <span class="text-gray-400 text-[10px] font-semibold">Hasil Awal</span>
            </div>
            <div class="flex flex-col items-center gap-2 bg-slate-100 px-2">
                <div class="w-8 h-8 bg-slate-200 text-slate-500 text-[10px] font-bold rounded-full flex justify-center items-center ring-4 ring-slate-100">3</div>
                <span class="text-gray-400 text-[10px] font-semibold">Simulasi</span>
            </div>
            <div class="flex flex-col items-center gap-2 bg-slate-100 px-2">
                <div class="w-8 h-8 bg-slate-200 text-slate-500 text-[10px] font-bold rounded-full flex justify-center items-center ring-4 ring-slate-100">4</div>
                <span class="text-gray-400 text-[10px] font-semibold">Hasil Akhir</span>
            </div>
        </div>

        <!-- Header Title -->
        <div class="text-center mb-8">
            <h1 class="text-sky-950 text-3xl font-normal leading-10 mb-2">Ceritakan kondisi rumah tangga Anda</h1>
            <p class="text-gray-500 text-xs font-normal">Gunakan angka rata-rata per bulan. Data ini belum akan disimpan.</p>
        </div>

        <!-- Form Card -->
        <form action="#" method="POST" class="w-full bg-white rounded-xl border border-slate-200 shadow-sm flex flex-col">
            
            <!-- Section 1: Profil Rumah Tangga -->
            <div class="p-9">
                <div class="flex gap-3 mb-6">
                    <div class="w-7 h-7 bg-indigo-50 rounded-md flex justify-center items-center text-sky-900 text-[10px] font-extrabold">01</div>
                    <div>
                        <h2 class="text-gray-800 text-base font-normal">Profil rumah tangga</h2>
                        <p class="text-gray-500 text-[10px] mt-1">Informasi dasar untuk menentukan jumlah tanggungan.</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="flex flex-col gap-2">
                        <label class="text-gray-700 text-xs font-bold">Status pernikahan</label>
                        <select class="w-full h-11 px-4 bg-white rounded-lg border border-slate-300 text-gray-800 text-sm focus:outline-none focus:ring-1 focus:ring-sky-900 appearance-none bg-[url('data:image/svg+xml;charset=US-ASCII,%3Csvg%20width%3D%2220%22%20height%3D%2220%22%20viewBox%3D%220%200%2020%2020%22%20fill%3D%22none%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3Cpath%20d%3D%22M5%207.5L10%2012.5L15%207.5%22%20stroke%3D%22%23374151%22%20stroke-width%3D%221.5%22%20stroke-linecap%3D%22round%22%20stroke-linejoin%3D%22round%22%2F%3E%3C%2Fsvg%3E')] bg-no-repeat bg-[position:right_10px_center]">
                            <option>Menikah</option>
                            <option>Belum Menikah</option>
                        </select>
                    </div>
                    <div class="flex flex-col gap-2">
                        <label class="text-gray-700 text-xs font-bold">Jumlah anak</label>
                        <select class="w-full h-11 px-4 bg-white rounded-lg border border-slate-300 text-gray-800 text-sm focus:outline-none focus:ring-1 focus:ring-sky-900 appearance-none bg-[url('data:image/svg+xml;charset=US-ASCII,%3Csvg%20width%3D%2220%22%20height%3D%2220%22%20viewBox%3D%220%200%2020%2020%22%20fill%3D%22none%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3Cpath%20d%3D%22M5%207.5L10%2012.5L15%207.5%22%20stroke%3D%22%23374151%22%20stroke-width%3D%221.5%22%20stroke-linecap%3D%22round%22%20stroke-linejoin%3D%22round%22%2F%3E%3C%2Fsvg%3E')] bg-no-repeat bg-[position:right_10px_center]">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                    </div>
                    <div class="flex flex-col gap-2">
                        <label class="text-gray-700 text-xs font-bold">Anggota keluarga lain</label>
                        <select class="w-full h-11 px-4 bg-white rounded-lg border border-slate-300 text-gray-800 text-sm focus:outline-none focus:ring-1 focus:ring-sky-900 appearance-none bg-[url('data:image/svg+xml;charset=US-ASCII,%3Csvg%20width%3D%2220%22%20height%3D%2220%22%20viewBox%3D%220%200%2020%2020%22%20fill%3D%22none%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3Cpath%20d%3D%22M5%207.5L10%2012.5L15%207.5%22%20stroke%3D%22%23374151%22%20stroke-width%3D%221.5%22%20stroke-linecap%3D%22round%22%20stroke-linejoin%3D%22round%22%2F%3E%3C%2Fsvg%3E')] bg-no-repeat bg-[position:right_10px_center]">
                            <option>0</option>
                            <option>1</option>
                            <option>2</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Section 2: Kondisi Finansial Bulanan -->
            <div class="p-9 border-t border-slate-200">
                <div class="flex gap-3 mb-6">
                    <div class="w-7 h-7 bg-indigo-50 rounded-md flex justify-center items-center text-sky-900 text-[10px] font-extrabold">02</div>
                    <div>
                        <h2 class="text-gray-800 text-base font-normal">Kondisi finansial bulanan</h2>
                        <p class="text-gray-500 text-[10px] mt-1">Masukkan jumlah bersih setelah potongan wajib.</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-6">
                    <!-- Input 1 -->
                    <div class="flex flex-col gap-2">
                        <label class="text-gray-700 text-xs font-bold">Pendapatan bersih rumah tangga</label>
                        <div class="flex items-center w-full h-11 bg-white rounded-lg border border-slate-300 overflow-hidden focus-within:ring-1 focus-within:ring-sky-900 focus-within:border-sky-900">
                            <div class="px-3 h-full bg-slate-50 border-r border-zinc-200 flex justify-center items-center">
                                <span class="text-gray-500 text-xs font-bold">Rp</span>
                            </div>
                            <input type="text" class="input-rupiah flex-1 h-full px-3 outline-none text-gray-800 text-base font-semibold" value="8.500.000">
                        </div>
                        <span class="text-slate-500 text-[9px]">Gabungan seluruh pendapatan tetap anggota rumah tangga.</span>
                    </div>

                    <!-- Input 2 -->
                    <div class="flex flex-col gap-2">
                        <label class="text-gray-700 text-xs font-bold">Biaya hidup rutin</label>
                        <div class="flex items-center w-full h-11 bg-white rounded-lg border border-slate-300 overflow-hidden focus-within:ring-1 focus-within:ring-sky-900 focus-within:border-sky-900">
                            <div class="px-3 h-full bg-slate-50 border-r border-zinc-200 flex justify-center items-center">
                                <span class="text-gray-500 text-xs font-bold">Rp</span>
                            </div>
                            <input type="text" class="input-rupiah flex-1 h-full px-3 outline-none text-gray-800 text-base font-semibold" value="5.200.000">
                        </div>
                    </div>

                    <!-- Input 3 -->
                    <div class="flex flex-col gap-2">
                        <label class="text-gray-700 text-xs font-bold">Cicilan / utang rutin</label>
                        <div class="flex items-center w-full h-11 bg-white rounded-lg border border-slate-300 overflow-hidden focus-within:ring-1 focus-within:ring-sky-900 focus-within:border-sky-900">
                            <div class="px-3 h-full bg-slate-50 border-r border-zinc-200 flex justify-center items-center">
                                <span class="text-gray-500 text-xs font-bold">Rp</span>
                            </div>
                            <input type="text" class="input-rupiah flex-1 h-full px-3 outline-none text-gray-800 text-base font-semibold" value="1.200.000">
                        </div>
                    </div>

                    <!-- Input 4 -->
                    <div class="flex flex-col gap-2">
                        <label class="text-gray-700 text-xs font-bold">Dukungan keluarga di luar rumah</label>
                        <div class="flex items-center w-full h-11 bg-white rounded-lg border border-slate-300 overflow-hidden focus-within:ring-1 focus-within:ring-sky-900 focus-within:border-sky-900">
                            <div class="px-3 h-full bg-slate-50 border-r border-zinc-200 flex justify-center items-center">
                                <span class="text-gray-500 text-xs font-bold">Rp</span>
                            </div>
                            <input type="text" class="input-rupiah flex-1 h-full px-3 outline-none text-gray-800 text-base font-semibold" value="400.000">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer Card -->
            <div class="px-9 py-5 bg-gray-50 rounded-b-xl border-t border-slate-200 flex justify-between items-center">
                <button type="button" class="px-4 py-2.5 text-sky-900 text-xs font-bold rounded-lg hover:bg-slate-200 transition">Kembali ke Beranda</button>
                <button type="submit" class="px-4 py-2.5 bg-sky-900 text-white text-xs font-bold rounded-lg shadow-lg hover:bg-sky-800 flex items-center gap-2 transition">
                    Hitung Kondisi Awal
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </button>
            </div>
        </form>

    </main>

    <!-- Custom JS -->
    <script src="{{ asset('js/simulasi.js') }}"></script>
</body>
</html>