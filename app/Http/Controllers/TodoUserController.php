<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class TodoUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todos = Todo::all();
        return view("home.index", ['todo' => $todos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();
        return view("notebook.create-page.page-new-note8fb2", ['users' => $users]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'judul' => 'required',
            'description' => 'required',
            'tanggal' => 'required|date',
        ], [
            'judul.required' => 'Judul Wajib Diisi',
            'description.required' => 'description Wajib Diisi',
            'tanggal.required' => 'Tanggal Wajib Diisi',
            'tanggal.date' => 'Tanggal Harus Berformat Tanggal',
            // 'shared.required' => 'Shared Wajib Diisi',
            // 'shared.boolean' => 'Shared Harus Boolean (0 atau 1)',
            // 'user_id.required' => 'User ID Wajib Diisi',
            // 'user_id.exists' => 'User ID Tidak Valid',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        Log::info('Data yang akan disimpan:', $request->all());

        Todo::create([
            'judul' => $request->judul,
            'description' => $request->description,
            'tanggal' => $request->tanggal,
            // 'shared' => $request->shared,
            // 'user_id' => $request->user_id,
        ]);

        return redirect()->route('home.index')->with('success', 'Catatan Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Todo $todos)
    {
        return view('home.index', ['Todo' => $todos]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($todo_id)
    {
        $todos = Todo::findOrfail($todo_id);
        $users = User::all();
        return view('/', ['todo' => $todos, 'users' => $users]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $todo_id)
    {
        $validator = Validator::make($request->all(), [
            'judul' => 'required',
            'description' => 'required',
            'tanggal' => 'required|date',
            'shared' => 'required|boolean',
            // 'user_id' => 'required|exists:users,id',
        ], [
            'judul.required' => 'Judul Wajib Diisi',
            'description.required' => 'description Wajib Diisi',
            'tanggal.required' => 'Tanggal Wajib Diisi',
            'tanggal.date' => 'Tanggal Harus Berformat Tanggal',
            // 'user_id.required' => 'User ID Wajib Diisi',
            // 'user_id.exists' => 'User ID Tidak Valid',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        Log::info('Data yang akan diperbarui:', $request->all());

        $todos = Todo::findOrFail($todo_id);

        $todos->update([
            'judul' => $request->judul,
            'description' => $request->description,
            'tanggal' => $request->tanggal,
            // 'user_id' => $request->user_id,
        ]);

        return redirect()->route('home.index')->with('success', 'Catatan Berhasil Diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $todo_id)
    {
        $todos = Todo::findOrFail($todo_id);
        $todos->delete();

        return redirect()->route('home.index')->with('success', 'Catatan Berhasil Dihapus');
    }
}
