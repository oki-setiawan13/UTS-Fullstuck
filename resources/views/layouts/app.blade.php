<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TK Tunas Nusantara</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">

    <!-- Navbar -->
    <nav class="bg-blue-600 text-white px-6 py-4 flex justify-between items-center">
        <h1 class="font-bold text-lg">🏫 TK Tunas Nusantara</h1>
        <div class="flex gap-4">
            <a href="/students" class="hover:underline">Siswa</a>
            <a href="/classrooms" class="hover:underline">Kelas</a>
            <a href="/attendances" class="hover:underline">Absensi</a>
            <a href="/announcements" class="hover:underline">Pengumuman</a>
        </div>
    </nav>

    <!-- Konten -->
    <main class="container mx-auto px-6 py-8">
        @if(session('success'))
            <div class="bg-green-100 text-green-800 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        @yield('content')
    </main>

</body>
</html>