<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    public function index()
    {
        $announcements = Announcement::with('user')
                          ->orderBy('created_at', 'desc')
                          ->paginate(10);
        return view('announcements.index', compact('announcements'));
    }

    public function create()
    {
        return view('announcements.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'   => 'required|string|max:200',
            'content' => 'required|string',
        ]);

        Announcement::create([
            'title'   => $request->title,
            'content' => $request->content,
            'user_id' => auth()->id(),
        ]);

        return redirect()->route('announcements.index')
                         ->with('success', 'Pengumuman berhasil ditambahkan!');
    }

    public function destroy(Announcement $announcement)
    {
        $announcement->delete();
        return redirect()->route('announcements.index')
                         ->with('success', 'Pengumuman berhasil dihapus!');
    }
}