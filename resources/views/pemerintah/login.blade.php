
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login Petugas Kelurahan | SiTahan SBY</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Tailwind CSS: untuk preview development -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <!-- CSS dan JavaScript halaman -->
    @vite([
        'resources/css/login-pemerintah.css',
        'resources/js/login-pemerintah.js'
    ])
</head>

<body class="bg-slate-100">

    <main class="login-page">

        <!-- Logo SiTahan SBY -->
        <header class="brand-header">
            <a href="{{ url('/') }}" class="brand-link">

                <div class="brand-icon">
                    <svg
                        width="32"
                        height="32"
                        viewBox="0 0 32 32"
                        fill="none"
                        aria-hidden="true"
                    >
                        <path
                            d="M8 15V9.5L16 5L24 9.5V23"
                            stroke="white"
                            stroke-width="1.6"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        />
                        <path
                            d="M6 24V16H26V24"
                            stroke="white"
                            stroke-width="1.6"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        />
                        <path
                            d="M12 24V19H20V24"
                            stroke="white"
                            stroke-width="1.6"
                            stroke-linecap="round"
                        />
                        <path
                            d="M4 26H28"
                            stroke="white"
                            stroke-width="1.6"
                            stroke-linecap="round"
                        />
                    </svg>
                </div>

                <div class="brand-text">
                    <span class="brand-name">SiTahan SBY</span>
                    <span class="brand-tagline">
                        KETAHANAN EKONOMI SURABAYA
                    </span>
                </div>

            </a>
        </header>

        <!-- Card Login -->
        <section class="login-card" aria-labelledby="login-title">

            <!-- Icon Shield -->
            <div class="login-icon-wrapper">
                <svg
                    width="28"
                    height="28"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    aria-hidden="true"
                >
                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                    <path d="m9 12 2 2 4-4"/>
                </svg>
            </div>

            <!-- Heading -->
            <div class="login-heading">
                <h1 id="login-title">
                    Portal Petugas Kelurahan
                </h1>

                <p>
                    Masuk untuk memeriksa pengajuan warga.
                </p>
            </div>

            <!-- Form Login -->
            <form
                id="loginPemerintahForm"
                class="login-form"
                method="POST"
                action="{{ route('pemerintah.login') }}"
            >
                @csrf

                <!-- Username -->
                <div class="form-group">
                    <label for="username">
                        Username petugas
                    </label>

                    <input
                        type="text"
                        id="username"
                        name="username"
                        placeholder="Masukkan username"
                        autocomplete="username"
                        required
                    >
                </div>

                <!-- Password -->
                <div class="form-group">
                    <label for="password">
                        Password
                    </label>

                    <input
                        type="password"
                        id="password"
                        name="password"
                        placeholder="Masukkan password"
                        autocomplete="current-password"
                        required
                    >
                </div>

                <!-- Pesan validasi -->
                <p
                    id="loginMessage"
                    class="login-message"
                    role="alert"
                    aria-live="polite"
                    hidden
                ></p>

                <!-- Button Login -->
                <button type="submit" class="login-button">

                    <span>Masuk sebagai Petugas</span>

                    <svg
                        width="16"
                        height="16"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="1.8"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        aria-hidden="true"
                    >
                        <path d="M10 17l5-5-5-5"/>
                        <path d="M15 12H3"/>
                        <path d="M12 3h6a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-6"/>
                    </svg>

                </button>
            </form>

            <!-- Footer Card -->
            <p class="login-footer">
                Akses terbatas untuk petugas kelurahan terdaftar.
            </p>

        </section>

    </main>

</body>
</html>
