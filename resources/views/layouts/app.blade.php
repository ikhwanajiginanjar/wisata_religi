<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wisata Religi</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <style>
        /* Pastikan ini menimpa semua aturan default */
        .navbar a {
            color: white !important; /* Override any other color */
        }

        .navbar a:hover {
            color: #FBBF24 !important; /* Hover effect color (kuning) */
        }
    </style>
</head>
<body class="bg-gray-100 font-sans">

    <!-- Navbar -->
    <nav class="bg-green-900 shadow-md">
        <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold text-white">Wisata Religi</h1>
            <div class="space-x-8 text-white font-medium navbar">
                <a href="{{ route('beranda') }}" class="transition duration-300"><span class="mr-2">🏠</span>Beranda</a>
                <a href="{{ route('profil') }}" class="transition duration-300"><span class="mr-2">📜</span>Profil</a>
                <a href="{{ route('layanan') }}" class="transition duration-300"><span class="mr-2">💼</span>Layanan</a>
                <a href="{{ route('galeri') }}" class="transition duration-300"><span class="mr-2">📸</span>Galeri</a>
                <a href="{{ route('kontak.index') }}" class="transition duration-300"><span class="mr-2">📞</span>Kontak</a>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <main class="max-w-7xl mx-auto px-4 py-8">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-white shadow-inner mt-10">
        <div class="max-w-7xl mx-auto px-4 py-6 text-center text-gray-500 text-sm">
            &copy; {{ date('Y') }} Wisata Religi. Semua hak dilindungi.
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>
</html>
