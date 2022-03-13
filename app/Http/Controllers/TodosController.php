<?php

namespace App\Http\Controllers;
use App\Models\Todo;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    public function getAll() {
       return response()->json(Todo::all());
    }
    
    public function getById($id) {
        return response()->json(Todo::find($id));
    }
    
    public function create(Request $request) {
        $todo = Todo::create($request->all());
        
        return response()->json($todo, 201);
    }
    
    public function update($id, Request $request) {
        $todo = Todo::findOrFail($id);
        $todo->update($request->all());
        
        return response()->json($todo, 200);
    }
    
    public function delete($id) {
        Todo::findOrFail($id)->delete();
        
        return response()->json([], 200);
    }
}