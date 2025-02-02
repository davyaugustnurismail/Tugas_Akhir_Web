<?php

namespace App\Http\Controllers;

use App\Http\Resources\TodoListResource;
use App\Models\Todolist;
use Exception;
use Illuminate\Http\Request;

class TodolistController extends Controller
{
    /**
     * Display a listing of the resource.
     */ 
    public function index()
    {
        $todolist = Todolist::latest()->get();

        return TodoListResource::collection($todolist);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|min:3|max:255',
            'desc' => 'required|min:3|max:255',
            'is_done' => 'required|in:0,1',
        ]);

        try { 
            $todolist = Todolist::create($data);

            return response()->json([
                'message' => 'Todolist Created Succesfull.',
                'data' => new TodoListResource($todolist)
            ], 201);
        } catch (Exception $error) {
            return response()->json(['message' => 'Todolist Created failed'], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $todolist = Todolist::find($id);

        if ($todolist == null) {
            return response()->json(['message' => 'Todolist not found.'], 404);
        }

        return new TodoListResource($todolist);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'title' => 'required|min:3|max:255',
            'desc' => 'required|min:3|max:255',
            'is_done' => 'required|in:0,1',
        ]);

        $todolist = Todolist::find($id);

        if ($todolist == null) {
            return response()->json(['message' => 'Todolist not found.'], 404);
        }

        try { 
            $todolist->updated($data);
            return response()->json([
                'message' => 'Todolist Updated Succesfull.',
                'data' => new TodoListResource($todolist)
            ], 200);
        } catch (Exception $error) {
            return response()->json(['message' => 'Todolist Updated failed'], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
