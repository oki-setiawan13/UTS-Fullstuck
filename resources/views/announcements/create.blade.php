<x-layouts.app>
<x-slot name="title">Tambah Pengumuman</x-slot>

<div class="max-w-2xl mx-auto bg-white rounded-xl shadow p-8">
    <h2 class="text-2xl font-bold mb-6">Tambah Pengumuman Baru</h2>

    <form action="{{ route('announcements.store') }}" method="POST">
        @csrf

        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700 mb-1">Judul Pengumuman</label>
            <input type="text" name="title" placeholder="Judul pengumuman..."
                   class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-purple-500"
                   value="{{ old('title') }}">
            @error('title') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        <div class="mb-6">
            <label class="block text-sm font-medium text-gray-700 mb-1">Isi Pengumuman</label>
            <textarea name="content" rows="6" placeholder="Tulis isi pengumuman di sini..."
                      class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-purple-500">{{ old('content') }}</textarea>
            @error('content') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        <div class="flex gap-3">
            <button type="submit"
                    class="bg-purple-600 text-white px-6 py-2 rounded-lg hover:bg-purple-700">
                Simpan
            </button>
            <a href="{{ route('announcements.index') }}"
               class="bg-gray-200 text-gray-700 px-6 py-2 rounded-lg hover:bg-gray-300">
                Batal
            </a>
        </div>
    </form>
</div>
</x-layouts.app>