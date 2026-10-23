<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simpan dan Ajukan Hasil - SiTahan SBY</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Fonts: Plus Jakarta Sans -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/ajukan.css') }}">
</head>
<body class="bg-white text-gray-800 antialiased">
    <!-- Main Container -->
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
                <a href="#" class="min-h-[44px] px-4 rounded-lg border border-transparent hover:border-slate-200 flex justify-center items-center gap-2 transition-colors">
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

        <!-- Content Body -->
        <main class="self-stretch min-h-[485px] px-7 pt-12 pb-24 bg-slate-100 flex flex-col justify-start items-center">
            <div class="w-[1080px] max-w-full flex flex-col justify-start items-start">
                
                <!-- Back Link -->
                <div class="h-12 relative flex items-center mb-2">
                    <a href="#" class="text-sky-900 text-[10px] font-bold leading-4 hover:underline flex items-center gap-1">
                        <span>&larr;</span> Kembali ke hasil simulasi
                    </a>
                </div>

                <!-- Page Header -->
                <div class="w-[700px] max-w-full flex flex-col justify-start items-start mb-7">
                    <h1 class="text-sky-950 text-3xl font-normal leading-10">Simpan dan ajukan hasil</h1>
                    <p class="text-gray-500 text-xs font-normal leading-5 pt-2">Periksa ringkasan sebelum mengirim pengajuan ke kelurahan.</p>
                </div>

                <!-- Grid Layout / Main Sections -->
                <div class="self-stretch flex flex-col lg:flex-row gap-7 items-start">
                    
                    <!-- Left Column (Steps) -->
                    <div class="w-full lg:w-[700px] flex flex-col gap-4">
                        
                        <!-- Step 1: Ringkasan Hasil Simulasi -->
                        <div class="p-7 bg-white rounded-xl border border-slate-200 flex flex-col justify-start items-start">
                            <div class="self-stretch flex justify-between items-center">
                                <div class="flex items-center gap-3">
                                    <div class="w-7 h-7 bg-indigo-50 rounded-md flex justify-center items-center text-sky-900 text-[10px] font-extrabold">1</div>
                                    <div>
                                        <h2 class="text-gray-800 text-base font-normal leading-6">Ringkasan hasil simulasi</h2>
                                        <p class="text-gray-500 text-[10px] font-normal leading-4 pt-1">Skenario Tambah Anak</p>
                                    </div>
                                </div>
                                <div class="px-2 py-1.5 bg-indigo-50 rounded-md">
                                    <span class="text-sky-900 text-[10px] font-extrabold leading-4">Perlu Perhatian</span>
                                </div>
                            </div>

                            <!-- Metrics Grid -->
                            <div class="self-stretch mt-6 bg-slate-50 rounded-lg grid grid-cols-2 border border-slate-200 overflow-hidden">
                                <div class="p-4 border-r border-b border-slate-200 flex flex-col gap-1">
                                    <span class="text-gray-500 text-[9px] font-normal leading-3">Pendapatan bersih</span>
                                    <span class="text-gray-800 text-xs font-bold leading-4">Rp8.500.000</span>
                                </div>
                                <div class="p-4 border-b border-slate-200 flex flex-col gap-1">
                                    <span class="text-gray-500 text-[9px] font-normal leading-3">Anggota rumah tangga</span>
                                    <span class="text-gray-800 text-xs font-bold leading-4">4 orang</span>
                                </div>
                                <div class="p-4 border-r border-slate-200 flex flex-col gap-1">
                                    <span class="text-gray-500 text-[9px] font-normal leading-3">Sisa arus kas</span>
                                    <span class="text-gray-800 text-xs font-bold leading-4">Rp400.000</span>
                                </div>
                                <div class="p-4 flex flex-col gap-1">
                                    <span class="text-gray-500 text-[9px] font-normal leading-3">Coverage Ratio</span>
                                    <span class="text-gray-800 text-xs font-bold leading-4">104,9%</span>
                                </div>
                            </div>
                        </div>

                        <!-- Step 2: Pilih Jenis Surat -->
                        <div class="p-7 bg-white rounded-xl border border-slate-200 flex flex-col justify-start items-start">
                            <div class="flex items-center gap-3">
                                <div class="w-7 h-7 bg-indigo-50 rounded-md flex justify-center items-center text-sky-900 text-[10px] font-extrabold">2</div>
                                <div>
                                    <h2 class="text-gray-800 text-base font-normal leading-6">Pilih jenis surat</h2>
                                    <p class="text-gray-500 text-[10px] font-normal leading-4 pt-1">Pilih dokumen sesuai kebutuhan Anda.</p>
                                </div>
                            </div>

                            <!-- Options List -->
                            <div class="self-stretch pt-6 flex flex-col gap-2.5" id="document-options">
                                <!-- Option 1 (Selected) -->
                                <label class="document-option cursor-pointer self-stretch p-3.5 bg-slate-50 rounded-lg border border-sky-900 flex items-center gap-3 transition-all">
                                    <input type="radio" name="jenis_surat" value="kondisi_ekonomi" checked class="sr-only">
                                    <div class="radio-indicator w-3 h-3 bg-white rounded-md border border-sky-900 flex justify-center items-center">
                                        <div class="w-2 h-2 bg-sky-900 rounded-sm"></div>
                                    </div>
                                    <div class="text-sky-900">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                        </svg>
                                    </div>
                                    <div class="flex flex-col">
                                        <span class="text-gray-800 text-[10px] font-bold leading-4">Surat Keterangan Kondisi Ekonomi</span>
                                        <span class="text-gray-500 text-[9px] font-normal leading-3 pt-0.5">Ringkasan hasil asesmen ketahanan ekonomi rumah tangga.</span>
                                    </div>
                                </label>

                                <!-- Option 2 -->
                                <label class="document-option cursor-pointer self-stretch p-3.5 bg-white rounded-lg border border-slate-200 flex items-center gap-3 hover:border-slate-300 transition-all">
                                    <input type="radio" name="jenis_surat" value="finansial" class="sr-only">
                                    <div class="radio-indicator w-3 h-3 bg-white rounded-md border border-neutral-400 flex justify-center items-center">
                                        <div class="w-2 h-2 bg-transparent rounded-sm"></div>
                                    </div>
                                    <div class="text-sky-900">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                        </svg>
                                    </div>
                                    <div class="flex flex-col">
                                        <span class="text-gray-800 text-[10px] font-bold leading-4">Surat Keterangan Finansial</span>
                                        <span class="text-gray-500 text-[9px] font-normal leading-3 pt-0.5">Ringkasan kondisi pendapatan, beban, dan arus kas.</span>
                                    </div>
                                </label>
                            </div>
                        </div>

                    </div>

                    <!-- Right Column (Action Sidebar) -->
                    <div class="w-full lg:w-[320px] p-6 bg-white rounded-xl border border-slate-200 flex flex-col justify-start items-start">
                        <h3 class="text-gray-800 text-xs font-normal leading-5">Sebelum mengajukan</h3>
                        
                        <div class="self-stretch pt-4 flex flex-col gap-2.5">
                            <div class="flex items-start gap-2">
                                <svg class="w-5 h-5 text-green-600 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-500 text-[9px] font-normal leading-3">Pengajuan diperiksa oleh petugas kelurahan.</span>
                            </div>
                            <div class="flex items-start gap-2">
                                <svg class="w-5 h-5 text-green-600 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-500 text-[9px] font-normal leading-3">Surat yang disetujui berlaku selama 65 hari.</span>
                            </div>
                            <div class="flex items-start gap-2">
                                <svg class="w-5 h-5 text-green-600 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-500 text-[9px] font-normal leading-3">Anda dapat memantau status dari halaman riwayat.</span>
                            </div>
                        </div>

                        <!-- Warning Box -->
                        <div class="self-stretch py-4">
                            <div class="p-3 bg-yellow-50 rounded-lg flex items-start gap-2 border border-yellow-200/50">
                                <svg class="w-5 h-5 text-yellow-600 shrink-0" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                                </svg>
                                <div class="flex flex-col gap-1">
                                    <span class="text-yellow-800 text-[9px] font-bold leading-3">Bukan SKTM resmi</span>
                                    <p class="text-stone-500 text-[8px] font-normal leading-3">Dokumen ini merupakan hasil asesmen dan verifikasi melalui SiTahan SBY.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <button type="button" class="w-full h-11 px-4 bg-sky-900 hover:bg-sky-800 transition-colors rounded-lg shadow-[0px_5px_14px_0px_rgba(22,58,107,0.15)] flex justify-center items-center gap-2 text-white">
                            <span class="text-xs font-bold leading-5">Ajukan Verifikasi</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </button>

                        <div class="w-full pt-2.5 text-center">
                            <span class="text-gray-500 text-[8px] font-normal leading-3">Dengan mengajukan, Anda menyatakan data yang diberikan sudah benar.</span>
                        </div>
                    </div>

                </div>

            </div>
        </main>
    </div>

    <!-- JavaScript -->
    <script src="{{ asset('js/ajukan.js') }}"></script>
</body>
</html>