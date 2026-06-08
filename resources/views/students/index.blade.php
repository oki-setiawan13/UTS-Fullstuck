@extends('layouts.app')


<div class="flex justify-between items-center mb-6">
    <h2 class="text-2xl font-bold">Data Siswa</h2>
    <a href="{{ route('students.create') }}"
       class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
        + Tambah Siswa
    </a>
</div>

@if(session('success'))
    <div class="bg-green-100 text-green-800 px-4 py-3 rounded mb-4">
        {{ session('success') }}
    </div>
@endif

<div class="bg-white rounded-xl shadow overflow-hidden">
    <table class="w-full table-auto">
        <thead class="bg-gray-50 text-left text-sm text-gray-600">
            <tr>
                <th class="px-4 py-3">NIS</th>
                <th class="px-4 py-3">Nama Siswa</th>
                <th class="px-4 py-3">Kelas</th>
                <th class="px-4 py-3">Jenis Kelamin</th>
                <th class="px-4 py-3">Nama Orang Tua</th>
                <th class="px-4 py-3">No. HP</th>
                <th class="px-4 py-3">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($students as $student)
            <tr class="border-t hover:bg-gray-50 text-sm">
                <td class="px-4 py-3">{{ $student->nis }}</td>
                <td class="px-4 py-3 font-medium">{{ $student->name }}</td>
                <td class="px-4 py-3">{{ $student->classroom->name ?? '-' }}</td>
                <td class="px-4 py-3">
                    <span class="px-2 py-1 rounded-full text-xs
                        {{ $student->gender == 'L' ? 'bg-blue-100 text-blue-700' : 'bg-pink-100 text-pink-700' }}">
                        {{ $student->gender == 'L' ? 'Laki-laki' : 'Perempuan' }}
                    </span>
                </td>
                <td class="px-4 py-3">{{ $student->parent_name }}</td>
                <td class="px-4 py-3">{{ $student->phone }}</td>
                <td class="px-4 py-3">
                    <div class="flex gap-2">
                        <a href="{{ route('students.edit', $student) }}"
                           class="text-xs bg-blue-100 text-blue-700 px-3 py-1 rounded hover:bg-blue-200">
                            Edit
                        </a>
                        <form action="{{ route('students.destroy', $student) }}" method="POST"
                              onsubmit="return confirm('Hapus siswa ini?')">
                            @csrf
                            @method('DELETE')
                            <button class="text-xs bg-red-100 text-red-700 px-3 py-1 rounded hover:bg-red-200">
                                Hapus
                            </button>
                        </form>
                    </div>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="7" class="px-4 py-8 text-center text-gray-400">
                    Belum ada data siswa
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

<div class="mt-4">{{ $students->links() }}</div>
