<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk - SiTahan SBY</title>
    <!-- Tailwind CSS CDN (atau sesuaikan dengan setup Vite Laravel kelompok kalian) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
</head>
<body class="bg-slate-100 font-['Plus_Jakarta_Sans'] antialiased flex justify-center items-center min-h-screen p-6">

    <div class="w-full max-w-[1314px] bg-white rounded-2xl shadow-xl flex flex-col justify-start items-start overflow-hidden border border-slate-200">
        
        <!-- Header Logo -->
        <div class="w-full px-16 py-6 bg-slate-100 flex items-center border-b border-slate-200">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 bg-sky-900 rounded-xl flex justify-center items-center shadow-md">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                    </svg>
                </div>
                <div>
                    <h1 class="text-sky-900 text-base font-bold leading-6">SiTahan SBY</h1>
                    <p class="text-gray-500 text-[9px] font-semibold uppercase tracking-wider">Ketahanan Ekonomi Surabaya</p>
                </div>
            </div>
        </div>

        <!-- Main Content Section -->
        <div class="w-full p-12 flex justify-center items-center bg-white">
            <div class="w-full max-w-[1040px] grid grid-cols-1 md:grid-cols-2 rounded-2xl overflow-hidden shadow-2xl border border-slate-200">
                
                <!-- Left Card (Hero / Info) -->
                <div class="bg-sky-900 p-12 flex flex-col justify-between text-white relative">
                    <div>
                        <div class="flex items-center gap-2 mb-4">
                            <span class="w-1.5 h-1.5 bg-green-400 rounded-full"></span>
                            <span class="text-indigo-300 text-xs font-extrabold uppercase tracking-wide">Akun SiTahan SBY</span>
                        </div>
                        <h2 class="text-3xl font-normal leading-tight mb-8">Simpan hasil dan pantau pengajuan dalam satu tempat.</h2>
                        
                        <ul class="space-y-4 text-slate-200 text-xs">
                            <li class="flex items-center gap-3">
                                <svg class="w-4 h-4 text-green-300 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                Simpan hasil simulasi
                            </li>
                            <li class="flex items-center gap-3">
                                <svg class="w-4 h-4 text-green-300 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                Ajukan verifikasi surat
                            </li>
                            <li class="flex items-center gap-3">
                                <svg class="w-4 h-4 text-green-300 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                Pantau masa berlaku dokumen
                            </li>
                        </ul>
                    </div>

                    <div class="pt-12 border-t border-slate-700/60 flex items-center gap-2 text-slate-400 text-[10px]">
                        <svg class="w-4 h-4 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        Informasi Anda digunakan hanya untuk kebutuhan layanan.
                    </div>
                </div>

                <!-- Right Card (Form Login) -->
                <div class="bg-white p-12 relative flex flex-col justify-between">
                    
                    <!-- Top Link: Kembali ke hasil -->
                    <div class="absolute top-8 right-12">
                        <a href="#" class="text-gray-500 text-[11px] font-normal hover:text-sky-900 transition-colors">Kembali ke hasil</a>
                    </div>

                    <div>
                        <h3 class="text-sky-950 text-2xl font-normal mb-1">Selamat datang kembali</h3>
                        <p class="text-gray-500 text-xs mb-6">Masuk untuk melanjutkan pengajuan Anda.</p>

                        <!-- Tab Switcher (Masuk / Daftar) -->
                        <div class="flex border-b border-slate-200 mb-6">
                            <button class="px-5 py-2.5 border-b-2 border-sky-900 text-sky-900 text-xs font-bold focus:outline-none">Masuk</button>
                            <button class="px-5 py-2.5 text-gray-400 text-xs font-bold hover:text-gray-600 focus:outline-none">Daftar</button>
                        </div>

                        <!-- Form Input -->
                        <form action="#" method="POST" class="space-y-5">
                            @csrf
                            <div>
                                <label class="block text-gray-700 text-xs font-bold mb-2">Email / username</label>
                                <input type="text" placeholder="Masukkan email atau username" class="w-full h-11 px-3 bg-white rounded-lg border border-slate-300 text-sm text-gray-800 focus:outline-none focus:border-sky-900 transition-all placeholder:text-gray-400/70">
                            </div>

                            <div>
                                <div class="flex justify-between items-center mb-2">
                                    <label class="block text-gray-700 text-xs font-bold">Password</label>
                                    <a href="#" class="text-sky-900 text-[10px] hover:underline">Lupa password?</a>
                                </div>
                                <input type="password" placeholder="Minimal 8 karakter" class="w-full h-11 px-3 bg-white rounded-lg border border-slate-300 text-sm text-gray-800 focus:outline-none focus:border-sky-900 transition-all placeholder:text-gray-400/70">
                            </div>

                            <button type="submit" class="w-full h-11 bg-sky-900 hover:bg-sky-800 text-white rounded-lg font-bold text-xs flex justify-center items-center gap-2 shadow-lg shadow-sky-900/15 transition-all">
                                <span>Masuk & Lanjutkan</span>
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                            </button>
                        </form>
                    </div>

                    <!-- Footer Warning Box -->
                    <div class="mt-8 p-3 bg-slate-50 rounded-lg flex items-start gap-2.5 border border-slate-200/60">
                        <svg class="w-4 h-4 text-sky-900 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        <p class="text-gray-500 text-[10px] leading-relaxed">Login diperlukan untuk menyimpan hasil, mengajukan verifikasi, dan mengakses surat.</p>
                    </div>

                </div>

            </div>
        </div>

    </div>

    <script src="{{ asset('js/auth.js') }}"></script>
</body>
</html>