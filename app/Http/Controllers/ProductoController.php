<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    
    public function index()
     {
        $Productos = Producto::all();
        return view('Productos.index', compact('Productos'));
    }

    
    public function create()
    {
    return view('Productos.create');
    }

  
    public function store(Request $request)
    {
        $request->validate([
            'item'=> 'required|string',
        ]);
        

    }

   
    public function show(string $id)
    {
        //
    }

   
    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

  
    public function destroy(string $id)
    {
        //
    }
}
