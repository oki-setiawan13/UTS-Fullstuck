@extends('layouts.app')


<div class="max-w-lg mx-auto bg-white rounded-xl shadow p-8">
    <h2 class="text-2xl font-bold mb-6">Tambah Absensi</h2>

    @if($errors->any())
        <div class="bg-red-100 text-red-700 px-4 py-3 rounded mb-4">
            {{ $errors->first() }}
        </div>
    @endif

    <form action="{{ route('attendances.store') }}" method="POST">
        @csrf

        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700 mb-1">Tanggal</label>
            <input type="date" name="date"
                   class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-orange-400"
                   value="{{ old('date', date('Y-m-d')) }}">
        </div>

        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700 mb-1">Nama Siswa</label>
            <select name="student_id"
                    class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-orange-400">
                <option value="">-- Pilih Siswa --</option>
                @foreach($students as $student)
                    <option value="{{ $student->id }}"
                        {{ old('student_id') == $student->id ? 'selected' : '' }}>
                        {{ $student->name }} - {{ $student->classroom->name ?? '-' }}
                    </option>
                @endforeach
            </select>
            @error('student_id') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700 mb-1">Status Kehadiran</label>
            <div class="grid grid-cols-2 gap-3">
                @foreach(['hadir' => '✅ Hadir', 'sakit' => '🤒 Sakit', 'izin' => '📝 Izin', 'alpha' => '❌ Alpha'] as $value => $label)
                <label class="flex items-center gap-2 border rounded-lg px-4 py-2 cursor-pointer hover:bg-gray-50">
                    <input type="radio" name="status" value="{{ $value }}"
                           {{ old('status') == $value ? 'checked' : '' }}>
                    <span>{{ $label }}</span>
                </label>
                @endforeach
            </div>
            @error('status') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        <div class="mb-6">
            <label class="block text-sm font-medium text-gray-700 mb-1">Keterangan (opsional)</label>
            <textarea name="notes" rows="2" placeholder="Tambahkan keterangan jika perlu..."
                      class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-orange-400">{{ old('notes') }}</textarea>
        </div>

        <div class="flex gap-3">
            <button type="submit"
                    class="bg-orange-500 text-white px-6 py-2 rounded-lg hover:bg-orange-600">
                Simpan
            </button>
            <a href="{{ route('attendances.index') }}"
               class="bg-gray-200 text-gray-700 px-6 py-2 rounded-lg hover:bg-gray-300">
                Batal
            </a>
        </div>
    </form>
</div>
</x-layouts.app>