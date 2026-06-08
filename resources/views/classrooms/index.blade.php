@extends('layouts.app')


<div class="flex justify-between items-center mb-6">
    <h2 class="text-2xl font-bold">Data Kelas</h2>
    <a href="{{ route('classrooms.create') }}"
       class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700">
        + Tambah Kelas
    </a>
</div>

@if(session('success'))
    <div class="bg-green-100 text-green-800 px-4 py-3 rounded mb-4">
        {{ session('success') }}
    </div>
@endif

<div class="grid grid-cols-1 md:grid-cols-3 gap-4">
    @forelse($classrooms as $classroom)
    <div class="bg-white rounded-xl shadow p-6">
        <div class="text-3xl mb-2">🏫</div>
        <h3 class="text-xl font-bold">{{ $classroom->name }}</h3>
        <p class="text-gray-500 text-sm">Wali Kelas: {{ $classroom->teacher }}</p>
        <p class="text-gray-500 text-sm">Tahun Ajaran: {{ $classroom->academic_year }}</p>
        <p class="text-blue-600 font-semibold mt-2">{{ $classroom->students_count }} Siswa</p>
        <div class="flex gap-2 mt-4">
            <a href="{{ route('classrooms.edit', $classroom) }}"
               class="text-sm bg-blue-100 text-blue-700 px-3 py-1 rounded hover:bg-blue-200">
                Edit
            </a>
            <form action="{{ route('classrooms.destroy', $classroom) }}" method="POST"
                  onsubmit="return confirm('Hapus kelas ini?')">
                @csrf
                @method('DELETE')
                <button class="text-sm bg-red-100 text-red-700 px-3 py-1 rounded hover:bg-red-200">
                    Hapus
                </button>
            </form>
        </div>
    </div>
    @empty
    <div class="col-span-3 text-center text-gray-400 py-12">
        Belum ada data kelas
    </div>
    @endforelse
</div>
