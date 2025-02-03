<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NoteController extends Controller
{
    public function index()
    {
        // Ambil data catatan dari database
        $notes = Note::where('user_id', auth()->id())->get(); // Filter berdasarkan user yang login

        // Kirim data ke view
        return view('notebook.layouts.app', compact('notes'));
    }
}
