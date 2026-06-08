@extends('layouts.app')


<div class="flex justify-between items-center mb-6">
    <h2 class="text-2xl font-bold">Absensi Siswa</h2>
    <a href="{{ route('attendances.create') }}"
       class="bg-orange-500 text-white px-4 py-2 rounded-lg hover:bg-orange-600">
        + Tambah Absensi
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
                <th class="px-4 py-3">Tanggal</th>
                <th class="px-4 py-3">Nama Siswa</th>
                <th class="px-4 py-3">Kelas</th>
                <th class="px-4 py-3">Status</th>
                <th class="px-4 py-3">Keterangan</th>
                <th class="px-4 py-3">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($attendances as $attendance)
            <tr class="border-t hover:bg-gray-50 text-sm">
                <td class="px-4 py-3">
                    {{ \Carbon\Carbon::parse($attendance->date)->format('d/m/Y') }}
                </td>
                <td class="px-4 py-3 font-medium">{{ $attendance->student->name }}</td>
                <td class="px-4 py-3">{{ $attendance->student->classroom->name ?? '-' }}</td>
                <td class="px-4 py-3">
                    @php
                        $colors = [
                            'hadir' => 'bg-green-100 text-green-700',
                            'sakit' => 'bg-yellow-100 text-yellow-700',
                            'izin'  => 'bg-blue-100 text-blue-700',
                            'alpha' => 'bg-red-100 text-red-700',
                        ];
                    @endphp
                    <span class="px-2 py-1 rounded-full text-xs {{ $colors[$attendance->status] }}">
                        {{ ucfirst($attendance->status) }}
                    </span>
                </td>
                <td class="px-4 py-3 text-gray-500">{{ $attendance->notes ?? '-' }}</td>
                <td class="px-4 py-3">
                    <form action="{{ route('attendances.destroy', $attendance) }}" method="POST"
                          onsubmit="return confirm('Hapus data absensi ini?')">
                        @csrf
                        @method('DELETE')
                        <button class="text-xs bg-red-100 text-red-700 px-3 py-1 rounded hover:bg-red-200">
                            Hapus
                        </button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="6" class="px-4 py-8 text-center text-gray-400">
                    Belum ada data absensi
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

<div class="mt-4">{{ $attendances->links() }}</div>
