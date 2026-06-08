@extends('layouts.app')

<div class="flex justify-between items-center mb-6">
    <h2 class="text-2xl font-bold">Pengumuman</h2>
    <a href="{{ route('announcements.create') }}"
       class="bg-purple-600 text-white px-4 py-2 rounded-lg hover:bg-purple-700">
        + Tambah Pengumuman
    </a>
</div>

@if(session('success'))
    <div class="bg-green-100 text-green-800 px-4 py-3 rounded mb-4">
        {{ session('success') }}
    </div>
@endif

<div class="flex flex-col gap-4">
    @forelse($announcements as $announcement)
    <div class="bg-white rounded-xl shadow p-6">
        <div class="flex justify-between items-start">
            <div class="flex-1">
                <h3 class="text-lg font-bold text-gray-800">
                    📢 {{ $announcement->title }}
                </h3>
                <p class="text-gray-600 mt-2 leading-relaxed">
                    {{ $announcement->content }}
                </p>
                <p class="text-xs text-gray-400 mt-3">
                    Oleh: {{ $announcement->user->name ?? '-' }} •
                    {{ $announcement->created_at->format('d/m/Y H:i') }}
                </p>
            </div>
            <form action="{{ route('announcements.destroy', $announcement) }}"
                  method="POST" onsubmit="return confirm('Hapus pengumuman ini?')"
                  class="ml-4">
                @csrf
                @method('DELETE')
                <button class="text-xs bg-red-100 text-red-700 px-3 py-1 rounded hover:bg-red-200">
                    Hapus
                </button>
            </form>
        </div>
    </div>
    @empty
    <div class="text-center text-gray-400 py-12">
        Belum ada pengumuman
    </div>
    @endforelse
</div>

<div class="mt-4">{{ $announcements->links() }}</div>
