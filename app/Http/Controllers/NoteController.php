<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $notes = Note::all();
        return view('admin.note.index', ['notes' => $notes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();
        return view('admin.note.create', ['users' => $users]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'judul' => 'required',
            'description' => 'required',
            'tanggal' => 'required|date',
            'tanda' => 'required|integer|min:1|max:6',
            'priority' => 'required|in:default,very_low,low,medium,high,very_high',
            'shared' => 'required|boolean',
            'user_id' => 'required|exists:users,id',
        ], [
            'judul.required' => 'Judul Wajib Diisi',
            'description.required' => 'Deskripsi Wajib Diisi',
            'tanggal.required' => 'Tanggal Wajib Diisi',
            'tanggal.date' => 'Tanggal Harus Berformat Tanggal',
            'tanda.required' => 'Tanda Wajib Diisi',
            'tanda.integer' => 'Tanda Harus Angka',
            'tanda.min' => 'Tanda Minimal 1',
            'tanda.max' => 'Tanda Maksimal 6',
            'priority.required' => 'Priority Wajib Diisi',
            'priority.in' => 'Priority Tidak Valid',
            'shared.required' => 'Shared Wajib Diisi',
            'shared.boolean' => 'Shared Harus Boolean (0 atau 1)',
            'user_id.required' => 'User ID Wajib Diisi',
            'user_id.exists' => 'User ID Tidak Valid',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Log data yang akan disimpan
        Log::info('Data yang akan disimpan:', $request->all());

        // Simpan data
        Note::create([
            'judul' => $request->judul,
            'description' => $request->description,
            'tanggal' => $request->tanggal,
            'tanda' => $request->tanda,
            'priority' => $request->priority,
            'shared' => $request->shared,
            'user_id' => $request->user_id,
        ]);

        return redirect()->route('admin.note.index')->with('success', 'Catatan Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Note $note)
    {
        return view('admin.note.show', ['note' => $note]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($note_id)
    {
        $note = Note::findOrFail($note_id);
        $users = User::all();
        return view('admin.note.edit', ['note' => $note, 'users' => $users]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $note_id)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'judul' => 'required',
            'description' => 'required',
            'tanggal' => 'required|date',
            'tanda' => 'required|integer|min:1|max:6',
            'priority' => 'required|in:default,very_low,low,medium,high,very_high',
            'shared' => 'required|boolean',
            'user_id' => 'required|exists:users,id',
        ], [
            'judul.required' => 'Judul Wajib Diisi',
            'description.required' => 'Deskripsi Wajib Diisi',
            'tanggal.required' => 'Tanggal Wajib Diisi',
            'tanggal.date' => 'Tanggal Harus Berformat Tanggal',
            'tanda.required' => 'Tanda Wajib Diisi',
            'tanda.integer' => 'Tanda Harus Angka',
            'tanda.min' => 'Tanda Minimal 1',
            'tanda.max' => 'Tanda Maksimal 6',
            'priority.required' => 'Priority Wajib Diisi',
            'priority.in' => 'Priority Tidak Valid',
            'shared.required' => 'Shared Wajib Diisi',
            'shared.boolean' => 'Shared Harus Boolean (0 atau 1)',
            'user_id.required' => 'User ID Wajib Diisi',
            'user_id.exists' => 'User ID Tidak Valid',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Log data yang akan diperbarui
        Log::info('Data yang akan diperbarui:', $request->all());

        // Perbarui data
        $note = Note::findOrFail($note_id);
        $note->update([
            'judul' => $request->judul,
            'description' => $request->description,
            'tanggal' => $request->tanggal,
            'tanda' => $request->tanda,
            'priority' => $request->priority,
            'shared' => $request->shared,
            'user_id' => $request->user_id,
        ]);

        return redirect()->route('admin.note.index')->with('success', 'Catatan Berhasil Diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($note_id)
    {
        // Hapus data
        $note = Note::findOrFail($note_id);
        $note->delete();

        return redirect()->route('admin.note.index')->with('success', 'Catatan Berhasil Dihapus');
    }
}