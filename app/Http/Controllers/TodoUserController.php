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
        $todo = Todo::all();
        return view("home.index", ['todo' => $todo]);
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
            'todo' => 'required',
            'tanggal' => 'required|date',
            'tanda' => 'required|integer|min:1|max:6',
            'priority' => 'required|in:card-bottom-border-success,card-bottom-border-purple,card-bottom-border-info,card-bottom-border-primary,card-bottom-border-warning,card-bottom-border-danger',
        ], [
            'judul.required' => 'Judul Wajib Diisi',
            'todo.required' => 'Todo Wajib Diisi',
            'tanggal.required' => 'Tanggal Wajib Diisi',
            'tanggal.date' => 'Tanggal Harus Berformat Tanggal',
            'tanda.required' => 'Tanda Wajib Diisi',
            'tanda.integer' => 'Tanda Harus Angka',
            'tanda.min' => 'Tanda Minimal 1',
            'tanda.max' => 'Tanda Maksimal 6',
            'priority.required' => 'Priority Wajib Diisi',
            'priority.in' => 'Priority Tidak Valid',
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
            'todo' => $request->todo,
            'tanggal' => $request->tanggal,
            'tanda' => $request->tanda,
            'priority' => $request->priority,
            // 'shared' => $request->shared,
            // 'user_id' => $request->user_id,
        ]);

        return redirect()->route('home')->with('success', 'Catatan Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Todo $todo)
    {
        return view('home', ['Todo' => $todo]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($todo_id)
    {
        $todo = Todo::findOrfail($todo_id);
        $users = User::all();
        return view('/', ['todo' => $todo, 'users' => $users]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $todo_id)
    {
        $validator = Validator::make($request->all(), [
            'judul' => 'required',
            'todo' => 'required',
            'tanggal' => 'required|date',
            'tanda' => 'required|integer|min:1|max:6',
            'priority' => 'required|in:card-bottom-border-success,card-bottom-border-purple,card-bottom-border-info,card-bottom-border-primary,card-bottom-border-warning,card-bottom-border-danger',
            'shared' => 'required|boolean',
            // 'user_id' => 'required|exists:users,id',
        ], [
            'judul.required' => 'Judul Wajib Diisi',
            'todo.required' => 'Todo Wajib Diisi',
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
            // 'user_id.required' => 'User ID Wajib Diisi',
            // 'user_id.exists' => 'User ID Tidak Valid',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        Log::info('Data yang akan diperbarui:', $request->all());

        $note = Todo::findOrFail($todo_id);

        $note->update([
            'judul' => $request->judul,
            'todo' => $request->todo,
            'tanggal' => $request->tanggal,
            'tanda' => $request->tanda,
            'priority' => $request->priority,
            'shared' => $request->shared,
            // 'user_id' => $request->user_id,
        ]);

        return redirect()->route('home')->with('success', 'Catatan Berhasil Diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $todo_id)
    {
        $todo = Todo::findOrFail($todo_id);
        $todo->delete();

        return redirect()->route('home')->with('success', 'Catatan Berhasil Dihapus');
    }
}
