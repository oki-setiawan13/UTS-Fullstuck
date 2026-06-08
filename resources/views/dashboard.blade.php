<x-layouts.app>
    <x-slot name="title">Dashboard TK Tunas Nusantara</x-slot>

    <div class="mb-6">
        <h2 class="text-2xl font-bold text-gray-800">
            🏫 Dashboard TK Tunas Nusantara
        </h2>
        <p class="text-gray-500 mt-1">Selamat datang, {{ auth()->user()->name }}!</p>
    </div>

    {{-- Statistik --}}
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">

        <div class="bg-white rounded-xl shadow p-6 flex items-center gap-4">
            <div class="bg-blue-100 text-blue-600 rounded-full p-4 text-2xl">👨‍🎓</div>
            <div>
                <p class="text-gray-500 text-sm">Total Siswa</p>
                <p class="text-3xl font-bold">{{ $totalStudents }}</p>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow p-6 flex items-center gap-4">
            <div class="bg-green-100 text-green-600 rounded-full p-4 text-2xl">🏫</div>
            <div>
                <p class="text-gray-500 text-sm">Total Kelas</p>
                <p class="text-3xl font-bold">{{ $totalClassrooms }}</p>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow p-6 flex items-center gap-4">
            <div class="bg-yellow-100 text-yellow-600 rounded-full p-4 text-2xl">📢</div>
            <div>
                <p class="text-gray-500 text-sm">Pengumuman</p>
                <p class="text-3xl font-bold">{{ $totalAnnouncements }}</p>
            </div>
        </div>

    </div>


</x-layouts.app>