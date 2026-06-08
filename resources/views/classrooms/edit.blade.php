<x-layouts.app>
<x-slot name="title">Edit Kelas</x-slot>

<div class="max-w-lg mx-auto bg-white rounded-xl shadow p-8">
    <h2 class="text-2xl font-bold mb-6">Edit Data Kelas</h2>

    <form action="{{ route('classrooms.update', $classroom) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700 mb-1">Nama Kelas</label>
            <input type="text" name="name" placeholder="contoh: Kelas A"
                   class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-500"
                   value="{{ old('name', $classroom->name) }}">
            @error('name') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700 mb-1">Nama Wali Kelas</label>
            <input type="text" name="teacher" placeholder="Nama guru"
                   class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-500"
                   value="{{ old('teacher', $classroom->teacher) }}">
            @error('teacher') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        <div class="mb-6">
            <label class="block text-sm font-medium text-gray-700 mb-1">Tahun Ajaran</label>
            <input type="number" name="academic_year" placeholder="contoh: 2025"
                   class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-500"
                   value="{{ old('academic_year', $classroom->academic_year) }}">
            @error('academic_year') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        <div class="flex gap-3">
            <button type="submit"
                    class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700">
                Perbarui
            </button>
            <a href="{{ route('classrooms.index') }}"
               class="bg-gray-200 text-gray-700 px-6 py-2 rounded-lg hover:bg-gray-300">
                Batal
            </a>
        </div>
    </form>
</div>
</x-layouts.app>
