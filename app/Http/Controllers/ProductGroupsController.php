<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

namespace App\Http\Controllers;
use App\Models\Productgroup;
use Illuminate\Http\Request;

class ProductGroupsController extends Controller
{
    public function getAll()
    {
        return response()->json(Productgroup::all());
    }
    
    public function getById($id)
    {
        return response()->json(Productgroup::find($id));
    }
    
    public function create(Request $request) {
        $productGroup = Productgroup::create($request->all());
        
        return response()->json($productGroup, 201);
    }
    
    public function update($id, Request $request) {
        $productGroup = Productgroup::findOrFail($id);
        $productGroup->update($request->all());
        
        return response($productGroup, 200);
    }
    
    public function delete($id) {
        Productgroup::findOrFail($id)->delete();
        
        return response()->json([], 200);
        ;
    }
}